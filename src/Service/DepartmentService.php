<?php

namespace App\Service;

use App\Repository\DepartmentRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Form\DepartmentType;

class DepartmentService

{

    protected $emi;
    public function __construct(EntityManagerInterface $em)
    {
       $this->emi = $em;
    }

    public function deptAdd($form,$dept)
    {
      
      if($form->isSubmitted() && $form->isValid())
      {
        $this->emi->persist($dept);
        $this->emi->flush();
        return true;
      }
      else
      {
       return false;
    
      }
       
    }

}