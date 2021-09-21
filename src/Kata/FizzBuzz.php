<?php

namespace Kata;

class FizzBuzz
{
    private function printNumber(InputNumber $newFormatNumber): OutputString
    {
        return $newFormatNumber->toOutputString();
    }

    public function printAllNumbers(): OutputString
    {
        $collection = [];
        for ($k = 1 ; $k <= 100; $k++){
            $inputNumber = new InputNumber($k);
            array_push($collection, $inputNumber->toOutputString());
        }

        return OutputString::fromOutputStringCollection($collection);
    }
}
