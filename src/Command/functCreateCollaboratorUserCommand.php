<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Secutiry\Core\Encoder\UserPasswordEncoderInterface;
use App\Entity\Collaborator;
use App\Entity\CollaboratorUser;
use App\Repository\UserRepository as UserRepo;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface as EncoderUserPasswordEncoderInterface;

class functCreateCollaboratorUserCommand extends Command
{
    protected static $defaultName = 'functCreateCollaboratorUser';
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
            ->setDescription('Create collaborator user')
            ->addArgument('email', InputArgument::REQUIRED, 'User email (unique)')
            ->addArgument('username', InputArgument::REQUIRED, 'User username (unique)')
            ->addArgument('password', InputArgument::REQUIRED, 'User password')
            ->addArgument('collaboratorId', InputArgument::REQUIRED, 'Id del colaborador con el que se relaciona')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {           
        $io = new SymfonyStyle($input, $output);

        $email = $input->getArgument('email');
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $collaboratorId = $input->getArgument('collaboratorId');

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

        if (!$collaboratorId) {
            $io->error('Missing collaboratorId!');
            return;
        }

        $collaborator = $this->em->getRepository(Collaborator::class)->findOneById($collaboratorId);

        if (!$collaborator) {
            $io->error('Collaborator not found!');
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

        $collaboratorUser = new CollaboratorUser();
        $collaboratorUser->setEmail($email);
        $encodedPassword = $this->userPasswordEncoder->encodePassword($collaboratorUser, $password);
        $collaboratorUser->setPassword($encodedPassword);
        $collaboratorUser->setUsername($username);
        $collaboratorUser->setCollaborator($collaborator);
        $this->em->persist($collaboratorUser);
        $this->em->flush();      
              

        $io->success('---CollaboratorUser created---');

        return;

    }
}
