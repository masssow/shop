<?php

namespace App\Controller;

use App\Classe\Cart;

use Doctrine\ORM\Query\Expr\Func;
use App\Repository\ProduitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CartController extends AbstractController
{
   

    #[Route('/mon-panier', name: 'cart')]
    public function index(Cart $cart, ProduitRepository $produitRepository): Response
    {
        
        // dd($cartComplete);
        return $this->render('cart/index.html.twig', [
            'cart' => $cart->getFull()
        ]);
    }

        #[Route('/cart/add/{id}', name: 'add_to_cart')]
        public function add(Cart $cart, $id): Response
        {
            $cart->add($id);

            return $this->redirectToRoute('cart');
        }

        #[Route('/cart/remove', name: 'my_cart')]
        public function remove(Cart $cart): Response
        {
            $cart->remove();

            return $this->redirectToRoute('produits');
        }

        #[Route('/cart/delete/{id}', name: 'delete_to_cart')]
        public function delete(Cart $cart, $id): Response
        {
                $cart->delete($id);

            return $this->redirectToRoute('cart');    
    }

    #[Route('/cart/decrease/{id}', name: 'decrease_to_cart')]
    public function decrease(Cart $cart, $id): Response
    {
        $cart->decrease($id);

    return $this->redirectToRoute('cart');    
}

}