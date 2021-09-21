<?php

namespace Kata;

class InputNumber
{
    const FIZZ = "Fizz";
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
        if ($this->value % 3 === 0) {
            return new OutputString(self::FIZZ);
        }
        return new OutputString((string) $this->value);
    }
}