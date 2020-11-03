<?php
namespace Ecomo\Tech;

use Ecomo\Storage\TechEntityStorage;
use YPHP\SerializableInterface;

class PhoneParameter implements SerializableInterface{

    const HTML = "html";

    function __toStd(){
        return (object)$this->__toArray();
    }
    function __toArray(){
        return [
            self::HTML => $this->getHtml(),
        ];
    }
    public function jsonSerialize(){
        return $this->__toArray();
    }

    /**
     * @var string
     */
    protected $html;

    /**
     * 
     *
     * @var TechEntityStorage
     */
    protected $techEntitys;

    /**
     * Get the value of techEntitys
     *
     * @return  TechEntityStorage
     */ 
    public function getTechEntitys()
    {
        if(empty($this->techEntitys)) $this->setTechEntitys(new TechEntityStorage());

        return $this->techEntitys;
    }

    /**
     * Set the value of techEntitys
     *
     * @param  TechEntityStorage  $techEntitys
     *
     * @return  self
     */ 
    public function setTechEntitys(TechEntityStorage $techEntitys = null)
    {
        $this->techEntitys = $techEntitys;

        return $this;
    }


    /**
     * Get the value of html
     *
     * @return  string
     */ 
    public function getHtml()
    {
        return $this->html;
    }

    /**
     * Set the value of html
     *
     * @param  string  $html
     *
     * @return  self
     */ 
    public function setHtml(string $html = null)
    {
        $this->html = $html;

        return $this;
    }
}