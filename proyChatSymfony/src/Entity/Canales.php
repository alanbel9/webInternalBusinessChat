<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

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
    private $nombre = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="Descripcion", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $descripcion = 'NULL';


     /**
     * @ORM\Column(name="Imagen", type="blob")
     */
    private $imagen;

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
}
