<?php

namespace Kata;

class FizzBuzz
{
    public function convertNumber(int $number): string
    {
        if ($this->isMultipleOfBoth3And5($number)) {
            return 'FizzBuzz';
        }
        if ($this->isMultipleOf3($number)) {
            return 'Fizz';
        }
        if ($this->isMultipleOf5($number)) {
            return 'Buzz';
        }
        return (string)$number;
    }

    public function createList(): array
    {
        $list = [];
        for($i=1; $i<=100; $i++){
            $list[]=$this->convertNumber($i);
        }
        return $list;
    }

    /**
     * @param int $number
     * @return bool
     */
    protected function isMultipleOf3(int $number): bool
    {
        return $number % 3 === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    protected function isMultipleOf5(int $number): bool
    {
        return $number % 5 === 0;
    }

    /**
     * @param int $number
     * @return bool
     */
    protected function isMultipleOfBoth3And5(int $number): bool
    {
        return $this->isMultipleOf3($number) && $this->isMultipleOf5($number);
    }


}
