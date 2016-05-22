<?php
namespace Kata;

/**
 * Class NumbersToString
 * @package Kata
 */
class NumbersToString
{
    /*
    conversion table:
          1 => 'a',
          2 => 'b',
          3 => 'c',
          4 => 'd',
          5 => 'e',
          6 => 'f',
          7 => 'g',
          8 => 'h',
          9 => 'i',
          10 => 'j',
          11 => 'k',
          12 => 'l',
          13 => 'm',
          14 => 'n',
          15 => 'o',
          16 => 'p',
          17 => 'q',
          18 => 'r',
          19 => 's',
          20 => 't',
          21 => 'u',
          22 => 'v',
          23 => 'w',
          24 => 'x',
          25 => 'y',
          26 => 'z',
    */
    private $conversionTable = [];

    public function __construct()
    {
        $this->fillArray();
    }

    /**
     * @param $numbers
     * @return string
     */
    public function execute($numbers)
    {
        $string = '';

        $words = explode('+', $numbers);

        foreach ($words as $word) {
            $numbersOfWord = explode(' ', $word);

            array_walk($numbersOfWord, function ($number) use (&$string) {
                $string .= $this->conversionTable[$number];
            });

            $string .= ' ';
        }

        return trim($string);
    }

    private function fillArray()
    {
        $this->conversionTable = array_combine(range(1, 26), range('a', 'z'));
    }
}
