<?php
namespace Kata;

/**
 * Class MagnitudPole
 * @package Kata
 */
class MagnitudPole
{
    private $openingBrackets = [];
    /*A[0] = 4
    A[1] = 2
    A[2] = 2
    A[3] = 3
    A[4] = 1
    A[5] = 4
    A[6] = 7
    A[7] = 8
    A[8] = 6
    A[9] = 9
    */
    /**
     * @param $string
     * @return bool
     */
    public function getMagnitudPole($arrayToParse)
    {
        $numberOfElements = count($arrayToParse);
        for ($i = 1; $i < $numberOfElements; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($arrayToParse[$j] > $arrayToParse[$i]) {
                    continue 2;
                }
            }

            if ($i < $numberOfElements - 1) {
                for ($x = $i + 1; $x < $numberOfElements; $x++) {
                    if ($arrayToParse[$x] < $arrayToParse[$i]) {
                        continue 2;
                    }
                }
            }
            return $i;
        }
        return 0;
    }
}
