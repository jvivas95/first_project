<?php

namespace App\Entity;

use App\Repository\TareaRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TareaRepository::class)]
class Tarea
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $titulo = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $descipcion = null;

    #[ORM\Column]
    private ?bool $completado = null;

    #[ORM\Column]
    private ?\DateTime $fecha = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): static
    {
        $this->titulo = $titulo;

        return $this;
    }

    public function getDescipcion(): ?string
    {
        return $this->descipcion;
    }

    public function setDescipcion(?string $descipcion): static
    {
        $this->descipcion = $descipcion;

        return $this;
    }

    public function isCompletado(): ?bool
    {
        return $this->completado;
    }

    public function setCompletado(bool $completado): static
    {
        $this->completado = $completado;

        return $this;
    }

    public function getFecha(): ?\DateTime
    {
        return $this->fecha;
    }

    public function setFecha(\DateTime $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }
}
