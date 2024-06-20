<?php

namespace App\Command;

use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin',
    description: 'Add a short description for your command',
)]
class CreateAdminCommand extends Command
{
    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordEncoder)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordEncoder = $passwordEncoder;
    }

    protected function configure()
    {
        $this
            ->setDescription('Creates a new admin user.')
            ->addArgument('email', InputArgument::REQUIRED, 'The email of the admin.')
            ->addArgument('password', InputArgument::REQUIRED, 'The password of the admin.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        // Create user and set roles and password
        $user = new Users();
        $user->setEmail($email);
        $user->setLastname('admin');
        $user->setPhone('1234');
        $user->setAddress('1234');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword($this->passwordEncoder->hashPassword($user, $password));

        // Save user to the database
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success(sprintf('Admin user created: %s', $email));

        return Command::SUCCESS;
    }
}
