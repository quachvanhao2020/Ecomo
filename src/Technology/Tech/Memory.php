<?php
namespace Ecomo\Technology\Tech;
use Ecomo\Technology\TechEntity;

class Memory extends TechEntity{
    
    /**
     * 
     *
     * @var int
     */
    protected $size;

    /**
     * Get the value of size
     *
     * @return  int
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param  int  $size
     *
     * @return  self
     */ 
    public function setSize(int $size)
    {
        $this->size = $size;

        return $this;
    }
}