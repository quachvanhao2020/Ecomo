<?php
namespace Ecomo\Order;
use Doctrine\ORM\Mapping as ORM;
use Ecomo\Address;
use Ecomo\Ships\Shipping;
use Ecomo\Order\OrderStatus;
use YPHP\EntityLife;
use Ecomo\Identity\Customer;
use Ecomo\Order\PaymentEnum;
use Ecomo\Product\Storage\ProductStorage;
use Ecomo\Product\Product;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="orders")
 */
class Order extends EntityLife{
    
    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;

    const PAYMENTSTATUS = "paymentStatus";
    const TOKEN = "token";
    const USER = "user";
    const BILLINGADDRESS = "billingAddress";
    const SHIPPINGADDRESS = "shippingAddress";
    const TOTALAMOUNT = "totalAmount";
    const GROSSAMOUNTS = "grossAmounts";
    const SHIPPINGMETHOD = "shippingMethod";

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $token;

    /**
     * @ORM\Embedded(class = "Ecomo\Order\PaymentEnum")
     * @var PaymentEnum
     */
    protected $paymentStatus;

    /**
     * @ORM\ManyToOne(targetEntity="YPHP\Model\Stream\Image",cascade={"persist"})
     * @var Customer
     */
    protected $user;

    /**
     * @ORM\ManyToMany(targetEntity="Ecomo\Product\Product", cascade={"persist"})
     * @var ProductStorage
     */
    protected $products;

    /**
     * @ORM\ManyToOne(targetEntity="Ecomo\Address",cascade={"persist"})
     * @var Address
     */
    protected $billingAddress;

    /**
     * @ORM\ManyToOne(targetEntity="Ecomo\Address",cascade={"persist"})
     * @var Address
     */
    protected $shippingAddress;

    /**
     * @var Shipping
     */
    protected $shippingMethod;

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::TOKEN => $this->getToken(),
            self::USER => $this->getUser(),
            self::PAYMENTSTATUS => $this->getPaymentStatus(),
            self::BILLINGADDRESS => $this->getBillingAddress(),
            self::SHIPPINGADDRESS => $this->getShippingAddress(),
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
        if(!$this->status instanceof OrderStatus) $this->status = new OrderStatus(OrderStatus::DRAFT);
        return $this->status;
    }

        /**
     * Set the value of status
     *
     * @param  \Ecomo\Order\OrderStatus  $status
     *
     * @return  self
     */ 
    public function setStatus($status = null)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        if(!$this->name) $this->name = $this->getUser()->getName();

        return $this->name;
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
        if(!$this->user) $this->user = new Customer();
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
     * Get the value of paymentStatus
     *
     * @return  PaymentEnum
     */ 
    public function getPaymentStatus()
    {
        if(!$this->paymentStatus) $this->paymentStatus = new PaymentEnum(PaymentEnum::UNPAID);
        return $this->paymentStatus;
    }

    /**
     * Set the value of paymentStatus
     *
     * @param  PaymentEnum  $paymentStatus
     *
     * @return  self
     */ 
    public function setPaymentStatus(PaymentEnum $paymentStatus = null)
    {
        $this->paymentStatus = $paymentStatus;

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return  ProductStorage
     */ 
    public function getProducts()
    {
        if(!$this->products) $this->products = new ProductStorage();
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  ProductStorage  $products
     *
     * @return  self
     */ 
    public function setProducts(ProductStorage $products = null)
    {
        $this->products = $products;

        return $this;
    }
}