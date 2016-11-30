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
             ->getQuery()
             ->getResult();
  }

  public function getCriticalProductFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock <= p.stockMinimo')
          ->getQuery()->getArrayResult();
  }

  public function getProductNotIdealStockFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock < p.stockIdeal')
          ->getQuery()->getArrayResult();
  }
  public function getProductYesIdealStockFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock >= p.stockIdeal')
          ->getQuery()->getArrayResult();
  }

  public function getGoodProductFromProvider($idProvider)
  {
    return $this->createQueryBuilder('p')
          ->where('p.proveedor = :idProvider')
          ->setParameter('idProvider', $idProvider)
          ->andWhere('p.stock > p.stockMinimo')
          ->getQuery()->getArrayResult();
  }

   public function getCountStockCritico() {

      return $this->createQueryBuilder('p')
              ->select('count(p.id)')
              ->where('p.stock <= p.stockMinimo')
              ->getQuery()
              ->getSingleScalarResult();
  }
  public function datosGrafico($idProducto) {
      
      
  }
}
