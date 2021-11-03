<?php

namespace Kata;

class FizzBuzz
{

    public function convertNumber(int $number): string
    {
        if ($this->isMultipleOf3($number) && $this->isMultipleOf5($number)){
            return 'FizzBuzz';
        }
        if ($this->isMultipleOf3($number)){
            return 'Fizz';
        }
        if ($this->isMultipleOf5($number)){
            return 'Buzz';
        }
        return (string) $number;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isMultipleOf3(int $number): bool
    {
        return $this->isMultipleOf($number, 3);
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isMultipleOf5(int $number): bool
    {
        return $this->isMultipleOf($number, 5);
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isMultipleOf(int $number, int $multiple): bool
    {
        return $number % $multiple === 0;
    }
}
