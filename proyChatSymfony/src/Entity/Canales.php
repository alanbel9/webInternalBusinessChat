<?php

namespace App\Entity;

use App\Entity\UC;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Canales
 *
 * @ORM\Table(name="canales")
 *@ORM\Entity(repositoryClass="App\Repository\CanalesRepository")
 */
class Canales
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Canal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCanal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nombre ;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $descripcion ;


     /**
     * @ORM\Column(name="Imagen", type="blob")
     */
    private $imagen;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UC", mappedBy="canal" , orphanRemoval=true)
     */
    private $cus;

    /**
     * @ORM\Column(name="FechaModificacion", type="datetime, nullable=true, options={"default"="NULL"")
     */
    private $FechaModificacion;

    public function __construct()
    {
        $this->cus = new ArrayCollection();
    }

    public function getIdCanal(): ?int
    {
        return $this->idCanal;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }



    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
        return $this;
    }

    /**
     * @return Collection|UC[]
     */
    public function getCus(): Collection
    {
        return $this->cus;
    }

    public function addCus(UC $cus): self
    {
        if (!$this->cus->contains($cus)) {
            $this->cus[] = $cus;
            $cus->setCanal($this);
        }

        return $this;
    }

    public function removeCus(UC $cus): self
    {
        if ($this->cus->contains($cus)) {
            $this->cus->removeElement($cus);
            // set the owning side to null (unless already changed)
            if ($cus->getCanal() === $this) {
                $cus->setCanal(null);
            }
        }

        return $this;
    }

    public function getFechaModificacion(): ?\DateTimeInterface
    {
        return $this->FechaModificacion;
    }

    public function setFechaModificacion(\DateTimeInterface $FechaModificacion): self
    {
        $this->FechaModificacion = $FechaModificacion;

        return $this;
    }
}
