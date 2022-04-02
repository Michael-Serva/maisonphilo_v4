<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Template
 * @Route("/about")
 */
class AboutController extends AbstractController
{
    /**
     * @Route("/who")
     */
    public function who(): array
    {
        return [];
    }

    /**
     * @Route("/who/history")
     */
    public function history(): array
    {
        return [];
    }

    /**
     * @Route("/who/objective")
     */
    public function objective(): array
    {
        return [];
    }

    /**
     * @Route("/africa ")
     */
    public function africa(): array
    {
        return [];
    }

    /**
     * @Route("/world")
     */
    public function world(): array
    {
        return [];
    }
}
