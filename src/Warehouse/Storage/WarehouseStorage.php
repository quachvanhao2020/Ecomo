<?php
namespace Ecomo\Warehouse\Storage;

use YPHP\ArrayObject;
use Ecomo\Warehouse\Warehouse;
use Ecomo\Warehouse\Storage\Iterator\WarehouseIterator;

class WarehouseStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return WarehouseIterator
     */
    public function getIterator()
    {
        return new WarehouseIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Warehouse[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Warehouse\Warehouse[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}