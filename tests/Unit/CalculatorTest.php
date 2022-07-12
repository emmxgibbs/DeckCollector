<?php

namespace Tests\Unit;

use App\Services\CalculatorService;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function setUp(): void {
        $this->calculator = new CalculatorService();
        echo 'XXXXXXXX CALC SETUP';
    }

    public function tearDown(): void {
        $this->calculator = null;
        echo 'XXXXXXXX CALC TEAR DOWN';
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_simple_addition() {
        $calculator = new CalculatorService();
        $this->assertTrue($calculator->add(1,2) == 3);
        $this->assertEquals($calculator->add(1,2), 3);
    }

    public function test_addition_negative_numbers() {
        $calculator = new CalculatorService();
        $this->assertEquals(
            $calculator->add(-1, -2),
            -3);
        $this->assertEquals(
            $calculator->add(-1, 10),
            9);
        $this->assertEquals(
            $calculator->add(3, -7),
            -4);
    }

    public function test_subtraction() {
        $calculator = new CalculatorService();
        $this->assertEquals(
            $calculator->sub(8, 2),
            6);
    }

    public function test_subtraction_negative_numbers() {

    }

    public function test_multiplication() {

    }

    public function test_division() {

    }
}
