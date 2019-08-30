<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UC
 *
 * @ORM\Table(name="u_c", uniqueConstraints={@ORM\UniqueConstraint(name="unique", columns={"Id_Us", "Id_Canal"})}, indexes={@ORM\Index(name="ca", columns={"Id_Canal"}), @ORM\Index(name="us", columns={"Id_Us"})})
 * @ORM\Entity(repositoryClass="App\Repository\UCRepository")
 */
class UC
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_UC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUc;


    /**
     * @var \Canales
     *
     * @ORM\ManyToOne(targetEntity="Canales", inversedBy="cus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Canal", referencedColumnName="Id_Canal")
     * })
     */
    private $canal;


    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios", inversedBy="ucs")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Us", referencedColumnName="Id_Us")
     * })
     */
    private $idUs;


       /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Inscripcion", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $fechaInscripcion;

 


    public function getIdUc(): ?int
    {
        return $this->idUc;
    }

    public function getCanal(): ?Canales
    {
        return $this->canal;
    }

    public function setCanal(?Canales $canal): self
    {
        $this->canal = $canal;

        return $this;
    }

    public function getIdUs(): ?Usuarios
    {
        return $this->idUs;
    }

    public function setIdUs(?Usuarios $idUs): self
    {
        $this->idUs = $idUs;

        return $this;
    }



    /**
     * Get the value of fechaInscripcion
     *
     * @return  \DateTime|null
     */ 
    public function getFechaInscripcion()
    {
        return $this->fechaInscripcion;
    }

    /**
     * Set the value of fechaInscripcion
     *
     * @param  \DateTime|null  $fechaInscripcion
     *
     * @return  self
     */ 
    public function setFechaInscripcion($fechaInscripcion)
    {
        $this->fechaInscripcion = $fechaInscripcion;

        return $this;
    }

}
