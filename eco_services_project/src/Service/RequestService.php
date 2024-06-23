<?php
namespace App\Service;

use App\Entity\QuoteRequestDetail;
use App\Entity\QuoteRequest;
use App\Repository\ServiceRepository;
use App\Repository\QrStatusRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;
use DateTime;

class RequestService
{
    private $entityManager;
    private $session;
    private ServiceRepository $serviceRepository;
    private QrStatusRepository $qrStatusRepository;

    public function __construct(EntityManagerInterface $entityManager, RequestStack $requestStack,ServiceRepository $serviceRepository,QrStatusRepository $qrStatusRepository)
    {
        $this->entityManager = $entityManager;
        $this->session = $requestStack->getSession();
        $this->serviceRepository = $serviceRepository;
        $this->qrStatusRepository = $qrStatusRepository;
    }

    public function add(int $serviceId, int $quantity): void
    {
        $reqDetail = $this->session->get('reqDetail', []);
        $service = $this->serviceRepository->findOneById($serviceId);

        foreach ($reqDetail as &$item) {
            if ($item->getService()->getId() === $serviceId) {
                $item->setEstimatedWeight($item->getEstimatedWeight() + $quantity);
                $this->session->set('reqDetail', $reqDetail);
                return;
            }
        }

        $newReqDetail = new QuoteRequestDetail(); 
        $newReqDetail->setService($service);
        $newReqDetail->setEstimatedWeight($quantity);
        $reqDetail[] = $newReqDetail;
        $this->session->set('reqDetail', $reqDetail);
    }
    public function update(int $serviceId, int $quantity): void
    {
        $reqDetail = $this->session->get('reqDetail', []);
        $service = $this->serviceRepository->findOneById($serviceId);

        foreach ($reqDetail as $key => &$item) {
            if ($item->getService()->getId() === $serviceId) {
                if($item->getEstimatedWeight() + $quantity == 0){
                    unset($reqDetail[$key]);
                    $this->session->set('reqDetail', $reqDetail);
                    return;
                }
                $item->setEstimatedWeight($item->getEstimatedWeight() + $quantity);
                $this->session->set('reqDetail', $reqDetail);
                return;
            }
        }
    }

    public function remove_to(int $serviceId): void
    {
        $reqDetail = $this->session->get('reqDetail', []);
        $service = $this->serviceRepository->findOneById($serviceId);

        foreach ($reqDetail as $key => &$item) {
            if ($item->getService()->getId() === $serviceId) {
                unset($reqDetail[$key]);
                $this->session->set('reqDetail', $reqDetail);
                return;
            }
        }
    }

    public function getRequest(): array
    {
        return $this->session->get('reqDetail', []);
    }

    public function clear(): void
    {
        $this->session->remove('reqDetail');
    }

    public function submitRequest($user,$comment): void
    {
        $quoteRequest = new QuoteRequest();
        $quoteRequest->setDate(new DateTime());
        $quoteRequest->setTotal(0);
        $quoteRequest->setQruser($user);

        $status = $this->qrStatusRepository->findOneByName('En cours');

        $quoteRequest->setStatus($status);
        $quoteRequest->setComment($comment);
        
        $this->entityManager->persist($quoteRequest);

        $requests = $this->session->get('reqDetail', []);

        foreach ($requests as $requestDetail) {
            $service = $this->serviceRepository->findOneById($requestDetail->getService()->getId());
            $requestDetailNew = new QuoteRequestDetail();
            $requestDetailNew->setRequest($quoteRequest);
            $requestDetailNew->setService($service);
            $requestDetailNew->setEstimatedWeight($requestDetail->getEstimatedWeight());
            $this->entityManager->persist($requestDetailNew);
        }

        $this->entityManager->flush();
    }
}
