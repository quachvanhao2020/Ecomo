<?php
namespace Ecomo\Categorys;

use YPHP\EntityFertility;
use YPHP\Model\Media\Image;
use Ecomo\Products\Storage\ProductStorage;

class Category extends EntityFertility{
    const LOGO = "logo";
    const SLUG = "slug";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::LOGO => $this->getLogo(),
            self::SLUG => $this->getSlug(),
        ]);
    }

    public function __arrayTo(array $array)
    {
        parent::__arrayTo($array);
        $logo = @$array[self::LOGO];
        if($logo instanceof Image){

        }else if(is_array($logo)){
            $logo = \obj_to($logo,new Image());
        }
        $this->setLogo($logo);
        $this->setSlug(@$array[self::SLUG]);
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
        return $this->logo;
    }

    /**
     * Set the value of logo
     *
     * @param  Image  $logo
     *
     * @return  self
     */ 
    public function setLogo(Image $logo)
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
        return $this->products;
    }

    /**
     * Set the value of products
     *
     * @param  ProductStorage  $products
     *
     * @return  self
     */ 
    public function setProducts(ProductStorage $products)
    {
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
        return $this->slug;
    }

    /**
     * Set the value of slug
     *
     * @param  string  $slug
     *
     * @return  self
     */ 
    public function setSlug(string $slug)
    {
        $this->slug = $slug;

        return $this;
    }
}