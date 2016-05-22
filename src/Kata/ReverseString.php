<?php
namespace Kata;

/**
 * Class ReverseString
 * @package Kata
 */
class ReverseString
{
    public function execute($string)
    {
        for ($startChar = 0, $endChar = strlen($string) - 1; $startChar < $endChar; $startChar++, $endChar--) {
            list($string[$startChar], $string[$endChar]) = array($string[$endChar], $string[$startChar]);
        }

        return $string;
    }
}

