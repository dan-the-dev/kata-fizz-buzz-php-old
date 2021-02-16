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

    public function testNumber1ReturnsString1(): void
    {
        $actual = $this->fizzBuzz->handle(1);
        $expected = "1";
        $this->assertSame($expected, $actual);
    }

    public function testNumber2ReturnsString2(): void
    {
        $actual = $this->fizzBuzz->handle(2);
        $expected = "2";
        $this->assertSame($expected, $actual);
    }

    public function testNumber4ReturnsString4(): void
    {
        $actual = $this->fizzBuzz->handle(4);
        $expected = "4";
        $this->assertSame($expected, $actual);
    }

    public function testNumber100ReturnsString100(): void
    {
        $actual = $this->fizzBuzz->handle(100);
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber3ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(3);
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber6ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(6);
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber9ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(9);
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber99ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(99);
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber5ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(5);
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber10ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(10);
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber20ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(20);
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }
    
}