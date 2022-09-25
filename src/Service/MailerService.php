<?php

// src/Controller/MailerController.php
namespace App\Service;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Undocumented class
 */
class MailerService extends AbstractController
{

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Service d'envoi de mail
     *
     * @return Response
     * @Route("/email")
     */
    public function sendEmail(): Void
    {
        $email = (new Email())
            ->from('noreply-maisonphilo@servgrouptn.com')
            ->to('maisonphilo.contact@gmail.com')
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            ->replyTo('maisonphilo.contact@gmail.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->text('Sending emails is fun again!')
            ->html('<p>test mailer!</p>');
        $this->mailer->send($email);
    }
}
