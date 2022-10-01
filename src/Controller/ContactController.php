<?php

namespace App\Controller;

use DateTimeImmutable;
use App\Entity\Contact;
use App\Form\ContactType;
use App\Service\MailerService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/contact")
 */
class ContactController extends AbstractController
{
    /**
     * Undocumented function
     *
     * @param Request $request
     * @return Response
     * @Route("/")
     */
    public function index(
        Request $request,
        EntityManagerInterface $entityManager,
        MailerService $mailer
    ): Response {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $contact->setcreatedAt(new DateTimeImmutable('now'));
            $entityManager->persist($contact);
            $entityManager->flush();
            $this->addFlash(
                'success',
                $contact->getEmail() . 'Votre message a bien été envoyé!'
            );
            dump($contact);
            dump(get_class_methods($contact));
            $mailer->sendContactEmail(
                $contact->getEmail(),
                $contact->getSubject(),
                $contact->getLastName(),
                $contact->getFirstName(),
                $contact->getCountry(),
                $contact->getContent()
            );

            return $this->redirectToRoute('app_contact_index', ['_fragment' => 'contact']);
        }



        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
