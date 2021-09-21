<?php

namespace Kata;

use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testNumber1Prints1(): void
    {
        $this->assertEquals(new OutputString("1"), $this->fizzBuzz->printNumber(new InputNumber(1)));
    }

    public function testNumber2Prints2(): void
    {
        $this->assertEquals(new OutputString("2"), $this->fizzBuzz->printNumber(new InputNumber(2)));
    }

    public function testNumber98Prints98(): void
    {
        $this->assertEquals(new OutputString("98"), $this->fizzBuzz->printNumber(new InputNumber(98)));
    }

    public function testNumber3PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(3)));
    }

    public function testNumber6PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(6)));
    }

    public function testNumber9PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(9)));
    }

    public function testNumber99PrintsFizz(): void
    {
        $this->assertEquals(new OutputString("Fizz"), $this->fizzBuzz->printNumber(new InputNumber(99)));
    }

    public function testNumber5PrintsBuzz(): void
    {
        $this->assertEquals(new OutputString("Buzz"), $this->fizzBuzz->printNumber(new InputNumber(5)));
    }

    public function testNumber10PrintsBuzz(): void
    {
        $this->assertEquals(new OutputString("Buzz"), $this->fizzBuzz->printNumber(new InputNumber(10)));
    }

    public function testNumber100PrintsBuzz(): void
    {
        $this->assertEquals(new OutputString("Buzz"), $this->fizzBuzz->printNumber(new InputNumber(100)));
    }

    public function testNumber15PrintsFizzBuzz(): void
    {
        $this->assertEquals(new OutputString("FizzBuzz"), $this->fizzBuzz->printNumber(new InputNumber(15)));
    }

    public function testNumber30PrintsFizzBuzz(): void
    {
        $this->assertEquals(new OutputString("FizzBuzz"), $this->fizzBuzz->printNumber(new InputNumber(30)));
    }

    public function testNumber90PrintsFizzBuzz(): void
    {
        $this->assertEquals(new OutputString("FizzBuzz"), $this->fizzBuzz->printNumber(new InputNumber(90)));
    }

    public function testAllNumbers(): void
    {
        $this->assertEquals(new OutputString("
        1
        2
        Fizz
        4
        Buzz
        Fizz
        7
        8
        Fizz
        Buzz
        11
        Fizz
        13
        14
        FizzBuzz
        16
        17
        Fizz
        19
        Buzz
        Fizz
        22
        23
        Fizz
        Buzz
        26
        Fizz
        28
        29
        FizzBuzz
        31
        32
        Fizz
        34
        Buzz
        Fizz
        37
        38
        Fizz
        Buzz
        41
        Fizz
        43
        44
        FizzBuzz
        46
        47
        Fizz
        49
        Buzz
        Fizz
        52
        53
        Fizz
        Buzz
        56
        Fizz
        58
        59
        FizzBuzz
        61
        62
        Fizz
        64
        Buzz
        Fizz
        67
        68
        Fizz
        Buzz
        71
        Fizz
        73
        74
        FizzBuzz
        76
        77
        Fizz
        79
        80
        Fizz
        82
        83
        Fizz
        Buzz
        86
        Fizz
        88
        89
        FizzBuzz
        91
        92
        Fizz
        94
        Buzz
        Fizz
        97
        98
        Fizz
        Buzz
        "), $this->fizzBuzz->printAllNumbers());
    }
}