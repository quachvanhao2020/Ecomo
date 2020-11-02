<?php
namespace Ecomo\Orders\Storage;

use YPHP\ArrayObject;
use Ecomo\Orders\Order;
use Ecomo\Orders\Storage\Iterator\OrderIterator;

class OrderStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return OrderIterator
     */
    public function getIterator()
    {
        return new OrderIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Order[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Orders\Order[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}