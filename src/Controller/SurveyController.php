<?php

namespace App\Controller;

use App\Entity\Survey;
use App\Form\SurveyType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SurveyController extends AbstractController
{
    #[Route('/survey', name: 'app_survey')]
    public function index(
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $survey = new Survey();
        $survey->setCreatedAt(new \DateTimeImmutable('now'));

        $form = $this->createForm(SurveyType::class, $survey);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($survey);
            $entityManager->flush();

            $this->addFlash(
                'notice',
                'Votre formulaire a bien été enregistré'
            );

            return $this->redirectToRoute('app_contact_index');
        }

        return $this->renderForm('survey/index.html.twig', [
            'form' => $form
        ]);
    }
}
