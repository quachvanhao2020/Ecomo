<?php
namespace Ecomo\Products\Storage;

use YPHP\ArrayObject;
use Ecomo\Products\ProductSociety;
use Ecomo\Products\Storage\Iterator\ProductSocietyIterator;

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
     * @return  \Ecomo\Products\ProductSociety[]
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