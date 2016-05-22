<?php
namespace Kata\Tests;

use Kata\NestedBrackets;

class NestedBracketsTest extends \PHPUnit_Framework_TestCase
{
    private $nestedBracketsService;

    protected function setUp()
    {
        $this->nestedBracketsService = new NestedBrackets();
    }

    public function testMatchingBrackets()
    {
        $this->assertTrue($this->nestedBracketsService->checkNestedBrackets('(oi)'));
    }

    public function testUnmatchedBrackets()
    {
        $this->assertEquals(false, $this->nestedBracketsService->checkNestedBrackets('[(oi)'));
    }

    public function testMatchingNestedBrackets()
    {
        $this->assertTrue($this->nestedBracketsService->checkNestedBrackets('[(oidsl{odsf}sd)]'));
    }

    public function testUnmatchedNestedBrackets()
    {
        $this->assertEquals(false, $this->nestedBracketsService->checkNestedBrackets('[(oi[(oidsl{odsf}sd])'));
    }
}
