<?php

namespace App\Domain\Dimension;

interface DimensionPresenter
{
    public function convert(Dimension $dimension): array;
}
