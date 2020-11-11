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

}
