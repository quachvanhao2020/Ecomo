<?php
namespace Ecomo\Product\Storage;

use YPHP\ArrayObject;
use Ecomo\Product\ProductSocietyXX;
use Ecomo\Product\Storage\Iterator\ProductSocietyXXIterator;

class ProductSocietyXXStorage extends ProductSocietyXStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductSocietyXXIterator
     */
    public function getIterator()
    {
        return new ProductSocietyXXIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  \Ecomo\Product\ProductSocietyXX[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  ProductSocietyXX[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}