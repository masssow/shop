<?php

namespace App\Controller;

use App\Repository\CategorieRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoriesController extends AbstractController
{
    #[Route('/categories', name: 'categories')]
    public function index(CategorieRepository $categorieRepository, ProduitRepository $produitRepository): Response
    {
        $produit = $produitRepository->findAll();
        $categorie = $categorieRepository->findAll();
        return $this->render('categories/index.html.twig', [
            'categories' => $categorie,
            'produits' => $produit
        ]);
    }

    #[Route('/categorie/{slug}', name: 'categorie-detail')]
    public function detail(CategorieRepository $categorieRepository, ProduitRepository $produitRepository, int $slug): Response
    {
        
        return $this->render('categories/detail.html.twig', [
            'categorie' => $categorieRepository->find($slug),
            // 'produit' =>$produitRepository->findBy()
        ]);
    }
}

