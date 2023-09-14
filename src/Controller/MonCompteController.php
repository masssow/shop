<?php

namespace App\Controller;

use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MonCompteController extends AbstractController
{
    #[Route('/compte', name: 'mon_compte')]
    public function index(): Response
    {
        return $this->render('mon_compte/index.html.twig');
    }

    #[Route('/compte/addfavori', name: 'mon_compte_favori')]
    public function addFavori(Request $request, ProduitRepository $repository): Response
    {
        $produitId = $request->request->get('id');
        $produit = $repository->find($produitId);
        $user = $this->getUser();
        $user->addProduitList($produit);
        $em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->flush();
        return $this->render('mon_compte/index.html.twig');
    }
  
}
