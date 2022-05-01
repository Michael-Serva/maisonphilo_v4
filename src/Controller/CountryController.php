<?php

namespace App\Controller;

use App\Entity\Country;
use App\Form\CountryType;
use App\Repository\CountryRepository;
use App\Repository\HospitalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/country")
 */
class CountryController extends AbstractController
{
  
    /**
     * @Route("/{code}", name="app_country_show", methods={"GET"})
     */
    public function show(Country $country, HospitalRepository $hospitalRepository): Response
    {
        return $this->render('country/show.html.twig', [
            'country' => $country,
            'hospitals' => $hospitalRepository->hospitalShow($country)
        ]);
    }
}
