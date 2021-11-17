<?php

namespace App\Controller;

use App\Entity\Department;
use App\Form\DepartmentType;
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
    /**
   * @Route("/department/add", name="department.add")
   */
    public function add(Request $request, EntityManagerInterface $emi)
    {
        $department = new Department();
        $form = $this->createForm(DepartmentType::class, $department);
        return $this->render('department/add.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
