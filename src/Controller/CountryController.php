<?php

namespace App\Controller;

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
    public function index()
    {
    }
}