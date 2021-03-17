<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Secutiry\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\User;
use App\Repository\UserRepository as UserRepo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as EncoderUserPasswordEncoderInterface;

class functCreateUserCommand extends Command
{
    protected static $defaultName = 'functCreateUser';
    private $em;
    private $userRepo;
    private $userPasswordEncoder;

    public function __construct(EntityManagerInterface $em, EncoderUserPasswordEncoderInterface $userPasswordEncoder, UserRepo $userRepo )
    {
        $this->em = $em;
        $this->userRepository = $userRepo;
        $this->userPasswordEncoder = $userPasswordEncoder;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Create backend user')
            ->addArgument('email', InputArgument::REQUIRED, 'User email (unique)')
            ->addArgument('username', InputArgument::REQUIRED, 'User username (unique)')
            ->addArgument('password', InputArgument::REQUIRED, 'User password')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {           
        $io = new SymfonyStyle($input, $output);

        $email = $input->getArgument('email');
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');

        if ($email) {
            $io->note(sprintf('Creating user: %s', $email));
        }

        if ($username) {
            $io->note(sprintf('With username: %s', $username));
        }

        if (!$password) {
            $io->error('Missing password!');
            return;
        }

        $user = $this->userRepository->findOneByEmail($email);
        if(!empty($user)){
            $io->error('Email already exists');
            return;
        }
        $user = $this->userRepository->findOneByUsername($username);
        if(!empty($user)){
            $io->error('Username already exists');
            return;
        }

        $user = new User();
        $user->setEmail($email);
        $encodedPassword = $this->userPasswordEncoder->encodePassword($user, $password);
        $user->setPassword($encodedPassword);
        $user->setUsername($username);
        $this->em->persist($user);
        $this->em->flush();      
              

        $io->success('---User created---');

        return;

    }
}
