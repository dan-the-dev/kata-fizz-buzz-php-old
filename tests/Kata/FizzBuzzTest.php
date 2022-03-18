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

    public function testNumber1IsReturnedAsString1(): void
    {
        $actual = $this->fizzBuzz->convertNumber(1);

        $this->assertEquals('1', $actual);
    }

    public function testNumber2sReturnedAsString2(): void
    {
        $actual = $this->fizzBuzz->convertNumber(2);

        $this->assertEquals('2', $actual);
    }

    public function testNumber4sReturnedAsString4(): void
    {
        $actual = $this->fizzBuzz->convertNumber(4);

        $this->assertEquals('4', $actual);
    }

    public function testNumber47sReturnedAsString47(): void
    {
        $actual = $this->fizzBuzz->convertNumber(47);

        $this->assertEquals('47', $actual);
    }

    public function testNumber97sReturnedAsString97(): void
    {
        $actual = $this->fizzBuzz->convertNumber(97);

        $this->assertEquals('97', $actual);
    }

    public function testNumber3IsReturnedAsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(3);

        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber6IsReturnedAsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(6);

        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber9IsReturnedAsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(9);

        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber99IsReturnedAsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(99);

        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber48IsReturnedAsFizz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(48);

        $this->assertEquals('Fizz', $actual);
    }

    public function testNumber5IsReturnedAsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(5);

        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber10IsReturnedAsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(10);

        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber20IsReturnedAsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(20);

        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber100IsReturnedAsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(100);

        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber45IsReturnedAsBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(55);

        $this->assertEquals('Buzz', $actual);
    }

    public function testNumber15IsReturnedAsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(15);

        $this->assertEquals('FizzBuzz', $actual);
    }

    public function testNumber30IsReturnedAsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(30);

        $this->assertEquals('FizzBuzz', $actual);
    }

    public function testNumber45IsReturnedAsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(45);

        $this->assertEquals('FizzBuzz', $actual);
    }

    public function testNumber90IsReturnedAsFizzBuzz(): void
    {
        $actual = $this->fizzBuzz->convertNumber(90);

        $this->assertEquals('FizzBuzz', $actual);
    }
}
