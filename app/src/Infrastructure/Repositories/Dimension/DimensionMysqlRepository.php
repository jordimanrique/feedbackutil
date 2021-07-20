<?php

namespace App\Infrastructure\Repositories\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionRepository;
use App\Domain\Identity;

class DimensionMysqlRepository implements DimensionRepository
{
    public function save(Dimension $dimension)
    {
    }

    public function find(Identity $identity)
    {
    }
}
