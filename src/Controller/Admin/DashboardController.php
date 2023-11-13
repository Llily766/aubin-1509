<?php

namespace App\Controller\Admin;

use App\Entity\Boss;
use App\Entity\Cars;
use App\Entity\Customer;
use App\Entity\Employee;
use App\Entity\Garage;
use App\Entity\Services;
use App\Entity\Testimonials;
use App\Entity\WorkshopContactForm;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use function Symfony\Component\DependencyInjection\Loader\Configurator\service;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
       // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        return $this->render('admin/dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Aubin 1509');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
         yield MenuItem::linkToCrud('horaires', 'fas fa-list', Garage::class);
         yield MenuItem::linkToCrud('BOSS', 'fas fa-list', Boss::class);
         yield MenuItem::linkToCrud('Employee', 'fas fa-list', Employee::class);
         yield MenuItem::linkToCrud('Cars', 'fas fa-list', Cars::class);
         yield MenuItem::linkToCrud('Testimonials', 'fas fa-list', Testimonials::class);
         yield MenuItem::linkToCrud('Services', 'fas fa-list',Services::class);
         yield MenuItem::linkToCrud('WorkshopContactForm', 'fas fa-list',WorkshopContactForm::class);
         yield MenuItem::linkToCrud('Customer', 'fas fa-list',Customer::class);
        }
          
}  
      
 