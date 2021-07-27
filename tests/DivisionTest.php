<?php

namespace App\Tests;

use App\Service\DivisionService;
use PHPUnit\Framework\TestCase;

class DivisionTest extends TestCase
{
    public function testDivisionStandard(): void
    {
        $resultRequire = [10.0];
        $resultSent = ["20","/","2"];
        $service = new DivisionService();
        $this->assertSame($resultRequire,$service->getResult($resultSent));
    }

    public function testDivisionPar0(): void
    {
        $resultRequire = [];
        $resultSent = ["20","/","0"];
        $service = new DivisionService();
        $this->assertSame($resultRequire,$service->getResult($resultSent));
    }
}
