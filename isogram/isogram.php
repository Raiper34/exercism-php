<?php

function isIsogram(string $text): bool
{
    $onlyAlphaCharsText = preg_replace("/[\s-]/u", '', mb_strtolower($text));
    $uniqueCharsArray = array_unique(preg_split('//u', $onlyAlphaCharsText, 0, PREG_SPLIT_NO_EMPTY));
    return count($uniqueCharsArray) === mb_strlen($onlyAlphaCharsText);
}