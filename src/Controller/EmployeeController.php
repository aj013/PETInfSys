<?php

namespace App\Controller;

use App\Service\EmployeeService;
use App\Entity\Employee;
use App\Form\EmployeeType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

  
class EmployeeController extends AbstractController
{
  /**
    * @Route("/employee", name="employee")
    */
    public function index(): Response
    {
        return $this->render('employee/index.html.twig', [
            'controller_name' => 'EmployeeController',
        ]);
    }
  /**
   * @Route("/employee/add", name="employee.add")
   */
  public function add(Request $request, EmployeeService $empServ)
  {
      $employee = new Employee();
      $form = $this->createForm(EmployeeType::class, $employee);
      $form->handleRequest($request);
     if($empServ->employeeAdd($form,$employee))
      {
         $this->addFlash('success','Successufully added new Employee');
        return $this->redirectToRoute('employee');
      }
      else
      {
        return $this->render('employee/add.html.twig', [
            'form' => $form->createView(),
        ]);
    
      }
  }
}
