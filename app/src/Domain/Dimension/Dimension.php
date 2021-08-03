<?php

namespace App\Domain\Dimension;

use App\Domain\Identity;

class Dimension
{
    private string $name;

    private int $weight;

    private Identity $identity;

    public function __construct(string $name, int $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->identity = new Identity();
    }

    public static function createFromValues(Identity $uuid, string $name, int $weight): self
    {
        $self = new self($name, $weight);
        $self->identity = $uuid;

        return $self;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getIdentity(): Identity
    {
        return $this->identity;
    }
}
