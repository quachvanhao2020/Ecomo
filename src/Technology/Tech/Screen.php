<?php
namespace Ecomo\Technology\Tech;
use Ecomo\Technology\TechEntity;

class Screen extends TechEntity{
    
            /**
     * 
     *
     * @var string
     */
    protected $size;

            /**
     * 
     *
     * @var string
     */
    protected $resolution;

                /**
     * 
     *
     * @var string
     */
    protected $type;


    /**
     * Get the value of size
     *
     * @return  string
     */ 
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set the value of size
     *
     * @param  string  $size
     *
     * @return  self
     */ 
    public function setSize(string $size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get the value of resolution
     *
     * @return  string
     */ 
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set the value of resolution
     *
     * @param  string  $resolution
     *
     * @return  self
     */ 
    public function setResolution(string $resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type)
    {
        $this->type = $type;

        return $this;
    }
}