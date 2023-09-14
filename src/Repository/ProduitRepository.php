<?php

namespace App\Repository;

use App\Entity\Search;
use App\Entity\Produit;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

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
    
    // public function search($value)
    // {
    //     return $this->createQueryBuilder('p')
    //         ->Where('p.nom LIKE :val')
    //         ->setParameter('val',  '%'.$value.'%')
    //         // ->orderBy('p.id', 'ASC')
    //     // ->setMaxResults(10)
    //         ->getQuery()
    //         ->getResult()
    //     ;
    // }
    
/**
* @return Produit[] Returns an array produit objects
*/
    public function findWithFilter(Search $search)
    {

        $query = $this
        ->createQueryBuilder('p')
        ->select('c', 'p')
        ->join('p.categorie', 'c');

        if(!empty($search->categories)){
            $query = $query
            ->andWhere('p.id IN (:categories)')
        ->setParameter('categories', $search->categories);
        }

        if(!empty($search->string)){
            $query = $query
            ->andWhere('p.nom LIKE :string')
        ->setParameter('string', "%{$search->string}%");
        }
        
    
        return $query->getQuery()->getResult();
    }

    /**
     * @return Produit[] Returns an array of produit objects
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
