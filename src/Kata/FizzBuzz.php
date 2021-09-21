<?php

namespace Kata;

class FizzBuzz
{

    public function printNumber(InputNumber $newFormatNumber): OutputString
    {
        if ($newFormatNumber->equals(new InputNumber(2))) {
            return new OutputString("2");
        }
        return new OutputString("1");
    }
}
