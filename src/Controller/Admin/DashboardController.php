<?php

namespace App\Controller\Admin;

use App\Entity\User;
use App\Entity\Contact;
use App\Entity\Country;
use App\Entity\Partner;
use App\Entity\Product;
use App\Entity\Category;
use App\Entity\CustomerService;
use App\Entity\Hospital;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;

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
        yield MenuItem::linkToCrud('Partner', 'fa fa-hand-holding-heart', Partner::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-comment-dots', Contact::class);
        yield MenuItem::linkToCrud('Product', 'fa fa-barcode', Product::class);
        yield MenuItem::linkToCrud('Category', 'fa fa-atom', Category::class);
    }
}
