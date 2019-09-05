<?php

namespace App\Entity;

use App\Entity\UC;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios")
 * @ORM\Entity(repositoryClass="App\Repository\UsuariosRepository")
 * @UniqueEntity(fields={"correo"})
 * 
 */
class Usuarios implements UserInterface
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

    /**
     * @ORM\Column(name="foto_archivo", type="blob")
     */
    private $fotoArchivo;
    
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\UC", mappedBy="idUs", orphanRemoval=true)
     */
    private $ucs;

    /**
     * @ORM\Column(name="fechamodificacion", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $fechamodificacion;

    public function __construct()
    {
        $this->ucs = new ArrayCollection();
    }

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

    public function getUsername(){
        return $this->nombre;
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

    public function getRoles(){
        $roles=['ROLE_USER'];
        return $roles;
    }

    public function getSalt(){

    }

    public function eraseCredentials(){

    }

    public function getFotoArchivo()
    {
        return $this->fotoArchivo;
    }

    public function setFotoArchivo($fotoArchivo): self   // !!!!!!!!!!!!!!!!
    {
        $this->fotoArchivo = $fotoArchivo;
        return $this;
    }
    
    /**
     * @return Collection|UC[]
     */
    public function getUcs(): Collection
    {
        return $this->ucs;
    }

    public function addUc(UC $uc): self
    {
        if (!$this->ucs->contains($uc)) {
            $this->ucs[] = $uc;
            $uc->setUsuarios($this);
        }

        return $this;
    }

    public function removeUc(UC $uc): self
    {
        if ($this->ucs->contains($uc)) {
            $this->ucs->removeElement($uc);
            // set the owning side to null (unless already changed)
            if ($uc->getUsuarios() === $this) {
                $uc->setUsuarios(null);
            }
        }

        return $this;
    }

    public function getFechamodificacion(): ?\DateTimeInterface
    {
        return $this->fechamodificacion;
    }

    public function setFechamodificacion(\DateTimeInterface $fechamodificacion): self
    {
        $this->fechamodificacion = $fechamodificacion;

        return $this;
    }

}
