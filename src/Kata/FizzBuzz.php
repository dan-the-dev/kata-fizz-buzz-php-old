<?php

namespace Kata;

class FizzBuzz
{
    public function handle(int $number): string
    {
        $str = $number === 1 ? "1" : "2";
        return $str;
    }
}
