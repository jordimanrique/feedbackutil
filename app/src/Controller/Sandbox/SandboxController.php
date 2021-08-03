<?php

namespace App\Controller\Sandbox;

use App\Domain\Sandbox\DomainService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SandboxController extends AbstractController
{
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('Sandbox/number.html.twig', [
            'number' => $number,
        ]);
    }

    public function autowireTest(
        DomainService $domainService1,
        DomainService $domainService2
    ): Response {

        var_dump($domainService1->prova);
        var_dump($domainService2->prova);

        $domainService1->prova = 'primera prova';

        var_dump($domainService1->prova);
        var_dump($domainService2->prova);

        return new Response('<html>successs</html>');
    }
}
