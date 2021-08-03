<?php

namespace App\Application\Dimension\GetDimension;

use App\Domain\Dimension\Dimension;

interface GetDimensionPresenter
{
    public function convert(Dimension $dimension): array;
}
