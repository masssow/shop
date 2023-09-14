<?php

namespace App\Controller;

use Stripe\Product;
use App\Entity\Header;
use App\Entity\Search;
use App\Entity\Produit;
use App\Entity\Carousel;
use App\Form\SearchType;
use App\Repository\HomeRepository;
use App\Repository\HeaderRepository;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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
    public function index(ProduitRepository $produitRepository, Request $request): Response
    {
        $headers = $this->entityManager->getRepository(Header::class)->findAll();
        $produits = $this->entityManager->getRepository(Produit::class)->findByIsBest(1);
        $carousel = $this->entityManager->getRepository(Carousel::class)->findAll();

        $search = new Search();
        $form = $this->createForm(SearchType::class,$search);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $produits = $this->entityManager->getRepository(Produit::class)->findWithFilter($search);

        }

        return $this->render('home/index.html.twig', [
        
                'produits' => $produits,
                'headers' => $headers,
                'carousel' => $carousel,
                'form'     => $form->createView()
        ]);
    }

}
