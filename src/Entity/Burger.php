<?php

namespace App\Entity;

use App\Repository\BurgerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BurgerRepository::class)]
class Burger
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    // Relation avec Pain
    #[ORM\ManyToOne(targetEntity: Pain::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $pain;

    // Relation avec Oignon
    #[ORM\ManyToMany(targetEntity: Oignon::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $oignon;

    #[ORM\ManyToMany(targetEntity: Sauce::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $sauce;

    #[ORM\OneToOne(targetEntity: Image::class)]
    #[ORM\JoinColumn(nullable: false)]
    private $image;

    #[ORM\OneToMany(mappedBy: 'burger', targetEntity: Commentaire::class)]
    private $commentaire;
    

    #[ORM\Column(type: "decimal", scale: 2)]
    private $price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }
}
