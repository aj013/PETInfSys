<?php

namespace App\Entity;

use App\Repository\PetEmailRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PetEmailRepository::class)
 */
class PetEmail
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=employee::class, inversedBy="petEmail", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $petemail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPetemail(): ?employee
    {
        return $this->petemail;
    }

    public function setPetemail(employee $petemail): self
    {
        $this->petemail = $petemail;

        return $this;
    }
}
