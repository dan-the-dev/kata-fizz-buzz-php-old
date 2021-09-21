<?php

namespace Kata;

class InputNumber
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function equals(InputNumber $number): bool
    {
        return $this->value === $number->value;
    }

    public function toOutputString(): OutputString
    {
        if ($this->isMultipleOf(3)) {
            return new OutputString(self::FIZZ);
        }
        if ($this->isMultipleOf(5)) {
            return new OutputString(self::BUZZ);
        }
        return new OutputString((string) $this->value);
    }

    /**
     * @return bool
     */
    private function isMultipleOf(int $number): bool
    {
        return $this->value % $number === 0;
    }
}