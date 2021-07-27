<?php

namespace App\Application\Sandbox;

class DisableAutowireExample
{
    private string $key;

    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function execute()
    {
        return 'lala';
    }
}