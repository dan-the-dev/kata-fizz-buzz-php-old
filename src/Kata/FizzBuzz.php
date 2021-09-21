<?php

namespace Kata;

class FizzBuzz
{
    public function printAllNumbers(): OutputString
    {
        $collection = new OutputStringCollection();
        for ($k = 1 ; $k <= 100; $k++){
            $collection->add(OutputString::fromInputNumber(new InputNumber($k)));
        }

        return $collection->merge();
    }
}
