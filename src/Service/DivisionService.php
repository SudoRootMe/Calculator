<?php


namespace App\Service;

class DivisionService
{
    public function getResult(array $operation) : array
    {
        $stop = false;

        $key = array_search('/', $operation);
        while($key > 0 & $stop == false){
            if ($this->division($operation[$key-1],$operation[$key+1]) == null)
                $stop = true;
            else{
                $operation[$key-1] = $this->division($operation[$key-1],$operation[$key+1]);
                unset($operation[$key]);
                $operation = array_values($operation);
                unset($operation[$key]);
                $operation = array_values($operation);

                $key = array_search('/', $operation);
            }
        }

        if ($stop==true){
            $operation = [];
        }
        return $operation;
    }
    public function division(float $a, float $b){
        if($b == 0){
            return null;
        }
        return $a/$b;
    }
}

