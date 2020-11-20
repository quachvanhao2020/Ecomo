<?php
namespace Ecomo\Order\Storage;

use YPHP\ArrayObject;
use Ecomo\Order\Order;
use Ecomo\Order\Storage\Iterator\OrderIterator;

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
     * @param  \Ecomo\Order\Order[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}