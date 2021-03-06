<?php

namespace App\Controller;

use App\Entity\Country;
use App\Form\CountryType;
use App\Repository\CountryRepository;
use App\Repository\PartnerRepository;
use App\Repository\HospitalRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/country")
 * @Template
 */
class CountryController extends AbstractController
{
    /**
     * @Route("/{id}", name="app_country_index", methods={"GET", "POST"}, requirements={"code":"\d+"})
     */
    public function index(
        Country $country,
        HospitalRepository $hospitalRepository,
        PartnerRepository $partnerRepository
    ): Response {
        return $this->render('country/show.html.twig', [
            'country' => $country,
            'hospitals' => $hospitalRepository->hospitalShow($country),
            'partners' => $partnerRepository->partnerShow($country)
        ]);
    }

    /**
     * @Route("/new", name="app_country_new", methods={"GET", "POST"})
     */
    public function new(Request $request, CountryRepository $countryRepository): Response
    {
        $country = new Country();
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $countryRepository->add($country);
            return $this->redirectToRoute('app_country_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('country/new.html.twig', [
            'country' => $country,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/show/{code}", name="app_country_show", methods={"GET", "POST"}, requirements={"code":"\d+"})
     */
    public function show(
        Country $country,
        HospitalRepository $hospitalRepository,
        PartnerRepository $partnerRepository
    ): Response {
        return $this->render('country/show.html.twig', [
            'country' => $country,
            'hospitals' => $hospitalRepository->hospitalShow($country),
            'partners' => $partnerRepository->partnerShow($country)
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_country_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Country $country, CountryRepository $countryRepository): Response
    {
        $form = $this->createForm(CountryType::class, $country);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $countryRepository->add($country);
            return $this->redirectToRoute('app_country_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('country/edit.html.twig', [
            'country' => $country,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_country_delete", methods={"POST"})
     */
    public function delete(Request $request, Country $country, CountryRepository $countryRepository): Response
    {
        if ($this->isCsrfTokenValid('delete' . $country->getId(), $request->request->get('_token'))) {
            $countryRepository->remove($country);
        }

        return $this->redirectToRoute('app_country_index', [], Response::HTTP_SEE_OTHER);
    }
}
