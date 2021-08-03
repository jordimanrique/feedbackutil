<?php

namespace App\Infrastructure\Persistence\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Identity;

class DimensionPersistable extends Dimension
{
    public static function toArray(Dimension $dimension): array
    {
        return [
            'uuid' => $dimension->getIdentity()->getValue(),
            'name' => $dimension->getName(),
            'weight' => $dimension->getWeight(),
        ];
    }

    public static function fromArray(array $data): Dimension
    {
        $identity = Identity::createFromValue($data['uuid']);

        return Dimension::createFromValues($identity, $data['name'], $data['weight']);
    }
}
