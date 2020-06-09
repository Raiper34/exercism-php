<?php

const MAX_NUMBER = 9;
const MIN_LENGTH = 1;


function getDoubledValue(int $value, int $index): int {
    return getOverflowedValue(($index + 1) % 2 === 0 ? $value + $value : $value);
}

function getOverflowedValue(int $value): int {
    return $value > MAX_NUMBER ? $value - MAX_NUMBER : $value;
}

function getChecksum(array $reversed): int {
    return array_sum(array_map('getDoubledValue', $reversed, array_keys($reversed)));
}

function isValid(string $input): bool
{
    $rawString = preg_replace('/\s+/', '', $input);
    return ctype_digit($rawString) && strlen($rawString) > MIN_LENGTH && getChecksum(array_reverse(str_split($rawString))) % 10 === 0;
}
