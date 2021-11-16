<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DepartmentController extends AbstractController
{
    /**
   * @Route("/department", name="department")
   */
    public function index(): Response
    {
        return $this->render('department/index.html.twig', [
            'controller_name' => 'DepartmentController',
        ]);
    }
    public function add(Request $request, EntityManagerInterface $emi)
    {

        return $this->render('department/index.html.twig', [
            'controller_name' => 'DepartmentController',
        ]);
    }
}
