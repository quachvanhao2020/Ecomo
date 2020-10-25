<?php
namespace Ecomo\Products\Storage;

use YPHP\ArrayObject;
use Ecomo\Products\ProductSocietyXX;
use Ecomo\Products\Storage\Iterator\ProductSocietyXXIterator;

class ProductSocietyXXStorage extends ProductSocietyXXStorage{


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
     * @return  ProductSocietyXX[]
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