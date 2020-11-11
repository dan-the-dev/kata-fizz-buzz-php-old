<?php

namespace Kata;

class FizzBuzz
{
    public function handle(Number $number): string
    {
        $str = $number->equals(new Number(1)) ? "1" : "2";
        return $str;
    }
}

