<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Conversa
 *
 * @ORM\Table(name="conversa", indexes={@ORM\Index(name="Id_Us", columns={"Id_Us"}), @ORM\Index(name="Id_Canal", columns={"Id_Canal"})})
 * @ORM\Entity(repositoryClass="App\Repository\ConversaRepository")
 */
class Conversa
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Mensaje", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $mensaje = 'NULL';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $fecha = 'NULL';

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Us", referencedColumnName="Id_Us")
     * })
     */
    private $idUs;

    /**
     * @var \Canales
     *
     * @ORM\ManyToOne(targetEntity="Canales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Canal", referencedColumnName="Id_Canal")
     * })
     */
    private $idCanal;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMensaje(): ?string
    {
        return $this->mensaje;
    }

    public function setMensaje(?string $mensaje): self
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

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

    public function getIdCanal(): ?Canales
    {
        return $this->idCanal;
    }

    public function setIdCanal(?Canales $idCanal): self
    {
        $this->idCanal = $idCanal;

        return $this;
    }


}
