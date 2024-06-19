<?php

namespace App\Entity;

use App\Repository\QuoteRequestDetailRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: QuoteRequestDetailRepository::class)]
class QuoteRequestDetail
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'quoteRequestDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private ?QuoteRequest $request = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Service $service = null;

    #[ORM\Column]
    private ?int $estimated_weight = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRequest(): ?QuoteRequest
    {
        return $this->request;
    }

    public function setRequest(?QuoteRequest $request): static
    {
        $this->request = $request;

        return $this;
    }

    public function getService(): ?Service
    {
        return $this->service;
    }

    public function setService(?Service $service): static
    {
        $this->service = $service;

        return $this;
    }

    public function getEstimatedWeight(): ?int
    {
        return $this->estimated_weight;
    }

    public function setEstimatedWeight(int $estimated_weight): static
    {
        $this->estimated_weight = $estimated_weight;

        return $this;
    }
}
