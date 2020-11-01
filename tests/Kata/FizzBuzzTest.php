<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testItReturnsString1WhenReceivingNumber1(): void
    {
        $actual = $this->fizzBuzz->handle(1);
        $this->assertSame("1", $actual);
    }

    public function testItReturnsString2WhenReceivingNumber2(): void
    {
        $actual = $this->fizzBuzz->handle(2);
        $this->assertSame("2", $actual);
    }

    public function testItReturnsString4WhenReceivingNumber4(): void
    {
        $actual = $this->fizzBuzz->handle(4);
        $this->assertSame("4", $actual);
    }

    public function testItReturnsFizzWhenReceivingNumber3(): void
    {
        $actual = $this->fizzBuzz->handle(3);
        $this->assertSame("Fizz", $actual);
    }

    public function testItReturnsFizzWhenReceivingNumber6(): void
    {
        $actual = $this->fizzBuzz->handle(6);
        $this->assertSame("Fizz", $actual);
    }

    public function testItReturnsFizzWhenReceivingNumber9(): void
    {
        $actual = $this->fizzBuzz->handle(9);
        $this->assertSame("Fizz", $actual);
    }

    public function testItReturnsBuzzWhenReceivingNumber5(): void
    {
        $actual = $this->fizzBuzz->handle(5);
        $this->assertSame("Buzz", $actual);
    }

    public function testItReturnsBuzzWhenReceivingNumber10(): void
    {
        $actual = $this->fizzBuzz->handle(10);
        $this->assertSame("Buzz", $actual);
    }

    public function testItReturnsBuzzWhenReceivingNumber20(): void
    {
        $actual = $this->fizzBuzz->handle(20);
        $this->assertSame("Buzz", $actual);
    }

    public function testItReturnsFizzBuzzWhenReceivingNumber15(): void
    {
        $actual = $this->fizzBuzz->handle(15);
        $this->assertSame("FizzBuzz", $actual);
    }

    public function testItReturnsFizzBuzzWhenReceivingNumber30(): void
    {
        $actual = $this->fizzBuzz->handle(30);
        $this->assertSame("FizzBuzz", $actual);
    }
}
