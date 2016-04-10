<?php
namespace Kata;

/**
 * Class sudoku
 * @package Kata
 */

class CategoriesManager
{
    private $categories = <<<XML
<?xml version='1.0' standalone='yes'?>
<categories>
    <category1>
        <sub-category1/>
    </category1>
</categories>
XML;

    public function addCategory($child, $parent = null)
    {
        $categories = $this->getCategoriesHandler();

        if ($matches = $categories->xpath('//' . $child)) {
            throw new \Exception('Invalid child category', 400);
        }

        if ($parent) {
            if ($categories->$parent) {
                $newCategory = $categories->$parent->addChild($child, '0');
            } else {
                throw new \Exception('Invalid parent category', 400);
            }
        } else {
            $newCategory = $categories->addChild($child, '0');
        }

        //echo $newCategory->asXML();
        echo $categories->asXML();
    }

    public function getChilds($category)
    {
        $categories = $this->getCategoriesHandler();

        if ($matches = $categories->xpath('//' . $category)) {
            return $matches;
        }

        throw new \Exception('Category not found', 404);

    }

    private function getCategoriesHandler()
    {
        return new \SimpleXMLElement($this->categories);
    }
}
