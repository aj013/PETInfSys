<?php

namespace App\Controller;

use App\Entity\Email;
use App\Form\EmailType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class EmailController extends AbstractController
{
    /**
     * @Route("/email", name="email")
     */
    public function index(): Response
    {
        return $this->render('email/index.html.twig', [
            'controller_name' => 'EmailController',
        ]);
    }
      /**
   * @Route("/email/add", name="email.add")
   */

  public function add(Request $request, EntityManagerInterface $emi)
  {
      $email = new Email();
      $form = $this->createForm(EmailType::class, $email);
      return $this->render('email/add.html.twig', [
          'form' => $form->createView(),
      ]);
  }
}
