<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/")
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): array
    {
        return [];
    }
}
