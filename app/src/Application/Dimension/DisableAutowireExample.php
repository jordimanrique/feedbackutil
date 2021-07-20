<?php

namespace App\Application\Dimension;

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