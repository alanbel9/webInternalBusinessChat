<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UC
 *
 * @ORM\Table(name="u-c", uniqueConstraints={@ORM\UniqueConstraint(name="unique", columns={"Id_Us", "Id_Canal"})}, indexes={@ORM\Index(name="ca", columns={"Id_Canal"}), @ORM\Index(name="us", columns={"Id_Us"})})
 * @ORM\Entity
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
     * @ORM\ManyToOne(targetEntity="Canales")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Canal", referencedColumnName="Id_Canal")
     * })
     */
    private $idCanal;

    /**
     * @var \Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Id_Us", referencedColumnName="Id_Us")
     * })
     */
    private $idUs;

    public function getIdUc(): ?int
    {
        return $this->idUc;
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

    public function getIdUs(): ?Usuarios
    {
        return $this->idUs;
    }

    public function setIdUs(?Usuarios $idUs): self
    {
        $this->idUs = $idUs;

        return $this;
    }


}
