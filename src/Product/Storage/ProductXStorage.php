<?php
namespace Ecomo\Product\Storage;

use YPHP\ArrayObject;
use Ecomo\Product\ProductX;
use Ecomo\Product\Storage\Iterator\ProductXIterator;

class ProductXStorage extends ProductStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductXIterator
     */
    public function getIterator()
    {
        return new ProductXIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  \Ecomo\Product\ProductX[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  ProductX[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}