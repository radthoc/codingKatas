<?php
namespace Kata;

/**
 * Class sudoku
 * @package Kata
 */

class ReverseString
{
    private $lastColumn = 0;

    public function execute($INPUT)
    {
        for ($startChar = 0, $endChar = strlen($INPUT) - 1; $startChar < $endChar; $startChar++, $endChar--) {
            list($INPUT[$startChar], $INPUT[$endChar]) = array($INPUT[$endChar], $INPUT[$startChar]);
        }

        return $INPUT;
    }
}
