<?php

namespace Kata;

class FizzBuzz
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    const FIZZ_BUZZ = "FizzBuzz";

    public function handle(int $number): string
    {
        $result = (string)$number;
        if ($this->isDividableByBoth3And5($number)){
            $result = self::FIZZ_BUZZ;
        } else if ($this->isDividableBy3($number)){
            $result = self::FIZZ;
        } else if ($this->isDividableBy5($number)){
            $result = self::BUZZ;
        }
        return $result;
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isDividableBy3(int $number): bool
    {
        return $this->isDividableBy($number, 3);
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isDividableBy5(int $number): bool
    {
        return $this->isDividableBy($number, 5);
    }

    /**
     * @param int $number
     * @return bool
     */
    private function isDividableByBoth3And5(int $number): bool
    {
        return $this->isDividableBy3($number) && $this->isDividableBy5($number);
    }

    private function isDividableBy(int $number, int $divider): bool
    {
        return $number % $divider === 0;
    }
}
