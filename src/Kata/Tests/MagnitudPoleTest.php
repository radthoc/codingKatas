<?php
namespace Kata\Tests;

use Kata\MagnitudPole;

class MagnitudPoleTest extends \PHPUnit_Framework_TestCase
{
    private $magnitudPole;

    protected function setUp()
    {
        $this->magnitudPole = new MagnitudPole();
    }

    public function testArrayWithMagnitudPole()
    {
        $arrayToTest = [4, 2, 2, 3, 1, 4, 7, 8, 6, 9];

        $this->assertEquals(5, $this->magnitudPole->getMagnitudPole($arrayToTest));
    }

    public function testArrayWithoutMagnitudPole()
    {
        $arrayToTest = [9, 4, 2, 2, 3, 1, 4, 7, 8, 6, 2];

        $this->assertEquals(0, $this->magnitudPole->getMagnitudPole($arrayToTest));
    }
}
