<?php

namespace Kata;

class FizzBuzz
{
    public function handle(int $number): string
    {
        $result = "$number";
        if ($this->divisibleByBoth3And5($number)) {
            $result = "FizzBuzz";
        } else if ($this->divisibleBy3($number)) {
            $result =  "Fizz";
        } else if ($this->divisibleBy5($number)) {
            $result =  "Buzz";
        }
        return $result;
    }

    private function divisibleBy(int $number, int $divisor): bool
    {
        return $number % $divisor === 0;
    }

    private function divisibleBy3(int $number): bool
    {
        return $this->divisibleBy($number, 3);
    }

    private function divisibleBy5(int $number): bool
    {
        return $this->divisibleBy($number, 5);
    }

    private function divisibleByBoth3And5(int $number): bool
    {
        return $this->divisibleBy($number, 3) && $this->divisibleBy($number, 5);
    }
}
