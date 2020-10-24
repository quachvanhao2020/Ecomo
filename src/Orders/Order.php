<?php
namespace Ecomo\Orders;
use YPHP\Entity;
use Identimo\User;
use Ecomo\Address;
use Ecomo\Money;
use Ecomo\Storage\MoneyStorage;
use Ecomo\Ships\Shipping;

class Order extends Entity{

    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $token;
    /**
     * @var User
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
    public function setShippingMethod(Shipping $shippingMethod)
    {
        $this->shippingMethod = $shippingMethod;

        return $this;
    }
    
}