<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/admin", name="admin")
 */
class AdminController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'classbody' => 'dashboard-page',
            'activeTDB' => 'active',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request)
    {
        return $this->render('admin/login.html.twig', [
            'classbody' => 'external-page external-alt sb-l-c sb-r-c',
        ]);
    }

    /**
     * @Route("/listes/fournisseurs", name="listefournisseurs")
     */
    public function listeFournisseurs(Request $request)
    {
        return $this->render('admin/listesfournisseurs.html.twig', [
            'classbody' => 'datatables-page',
            'activeF' => 'active',
        ]);
    }

    /**
     * @Route("/listes/achats", name="listeachats")
     */
    public function listeAchats(Request $request)
    {
        return $this->render('admin/listesachats.html.twig', [
            'classbody' => 'datatables-page',
            'activeHDA' => 'active',
        ]);
    }

    /**
     * @Route("/nouveau/achat", name="nouveauachat")
     */
    public function nouveauAchat(Request $request)
    {
        return $this->render('admin/nouveauachat.html.twig', [
            'classbody' => 'datatables-page',
            'activeNA' => 'active',
        ]);
    }
}
