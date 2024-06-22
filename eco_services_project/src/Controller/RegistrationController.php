<?php

namespace App\Controller;

use App\Service\MailerService;
use App\Repository\CustomerRoleRepository;
use App\Entity\Users;
use App\Form\RegistrationFormType;
use App\Form\RegistrationFormTypePro;
use App\Security\UsersAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, 
                            Security $security, EntityManagerInterface $entityManager, 
                            CustomerRoleRepository $customerRoleRepository, MailerService $mailerService): Response
    {
        $role_id = $request->query->getInt('role_id');
        $user = new Users();
        $customerRole = $customerRoleRepository->findOneById($role_id);
        $form = $this->createForm(RegistrationFormType::class, $user);
        if($customerRole->getName() == 'Professionnel'){
            $form = $this->createForm(RegistrationFormTypePro::class, $user);
        }
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setCustomerRole($customerRole);
            $entityManager->persist($user);
            $entityManager->flush();

            // Send email
            $mailerService->sendRegistrationEmail($user->getEmail(), $user->getLastname());

            return $security->login($user, UsersAuthenticator::class, 'main');
        }

        return $this->render('registration/register.html.twig', [
            'customerRole' => $customerRole,
            'registrationForm' => $form->createView(),
        ]);
    }
}
