<?php

namespace App\Controller\Dimension;

use App\Application\Dimension\CreateDimension;
use App\Application\Dimension\CreateDimensionRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DimensionController extends AbstractController
{
    public function create(
        Request $request,
        CreateDimension $createDimension
    ): Response {

        $name = $request->get('name');
        $weight = $request->get('weight');

        $requestService = new CreateDimensionRequest();
        $requestService->name = $name;
        $requestService->weight = $weight;

        $response = $createDimension->execute($requestService);

        return new Response('<html>successs</html>');
    }
}
