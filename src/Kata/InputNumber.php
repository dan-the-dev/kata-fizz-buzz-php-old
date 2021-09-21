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

    public function isMultipleOf3(): bool
    {
        return $this->isMultipleOf(3);
    }

    public function isMultipleOf5(): bool
    {
        return $this->isMultipleOf(5);
    }

    public function __toString()
    {
        return (string) $this->value;
    }

    private function isMultipleOf(int $number): bool
    {
        return $this->value % $number === 0;
    }
}