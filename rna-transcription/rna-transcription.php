<?php

const TRANSLATION_MAP = array(
    'G' => 'C',
    'C' => 'G',
    'T' => 'A',
    'A' => 'U'
);

function translate(string $nucleotide): string {
    return TRANSLATION_MAP[$nucleotide];
}

function toRna(string $strand): string {
    return implode('', array_map('translate', str_split($strand)));
}