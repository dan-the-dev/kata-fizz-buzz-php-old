<?php

namespace Kata;

class FizzBuzz
{

    public function printNumber(Number $newFormatNumber)
    {
        if ($newFormatNumber->value() === 2) {
            return 2;
        }
        return 1;
    }
}
