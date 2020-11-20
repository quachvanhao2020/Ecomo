<?php
namespace Ecomo\Identity\Storage;

use YPHP\ArrayObject;
use Ecomo\Identity\Customer;
use Ecomo\Identity\Storage\Iterator\CustomerIterator;

class CustomerStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return CustomerIterator
     */
    public function getIterator()
    {
        return new CustomerIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Customer[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Identity\Customer[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}