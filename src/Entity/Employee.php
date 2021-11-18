<?php

namespace App\Entity;

use App\Entity\PetEmail;
use App\Repository\EmployeeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmployeeRepository::class)
 */
class Employee
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=Department::class, inversedBy="Employee")
     * @ORM\JoinColumn(nullable=false)
     */
    private $department;

    /**
     * @ORM\OneToOne(targetEntity=PetEmail::class, mappedBy="petemail", cascade={"persist", "remove"})
     */
    private $petEmail;

 

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDepartment(): ?Department
    {
        return $this->department;
    }

    public function setDepartment(?Department $department): self
    {
        $this->department = $department;

        return $this;
    }

    public function getPetEmail(): ?PetEmail
    {
        return $this->petEmail;
    }

    public function setPetEmail(PetEmail $petEmail): self
    {
        // set the owning side of the relation if necessary
        if ($petEmail->getPetemail() !== $this) {
            $petEmail->setPetemail($this);
        }

        $this->petEmail = $petEmail;

        return $this;
    }
}
