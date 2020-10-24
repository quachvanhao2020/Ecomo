<?php
namespace Ecomo\Storage;

use YPHP\ArrayObject;
use Ecomo\Money;
use Ecomo\Storage\Iterator\MoneyIterator;

class MoneyStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return MoneyIterator
     */
    public function getIterator()
    {
        return new MoneyIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Money[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  Money[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}