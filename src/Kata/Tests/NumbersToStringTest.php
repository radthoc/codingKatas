<?php
namespace Kata\Tests;

use Kata\NumbersToString;

class NumbersToStringTest extends \PHPUnit_Framework_TestCase
{
    private $numbersToString;

    protected function setUp()
    {
        $this->numbersToString = new NumbersToString();
    }

    public function testAWord()
    {
        $this->assertEquals('prueba', $this->numbersToString->execute('16 18 21 5 2 1'));
    }

    public function testSeveralWords()
    {
        $this->assertEquals('han cantado bingo', $this->numbersToString->execute('8 1 14+3 1 14 20 1 4 15+2 9 14 7 15'));
    }
}
