<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PetEmailController extends AbstractController
{
    /**
     * @Route("/petemail", name="petemail")
     */
    public function index(): Response
    {
        return $this->render('pet_email/index.html.twig', [
            'controller_name' => 'PetEmailController',
        ]);
    }
}
