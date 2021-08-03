<?php

namespace App\Infrastructure\Presenters\Application\Dimension\CreateDimension;

use App\Application\Dimension\CreateDimension\CreateDimensionPresenter as CreateDimensionPresenterInterface;
use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionPresenter;

class CreateDimensionPresenter implements CreateDimensionPresenterInterface
{
    private DimensionPresenter $dimensionPresenter;

    public function __construct(DimensionPresenter $dimensionPresenter)
    {
        $this->dimensionPresenter = $dimensionPresenter;
    }

    public function convert(Dimension $dimension): array
    {
        return $this->dimensionPresenter->convert($dimension);
    }
}
