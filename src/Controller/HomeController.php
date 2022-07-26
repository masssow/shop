<?php

namespace App\Controller;

use Stripe\Product;
use App\Entity\Header;
use App\Entity\Produit;
use App\Repository\HomeRepository;
use App\Repository\HeaderRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
     private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    
    #[Route('/', name: 'home')]
    public function index(ProduitRepository $produitRepository, HeaderRepository $headerRepository): Response
    {
        $headers = $this->entityManager->getRepository(Header::class)->findAll();
        $produits = $this->entityManager->getRepository(Produit::class)->findByIsBest(1);
    

        return $this->render('home/index.html.twig', [
            // 'homeContent' => $homeRepository->findOneBy(["active"=>false]),
            // 'produits'=>$produitRepository->findBy([],["updatedAt"=>"DESC"],3),
                'produits' => $produits,
                'headers' => $headers
                // 'headers' => $headerRepository->findBy([],["updatedAt"=>"DESC"],4)
        ]);
    }

  
}
