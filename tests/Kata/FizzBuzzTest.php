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

    public function testItShouldReturn1AsAString(): void
    {
        $this->assertSame("1", $this->fizzBuzz->handle(1));
    }

    public function testItShouldReturn2AsAString(): void
    {
        $this->assertSame("2", $this->fizzBuzz->handle(2));
    }

    public function testItShouldReturn4AsAString(): void
    {
        $this->assertSame("4", $this->fizzBuzz->handle(4));
    }

    public function testItShouldReturnFizzWhenReceiving3(): void
    {
        $this->assertSame("Fizz", $this->fizzBuzz->handle(3));
    }

    public function testItShouldReturnFizzWhenReceiving6(): void
    {
        $this->assertSame("Fizz", $this->fizzBuzz->handle(6));
    }

    public function testItShouldReturnFizzWhenReceiving9(): void
    {
        $this->assertSame("Fizz", $this->fizzBuzz->handle(9));
    }

    public function testItShouldReturnFizzWhenReceiving18(): void
    {
        $this->assertSame("Fizz", $this->fizzBuzz->handle(18));
    }

    public function testItShouldReturnBuzzWhenReceiving5(): void
    {
        $this->assertSame("Buzz", $this->fizzBuzz->handle(5));
    }

    public function testItShouldReturnBuzzWhenReceiving10(): void
    {
        $this->assertSame("Buzz", $this->fizzBuzz->handle(10));
    }

    public function testItShouldReturnBuzzWhenReceiving20(): void
    {
        $this->assertSame("Buzz", $this->fizzBuzz->handle(20));
    }

    public function testItShouldReturnBuzzWhenReceiving25(): void
    {
        $this->assertSame("Buzz", $this->fizzBuzz->handle(25));
    }

    public function testItShouldReturnFizzBuzzWhenReceiving15(): void
    {
        $this->assertSame("FizzBuzz", $this->fizzBuzz->handle(15));
    }

    public function testItShouldReturnFizzBuzzWhenReceiving30(): void
    {
        $this->assertSame("FizzBuzz", $this->fizzBuzz->handle(30));
    }

    public function testItShouldReturnFizzBuzzWhenReceiving90(): void
    {
        $this->assertSame("FizzBuzz", $this->fizzBuzz->handle(90));
    }
}
