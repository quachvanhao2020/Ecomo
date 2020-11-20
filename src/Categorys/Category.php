<?php
namespace Ecomo\Categorys;

use YPHP\EntityFertility;
use YPHP\Model\Media\Image;
use Ecomo\Products\Storage\ProductStorage;

class Category extends EntityFertility{

    const LOGO = "logo";
    const SLUG = "slug";
    const PRODUCTS = "products";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::LOGO => $this->getLogo(),
            self::SLUG => $this->getSlug(),
            self::PRODUCTS => $this->getProducts(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setLogo(\tran(@$array[self::LOGO],Image::class));
        $this->setSlug(@$array[self::SLUG]);
        $this->setProducts(\tran(@$array[self::PRODUCTS],ProductStorage::class));
    }
    /**
     * 
     *
     * @var Image
     */
    protected $logo;

        /**
     * 
     *
     * @var string
     */
    protected $slug;

        /**
     * 
     *
     * @var ProductStorage
     */
    protected $products;

    /**
     * Get the value of logo
     *
     * @return  Image
     */ 
    public function getLogo()
    {
        if(!$this->logo) $this->logo = new Image();
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  Image  $logo
     *
     * @return  self
     */ 
    public function setLogo(Image $logo = null)
    {
        $this->logo = $logo;

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
     * @param  \Ecomo\Products\Storage\ProductStorage  $products
     *
     * @return  self
     */ 
    public function setProducts($products = null)
    {
        if(!$products instanceof ProductStorage) return;

        $this->products = $products;

        return $this;
    }

    /**
     * Get the value of slug
     *
     * @return  string
     */ 
    public function getSlug()
    {
        if(!$this->slug) $this->slug = "";
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @param  string  $slug
     *
     * @return  self
     */ 
    public function setSlug(string $slug = null)
    {
        $this->slug = $slug;

        return $this;
    }
}