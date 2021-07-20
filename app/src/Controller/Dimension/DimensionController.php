<?php

namespace App\Controller\Dimension;

use App\Application\Dimension\CreateDimension;
use App\Application\Dimension\CreateDimensionRequest;
use App\Application\Dimension\DisableAutowireExample;
use App\Domain\Dimension;
use App\Domain\DomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class DimensionController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('Dimension/number.html.twig', [
            'number' => $number,
        ]);
    }

    public function create(
        CreateDimension $createDimension,
        DisableAutowireExample $example,
        DomainService $domainService1,
        DomainService $domainService2
    ): Response {
        $request = new CreateDimensionRequest();
        $request->name = 'new dimension';
        $request->weight = '80';

        $createDimension->execute($request);

        // var_dump($example);
        var_dump($domainService1->prova);
        var_dump($domainService2->prova);

        $domainService1->prova = 'primera prova';

        var_dump($domainService1->prova);
        var_dump($domainService2->prova);

        return new Response('<html>successs</html>');
    }
}
