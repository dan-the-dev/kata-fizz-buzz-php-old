<?php

namespace Kata;

class FizzBuzz
{
    public function printNumber(InputNumber $newFormatNumber): OutputString
    {
        return $newFormatNumber->toOutputString();
    }
}
