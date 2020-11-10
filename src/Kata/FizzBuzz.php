<?php

namespace Kata;

class FizzBuzz
{
    const FIZZ = "Fizz";

    public function handle(int $number): string
    {
        if ($number%3 === 0)
            return self::FIZZ;

        return "$number";
    }
}
