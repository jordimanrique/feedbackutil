<?php

namespace App\Application\Dimension;

use App\Domain\Dimension\Dimension;

interface CreateDimensionPresenter
{
    public function convert(Dimension $dimension): array;
}
