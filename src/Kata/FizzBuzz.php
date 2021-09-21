<?php

namespace Kata;

class FizzBuzz
{

    public function printNumber(int $number, Number $newFormatNumber)
    {
        if ($newFormatNumber->value() === 2) {
            return 2;
        }
        return 1;
    }
}
