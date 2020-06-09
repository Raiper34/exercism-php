<?php

class Series
{
    private $seriesString;

    function __construct(string $seriesString)
    {
        $this->seriesString = $seriesString;
    }

    private function getSeries(int $numberOfDigits): Array
    {
        $seriesArray = str_split($this->seriesString);
        $possibleSeries = [];
        for ($i = 0; $i < count($seriesArray) - $numberOfDigits + 1; $i++) {
            $possibleSeries[$i] = array_slice($seriesArray, $i, $numberOfDigits);
        }
        return $possibleSeries;
    }

    private function checkArgumentsValidity(int $numberOfDigits): void
    {
        if ($numberOfDigits < 0 ||
            $numberOfDigits > strlen($this->seriesString) ||
            !preg_match("/^\d*$/", $this->seriesString)) {
            throw new InvalidArgumentException();
        }
    }

    public function largestProduct(int $numberOfDigits): int
    {
        $this->checkArgumentsValidity($numberOfDigits);
        return max(array_map('array_product', $this->getSeries($numberOfDigits)));
    }

}
