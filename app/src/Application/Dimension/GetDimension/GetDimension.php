<?php

namespace App\Application\Dimension\GetDimension;

use App\Domain\Dimension\DimensionRepository;
use App\Domain\Identity;

class GetDimension
{
    private DimensionRepository $mysqlRepository;

    public function __construct(DimensionRepository $mysqlRepository)
    {
        $this->mysqlRepository = $mysqlRepository;
    }

    public function execute(GetDimensionRequest $request): GetDimensionResponse
    {
        $identity = Identity::createFromValue($request->identity);

        $dimension = $this->mysqlRepository->find($identity);

        return new GetDimensionResponse($dimension);
    }
}
