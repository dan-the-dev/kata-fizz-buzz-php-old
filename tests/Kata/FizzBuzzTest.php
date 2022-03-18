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

}
