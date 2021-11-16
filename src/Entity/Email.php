<?php

namespace App\Entity;

use App\Repository\EmailRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Employee;

/**
 * @ORM\Entity(repositoryClass=EmailRepository::class)
 */
class Email
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=Employee::class, mappedBy="email")
     */
    private $Employee;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailaddress;

    public function __construct()
    {
        $this->Employee = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|Employee[]
     */
    public function getEmployee(): Collection
    {
        return $this->Employee;
    }

    public function addEmployee(Employee $employee): self
    {
        if (!$this->Employee->contains($employee)) {
            $this->Employee[] = $employee;
            $employee->setEmail($this);
        }

        return $this;
    }

    public function removeEmployee(Employee $employee): self
    {
        if ($this->Employee->removeElement($employee)) {
            // set the owning side to null (unless already changed)
            if ($employee->getEmail() === $this) {
                $employee->setEmail(null);
            }
        }

        return $this;
    }

    public function getEmailaddress(): ?string
    {
        return $this->emailaddress;
    }

    public function setEmailaddress(string $emailaddress): self
    {
        $this->emailaddress = $emailaddress;

        return $this;
    }
}
