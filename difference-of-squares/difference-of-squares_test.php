<?php

require_once "difference-of-squares.php";

class SquaresTest extends PHPUnit\Framework\TestCase
{
    public function testSquareOfSumTo5()
    {
        $this->assertEquals(225, squareOfSum(5));
    }

    public function testSumOfSquaresTo5()
    {
        $this->assertEquals(55, sumOfSquares(5));
    }

    public function testDifferenceOfSumTo5()
    {
        $this->assertEquals(170, difference(5));
    }

    public function testSquareOfSumTo10()
    {
        $this->assertEquals(3025, squareOfSum(10));
    }

    public function testSumOfSquaresTo10()
    {
        $this->assertEquals(385, sumOfSquares(10));
    }

    public function testDifferenceOfSumTo10()
    {
        $this->assertEquals(2640, difference(10));
    }

    public function testSquareOfSumTo100()
    {
        $this->assertEquals(25502500, squareOfSum(100));
    }

    public function testSumOfSquaresTo100()
    {
        $this->assertEquals(338350, sumOfSquares(100));
    }

    public function testDifferenceOfSumTo100()
    {
        $this->assertEquals(25164150, difference(100));
    }
}
