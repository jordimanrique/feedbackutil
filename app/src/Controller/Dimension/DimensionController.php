<?php

namespace App\Controller\Dimension;

use App\Application\Dimension\CreateDimension\CreateDimension;
use App\Application\Dimension\CreateDimension\CreateDimensionPresenter;
use App\Application\Dimension\CreateDimension\CreateDimensionRequest;
use App\Application\Dimension\GetDimension\GetDimension;
use App\Application\Dimension\GetDimension\GetDimensionPresenter;
use App\Application\Dimension\GetDimension\GetDimensionRequest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DimensionController extends AbstractController
{
    public function createAuto(
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

    public function create(
        Request $request
    ): Response {
        return $this->render('Dimension/Create/edit.html.twig', [
            'dimension' => [],
        ]);
    }

    public function edit(
        Request $request,
        GetDimension $getDimension,
        GetDimensionPresenter $getDimensionPresenter
    ): Response {

        $identity = $request->get('identity');

        $serviceRequest = new GetDimensionRequest();
        $serviceRequest->identity = $identity;

        $response = $getDimension->execute($serviceRequest);

        $dimension = $response->getData($getDimensionPresenter);

        return $this->render('Dimension/Create/edit.html.twig', [
            'dimension' => $dimension,
        ]);
    }

    public function save(
        Request $request,
        CreateDimension $createDimension,
        CreateDimensionPresenter $createDimensionPresenter
    ): Response {

        $name = $request->get('name');
        $weight = $request->get('weight');

        $requestService = new CreateDimensionRequest();
        $requestService->name = $name;
        $requestService->weight = $weight;

        $response = $createDimension->execute($requestService);

        // TODO flashbag
        // TODO bootstrap, vue.js

        return $this->redirectToRoute('app_edit_dimension', [
            'identity' => $response->getData($createDimensionPresenter)['identity'],
        ]);
    }
}
