<?php

namespace App\Entity;

use App\Repository\JornadaRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=JornadaRepository::class)
 */
class Jornada
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="jornada")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usuario_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $hora;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $observaciones;

    /**
     * @ORM\Column(type="boolean")
     */
    private $tipo;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $latitud;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $longitud;

    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsuarioId(): ?User
    {
        return $this->usuario_id;
    }

    public function setUsuarioId(?User $usuario_id): self
    {
        $this->usuario_id = $usuario_id;

        return $this;
    }

    public function getHora(): ?\DateTimeInterface
    {
        return $this->hora;
    }

    public function setHora(\DateTimeInterface $hora): self
    {
        $this->hora = $hora;

        return $this;
    }

    public function getObservaciones(): ?string
    {
        return $this->observaciones;
    }

    public function setObservaciones(?string $observaciones): self
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    public function getTipo(): ?bool
    {
        return $this->tipo;
    }

    public function setTipo(bool $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getLatitud(): ?float
    {
        return $this->latitud;
    }

    public function setLatitud(?float $latitud): self
    {
        $this->latitud = $latitud;

        return $this;
    }

    public function getLongitud(): ?float
    {
        return $this->longitud;
    }

    public function setLongitud(?float $longitud): self
    {
        $this->longitud = $longitud;

        return $this;
    }

    
}
