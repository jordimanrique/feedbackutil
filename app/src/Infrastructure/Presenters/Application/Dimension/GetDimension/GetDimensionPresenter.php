<?php

namespace App\Infrastructure\Presenters\Application\Dimension\GetDimension;

use App\Application\Dimension\GetDimension\GetDimensionPresenter as GetDimensionPresenterInterface;
use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionPresenter;

class GetDimensionPresenter implements GetDimensionPresenterInterface
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
