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
}
