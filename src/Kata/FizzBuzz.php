<?php

namespace Kata;

class FizzBuzz
{
    public function handle(int $number): string
    {
        if ($number === 1){
            return "1";
        } else if ($number === 2){
            return "2";
        } else {
            return "4";
        }
    }
}
