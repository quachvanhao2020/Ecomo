<?php
namespace Ecomo\Tech;

use Ecomo\Storage\TechEntityStorage;

class PhoneParameter{

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