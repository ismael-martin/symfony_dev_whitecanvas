<?php

namespace App\Entity;

use App\Repository\DepartamentosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DepartamentosRepository::class)
 */
class Departamentos
{


    const REGISTRO_SUCCESS = "Se ha registrado correctamente el departamento";
    const REGISTRO_FAIL = "Ups, algo ha ocurrido y no se ha registrado el departamento";
    const EDIT_SUCCESS = "Se han actualizado los datos del departamento correctamente";
    const EDIT_FAIL = "Ups, algo ha ocurrido y no se ha editado el departamento";
    const DELETE_SUCCESS = "Se ha borrado el departamento correctamente";
    const DELETE_FAIL = "Ups, algo ha ocurrido y no se ha borrado el departamento";



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
     * @ORM\Column(type="text", nullable=true)
     */
    private $descripcion;


    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="departamentos")
     */
    private $usuarios;

    public function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }

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
     * @return Collection<int, User>
     */
    public function getUsuarios(): Collection
    {
        return $this->usuarios;
    }

    public function addUsuario(User $usuario): self
    {
        if (!$this->usuarios->contains($usuario)) {
            $this->usuarios[] = $usuario;
        }

        return $this;
    }

    public function removeUsuario(User $usuario): self
    {
        $this->usuarios->removeElement($usuario);

        return $this;
    }
}
