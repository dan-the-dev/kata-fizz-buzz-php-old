<?php

namespace Kata;

class FizzBuzz
{

    public function printNumber(Number $newFormatNumber): string
    {
        if ($newFormatNumber->equals(new Number(2))) {
            return "2";
        }
        return "1";
    }
}
