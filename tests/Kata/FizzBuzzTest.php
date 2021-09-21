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
        $this->assertEquals(new OutputString("1"), $this->fizzBuzz->printNumber(new InputNumber(1)));
    }

    public function testNumber2Prints2(): void
    {
        $this->assertEquals(new OutputString("2"), $this->fizzBuzz->printNumber(new InputNumber(2)));
    }

    public function testNumber98Prints98(): void
    {
        $this->assertEquals(new OutputString("98"), $this->fizzBuzz->printNumber(new InputNumber(98)));
    }

    public function testNumber3PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(3)));
    }

    public function testNumber6PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(6)));
    }

    public function testNumber9PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(9)));
    }

    public function testNumber99PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(99)));
    }
}