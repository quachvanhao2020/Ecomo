<?php
namespace Ecomo\Warehouse\Storage;

use YPHP\ArrayObject;
use Ecomo\Warehouse\ProductInfo;
use Ecomo\Warehouse\Storage\Iterator\ProductInfoIterator;
use YPHP\Storage\EntityStorage;

class ProductInfoStorage extends EntityStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductInfoIterator
     */
    public function getIterator()
    {
        return new ProductInfoIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  ProductInfo[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Warehouse\ProductInfo[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}