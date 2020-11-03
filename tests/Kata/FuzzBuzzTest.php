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
}
