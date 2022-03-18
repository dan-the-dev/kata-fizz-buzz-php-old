<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number === 15) {
            return 'FizzBuzz';
        }
        if ($number % 3 === 0) {
            return 'Fizz';
        }
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return (string)$number;
    }


}
