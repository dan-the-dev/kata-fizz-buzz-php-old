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
        $number = new NumberObject(1);
        $actual = $number->toString();
        $expected = "1";
        $this->assertSame($expected, $actual);
    }

    public function testNumber2ReturnsString2(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(2));
        $expected = "2";
        $this->assertSame($expected, $actual);
    }

    public function testNumber4ReturnsString4(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(4));
        $expected = "4";
        $this->assertSame($expected, $actual);
    }

    public function testNumber100ReturnsString100(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(100));
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber3ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(3));
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber6ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(6));
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber9ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(9));
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber99ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(99));
        $expected = "Fizz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber5ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(5));
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber10ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(10));
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber20ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(20));
        $expected = "Buzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber15ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(15));
        $expected = "FizzBuzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber30ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(30));
        $expected = "FizzBuzz";
        $this->assertSame($expected, $actual);
    }

    public function testNumber45ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->handle(new NumberObject(45));
        $expected = "FizzBuzz";
        $this->assertSame($expected, $actual);
    }
    
}