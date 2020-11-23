<?php
namespace Ecomo\Order\Storage;

use YPHP\ArrayObject;
use Ecomo\Order\OrderStatistical;
use Ecomo\Order\Storage\Iterator\OrderStatisticalIterator;

class OrdertSatisticalStorage extends ArrayObject{


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
     * @param  \Ecomo\Order\OrderStatistical[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}