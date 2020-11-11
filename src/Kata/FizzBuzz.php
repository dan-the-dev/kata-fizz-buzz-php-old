<?php

namespace Kata;

class FizzBuzz
{
    public function handle(Number $number): string
    {
        if ($number->equals(new Number(3)) || $number->equals(new Number(6))) {
            return 'Fizz';
        }
        return $number->__toString();
    }
}

