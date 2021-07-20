<?php

namespace App\Application\Dimension;

use App\Domain\Dimension;

class CreateDimension
{
    public function execute(CreateDimensionRequest $request)
    {
        $this->validateRequest($request);

        $dimension = new Dimension($request->name, $request->weight);



    }

    private function validateRequest(CreateDimensionRequest $request)
    {
        if (empty($request->weight)) {
            throw new \InvalidArgumentException('weight is required');
        }

        if (empty($request->name)) {
            throw new \InvalidArgumentException('name is required');
        }
    }
}