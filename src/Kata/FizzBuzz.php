<?php

namespace Kata;

class FizzBuzz
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    public function handle(Number $number): string
    {
        if ($number->isDividableBy(new Number(3)) && $number->isDividableBy(new Number(5))) {
            return self::FIZZ . self::BUZZ;
        }
        if ($number->isDividableBy(new Number(3))) {
            return self::FIZZ;
        }
        if ($number->isDividableBy(new Number(5))) {
            return self::BUZZ;
        }

        return $number->__toString();
    }
}

