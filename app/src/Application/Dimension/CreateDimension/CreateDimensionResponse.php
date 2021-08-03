<?php

namespace App\Application\Dimension\CreateDimension;

use App\Domain\Dimension\Dimension;

class CreateDimensionResponse
{
    private Dimension $dimension;

    public function __construct(Dimension $dimension)
    {
        $this->dimension = $dimension;
    }

    public function getData(CreateDimensionPresenter $presenter): array
    {
        return $presenter->convert($this->dimension);
    }
}
