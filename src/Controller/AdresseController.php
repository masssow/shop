<?php

namespace App\Controller;



use App\Classe\Cart;
use App\Entity\Adress;
use App\Form\AdressType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdresseController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;

    }
   
    #[Route('/compte/mes-adresses', name: 'compte_adresse')]
    public function index(): Response
    {
        // $adresses = $this->getUser();
        //  dd($this->getUser());
        return $this->render('mon_compte/adresse.html.twig',[
            // 'adresses' => $adresses
        ]);
    }


    #[Route('/compte/ajouter-une-adresse', name: 'compte_adresse_add')]

    public function add(Cart $cart, Request $request): Response
    {

      $adress = new Adress();

        $form = $this->createForm(AdressType::class, $adress);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            // dd($adress);
              $adress->setUser($this->getUser());
              $this->entityManager->persist($adress);
            //  $entityManager = $this->getDoctrine()->getManager();
        //    $entityManager->persist($adress);
           $this->entityManager->flush();
           if($cart->get()){
             return $this->redirectToRoute('commande');
           } else {
            return $this->redirectToRoute('mon_compte');

           }

        }

        return $this->render('mon_compte/adresse_form.html.twig', [
            'form'=> $form->createView()
        ]);

    }


    #[Route('compte/modifier-une-adresse/{id}', name: 'compte_adresse_edit')]

    public function edit(Request $request, $id): Response
    {

      $adress = $this->entityManager->getRepository(Adress::class)->find($id);

      if (!$adress || $adress->getUser() != $this->getUser()){
        return $this->redirectToRoute('compte_adresse');
      }

        $form = $this->createForm(AdressType::class, $adress);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $this->entityManager->flush();
     return $this->redirectToRoute('compte_adresse');

        }

     return $this->render('mon_compte/adresse_form.html.twig', [
            'form'=> $form->createView()
        ]);

    }



    #[Route('compte/supprimer-une-adresse/{id}', name: 'compte_adresse_delete')]

    public function delete($id): Response
    {

      $adress = $this->entityManager->getRepository(Adress::class)->find($id);

      if ($adress && $adress->getUser() == $this->getUser()){
        $this->entityManager->remove($adress);
        $this->entityManager->flush();

      }

      
        return $this->redirectToRoute('compte_adresse');

    }


    
}
