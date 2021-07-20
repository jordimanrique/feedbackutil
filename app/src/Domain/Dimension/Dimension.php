<?php

namespace App\Domain\Dimension;

use App\Domain\Identity;

class Dimension
{
    private string $name;

    private int $weight;

    private Identity $identity;

    public function __construct(Identity $identity, string $name, int $weight)
    {
        $this->name = $name;
        $this->weight = $weight;
        $this->identity = $identity;
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
