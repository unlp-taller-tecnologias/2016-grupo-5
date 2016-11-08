<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetallePedido
 *
 * @ORM\Table(name="detalle_pedido")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DetallePedidoRepository")
 */
class DetallePedido
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
     * @ORM\Column(name="cantidad_pedida", type="integer")
     */
    private $cantidadPedida;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad_recibida", type="integer", nullable=true)
     */
    private $cantidadRecibida;

    /**
     * @ORM\ManyToOne(targetEntity="Pedido", inversedBy="detalle_pedido")
     * @ORM\JoinColumn(name="pedido_id", referencedColumnName="id")
     */
    private $pedido;

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
     * @return DetallePedido
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
     * @return DetallePedido
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
     * Set pedido
     *
     * @param \AppBundle\Entity\Pedido $pedido
     *
     * @return DetallePedido
     */
    public function setPedido(\AppBundle\Entity\Pedido $pedido = null)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return \AppBundle\Entity\Pedido
     */
    public function getPedido()
    {
        return $this->pedido;
    }
}
