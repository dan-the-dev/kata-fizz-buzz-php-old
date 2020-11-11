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
        $actual = $this->fizzBuzz->handle();

        $this->assertEquals("1", $actual);
    }

}
