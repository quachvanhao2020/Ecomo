<?php
namespace Ecomo\Identitys\Storage;

use YPHP\ArrayObject;
use Ecomo\Identitys\Customer;
use Ecomo\Identitys\Storage\Iterator\CustomerIterator;

class Customerstorage extends ArrayObject{


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
     * @param  \Ecomo\Identitys\Customer[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}