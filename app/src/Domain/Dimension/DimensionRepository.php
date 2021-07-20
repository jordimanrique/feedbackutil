<?php

namespace App\Domain\Dimension;

use App\Domain\Identity;

interface DimensionRepository
{
    public function save(Dimension $dimension);

    public function find(Identity $identity);
}