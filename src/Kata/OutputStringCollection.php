<?php

namespace Kata;

class OutputStringCollection
{
    /** @var OutputString[] $collection */
    private $collection;

    public function __construct(OutputString ...$collection)
    {
        $this->collection = $collection;
    }

    public function add(OutputString $outputString): void
    {
        array_push($this->collection, $outputString);
    }

    public function merge(): OutputString
    {
        return new OutputString(implode("\n", $this->collection));
    }
}