<?php

namespace App\Controller;

use App\Repository\HospitalRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/country")
 */
class CountryController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(HospitalRepository $hospitalRepository)
    {
        $hospitals = $hospitalRepository->findAll();
        return[
            'hospitals' => $hospitals
        ];
    }
}
