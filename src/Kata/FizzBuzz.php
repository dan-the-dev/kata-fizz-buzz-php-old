<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number === 3){
            return 'Fizz';
        }
        return (string) $number;
    }
}
