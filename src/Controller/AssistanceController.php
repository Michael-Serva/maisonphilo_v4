<?php

namespace App\Controller;

use App\Repository\CountryRepository;
use App\Repository\HospitalRepository;
use App\Repository\PartnerRepository;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/assistance")
 */
class AssistanceController extends AbstractController
{
    public function __construct(
        CountryRepository $countryRepository
    ) {
        $this->countryRepository = $countryRepository;
        $this->country = $this->countryRepository->findAll();
    }
    /**
     * @Route("/")
     */
    public function share(): array
    {
        $country = $this->countryRepository->findAll();
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

    /* Information par thématique */

    /**
     * @Route("/hospital")
     */
    public function hospital(HospitalRepository $hospitalRepository): array
    {
        return [
            'countries' => $this->country,
            'hospitals' => $hospitalRepository->findAll()
        ];
    }

    /**
     * @Route("/partner")
     */
    public function partner(PartnerRepository $partnerRepository): array
    {
        return [
            'countries' => $this->country,
            'partners' => $partnerRepository->findAll()
        ];
    }
}
