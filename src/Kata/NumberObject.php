<?php

namespace Kata;

use Exception;

class NumberObject
{
    const FIZZ = 'Fizz';
    const BUZZ = 'Buzz';

    private int $value;

    public function __construct(int $number)
    {
        $this->value = $number;
    }

    public function toString(): string
    {
        if ($this->isDividableByBoth3And5()) {
            return self::FIZZ . self::BUZZ;
        }
        if ($this->isDividableBy3()) {
            return self::FIZZ;
        }
        if ($this->isDividableBy5()) {
            return self::BUZZ;
        }
        return (string) $this->value;
    }













    

    private function isDividableByBoth3And5(): bool
    {
        return $this->isDividableBy3() && $this->isDividableBy5();
    }
    
    private function isDividableBy3(): bool
    {
        return $this->value % 3 === 0;
    }
    
    private function isDividableBy5(): bool
    {
        return $this->value % 5 === 0;
    }
}
