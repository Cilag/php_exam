<?php

namespace App\Entity;

use App\Repository\StockRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StockRepository::class)]
class Stock
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $Article_id = null;

    #[ORM\Column]
    private ?int $Article_amount = null;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getArticleAmount(): ?int
    {
        return $this->Article_amount;
    }

    public function setArticleAmount(int $Article_amount): static
    {
        $this->Article_amount = $Article_amount;

        return $this;
    }
}
