<?php

namespace App\Entity;

use App\Repository\CommentaireRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CommentaireRepository::class)]
class Commentaire
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Burger::class, inversedBy: 'commentaire')]
    #[ORM\JoinColumn(nullable: false)]
    private $burger;

    public function getId(): ?int
    {
        return $this->id;
    }
}
