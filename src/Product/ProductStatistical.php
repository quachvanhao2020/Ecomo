<?php
namespace Ecomo\Product;
use YPHP\EntityStatistical;
use Ecomo\Product\Storage\ProductStorageInterface;

class ProductStatistical extends EntityStatistical{
    const TOPPRODUCTS = "topProduct";

    public function __toArray(){
        return array_merge([
            self::TOPPRODUCTS => $this->getTopProduct(),
        ],parent::__toArray());
    }
    /**
     * @var ProductStorageInterface
     */
    protected $topProduct;

    /**
     * Get the value of topProduct
     *
     * @return  ProductStorageInterface
     */ 
    public function getTopProduct()
    {
        return $this->topProduct;
    }

    /**
     * Set the value of topProduct
     *
     * @param  ProductStorageInterface  $topProduct
     *
     * @return  self
     */ 
    public function setTopProduct(ProductStorageInterface $topProduct = null)
    {
        $this->topProduct = $topProduct;

        return $this;
    }
}