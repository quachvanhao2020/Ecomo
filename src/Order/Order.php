<?php
namespace Ecomo\Order;
use YPHP\Entity;
use Identimo\User;
use Ecomo\Address;
use Ecomo\Money;
use Ecomo\Storage\MoneyStorage;
use Ecomo\Ships\Shipping;
use Ecomo\Order\OrderStatus;
use YPHP\EntityLife;
use Ecomo\Identity\Customer;

class Order extends EntityLife{
    const TOKEN = "token";
    const USER = "user";
    const BILLINGADDRESS = "billingAddress";
    const SHIPPINGADDRESS = "shippingAddress";
    const TOTALAMOUNT = "totalAmount";
    const GROSSAMOUNTS = "grossAmounts";
    const SHIPPINGMETHOD = "shippingMethod";
    /**
     * @var string
     */
    protected $token;
    /**
     * @var Customer
     */
    protected $user;
    /**
     * @var Address
     */
    protected $billingAddress;
    /**
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @var Money
     */
    protected $totalAmount;

    /**
     * @var MoneyStorage
     */
    protected $grossAmounts;

        /**
     * @var Shipping
     */
    protected $shippingMethod;

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::TOKEN => $this->getToken(),
            self::USER => $this->getUser(),
            self::BILLINGADDRESS => $this->getBillingAddress(),
            self::SHIPPINGADDRESS => $this->getShippingAddress(),
            self::TOTALAMOUNT => $this->getTotalAmount(),
            self::GROSSAMOUNTS => $this->getGrossAmounts(),
            self::SHIPPINGMETHOD => $this->getShippingMethod(),
        ]);
    }

    /**
     * Get the value of status
     *
     * @return  OrderStatus
     */ 
    public function getStatus()
    {
        if(!$this->status) $this->status = new OrderStatus(OrderStatus::DRAFT);
        return $this->status;
    }

    /**
     * Get the value of shippingMethod
     *
     * @return  Shipping
     */ 
    public function getShippingMethod()
    {
        return $this->shippingMethod;
    }

    /**
     * Set the value of shippingMethod
     *
     * @param  Shipping  $shippingMethod
     *
     * @return  self
     */ 
    public function setShippingMethod(Shipping $shippingMethod = null)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }

    /**
     * Get the value of token
     *
     * @return  string
     */ 
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set the value of token
     *
     * @param  string  $token
     *
     * @return  self
     */ 
    public function setToken(string $token = null)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get the value of user
     *
     * @return  Customer
     */ 
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set the value of user
     *
     * @param  Customer  $user
     *
     * @return  self
     */ 
    public function setUser(Customer $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get the value of billingAddress
     *
     * @return  Address
     */ 
    public function getBillingAddress()
    {
        if(!$this->billingAddress) $this->billingAddress = new Address();

        return $this->billingAddress;
    }

    /**
     * Set the value of billingAddress
     *
     * @param  Address  $billingAddress
     *
     * @return  self
     */ 
    public function setBillingAddress(Address $billingAddress = null)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get the value of shippingAddress
     *
     * @return  Address
     */ 
    public function getShippingAddress()
    {
        if(!$this->shippingAddress) $this->shippingAddress = new Address();

        return $this->shippingAddress;
    }

    /**
     * Set the value of shippingAddress
     *
     * @param  Address  $shippingAddress
     *
     * @return  self
     */ 
    public function setShippingAddress(Address $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get the value of totalAmount
     *
     * @return  Money
     */ 
    public function getTotalAmount()
    {
        if(!$this->totalAmount) $this->totalAmount = new Money();
        return $this->totalAmount;
    }

    /**
     * Set the value of totalAmount
     *
     * @param  Money  $totalAmount
     *
     * @return  self
     */ 
    public function setTotalAmount(Money $totalAmount = null)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get the value of grossAmounts
     *
     * @return  MoneyStorage
     */ 
    public function getGrossAmounts()
    {
        if(!$this->grossAmounts) $this->grossAmounts = new MoneyStorage();

        return $this->grossAmounts;
    }

    /**
     * Set the value of grossAmounts
     *
     * @param  MoneyStorage  $grossAmounts
     *
     * @return  self
     */ 
    public function setGrossAmounts(MoneyStorage $grossAmounts = null)
    {
        $this->grossAmounts = $grossAmounts;

        return $this;
    }
    
}