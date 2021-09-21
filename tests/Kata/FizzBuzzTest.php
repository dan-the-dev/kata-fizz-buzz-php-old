<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testNumber1Prints1(): void
    {
        $this->assertSame("1", $this->fizzBuzz->printNumber(new Number(1)));
    }

    public function testNumber2Prints2(): void
    {
        $this->assertSame("2", $this->fizzBuzz->printNumber(new Number(2)));
    }
}