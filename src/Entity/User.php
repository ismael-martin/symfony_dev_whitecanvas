<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    const USUARIO_BLOQUEADO = "Acceso denegado, usuario bloqueado";
    const REGISTRO_SUCCESS = "Se ha registrado correctamente al usuario";
    const REGISTRO_FAIL = "Ups, algo ha ocurrido y no se ha registrado el usuario";
    const EDIT_SUCCESS = "Se han actualizado los datos del usuario correctamente";
    const EDIT_FAIL = "Ups, algo ha ocurrido y no se ha editado el usuario";
    const DELETE_SUCCESS = "Se ha borrado el usuario correctamente";
    const DELETE_FAIL = "Ups, algo ha ocurrido y no se ha borrado el usuario";



    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $apellidos;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bloqueado;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $dni;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fnacimiento;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $lnacimiento;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $sexo;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $nacionalidad;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $estCivil;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $permConducir;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vehiProp;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vehiEmp;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @ORM\OneToMany(targetEntity=Jornada::class, mappedBy="usuario_id", orphanRemoval=true)
     */
    private $jornada;

    /**
     * @ORM\ManyToMany(targetEntity=Departamentos::class, mappedBy="usuarios")
     */
    private $departamentos;

    public function __construct()
    {
        $this->jornada = new ArrayCollection();
        $this->departamentos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getBloqueado(): ?bool
    {
        return $this->bloqueado;
    }

    public function setBloqueado(?bool $bloqueado): self
    {
        $this->bloqueado = $bloqueado;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

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

    public function getLnacimiento(): ?string
    {
        return $this->lnacimiento;
    }

    public function setLnacimiento(?string $lnacimiento): self
    {
        $this->lnacimiento = $lnacimiento;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(?string $sexo): self
    {
        $this->sexo = $sexo;

        return $this;
    }

    public function getNacionalidad(): ?string
    {
        return $this->nacionalidad;
    }

    public function setNacionalidad(?string $nacionalidad): self
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    public function getEstCivil(): ?string
    {
        return $this->estCivil;
    }

    public function setEstCivil(?string $estCivil): self
    {
        $this->estCivil = $estCivil;

        return $this;
    }

    public function getPermConducir(): ?string
    {
        return $this->permConducir;
    }

    public function setPermConducir(?string $permConducir): self
    {
        $this->permConducir = $permConducir;

        return $this;
    }

    public function getVehiProp(): ?bool
    {
        return $this->vehiProp;
    }

    public function setVehiProp(?bool $vehiProp): self
    {
        $this->vehiProp = $vehiProp;

        return $this;
    }

    public function getVehiEmp(): ?bool
    {
        return $this->vehiEmp;
    }

    public function setVehiEmp(?bool $vehiEmp): self
    {
        $this->vehiEmp = $vehiEmp;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * @return Collection|Jornada[]
     */
    public function getJornada(): Collection
    {
        return $this->jornada;
    }

    public function addJornada(Jornada $jornada): self
    {
        if (!$this->jornada->contains($jornada)) {
            $this->jornada[] = $jornada;
            $jornada->setUsuarioId($this);
        }

        return $this;
    }

    public function removeJornada(Jornada $jornada): self
    {
        if ($this->jornada->removeElement($jornada)) {
            // set the owning side to null (unless already changed)
            if ($jornada->getUsuarioId() === $this) {
                $jornada->setUsuarioId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Departamentos>
     */
    public function getDepartamentos(): Collection
    {
        return $this->departamentos;
    }

    public function addDepartamento(Departamentos $departamento): self
    {
        if (!$this->departamentos->contains($departamento)) {
            $this->departamentos[] = $departamento;
            $departamento->addUsuario($this);
        }

        return $this;
    }

    public function removeDepartamento(Departamentos $departamento): self
    {
        if ($this->departamentos->removeElement($departamento)) {
            $departamento->removeUsuario($this);
        }

        return $this;
    }
}
