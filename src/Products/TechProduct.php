<?php
namespace Ecomo\Products;

use Ecomo\ECommerce\ProductSocietyXX;
use Ecomo\Tech\PhoneParameter;

class TechProduct extends ProductSocietyXX{
    const PHONEPARAMETER = "phoneParameter";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::PHONEPARAMETER => $this->getPhoneParameter(),
        ]);
    }
    /**
     * 
     *
     * @var PhoneParameter
     */
    protected $phoneParameter;

    /**
     * Get the value of phoneParameter
     *
     * @return  PhoneParameter
     */ 
    public function getPhoneParameter()
    {
        return $this->phoneParameter;
    }

    /**
     * Set the value of phoneParameter
     *
     * @param  PhoneParameter  $phoneParameter
     *
     * @return  self
     */ 
    public function setPhoneParameter(PhoneParameter $phoneParameter)
    {
        $this->phoneParameter = $phoneParameter;

        return $this;
    }
}