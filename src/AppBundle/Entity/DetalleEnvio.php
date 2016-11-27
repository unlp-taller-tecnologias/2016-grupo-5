<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleEnvio
 *
 * @ORM\Table(name="detalle_envio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetalleEnvioRepository")
 */
class DetalleEnvio
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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @ORM\ManyToOne(targetEntity="Envio", inversedBy="detalle_envio")
     * @ORM\JoinColumn(name="envio_id", referencedColumnName="id")
     */
    private $envio;

    public function __ToString(){
      return $this->getCantidadPedida();
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
     * Set cantidadPedida
     *
     * @param integer $cantidadPedida
     *
     * @return DetalleEnvio
     */
    public function setCantidadPedida($cantidadPedida)
    {
        $this->cantidadPedida = $cantidadPedida;

        return $this;
    }

    /**
     * Get cantidadPedida
     *
     * @return int
     */
    public function getCantidadPedida()
    {
        return $this->cantidadPedida;
    }

    /**
     * Set cantidadRecibida
     *
     * @param integer $cantidadRecibida
     *
     * @return DetalleEnvio
     */
    public function setCantidadRecibida($cantidadRecibida)
    {
        $this->cantidadRecibida = $cantidadRecibida;

        return $this;
    }

    /**
     * Get cantidadRecibida
     *
     * @return int
     */
    public function getCantidadRecibida()
    {
        return $this->cantidadRecibida;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetalleEnvio
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set envio
     *
     * @param \AppBundle\Entity\Envio $envio
     *
     * @return DetalleEnvio
     */
    public function setEnvio(\AppBundle\Entity\Envio $envio = null)
    {
        $this->envio = $envio;

        return $this;
    }

    /**
     * Get envio
     *
     * @return \AppBundle\Entity\Envio
     */
    public function getEnvio()
    {
        return $this->envio;
    }
}
