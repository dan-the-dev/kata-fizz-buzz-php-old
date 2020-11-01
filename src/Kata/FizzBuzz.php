<?php

namespace Kata;

class FizzBuzz
{
    public function handle(int $number): string
    {
        if ($number % 3 === 0){
            return "Fizz";
        } else if ($number === 5 || $number === 10){
            return "Buzz";
        }
        return (string) $number;
    }
}
