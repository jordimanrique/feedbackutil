<?php

namespace App\Domain\Sandbox;

class DomainService
{
    public string $prova;

    public function __construct(string $prova)
    {
        $this->prova = $prova;
    }
}