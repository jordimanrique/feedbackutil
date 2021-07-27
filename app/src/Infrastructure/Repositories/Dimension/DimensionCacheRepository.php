<?php

namespace App\Infrastructure\Repositories\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionRepository;
use App\Domain\Identity;
use App\Infrastructure\Persistence\Dimension\DimensionPersistable;
use Doctrine\DBAL\Connection;

class DimensionCacheRepository implements DimensionRepository
{
    public function save(Dimension $dimension)
    {
        echo ' SOC CACHE';
    }

    public function find(Identity $identity)
    {
    }
}
