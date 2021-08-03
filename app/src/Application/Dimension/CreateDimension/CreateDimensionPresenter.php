<?php

namespace App\Application\Dimension\CreateDimension;

use App\Domain\Dimension\Dimension;

interface CreateDimensionPresenter
{
    public function convert(Dimension $dimension): array;
}
