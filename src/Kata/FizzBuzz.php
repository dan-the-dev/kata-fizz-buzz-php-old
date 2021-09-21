<?php

namespace Kata;

class FizzBuzz
{
    public function printAllNumbers(): OutputString
    {
        $collection = new OutputStringCollection();
        for ($k = 1 ; $k <= 100; $k++){
            $inputNumber = new InputNumber($k);
            $collection->add($inputNumber->toOutputString());
        }

        return $collection->merge();
    }
}
