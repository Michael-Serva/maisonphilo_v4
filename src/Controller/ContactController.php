<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use DateTimeImmutable;
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
        EntityManagerInterface $entityManager
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
                $contact->getEmail().'Votre message a bien été envoyé!'
            );
            return $this->redirectToRoute('app_contact_index', ['_fragment' => 'contact']);
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
