<?php
namespace Ecomo\Products\Storage;

use YPHP\ArrayObject;
use Ecomo\Products\ProductSocietyX;
use Ecomo\Products\Storage\Iterator\ProductSocietyXIterator;

class ProductSocietyXStorage extends ProductSocietyStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ProductSocietyXIterator
     */
    public function getIterator()
    {
        return new ProductSocietyXIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  \Ecomo\Products\ProductSocietyX[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  ProductSocietyX[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}