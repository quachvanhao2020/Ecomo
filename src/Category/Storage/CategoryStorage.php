<?php
namespace Ecomo\Category\Storage;

use YPHP\ArrayObject;
use Ecomo\Category\Category;
use Ecomo\Category\Storage\Iterator\CategoryIterator;
use YPHP\Storage\EntityStorage;

class CategoryStorage extends EntityStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CategoryIterator
     */
    public function getIterator()
    {
        return new CategoryIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Category[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Category\Category[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}