<?php
namespace Ecomo\Warehouse;
use Doctrine\ORM\Mapping as ORM;
use Ecomo\Address;
use Ecomo\Product\Storage\ProductStorage;
use Ecomo\Product\Storage\ProductStorageInterface;
use Ecomo\Warehouse\ProductInfo;
use Ecomo\Warehouse\Storage\ProductInfoStorage;
use YPHP\EntityLife;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="ware_houses")
 */
class Warehouse extends EntityLife{
    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;

    const ADDRESS = "address";
    const PRODUCTS = "products";
    const PRODUCTINFOS = "productInfos";

    public function __toArray(){
        return array_merge([
            self::ADDRESS => $this->getAddress(),
            self::PRODUCTS => $this->getProducts(),
            self::PRODUCTINFOS => $this->getProductInfos(),
        ],parent::__toArray());
    }

    /**
     * @ORM\ManyToOne(targetEntity="Ecomo\Address",cascade={"persist"})
     * @var Address
     */
    protected $address;

    /**
     * @ORM\ManyToMany(targetEntity="Ecomo\Product\Product")
     * @var ProductStorageInterface
     */
    protected $products;

    /**
     * @ORM\Column(type="object",nullable=true)
     * @var ProductInfoStorage
     */
    protected $productInfos;

    /**
     * Get the value of address
     *
     * @return  Address
     */ 
    public function getAddress()
    {
        if(!$this->address) $this->address = new Address();
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @param  Address  $address
     *
     * @return  self
     */ 
    public function setAddress(Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of products
     *
     * @return  ProductStorageInterface
     */ 
    public function getProducts()
    {
        if(!$this->products) $this->products = new ProductStorage();
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  ProductStorageInterface  $products
     *
     * @return  self
     */ 
    public function setProducts(ProductStorageInterface $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of productInfos
     *
     * @return  ProductInfoStorage
     */ 
    public function getProductInfos()
    {
        if(!$this->productInfos) $this->productInfos = new ProductInfoStorage([
            new ProductInfo(),
        ]);
        return $this->productInfos;
    }

    /**
     * Set the value of productInfos
     *
     * @param  ProductInfoStorage  $productInfos
     *
     * @return  self
     */ 
    public function setProductInfos(ProductInfoStorage $productInfos = null)
    {
        $this->productInfos = $productInfos;

        return $this;
    }
}