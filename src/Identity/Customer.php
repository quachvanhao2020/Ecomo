<?php
namespace Ecomo\Identity;
use Ecomo\Address;
use Ecomo\Orders\Order;

class Customer extends User{
    const DEFAULTSHIPPINGADDRESS = "defaultShippingAddress";
    const DEFAULTBILLINGADDRESS = "defaultBillingAddress";
    const ORDERS = "orders";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::DEFAULTBILLINGADDRESS => $this->getDefaultBillingAddress(),
            self::DEFAULTSHIPPINGADDRESS => $this->getDefaultShippingAddress(),
            self::ORDERS => $this->getOrders(),
        ]);
    }

    /**
     * @var Order[]
     */
    protected $orders;

    /**
     * @var Address
     */
    protected $defaultShippingAddress;

    /**
     * @var Address
     */
    protected $defaultBillingAddress;

    /**
     * Get the value of defaultShippingAddress
     *
     * @return  Address
     */ 
    public function getDefaultShippingAddress()
    {
        return $this->defaultShippingAddress;
    }

    /**
     * Set the value of defaultShippingAddress
     *
     * @param  Address  $defaultShippingAddress
     *
     * @return  self
     */ 
    public function setDefaultShippingAddress(Address $defaultShippingAddress)
    {
        $this->defaultShippingAddress = $defaultShippingAddress;

        return $this;
    }

    /**
     * Get the value of defaultBillingAddress
     *
     * @return  Address
     */ 
    public function getDefaultBillingAddress()
    {
        return $this->defaultBillingAddress;
    }

    /**
     * Set the value of defaultBillingAddress
     *
     * @param  Address  $defaultBillingAddress
     *
     * @return  self
     */ 
    public function setDefaultBillingAddress(Address $defaultBillingAddress)
    {
        $this->defaultBillingAddress = $defaultBillingAddress;

        return $this;
    }

    /**
     * Get the value of orders
     *
     * @return  Order[]
     */ 
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * Set the value of orders
     *
     * @param  Order[]  $orders
     *
     * @return  self
     */ 
    public function setOrders($orders)
    {
        $this->orders = $orders;

        return $this;
    }
}