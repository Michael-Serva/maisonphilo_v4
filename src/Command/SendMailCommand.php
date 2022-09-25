<?php

namespace App\Command;

use App\Service\MailerService;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    name: 'app:send-mail',
    description: 'Add a short description for your command',
)]
class SendMailCommand extends Command
{

    public function __construct(
        MailerService $mailer
    ) {
        $this->mailer = $mailer;
        parent::__construct();
    }

    protected function configure(): void
    {
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $this->mailer->sendEmail();

        $io->success('Votre mail a bien été envoyé!');

        return Command::SUCCESS;
    }
}
