<?php
namespace Ecomo;

use YPHP\Entity;
use Brick\Money\Money as BaseMoney;

class Money extends Entity{

    const PRICE = "price";
    const CURRENCY = "currency";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::PRICE => $this->getPrice(),
            self::CURRENCY => $this->getCurrency(),
        ]);
    }

    public function __arrayTo($array)
    {
        $this->setPrice(@$array[self::PRICE]);
        $this->setCurrency(@$array[self::CURRENCY]);
    }

    public function __construct(int $price = 0,string $currency = "USD", $id = null)
    {
        parent::__construct($id);
        $this->price = $price;
        $this->currency = $currency;
        $this->update();
    }

    protected function update(){
        $this->money = BaseMoney::of($this->price,\strtoupper($this->currency));
    }

    /**
     * @var \Brick\Money\Money
     */
    protected $money;

    /**
     * @var int
     */
    protected $price;

        /**
     * @var string
     */
    protected $currency;

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
     * Set the value of price
     *
     * @param  int  $price
     *
     * @return  self
     */ 
    public function setPrice(int $price)
    {
        $this->price = $price;
        $this->update();

        return $this;
    }

    /**
     * Get the value of currency
     *
     * @return  string
     */ 
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Set the value of currency
     *
     * @param  string  $currency
     *
     * @return  self
     */ 
    public function setCurrency(string $currency)
    {
        $this->currency = $currency;
        $this->update();

        return $this;
    }

    /**
     * Get the value of money
     *
     * @return  BaseMoney
     */ 
    public function getMoney()
    {
        return $this->money;
    }


    /**
     * Set the value of money
     *
     * @param  \Brick\Money\Money  $money
     *
     * @return  self
     */ 
    public function setMoney(\Brick\Money\Money $money)
    {
        $this->money = $money;
        $this->price = $money->getAmount()->toInt();
        $this->currency = $money->getCurrency()->getCurrencyCode();
        return $this;
    }
}