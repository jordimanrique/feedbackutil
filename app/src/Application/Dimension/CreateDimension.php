<?php

namespace App\Application\Dimension;

use App\Domain\Dimension\Dimension;
use App\Domain\Dimension\DimensionRepository;

class CreateDimension
{
    private DimensionRepository $dimensionRepository;

    public function __construct(DimensionRepository $mysqlRepository)
    {
        $this->dimensionRepository = $mysqlRepository;
    }

    public function execute(CreateDimensionRequest $request): CreateDimensionResponse
    {
        $this->validateRequest($request);
        $this->sanitizeRequest($request);

        $dimension = new Dimension($request->name, $request->weight);

        $this->dimensionRepository->save($dimension);

        return new CreateDimensionResponse($dimension);
    }

    private function sanitizeRequest(CreateDimensionRequest $request)
    {
        $request->name = strtoupper($request->name);
    }

    private function validateRequest(CreateDimensionRequest $request)
    {
        if (empty($request->weight)) {
            throw new \InvalidArgumentException('weight is required');
        }

        if (!is_numeric($request->weight)) {
            throw new \InvalidArgumentException('weight has to be numeric');
        }

        if (empty($request->name)) {
            throw new \InvalidArgumentException('name is required');
        }
    }
}