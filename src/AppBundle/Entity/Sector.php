<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sector
 *
 * @ORM\Table(name="sector")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SectorRepository")
 */
class Sector
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;
    
    /**
     * @ORM\OneToMany(targetEntity="Envio", mappedBy="sector")
     */
    private $envios;

    public function __construct()
    {
        $this->envios = new ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Sector
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
     * Add envio
     *
     * @param \AppBundle\Entity\Envio $envio
     *
     * @return Sector
     */
    public function addEnvio(\AppBundle\Entity\Envio $envio)
    {
        $this->envios[] = $envio;

        return $this;
    }

    /**
     * Remove envio
     *
     * @param \AppBundle\Entity\Envio $envio
     */
    public function removeEnvio(\AppBundle\Entity\Envio $envio)
    {
        $this->envios->removeElement($envio);
    }

    /**
     * Get envios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEnvios()
    {
        return $this->envios;
    }
}
