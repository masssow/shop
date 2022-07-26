<?php

namespace App\Controller;

use Stripe\Order;
use App\Entity\Commande;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CompteCommandeController extends AbstractController
{

    private $entityManager;


    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager =  $entityManager;
    }
    
    #[Route('/compte/mes-commandes', name: 'compte_commande')]
    public function index(): Response
    {
        $commandes = $this->entityManager->getRepository(Commande::class)->findSuccessOrders($this->getUser());
<<<<<<< HEAD
        // dd($commandes);
    
=======
        dd($commandes);
           
>>>>>>> dc6b251889921c16bd6863b60ca6ce4cb576207a
        return $this->render('mon_compte/commandes.html.twig', [
            'commandes' => $commandes
        ]);
        
    }
}
