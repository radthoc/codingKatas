<?php
namespace Kata;

/**
 * Class NestedBrackets
 * @package Kata
 */
class NestedBrackets
{
    private $openingBrackets = ['{', '[', '('];
    private $closingBrackets = ['}', ']', ')'];
    private $bracketsPile = [];

    /**
     * @param $string
     * @return bool
     */
    public function checkNestedBrackets($string)
    {
        for ($i = 0; $i < strlen($string); $i++) {
            if (in_array($string[$i], $this->openingBrackets)) {
                $this->pushToPile($string[$i]);
            }

            if (in_array($string[$i], $this->closingBrackets)) {
                if (!$this->popFromPileIfMatch($string[$i])) {
                    break;
                }
            }
            //echo var_export($this->bracketsPile, true);
        }

        return $this->isPileEmpty();
    }

    /**
     * @param $bracketToPile
     */
    private function pushToPile($bracketToPile)
    {
        array_push($this->bracketsPile, $bracketToPile);
    }

    /**
     * @param string $bracketToPile
     */
    private function popFromPileIfMatch($bracketToPop)
    {
        if (end($this->bracketsPile) == $this->openingBrackets[array_search($bracketToPop, $this->closingBrackets)]) {
            array_pop($this->bracketsPile);
            return true;
        }

        return false;
    }

    /**
     * @return bool
     */
    private function isPileEmpty()
    {
        return empty($this->bracketsPile);
    }
}
