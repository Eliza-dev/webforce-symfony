<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MonBlogController extends AbstractController
{
    /**
     * @Route("/", name="mon_blog")
     */
    public function index()
    {
        return $this->render('mon_blog/index.html.twig', [
            'controller_name' => 'MonBlogController',
        ]);
    }
}
