<?php
namespace Ecomo\Product\Storage;

use YPHP\ArrayObject;
use Ecomo\Product\ProductSociety;
use Ecomo\Product\Storage\Iterator\ProductSocietyIterator;

class ProductSocietyStorage extends ProductXStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductSocietyIterator
     */
    public function getIterator()
    {
        return new ProductSocietyIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  \Ecomo\Product\ProductSociety[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  ProductSociety[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}