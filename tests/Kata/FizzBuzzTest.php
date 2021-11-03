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

    public function testNumber1Returns1(): void
    {
        $actual = $this->fizzBuzz->convertNumber(1);
        $this->assertEquals('1', $actual);
    }

    public function testNumber2Returns2(): void
    {
        $actual = $this->fizzBuzz->convertNumber(2);
        $this->assertEquals('2', $actual);
    }

    public function testNumber98Returns98(): void
    {
        $actual = $this->fizzBuzz->convertNumber(98);
        $this->assertEquals('98', $actual);
    }

    public function testNumber3ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(3);
        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber6ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(6);
        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber99ReturnsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(99);
        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber5ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(5);
        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber100ReturnsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(100);
        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber15ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(15);
        $this->assertEquals('FizzBuzz', $actual);
    }

    public function testNumber30ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(30);
        $this->assertEquals('FizzBuzz', $actual);
    }

    public function testNumber90ReturnsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(90);
        $this->assertEquals('FizzBuzz', $actual);
    }

}
