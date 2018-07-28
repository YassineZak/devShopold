<?php

namespace YZ\EcommerceBundle\Repository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{
  public function findProduct($slug)
  {
    $qb = $this->createQueryBuilder('p')
    ->where('p.slug = :slug')
    ->setParameter('slug', $slug);
   return $qb->getQuery()->getOneOrNullResult();
  }
  public function findByCategory($slug)
  {
    $qb = $this->createQueryBuilder('p')
      ->leftJoin('p.category', 'c')
      ->addSelect('c')
    ->where('c.slug = :slug')
    ->setParameter('slug', $slug);
   return $qb->getQuery()->getResult();
  }
  public function getProducts($page, $nbPerPage)
  {
    $products = $this->createQueryBuilder('p')
      ->leftJoin('p.category', 'c')
      ->addSelect('c')
      ->orderBy('p.dateCreation', 'DESC')
      ->getQuery();
    $products
    ->setFirstResult(($page-1) * $nbPerPage)
    ->setMaxResults($nbPerPage);
    return new Paginator($products, true);
  }
  public function getProductsByPrice($page, $nbPerPage)
  {
    $products = $this->createQueryBuilder('p')
      ->leftJoin('p.category', 'c')
      ->addSelect('c')
      ->orderBy('p.prix', 'DESC')
      ->getQuery();
    $products
    ->setFirstResult(($page-1) * $nbPerPage)
    ->setMaxResults($nbPerPage);
    return new Paginator($products, true);
  }
  public function findByArray(array $array){
    $qb = $this->createQueryBuilder('p')
      ->leftJoin('p.category', 'c')
      ->addSelect('c')
      ->Where('p.id IN (:array)')
      ->setParameter('array', $array);
      return $qb->getQuery()->getResult();
  }
  public function findByTerm($term){
    $qb = $this->createQueryBuilder('p')
    ->leftJoin('p.category', 'c')
    ->addSelect('c')
    ->where('p.titre LIKE :term')
    ->setParameter( 'term', "%$term%")
    ->orderBy('p.titre');
    return $qb->getQuery()->getResult();
  }
}
