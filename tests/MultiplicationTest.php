<?php

namespace App\Tests;

use App\Service\MultiplicationService;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{
    public function testMultiplication(): void
    {
        $resultRequire = [10.0];
        $resultSent = ["5","*","2"];
        $service = new MultiplicationService();
        $this->assertSame($resultRequire,$service->getResult($resultSent));
    }
}
