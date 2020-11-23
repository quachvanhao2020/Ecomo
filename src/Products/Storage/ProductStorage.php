<?php
namespace Ecomo\Products\Storage;

use YPHP\ArrayObject;
use Ecomo\Products\Product;
use Ecomo\Products\Storage\Iterator\ProductIterator;
use YPHP\Storage\EntityStorage;

class ProductStorage extends EntityStorage implements ProductStorageInterface{

    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductIterator
     */
    public function getIterator()
    {
        return new ProductIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  \Ecomo\Products\Product[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Products\Product[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}