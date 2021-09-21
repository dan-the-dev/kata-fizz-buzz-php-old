<?php

namespace Kata;

class OutputString
{
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }

    /**
     * @param array<OutputString> $outputStringCollection
     * @return OutputString
     */
    public static function fromOutputStringCollection(array $outputStringCollection): OutputString
    {
        return new OutputString(implode("\n", $outputStringCollection));
    }
}