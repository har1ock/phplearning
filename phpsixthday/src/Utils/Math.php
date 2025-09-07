<?php
namespace App\Utils;

class Math{
    public function sum(array $numbers): int{
        $arraySum = 0;
        foreach ($numbers as $number){
            $arraySum += $number;
        }
        return $arraySum;
    }
}
