<?php

namespace App\Tests;

use App\Service\AdditionService;
use PHPUnit\Framework\TestCase;

class AdditionTest extends TestCase
{
    public function testAddition(): array
    {
        $resultRequire = [10.0];
        $resultSent = ["5","+","5"];

        $service = new AdditionService();

        $this->assertSame($resultRequire,$service->getResult($resultSent));
        return $resultRequire;
    }
}
