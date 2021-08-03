<?php

namespace App\Infrastructure\Presenters\Domain\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionPresenter as DimensionPresenterInterface;

class DimensionPresenter implements DimensionPresenterInterface
{
    public function convert(Dimension $dimension): array
    {
        return [
            'identity' => $dimension->getIdentity()->getValue(),
            'name' => $dimension->getName(),
            'weight' => $dimension->getWeight(),
        ];
    }
}
