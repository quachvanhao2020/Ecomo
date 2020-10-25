<?php
namespace Ecomo\Products\Storage;

use YPHP\ArrayObject;
use Ecomo\Products\TechProduct;
use Ecomo\Products\Storage\Iterator\TechProductIterator;

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
     * @param  TechProduct[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}