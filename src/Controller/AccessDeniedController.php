<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AccessDeniedController extends AbstractController
{
    /**
     * @Route("/access/denied", name="access_denied")
     */
    public function index()
    {
        return $this->render('access_denied/index.html.twig', [
            'controller_name' => 'AccessDeniedController',
        ]);
    }
}
