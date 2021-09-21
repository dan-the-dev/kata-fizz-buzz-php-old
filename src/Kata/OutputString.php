<?php

namespace Kata;

class OutputString
{
    const FIZZ = "Fizz";
    const BUZZ = "Buzz";

    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->value;
    }

    public static function fromInputNumber(InputNumber $inputNumber): OutputString
    {
        if ($inputNumber->isMultipleOf3() && $inputNumber->isMultipleOf5()) {
            return new OutputString(self::FIZZ . self::BUZZ);
        }
        if ($inputNumber->isMultipleOf3()) {
            return new OutputString(self::FIZZ);
        }
        if ($inputNumber->isMultipleOf5()) {
            return new OutputString(self::BUZZ);
        }
        return new OutputString($inputNumber->__toString());
    }
}