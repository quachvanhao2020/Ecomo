<?php
namespace Ecomo\Identity;
use Ecomo\Address;
use Identimo\User;
use Ecomo\Order\Storage\OrderStorage;
use Doctrine\ORM\Mapping as ORM;
use Ecomo\Order\Order;

/** 
 * @ORM\Entity 
 * @ORM\DiscriminatorMap({"customer" = "Customer"})
 * @ORM\Table(name="customer")
 */
abstract class Customer extends User{

    const SHIPPINGADDRESS = "shippingAddress";
    const BILLINGADDRESS = "billingAddress";
    const ORDERS = "orders";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::BILLINGADDRESS => $this->getBillingAddress(),
            self::SHIPPINGADDRESS => $this->getShippingAddress(),
            self::ORDERS => $this->getOrders(),
        ]);
    }

    /**
     * @ORM\OneToMany(targetEntity="Ecomo\Order\Order", mappedBy="parent")
     * @var OrderStorage
     */
    protected $orders;

    /**
     * @ORM\ManyToOne(targetEntity="Ecomo\Address",cascade={"persist"})
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @ORM\ManyToOne(targetEntity="Ecomo\Address",cascade={"persist"})
     * @var Address
     */
    protected $billingAddress;

    /**
     * Get the value of ShippingAddress
     *
     * @return  Address
     */ 
    public function getShippingAddress()
    {
        if(!$this->shippingAddress) $this->shippingAddress = new Address();
        return $this->shippingAddress;
    }

    /**
     * Set the value of ShippingAddress
     *
     * @param  Address  $shippingAddress
     *
     * @return  self
     */ 
    public function setShippingAddress(Address $shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get the value of BillingAddress
     *
     * @return  Address
     */ 
    public function getBillingAddress()
    {
        if(!$this->billingAddress) $this->billingAddress = new Address();
        return $this->billingAddress;
    }

    /**
     * Set the value of BillingAddress
     *
     * @param  Address  $billingAddress
     *
     * @return  self
     */ 
    public function setBillingAddress(Address $billingAddress)
    {
        $this->billingAddress = $billingAddress;

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