<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/assistance")
 */
class AssistanceController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function share(CountryRepository $countryRepository): array
    {
        $country = $countryRepository->findAll();
        return [
            'countries' => $country
        ];
    }

    /**
     * @Route("/social")
     */
    public function social(): array
    {
        return [];
    }
}
