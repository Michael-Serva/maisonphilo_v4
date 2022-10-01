<?php

namespace App\Controller;

use App\Repository\ContactRepository;
use App\Repository\SurveyRepository;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Serializer\Normalizer\ContactSerializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    #[Route('/default', name: 'app_default')]
    public function index(
        ContactRepository $contactRepository,
        SurveyRepository $surveyRepository,
        ContactSerializer $serializer
    ): Response {

        /* recuperation des  messages decontacts en format xml */
        $contact = $contactRepository->findAll();

        $encoders = [new XmlEncoder(), new JsonEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        dump($serializer->serialize($contact, "xml"));

        /* Recuperation des donnes du formulaire en xml */

        $survey = $surveyRepository->findAll();

        dump($serializer->serialize($survey, "xml"));
        
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
