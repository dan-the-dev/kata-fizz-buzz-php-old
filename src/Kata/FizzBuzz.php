<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number % 3 === 0){
            return 'Fizz';
        }
        return (string) $number;
    }
}
