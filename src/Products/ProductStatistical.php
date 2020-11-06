<?php
namespace Ecomo\Products;
use YPHP\EntityStatistical;
use Ecomo\Products\Storage\ProductStorageInterface;

class ProductStatistical extends EntityStatistical{
    const TOPPRODUCTS = "topProducts";

    public function __toArray(){
        return array_merge([
            self::TOPPRODUCTS => $this->getTopProducts(),
        ],parent::__toArray());
    }
    /**
     * @var ProductStorageInterface
     */
    protected $topProducts;

    /**
     * Get the value of topProducts
     *
     * @return  ProductStorageInterface
     */ 
    public function getTopProducts()
    {
        return $this->topProducts;
    }

    /**
     * Set the value of topProducts
     *
     * @param  ProductStorageInterface  $topProducts
     *
     * @return  self
     */ 
    public function setTopProducts(ProductStorageInterface $topProducts = null)
    {
        $this->topProducts = $topProducts;

        return $this;
    }
}