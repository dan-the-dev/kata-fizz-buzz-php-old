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

}
