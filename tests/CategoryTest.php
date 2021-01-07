<?php
namespace Ecomo\Tests;

use Ecomo\Category\Category;
use Ecomo\Tests\OrmTestCase;
use Doctrine\ORM\EntityManager;
use Ecomo\Product\Product;
use Ecomo\Product\Storage\ProductStorage;
use Doctrine\Common\Collections\ArrayCollection;
use YPHP\Storage\EntityStorage;

final class CategoryTest extends OrmTestCase
{
    const ENTITY_CLASS = Category::class;

    public function getEntity(EntityManager $em){
        $products = $em->getRepository(Product::class)->findAll();
        if(is_array($products)){
            $products = new ProductStorage($products);
        }
        $category = new Category();
        $category->setName(self::class);
        $category->setProducts($products);
        return $category;
    }

    public function assertAll(EntityStorage $storage){
        foreach ($storage as $key => $value) {
            if($value instanceof Category){
                var_dump(count($value->getProducts()));
            }
        }
    }

}