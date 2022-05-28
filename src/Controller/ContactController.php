<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
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
        Request $request
    ): Response
    {
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
