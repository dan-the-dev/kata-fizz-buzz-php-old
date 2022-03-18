<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($number % 3 === 0 && $number % 5 === 0) {
            return 'FizzBuzz';
        }
        if ($number % 3 === 0) {
            return 'Fizz';
        }
        if ($number % 5 === 0) {
            return 'Buzz';
        }
        return (string)$number;
    }

    public function createList(): array
    {
        $list = [];
        for($i=0; $i<100; $i++){
            $list[]=$i;
        }
        return $list;
    }


}
