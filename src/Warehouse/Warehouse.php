<?php
namespace Ecomo\Warehouse;
use Ecomo\Address;
use Ecomo\Products\Storage\ProductStorage;
use YPHP\Entity;
use Ecomo\Products\Storage\ProductStorageInterface;
use Ecomo\Warehouse\ProductInfo;
use Ecomo\Warehouse\Storage\ProductInfoStorage;
use YPHP\EntityLife;

class Warehouse extends EntityLife{
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
     * @var Address
     */
    protected $address;

        /**
     * @var ProductStorageInterface
     */
    protected $products;

            /**
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