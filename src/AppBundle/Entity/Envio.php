<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Envio
 *
 * @ORM\Table(name="envio")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EnvioRepository")
 */
class Envio
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
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;

    /**
     * @var \string
     *
     * @ORM\Column(name="responsable", type="string")
     */
    private $responsable;

    /**
     * @ORM\ManyToOne(targetEntity="Sector", inversedBy="envio")
     * @ORM\JoinColumn(name="proveedor_id", referencedColumnName="id")
     */
    private $sector;

    /**
     * @ORM\OneToMany(targetEntity="DetalleEnvio", mappedBy="envio")
     */
    private $datalle;

    public function __construct()
    {
        $this->datalle = new ArrayCollection();
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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Envio
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Envio
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set sector
     *
     * @param \AppBundle\Entity\Sector $sector
     *
     * @return Envio
     */
    public function setSector(\AppBundle\Entity\Sector $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return \AppBundle\Entity\Sector
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Add datalle
     *
     * @param \AppBundle\Entity\DetalleEnvio $datalle
     *
     * @return Envio
     */
    public function addDatalle(\AppBundle\Entity\DetalleEnvio $datalle)
    {
        $this->datalle[] = $datalle;

        return $this;
    }

    /**
     * Remove datalle
     *
     * @param \AppBundle\Entity\DetalleEnvio $datalle
     */
    public function removeDatalle(\AppBundle\Entity\DetalleEnvio $datalle)
    {
        $this->datalle->removeElement($datalle);
    }

    /**
     * Get datalle
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDatalle()
    {
        return $this->datalle;
    }
}
