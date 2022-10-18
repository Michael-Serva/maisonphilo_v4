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
    public function sendEmail(): void
    {
        $email = (new Email())
            ->from('noreply-maisonphilo@servgrouptn.com')
            ->to("servam95@gmail.com")
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            ->replyTo('maisonphilo.contact@gmail.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject('Time for Symfony Mailer!')
            ->html('<p>nom :</p> <p> prenom </p>');
        $this->mailer->send($email);
    }


    /**
     * Service d'envoi de mail
     *
     * @return Response
     * @Route("/email/contact")
     */
    public function sendContactEmail($email, $subject, $lastname, $firstName, $country, $content): void
    {
        $email = (new Email())
            ->from('noreply-maisonphilo@servgrouptn.com')
            ->to($email)
            //->cc('cc@example.com')
            //->bcc('bcc@example.com')
            ->replyTo('maisonphilo.contact@gmail.com')
            ->priority(Email::PRIORITY_HIGH)
            ->subject($subject)
            ->html(
                '<p> Nom :' . $lastname . '</p>'  .
                '<p>prenom: ' . $firstName . '</p>' .
                '<p>Email: ' . $email . '</p>' .
                '<p>Pays: ' . $country . '</p>' .
                '<p>Message:' . $content . '</p>'
            );
        $this->mailer->send($email);
    }
}
