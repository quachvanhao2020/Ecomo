<?php
namespace Ecomo\Technology;

use Ecomo\Entity;

class TechEntity extends Entity{
    
    const NAME = "name";

    /**
     * 
     *
     * @var string
     */
    protected $name;

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}