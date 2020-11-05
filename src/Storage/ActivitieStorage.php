<?php
namespace Ecomo\Storage;

use YPHP\ArrayObject;
use Ecomo\Activitie;
use Ecomo\Storage\Iterator\ActivitieIterator;

class ActivitieStorage extends ArrayObject{


    /**
     * Create a new iterator from an ArrayObject instance
     *
     * @return ActivitieIterator
     */
    public function getIterator()
    {
        return new ActivitieIterator($this->storage);
    }

    /**
     * Get the value of storage
     *
     * @return  Activitie[]
     */ 
    public function getStorage()
    {
        return $this->storage;
    }


    /**
     * Set the value of storage
     *
     * @param  \Ecomo\Activitie[]  $storage
     *
     * @return  self
     */ 
    public function setStorage($storage = [])
    {
        return parent::setStorage($storage);
    }
}