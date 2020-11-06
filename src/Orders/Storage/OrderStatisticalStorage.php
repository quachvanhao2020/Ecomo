<?php
namespace Ecomo\Orders\Storage;

use YPHP\ArrayObject;
use Ecomo\Orders\OrderStatistical;
use Ecomo\Orders\Storage\Iterator\OrderStatisticalIterator;

class OrderStatisticalStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return OrderStatisticalIterator
     */
    public function getIterator()
    {
        return new OrderStatisticalIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  OrderStatistical[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Orders\OrderStatistical[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}