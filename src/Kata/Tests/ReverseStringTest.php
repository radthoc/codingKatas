<?php
namespace Kata\Tests;

use Kata\ReverseString;

class ReverseStringTest extends \PHPUnit_Framework_TestCase
{
    private $reverseString;

    protected function setUp()
    {
        $this->reverseString = new ReverseString();
    }

    public function testDuplicatesInArray()
    {
        $this->assertEquals('mlkjihgfedcba', $this->reverseString->execute('abcdefghijklm'));
    }
}
