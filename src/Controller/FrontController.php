<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    /**
     * @Route("/", name="front")
     */
    public function index(): Response
    {
        return $this->render('front/acceuil.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/coach", name="coach")
     */
    public function coach()
    {
        return $this->render('front/coach.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/accueil", name="accueil")
     */
    public function accueil()
    {
        return $this->render('front/accueil.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/logo", name="logo")
     */
    public function logo()
    {
        return $this->render('front/logo.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function login()
    {
        return $this->render('front/connexion.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('front/contact.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/membre", name="membre")
     */
    public function membre()
    {
        return $this->render('front/membre.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/cnews", name="cnews")
     */
    public function news()
    {
        return $this->render('front/news.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/single", name="single")
     */
    public function nsingle()
    {
        return $this->render('front/news.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/nutrition", name="nutrition")
     */
    public function nutrition()
    {
        return $this->render('front/nutritionniste.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }



    /**
     * @Route("/recette", name="recette")
     */
    public function recette()
    {
        return $this->render('front/recette.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/shop", name="shop")
     */
    public function shop()
    {
        return $this->render('front/shop.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }


    /**
     * @Route("/shopsingle", name="shopsingle")
     */
    public function shopsingle()
    {
        return $this->render('front/shop-single.html.twig', [
            'controller_name' => 'FrontController',
        ]);
    }

}
