<?php

namespace AppBundle\Repository;

/**
 * ProductoRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductoRepository extends \Doctrine\ORM\EntityRepository
{
  public function getCriticalProduct()
  {
    return $this->createQueryBuilder('p')
             ->where('p.stock < p.stockMinimo')
             ->orderBy('p.nombre', 'ASC')
             ->andWhere('p.active = 1')
             ->getQuery()
             ->getResult();
  }

  public function findAllActive()
  {
    return $this->createQueryBuilder('p')
             ->where('p.active = 1')
             ->getQuery()
             ->getResult();
  }

  public function getCriticalProductFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock <= p.stockMinimo')
          ->andWhere('p.active = 1')
          ->getQuery()->getArrayResult();
  }

  public function getProductNotIdealStockFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock < p.stockIdeal')
          ->andWhere('p.active = 1')
          ->getQuery()->getArrayResult();
  }
  public function getProductYesIdealStockFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock >= p.stockIdeal')
          ->andWhere('p.active = 1')
          ->getQuery()->getArrayResult();
  }

  public function getGoodProductFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock > p.stockMinimo')
          ->andWhere('p.active = 1')
          ->getQuery()->getArrayResult();
  }

   public function getCountStockCritico() {

      return $this->createQueryBuilder('p')
              ->select('count(p.id)')
              ->where('p.stock < p.stockMinimo')
              ->andWhere('p.active = 1')
              ->getQuery()
              ->getSingleScalarResult();
  }
  public function datosGrafico($idProducto) {


  }
}
