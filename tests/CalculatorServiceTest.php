<?php

namespace App\Tests;

use App\Service\AdditionService;
use App\Service\CalculatorService;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;

class CalculatorServiceTest extends TestCase
{
    public function testCalculatorService(): void
    {

            //   5*5+5/5-1
       $request = Request::create(
           '/calculator',
           'POST',
           [],
           [],
           [],
           [],
           '{
             "operande": "5*5+5/5-1"
            }',

       );

        $resultRequire = '{"Resultat":[25]}';
        $service = new CalculatorService();
        $response = $service->traitement($request);
        $this->assertSame($resultRequire,$response->getContent());


    }
}
