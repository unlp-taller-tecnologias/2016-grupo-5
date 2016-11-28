<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidoRepository")
 */
class Pedido
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_apertura", type="datetime")
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_cierre", type="datetime", nullable=true)
     */
    private $fechaCierre;


    /**
     * @ORM\ManyToOne(targetEntity="Proveedor", inversedBy="pedido")
     * @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id")
     */
    private $proveedor;

    /**
     * @ORM\OneToMany(targetEntity="DetallePedido", mappedBy="pedido")
     */
    private $detalle;

    public function __construct()
    {
        $this->fechaApertura = new \DateTime();
        $this->detalle = new ArrayCollection();
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
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     *
     * @return Pedido
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     *
     * @return Pedido
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set proveedor
     *
     * @param \AppBundle\Entity\Proveedor $proveedor
     *
     * @return Pedido
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
     * Add detalle
     *
     * @param \AppBundle\Entity\DetallePedido $detalle
     *
     * @return Pedido
     */
    public function adddetalle(\AppBundle\Entity\DetallePedido $detalle)
    {
        $this->detalle[] = $detalle;

        return $this;
    }

    /**
     * Remove detalle
     *
     * @param \AppBundle\Entity\DetallePedido $detalle
     */
    public function removedetalle(\AppBundle\Entity\DetallePedido $detalle)
    {
        $this->detalle->removeElement($detalle);
    }

    /**
     * Get detalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDetalle()
    {
        return $this->detalle;
    }
}
