<?php
namespace Ecomo;

use JsonSerializable;
use Ecomo\Nation;

class Money implements
JsonSerializable
{

    const PRICE = "price";
    const NATION = "nation";

    /**
     * 
     *
     * @var int
     */
    protected $price;

    /**
     * 
     *
     * @var Nation
     */
    protected $nation;

    public function jsonSerialize() {
        return [
            self::PRICE => $this->getPrice(),
            self::NATION => $this->getNation(),
        ];
    }

    public static function stringToMoney($string){
        $money = new Money();
        $money -> setPrice(intval(str_replace(".","",$string)));
        return $money;
    }

    public function __construct($price = 0)
    {
        $this->setPrice($price);     
    }

    /**
     * Get the value of price
     *
     * @return  int
     */ 
    public function getPrice()
    {
        return $this->price;
    }

        /**
     * Get the value of price
     *
     * @return  int
     */ 
    public function getTextPrice()
    {
        return $this->getPrice()."D";
    }

    /**
     * Set the value of price
     *
     * @param  int  $price
     *
     * @return  self
     */ 
    public function setPrice(int $price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get the value of nation
     *
     * @return  Nation
     */ 
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * Set the value of nation
     *
     * @param  Nation  $nation
     *
     * @return  self
     */ 
    public function setNation(Nation $nation = null)
    {
        $this->nation = $nation;

        return $this;
    }
}