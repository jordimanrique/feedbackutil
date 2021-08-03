<?php

namespace App\Infrastructure\Repositories\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionRepository;
use App\Domain\Identity;
use App\Infrastructure\Persistence\Dimension\DimensionPersistable;
use Doctrine\DBAL\Connection;

class DimensionMysqlRepository implements DimensionRepository
{
    const TABLE = 'dimension';

    private Connection $connection;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }

    public function save(Dimension $dimension)
    {
        $this->connection->insert(self::TABLE, DimensionPersistable::toArray($dimension));
    }

    public function find(Identity $identity)
    {
    }
}
