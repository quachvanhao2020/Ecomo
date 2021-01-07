<?php
namespace Ecomo\Product\Storage;

use YPHP\ArrayObject;
use Ecomo\Product\TechProduct;
use Ecomo\Product\Storage\Iterator\TechProductIterator;

class TechProductStorage extends ProductSocietyXXStorage{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return TechProductIterator
     */
    public function getIterator()
    {
        return new TechProductIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  TechProduct[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Product\TechProduct[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}