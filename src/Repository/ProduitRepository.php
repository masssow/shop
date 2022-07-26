<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    //  Function native que je decommenté
     /**
      * @return Produit[] Returns an array of Produit objects
      */
    
    public function search($value)
    {
        return $this->createQueryBuilder('p')
            ->Where('p.nom LIKE :val')
            ->setParameter('val',  '%'.$value.'%')
            // ->orderBy('p.id', 'ASC')
        // ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    
     /**
     * @return Produit[] Returns an array ofLivre objects
     */
    public function searchForPaginator($value){
        return $this->createQueryBuilder('p')
                ->where('p.nom LIKE :val')
                ->setParameter('val', '%'.$value.'%');
    }  
            

    /*
    public function findOneBySomeField($value): ?Produit
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
*/
}
