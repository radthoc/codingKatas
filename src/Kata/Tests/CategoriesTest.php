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
     * @expectedExceptionMessage Invalid request: Category no found
     */
    public function testGetChildsCategoryNotFoundException()
    {
        $result = $this->categoriesManager->getChilds('category0');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 400
     * @expectedExceptionMessage Invalid request: Category already exists
     */
    public function testAddChildCategoryAlreadyExistsException()
    {
        $result = $this->categoriesManager->addCategory('category1');
    }

    /**
     * @expectedException Exception
     * @expectedExceptionCode 400
     * @expectedExceptionMessage Invalid request: Parent category not found
     */
    public function testAddParentCategoryNotFoundException()
    {
        $result = $this->categoriesManager->addCategory('category0', 'category');
    }

    public function testGetCategory()
    {
        $expected = '[{"sub-category1.1":{"name":"la primavera","value":"10"},"sub-category1.2":{"name":"El verano","value":"21"}}]';

        $this->assertEquals($expected, $this->categoriesManager->getChilds('category1'));
    }

    public function testAddCategory()
    {
        $expected = '[{"subcategory0.1":{},"subcategory0.2":{}}]';

        $this->categoriesManager->addCategory('category0');
        $this->categoriesManager->AddCategory('subcategory0.1', 'category0');
        $this->categoriesManager->AddCategory('subcategory0.2', 'category0');

        $this->assertEquals($expected, $this->categoriesManager->getChilds('category0'));
    }
}
