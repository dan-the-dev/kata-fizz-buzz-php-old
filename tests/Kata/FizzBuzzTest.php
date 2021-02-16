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
    
}