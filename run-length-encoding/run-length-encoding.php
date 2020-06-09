<?php

function encodeChar(int $counter, string $lastChar): string {
    return $counter > 1 ? "{$counter}{$lastChar}" : $lastChar;
}

function encode(string $input): string {
    $encodedString = '';
    $lastChar = strlen($input) ? $input[0] : '';
    $counter = 0;
    foreach (str_split($input) as $char) {
        if ($lastChar === $char) {
            $counter++;
        } else {
            $encodedString .= encodeChar($counter, $lastChar);
            $counter = 1;
        }
        $lastChar = $char;
    }
    $encodedString .= encodeChar($counter, $lastChar);
    return $encodedString;
}

function decode(string $input = ''): string {
    $decodedString = '';
    $lastNumber = null;
    foreach (str_split($input) as $char) {
        if (is_numeric($char)) {
            $lastNumber = "{$lastNumber}{$char}";
        } else {
            $decodedString .= str_repeat($char, $lastNumber ?intval($lastNumber) : 1);
            $lastNumber = '';
        }
    }
    return $decodedString;
}
