<?php

namespace App\Application\Dimension\GetDimension;

use App\Domain\Dimension\Dimension;

class GetDimensionResponse
{
    private Dimension $dimension;

    public function __construct(Dimension $dimension)
    {
        $this->dimension = $dimension;
    }

    public function getData(GetDimensionPresenter $presenter): array
    {
        return $presenter->convert($this->dimension);
    }
}
