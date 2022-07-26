<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class RegistrationController extends AbstractController
{
    
    #[Route('/inscription', name: 'registration')]
    public function index(Request $request, UserPasswordEncoderInterface $encoder): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            
            $user = $form->getData();

        $password = $encoder->encodePassword($user, $user->getPassword());
        $user->setPassword($password);

                $user->setRoles(["ROLE_USER"]);

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

                return $this->redirectToRoute('home');
            }

        return $this->render('registration/index.html.twig', [
        'form'=> $form->createView()
        ]);
    }
}
