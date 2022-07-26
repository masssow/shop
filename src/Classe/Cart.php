<?php

namespace App\Classe;

use App\Entity\Produit;
use App\Repository\ProduitRepository;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Cart
    { 
        private $session;
            public function __construct(SessionInterface $session, ProduitRepository $produitRepository)
            
            {
                $this->session = $session;
                $this->produitRepository = $produitRepository;
            }
            
        public function add($id)
        {
            $cart = $this->session->get('cart', []);
            if(!empty($cart[$id])){
                $cart[$id]++;
            } else {
                $cart[$id] = 1;
            }

                $this->session->set('cart', $cart);
        }  

        public function get()
        {
            return $this->session->get('cart');
        }

        public function remove()
        {
            return $this->session->remove('cart');
        }
        
    
    public Function delete($id)
    {
        $cart = $this->session->get('cart', []);

        unset($cart[$id]);

        return$this->session->set('cart', $cart);
    }

    public function decrease($id)
    {
        $cart = $this->session->get('cart', []);

        if ($cart[$id] > 1) {
            $cart[$id]--;
        } else {

            unset($cart[$id]);
        }

        return$this->session->set('cart', $cart);
    }

    public function getFull()
    {
        $cartComplete = [];
        if ($this->get()){
            foreach ($this->get() as $id => $quantity) {
                $produitObjet = $this->produitRepository->find($id);
                if (!$produitObjet){
                $this->delete($id); 
                continue;
                }
                
                $cartComplete[] = [
                'produit' => $produitObjet,
                'quantity' => $quantity
    
        ];
    }
    }
    return $cartComplete;
    }

    
} 