<?php

function squareOfSum(int $number): int
{
    return array_sum(range(1, $number)) ** 2;
}

function powNumber(int $number): int
{
    return $number ** 2;
}

function sumOfSquares(int $number): int
{
    return array_sum(array_map('powNumber', range(1, $number)));
}

function difference(int $number): int
{
    return squareOfSum($number) - sumOfSquares($number);
}