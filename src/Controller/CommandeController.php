<?php

namespace App\Controller;


use App\Classe\Cart;
use DateTimeImmutable;
use App\Entity\Commande;
use App\Form\CommandeType;
use App\Entity\LigneCommande;
use phpDocumentor\Reflection\Types\Null_;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CommandeController extends AbstractController
{
    #[Route('/commande', name: 'commande')]
    public function index(Cart $cart): Response
    {
        if (!$this->getUSer()->getAdresses()->getValues())
        {
            return $this->redirectToRoute('compte_adresse_add');
        }

        $form = $this->createForm( CommandeType::class, Null, [
            'user' => $this->getUser()]);

        return $this->render('commande/index.html.twig', [
           'form' => $form->createView(),
           'cart'=> $cart->getFull()
        ]);
    }
 
    #[Route('/commande/recapitulatif', name: 'commande_recap')]

      public function add(Cart $cart, Request $request): Response
    {
        
        $form = $this->createForm( CommandeType::class, Null, [
            'user' => $this->getUser()]);

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){
                 
                    $entityManager = $this->getDoctrine()->getManager();

                    $date = new DateTimeImmutable();
                    $carriers = $form->get('carriers')->getData();
                    $delivery = $form->get('adresses')->getData();
                    $delivery_content = $delivery->getPrenom().''.$delivery->getNom();
                    $delivery_content .= '</br>'.$delivery->getPhone();
                    $delivery_content .= '</br>'.$delivery->getAdress();
                    $delivery_content .= '</br>'.$delivery->getCountry();
                    // dd($delivery);

                // Je procede ici à la enregistrement decommandes (Commande)
                   $commande =new Commande();
                   $reference = $date->format('dmY').'-'.uniqid();
                   $commande->setReference($reference);
                   $commande->setUser($this->getUser());
                   $commande->setCreatedAt($date);
                   $commande->setCarrierNom($carriers->getNom());
                   $commande->setCarrierPrix($carriers->getPrix());
                   $commande->setDelivery($delivery_content);
                   $commande->setIsPaid(0);

                   $entityManager->persist($commande);
                  
                                     
                  // enregistrer mes produits (Ligne de commande)
                   foreach ($cart->getFull() as $produit) {
                    $ligneCommande = new LigneCommande();
                    $ligneCommande->setCommande($commande);
                    $ligneCommande->setProduit($produit['produit']->getNom());
                    $ligneCommande->setQuantity($produit['quantity']);
                    $ligneCommande->setPrice($produit['produit']->getPrix());
                    $ligneCommande->setTotal($produit['produit']->getPrix() * $produit['quantity']);
                    $entityManager->persist($ligneCommande);
                   
                    }
            
                    //  $entityManager->flush();

                      return $this->render('commande/add.html.twig', [
                        'cart'=> $cart->getFull(),
                        'carrier'=> $carriers,
                        'delivery' => $delivery_content,
                        'reference' =>$commande->getReference()
                    ]);

                
                                
                   

            }

                    return $this->redirectToRoute('cart');
    }
}
