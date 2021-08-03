<?php

namespace App\Domain;

use Ramsey\Uuid\Uuid;

class Identity
{
    private string $uuid;

    public function __construct()
    {
        $this->uuid = (string) Uuid::uuid4();
    }

    public function getValue(): string
    {
        return $this->uuid;
    }

    public static function createFromValue(string $uuid): self
    {
        $identity = new self();
        $identity->uuid = $uuid;

        return $identity;
    }
}
