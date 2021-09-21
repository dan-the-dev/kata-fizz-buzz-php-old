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
        if ($this->isMultipleOf3()) {
            return new OutputString(self::FIZZ);
        }
        if ($this->isMultipleOf5()) {
            return new OutputString(self::BUZZ);
        }
        return new OutputString((string) $this->value);
    }

    /**
     * @return bool
     */
    private function isMultipleOf3(): bool
    {
        return $this->value % 3 === 0;
    }

    /**
     * @return bool
     */
    private function isMultipleOf5(): bool
    {
        return $this->value % 5 === 0;
    }
}