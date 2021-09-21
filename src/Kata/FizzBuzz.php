<?php

namespace Kata;

class FizzBuzz
{

    public function printNumber(InputNumber $newFormatNumber): string
    {
        if ($newFormatNumber->equals(new InputNumber(2))) {
            return "2";
        }
        return "1";
    }
}
