<?php

namespace Kata;

class FizzBuzz
{
    public function handle(Number $number): string
    {
        if ($number->isDividableBy(new Number(3))) {
            return 'Fizz';
        }
        return $number->__toString();
    }
}

