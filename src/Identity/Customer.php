<?php
namespace Ecomo\Identity;

use Ecomo\Address;
use Ecomo\Order\Order;
use Identimo\User;
use Ecomo\Order\Storage\OrderStorage;

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
     * @var OrderStorage
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
        if(!$this->defaultShippingAddress) $this->defaultShippingAddress = new Address();
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
        if(!$this->defaultBillingAddress) $this->defaultBillingAddress = new Address();
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
     * @return  OrderStorage
     */ 
    public function getOrders()
    {
        if(!$this->orders) $this->orders = new OrderStorage();

        return $this->orders;
    }

    /**
     * Set the value of orders
     *
     * @param  OrderStorage  $orders
     *
     * @return  self
     */ 
    public function setOrders(OrderStorage $orders = null)
    {
        $this->orders = $orders;

        return $this;
    }
}