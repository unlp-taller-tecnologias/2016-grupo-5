<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProductoRepository")
 */
class Producto
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_minimo", type="integer")
     */
    private $stockMinimo;

    /**
     * @var int
     *
     * @ORM\Column(name="stock_ideal", type="integer")
     */
    private $stockIdeal;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer")
     */
    private $stock;


    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

     /**
     * @ORM\ManyToOne(targetEntity="Proveedor", inversedBy="producto")
     * @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id")
     */
    private $proveedor;

    /**
     * @var boolean
     * @ORM\Column(name="active", type="boolean", nullable=true, options={"default":true})
     */
    private $active;

    public function __construct()
    {
        $this->active = true;
    }
    
    public function __toString()
    {
        return $this->getNombre();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stockMinimo
     *
     * @param integer $stockMinimo
     *
     * @return Producto
     */
    public function setStockMinimo($stockMinimo)
    {
        $this->stockMinimo = $stockMinimo;

        return $this;
    }

    /**
     * Get stockMinimo
     *
     * @return int
     */
    public function getStockMinimo()
    {
        return $this->stockMinimo;
    }

    /**
     * Set stockIdeal
     *
     * @param integer $stockIdeal
     *
     * @return Producto
     */
    public function setStockIdeal($stockIdeal)
    {
        $this->stockIdeal = $stockIdeal;

        return $this;
    }

    /**
     * Get stockIdeal
     *
     * @return integer
     */
    public function getStockIdeal()
    {
        return $this->stockIdeal;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     *
     * @return Producto
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Add stock
     *
     * @param integer $stock
     *
     * @return Producto
     */
    public function addStock($stock)
    {
        $this->stock += $stock;

        return $this;
    }

    /**
     * sub stock
     *
     * @param integer $stock
     *
     * @return Producto
     */
    public function subStock($stock)
    {
        $this->stock -= $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Producto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set proveedor
     *
     * @param \AppBundle\Entity\Proveedor $proveedor
     *
     * @return Producto
     */
    public function setProveedor(\AppBundle\Entity\Proveedor $proveedor = null)
    {
        $this->proveedor = $proveedor;

        return $this;
    }

    /**
     * Get proveedor
     *
     * @return \AppBundle\Entity\Proveedor
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }



    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Producto
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
}
