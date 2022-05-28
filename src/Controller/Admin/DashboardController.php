<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Entity\Country;
use App\Entity\Hospital;
use App\Entity\Partner;
use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        //return parent::index();
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Maisonphilo');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('User', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Country', 'fa fa-globe', Country::class);
        yield MenuItem::linkToCrud('Hospital', 'fa fa-hospital', Hospital::class);
        yield MenuItem::linkToCrud('Partner', 'fa fa-globe', Partner::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-globe', Contact::class);

    }
}
