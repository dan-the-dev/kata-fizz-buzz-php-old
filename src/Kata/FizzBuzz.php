<?php

namespace Kata;

class FizzBuzz
{
    public function handle(int $number): string
    {
        if ($number === 3 || $number === 6){
            return "Fizz";
        }
        return (string) $number;
    }
}
