<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VueFrontendController extends AbstractController
{
    /**
     * @Route("/", name="vue_frontend")
     */
    public function index()
    {
        return $this->render('vue_frontend/index.html.twig', [
            'controller_name' => 'VueFrontendController',
        ]);
    }
}
