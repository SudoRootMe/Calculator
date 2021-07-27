<?php

namespace App\Tests;

use App\Service\SoustractionService;
use PHPUnit\Framework\TestCase;

class SoustractionTest extends TestCase
{
    public function testSomething(): void
    {
        $resultRequire = [10.0];
        $resultSent = ["20","-","10"];
        $service = new SoustractionService();
        $this->assertSame($resultRequire,$service->getResult($resultSent));
    }
}
