<?php
namespace Ecomo\Tests;

use Exchamo\Money;
use Ecomo\Product\Product;
use Ecomo\Tests\OrmTestCase;
use Doctrine\ORM\EntityManager;
use Ecomo\Category\Category;
use YPHP\Storage\EntityStorage;

final class ProductTest extends OrmTestCase
{
    const ENTITY_CLASS = Product::class;

    public function getEntity(EntityManager $em){
        $category = $em->getRepository(Category::class)->findOneBy(['name' => CategoryTest::class]);
        $entity = new Product();
        $entity->setName(self::class);
        $entity->setOldMoney(new Money(323));
        $entity->setMoney(new Money(323));
        $entity->setCategory($category);
        return $entity;
    }

    public function assertAll(EntityStorage $storage){
        foreach ($storage as $key => $value) {
            if($value instanceof Product){
                var_dump($value->getCategory()->getName());
            }
        }
    }

}