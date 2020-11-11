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

    public function test1ShouldReturn1AsString(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(1));

        $this->assertEquals("1", $actual);
    }

    public function test2ShouldReturn2AsString(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(2));

        $this->assertEquals("2", $actual);
    }

    public function test4ShouldReturn4AsString(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(4));

        $this->assertEquals("4", $actual);
    }

    public function test3ShouldReturnFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(3));

        $this->assertEquals("Fizz", $actual);
    }

    public function test6ShouldReturnFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(6));

        $this->assertEquals("Fizz", $actual);
    }

    public function test9ShouldReturnFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(9));

        $this->assertEquals("Fizz", $actual);
    }

    public function test5ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(5));

        $this->assertEquals("Buzz", $actual);
    }

    public function test10ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(10));

        $this->assertEquals("Buzz", $actual);
    }

    public function test20ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(20));

        $this->assertEquals("Buzz", $actual);
    }

    public function test15ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(15));

        $this->assertEquals("FizzBuzz", $actual);
    }

    public function test30ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(30));

        $this->assertEquals("FizzBuzz", $actual);
    }

    public function test45ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(45));

        $this->assertEquals("FizzBuzz", $actual);
    }

    public function test90ShouldReturnBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new Number(90));

        $this->assertEquals("FizzBuzz", $actual);
    }

}
