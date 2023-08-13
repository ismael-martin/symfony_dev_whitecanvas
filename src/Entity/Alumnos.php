<?php

namespace App\Entity;

use App\Repository\AlumnosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AlumnosRepository::class)
 */
class Alumnos
{


    const REGISTRO_SUCCESS = "Se ha registrado correctamente al alumno";
    const REGISTRO_FAIL = "Ups, algo ha ocurrido y no se ha registrado el alumno";
    const EDIT_SUCCESS = "Se han actualizado los datos del alumno correctamente";
    const EDIT_FAIL = "Ups, algo ha ocurrido y no se ha editado el usuario";
    const DELETE_SUCCESS = "Se ha borrado el alumno correctamente";
    const DELETE_FAIL = "Ups, algo ha ocurrido y no se ha borrado el alumno";

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $telefono;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ident;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $direccion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $localidad;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $provincia;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pais;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fnacimiento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): self
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTelefono(): ?int
    {
        return $this->telefono;
    }

    public function setTelefono(int $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    public function getIdent(): ?string
    {
        return $this->ident;
    }

    public function setIdent(string $ident): self
    {
        $this->ident = $ident;

        return $this;
    }

    public function getDireccion(): ?string
    {
        return $this->direccion;
    }

    public function setDireccion(string $direccion): self
    {
        $this->direccion = $direccion;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getPais(): ?string
    {
        return $this->pais;
    }

    public function setPais(string $pais): self
    {
        $this->pais = $pais;

        return $this;
    }

    public function getFnacimiento(): ?\DateTimeInterface
    {
        return $this->fnacimiento;
    }

    public function setFnacimiento(?\DateTimeInterface $fnacimiento): self
    {
        $this->fnacimiento = $fnacimiento;

        return $this;
    }
}
