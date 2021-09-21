<?php

namespace Kata;

class InputNumber
{
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
        if ($this->value === 3 || $this->value === 6 || $this->value === 9) {
            return new OutputString("Fizz");
        }
        return new OutputString((string) $this->value);
    }
}