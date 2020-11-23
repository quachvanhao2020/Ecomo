<?php
namespace Ecomo\Warehouse;
use YPHP\Entity;
use YPHP\EntityLife;

class ProductInfo extends EntityLife{
    const AMOUNT = "amount";

    public function __toArray(){
        return array_merge([
            self::AMOUNT => $this->getAmount(),
        ],parent::__toArray());
    }
    /**
     * @var int
     */
    protected $amount;

    /**
     * Get the value of amount
     *
     * @return  int
     */ 
    public function getAmount()
    {
        if(!$this->amount) $this->amount = 0;
        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  int  $amount
     *
     * @return  self
     */ 
    public function setAmount(int $amount = 0)
    {
        $this->amount = $amount;

        return $this;
    }
}