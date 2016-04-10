<?php
namespace Kata\Tests;

use Kata\CategoriesManager;

class CategoriesTest extends \PHPUnit_Framework_TestCase
{
    private $categoriesManager;

    protected function setUp()
    {
        $this->categoriesManager = new CategoriesManager();
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 404
     * @expectedExceptionMessage Category not found
     */
    public function testGetChildsCategoryNotFoundException()
    {
        $result = $this->categoriesManager->getChilds('category0');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 400
     * @expectedExceptionMessage Invalid child category
     */
    public function testAddChildCategoryNotFoundException()
    {
        $result = $this->categoriesManager->addCategory('category1');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 400
     * @expectedExceptionMessage Invalid parent category
     */
    public function testAddParentCategoryNotFoundException()
    {
        $result = $this->categoriesManager->addCategory('category0', 'category');
    }

    public function testaddNewCategory()
    {
        $expected = ['subcategory0.1', 'subcategory0.2'];

        $this->categoriesManager->addCategory('category0');
        //$this->categoriesManager->AddCategory('subcategory0.1', 'category0');
        //$this->categoriesManager->AddCategory('subcategory0.2', 'category0');

        $this->assertEquals($expected, $this->categoriesManager->getChilds('category0'));
    }
}
