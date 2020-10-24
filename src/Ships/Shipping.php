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
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @param  string  $method
     *
     * @return  self
     */ 
    public function setMethod(string $method)
    {
        $this->method = $method;

        return $this;
    }
}