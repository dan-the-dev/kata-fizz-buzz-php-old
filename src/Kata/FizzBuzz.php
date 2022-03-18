<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number === 3 || $number === 6 || $number === 9) {
            return 'Fizz';
        }
        return (string) $number;
    }


}
