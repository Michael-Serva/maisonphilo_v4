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
use App\Entity\Survey;
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
        yield MenuItem::linkToDashboard('Back-office', 'fa fa-home');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user', User::class);
        yield MenuItem::linkToCrud('Pays', 'fa fa-globe', Country::class);
        yield MenuItem::linkToCrud('Hopitaux', 'fa fa-hospital', Hospital::class);
        yield MenuItem::linkToCrud('Partenaires', 'fa fa-hand-holding-heart', Partner::class);
        yield MenuItem::linkToCrud('Contact', 'fa fa-comment-dots', Contact::class);
        yield MenuItem::linkToCrud('Produits', 'fa fa-barcode', Product::class);
        yield MenuItem::linkToCrud('Catégories', 'fa fa-atom', Category::class);
        yield MenuItem::linkToCrud('Questionnaire', 'fa fa-poll-h', Survey::class);
    }
}
