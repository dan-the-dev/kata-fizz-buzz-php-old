<?php

namespace Kata;

class FizzBuzz
{
    public function handle(Number $number): string
    {
        return $number->__toString();
    }
}

