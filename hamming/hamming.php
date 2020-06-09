<?php


function distance(string $a, string $b): int
{
    if (strlen($a) !== strlen($b))
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    $counter = 0;
    for ($i = 0, $len = strlen($b); $i < $len; $i++) {
        if ($a[$i] !== $b[$i])
            $counter++;
    }
    return $counter;
}
