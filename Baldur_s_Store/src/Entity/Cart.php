<?php

namespace App\Entity;

use App\Repository\CartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $User_id = null;

    #[ORM\Column]
    private ?int $Article_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUserId(): ?int
    {
        return $this->User_id;
    }

    public function setUserId(int $User_id): static
    {
        $this->User_id = $User_id;

        return $this;
    }

    public function getArticleId(): ?int
    {
        return $this->Article_id;
    }

    public function setArticleId(int $Article_id): static
    {
        $this->Article_id = $Article_id;

        return $this;
    }
}
