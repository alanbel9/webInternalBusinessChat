<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 * @UniqueEntity(fields={"email"}
 * 
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Us", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUs;

    /**
     * @var string
     *
     * @ORM\Column(name="Correo", type="string", length=100, nullable=false)
     */
    private $correo;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=100, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Nombre", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $nombre;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Apellidos", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $apellidos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Puesto", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $puesto;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Conocimientos", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $conocimientos;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Aficiones", type="text", length=0, nullable=true, options={"default"="NULL"})
     */
    private $aficiones;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Foto", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $foto;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Nac", type="date", nullable=true, options={"default"="NULL"})
     */
    private $fechaNac;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="Fecha_Ult_Con", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $fechaUltCon;

    public function getIdUs(): ?int
    {
        return $this->idUs;
    }

    public function getCorreo(): ?string
    {
        return $this->correo;
    }

    public function setCorreo(string $correo): self
    {
        $this->correo = $correo;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
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

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(?string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getPuesto(): ?string
    {
        return $this->puesto;
    }

    public function setPuesto(?string $puesto): self
    {
        $this->puesto = $puesto;

        return $this;
    }

    public function getConocimientos(): ?string
    {
        return $this->conocimientos;
    }

    public function setConocimientos(?string $conocimientos): self
    {
        $this->conocimientos = $conocimientos;

        return $this;
    }

    public function getAficiones(): ?string
    {
        return $this->aficiones;
    }

    public function setAficiones(?string $aficiones): self
    {
        $this->aficiones = $aficiones;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    public function getFechaNac(): ?\DateTimeInterface
    {
        return $this->fechaNac;
    }

    public function setFechaNac(?\DateTimeInterface $fechaNac): self
    {
        $this->fechaNac = $fechaNac;

        return $this;
    }

    public function getFechaUltCon(): ?\DateTimeInterface
    {
        return $this->fechaUltCon;
    }

    public function setFechaUltCon(?\DateTimeInterface $fechaUltCon): self
    {
        $this->fechaUltCon = $fechaUltCon;

        return $this;
    }


}
