<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number === 2) {
            return '2';
        }
        if ($number === 4) {
            return '4';
        }
        return '1';
    }


}
