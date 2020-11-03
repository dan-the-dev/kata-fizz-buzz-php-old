<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FuzzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testReturns1AsStringWhenInputIs1AsInt(): void
    {
        $expected = $this->fizzBuzz->handle(1);

        $this->assertSame("1", $expected);
    }

    public function testReturns2AsStringWhenInputIs2AsInt(): void
    {
        $expected = $this->fizzBuzz->handle(2);

        $this->assertSame("2", $expected);
    }

    public function testReturns4AsStringWhenInputIs4AsInt(): void
    {
        $expected = $this->fizzBuzz->handle(4);

        $this->assertSame("4", $expected);
    }

    public function testReturnsFizzWhenInputIs3(): void
    {
        $expected = $this->fizzBuzz->handle(3);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs6(): void
    {
        $expected = $this->fizzBuzz->handle(6);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs9(): void
    {
        $expected = $this->fizzBuzz->handle(9);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs12(): void
    {
        $expected = $this->fizzBuzz->handle(12);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs18(): void
    {
        $expected = $this->fizzBuzz->handle(18);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs99(): void
    {
        $expected = $this->fizzBuzz->handle(99);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs96(): void
    {
        $expected = $this->fizzBuzz->handle(96);

        $this->assertSame("Fizz", $expected);
    }

    public function testReturnsFizzWhenInputIs93(): void
    {
        $expected = $this->fizzBuzz->handle(93);

        $this->assertSame("Fizz", $expected);
    }
}
