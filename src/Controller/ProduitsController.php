<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProduitsController extends AbstractController
{  
    
    #[Route('/nos-produits', name: 'produits')]

    public function index(ProduitRepository $produitRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $produits = $produitRepository->findAll();
        $pagination = $paginator->paginate($produits, $request->query->getInt('page',1),10);

        return $this->render('produits/index.html.twig', [
            'produits' => $pagination,
           
        ]);
    }
    
    // Route Recherche
    #[Route('/produit/search', name: 'produit-search', methods: ['GET'])]
    
    public function search(ProduitRepository $produitRepository, PaginatorInterface $paginator, Request $request)
    {
        $value = $request->get("search-value");
        
        $produits = $produitRepository->searchForPaginator($value);
        $pagination = $paginator->paginate(
        $produits, 
        $request->query->getInt('page', 1),1);

            return $this->render('produits/index.html.twig', ["produits"=>$pagination]);
        }

      
    //  Je crée une déuxième fonction pour créer de route dynamyque pour le detail de produit
    #[Route('produit/{slug}', name: 'produit-detail')]
    
    public function detail(ProduitRepository $produitRepository, int $slug): Response
    {
    
        return $this->render('produits/detail.html.twig', [
            "produit" => $produitRepository->find($slug),
        ]);
            
        // return $this->render('produits/search.html.twig', [
        //     "produit" => $produitRepository->findAll(),
        // ]);
    }
}
