<?php

namespace App\Service;

use App\Repository\EmployeeRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\EmployeeType;

class EmployeeService

{

    protected $emi;
    public function __construct(EntityManagerInterface $em)
    {
       $this->emi = $em;
    }

    public function employeeAdd($form,$employee)
    {
      if($form->isSubmitted() && $form->isValid())
      {
        $this->emi->persist($employee);
        $this->emi->flush();
        return true;
      }
      else
      {
       return false;
    
      }
       
    }

}