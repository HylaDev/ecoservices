<?php

namespace App\Entity;

use App\Repository\QuoteRequestRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuoteRequestRepository::class)]
class QuoteRequest
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column]
    private ?bool $validity = null;

    #[ORM\Column]
    private ?float $total = null;

    #[ORM\ManyToOne(inversedBy: 'quoteRequests')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Users $qruser = null;

    /**
     * @var Collection<int, QuoteRequestDetail>
     */
    #[ORM\OneToMany(targetEntity: QuoteRequestDetail::class, mappedBy: 'request', orphanRemoval: true)]
    private Collection $quoteRequestDetails;

    public function __construct()
    {
        $this->quoteRequestDetails = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?Users
    {
        return $this->user_id;
    }

    public function setUserId(?Users $user_id): static
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function isValidity(): ?bool
    {
        return $this->validity;
    }

    public function setValidity(bool $validity): static
    {
        $this->validity = $validity;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(float $total): static
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return Collection<int, QuoteRequestDetail>
     */
    public function getQuoteRequestDetails(): Collection
    {
        return $this->quoteRequestDetails;
    }

    public function addQuoteRequestDetail(QuoteRequestDetail $quoteRequestDetail): static
    {
        if (!$this->quoteRequestDetails->contains($quoteRequestDetail)) {
            $this->quoteRequestDetails->add($quoteRequestDetail);
            $quoteRequestDetail->setRequestId($this);
        }

        return $this;
    }

    public function removeQuoteRequestDetail(QuoteRequestDetail $quoteRequestDetail): static
    {
        if ($this->quoteRequestDetails->removeElement($quoteRequestDetail)) {
            // set the owning side to null (unless already changed)
            if ($quoteRequestDetail->getRequestId() === $this) {
                $quoteRequestDetail->setRequestId(null);
            }
        }

        return $this;
    }

    public function getQruser(): ?Users
    {
        return $this->qruser;
    }

    public function setQruser(?Users $qruser): static
    {
        $this->qruser = $qruser;

        return $this;
    }
}
