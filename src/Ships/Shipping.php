<?php
namespace Ecomo\Ships;
use YPHP\Entity;
use Ecomo\Money;

class Shipping extends Entity{
    /**
     * @var string
     */
    protected $method;
        /**
     * @var Money
     */
    protected $amount;

    /**
     * Get the value of amount
     *
     * @return  Money
     */ 
    public function getAmount()
    {
        if(!$this->amount) $this->amount = new Money(0);

        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  Money  $amount
     *
     * @return  self
     */ 
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of method
     *
     * @return  string
     */ 
    public function getMethod()
    {
        if(!$this->method) $this->method = "";

        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @param  string  $method
     *
     * @return  self
     */ 
    public function setMethod(string $method = null)
    {
        $this->method = $method;

        return $this;
    }
}