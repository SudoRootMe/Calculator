<?php


namespace App\Service;


class MultiplicationService
{
    public function getResult(array $operation) : array
    {
        $key = array_search('*', $operation);
        while($key > 0 ){

            $operation[$key-1] = $this->multiplication($operation[$key-1],$operation[$key+1]);
            unset($operation[$key]);
            $operation = array_values($operation);
            unset($operation[$key]);
            $operation = array_values($operation);

            $key = array_search('*', $operation);
        }
        return $operation;
    }

    public function multiplication(float $a, float $b): float
    {
        return $a*$b;
    }
}