<?php

namespace Kata;

class Number
{
    private $value;

    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function equals(Number $anotherNumber): int
    {
        return $this->value === $anotherNumber->value;
    }

    public function __toString(): string
    {
        return "{$this->value}";
    }

    public function isDividableBy(Number $dividend): bool
    {
        return $this->value % $dividend->value === 0;
    }
}