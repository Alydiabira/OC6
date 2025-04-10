<?php
namespace App\Controller\Admin;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use App\Entity\User;
use App\Entity\Article;
use App\Entity\Comment;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin_dashboard')]  // La route associée au tableau de bord
    public function index(): Response
    {
        return parent::index(); // Comportement par défaut d'EasyAdmin
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Symfony 7 App') // Personnaliser le titre du tableau de bord
            ->setFaviconPath('favicon.ico') // Ajouter un favicon personnalisé
            ->setTextDirection('ltr'); // Définir la direction du texte (optionnel : 'ltr' ou 'rtl')
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');  // Lien vers le tableau de bord

        if ($this->isGranted('ROLE_ADMIN')) {
            yield MenuItem::linkToCrud('Users', 'fa fa-users', User::class);
            yield MenuItem::linkToCrud('Articles', 'fa fa-newspaper', Article::class);
            yield MenuItem::linkToCrud('Comments', 'fa fa-comments', Comment::class);
        }

        yield MenuItem::linkToRoute('Logout', 'fa fa-sign-out', 'app_logout');
    }
}
