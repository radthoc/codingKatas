<?php
namespace Kata;

/**
 * Class CategoriesManager
 * @package Kata
 */
class CategoriesManager
{
    private $categoryHandler;
    private $categories = <<<XML
<?xml version='1.0' standalone='yes'?>
<categories>
    <category1>
        <sub-category1.1>
            <name>la primavera</name>
            <value>10</value>
        </sub-category1.1>
        <sub-category1.2>
            <name>El verano</name>
            <value>21</value>
        </sub-category1.2>
    </category1>
</categories>
XML;

    public function __construct()
    {
        $this->categoryHandler = $this->getCategoriesHandler();
    }

    /**
     * @param $childCategory
     * @param null $parentCategory
     * @throws \Exception
     */
    public function addCategory($childCategory, $parentCategory = null)
    {
        if ($this->categoryHandler->xpath('//' . $childCategory)) {
            throw new \Exception('Invalid request: Category already exists', 400);
        }

        if ($parentCategory) {
            if ($this->categoryHandler->$parentCategory) {
                $newCategory = $this->categoryHandler->$parentCategory->addChild($childCategory, '');
            } else {
                throw new \Exception('Invalid request: Parent category not found', 400);
            }
        } else {
            $newCategory = $this->categoryHandler->addChild($childCategory, '');
        }
    }

    /**
     * @param $category
     * @return string
     * @throws \Exception
     */
    public function getChilds($category)
    {
        if ($categoryMatches = $this->categoryHandler->xpath('//' . $category)) {
            return json_encode($categoryMatches);
        }

        throw new \Exception('Invalid request: Category no found', 404);
    }

    /**
     * @return \SimpleXMLElement
     */
    private function getCategoriesHandler()
    {
        return new \SimpleXMLElement($this->categories);
    }
}
