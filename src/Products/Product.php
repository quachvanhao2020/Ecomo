<?php
namespace Ecomo\Products;

use YPHP\EntityFertility;
use YPHP\DateTime;
use Ecomo\Categorys\Category;
use Ecomo\Filter\AwarePriceInterface;
use Ecomo\Money;
use Ecomo\Products\Storage\ProductStorage;
use YPHP\EntityFertilityFinal;
use YPHP\Model\Media\Image;
use YPHP\Storage\AttributeStorage;

class Product extends EntityFertilityFinal implements AwarePriceInterface{

    const LOGO = "logo";
    const MONEY = "money";
    const OLDMONEY = "oldMoney";
    const TAX = "tax";
    const UPDATEDAT = "updatedAt";
    const TYPE = "type";
    const CATEGORY = "category";
    const SLUG = "slug";
    const AVAILABLEFORPURCHASE = "availableForPurchase";
    const DEFAULTVARIANT = "defaultVaxriant";
    const VARIANTS = "variants";

    public function getPrice(){
        return $this->getMoney();
    }

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::LOGO => $this->getLogo(),
            self::MONEY => $this->getMoney(),
            self::OLDMONEY => $this->getOldMoney(),
            self::TAX => $this->getTax(),
            self::UPDATEDAT => $this->getUpdatedAt(),
            self::TYPE => $this->getType(),
            self::CATEGORY => $this->getCategory(),
            self::SLUG => $this->getSlug(),
            self::AVAILABLEFORPURCHASE => $this->getAvailableForPurchase(),
            self::DEFAULTVARIANT => $this->getDefaultVariant(),
            self::VARIANTS => $this->getVariants(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $logo = @$array[self::LOGO];
        if(!$logo instanceof Image){
            $logo = \tran($logo,Image::class);
        }
        $this->setLogo($logo);
        $this->setSlug(@$array[self::SLUG]);
        $money = @$array[self::MONEY];
        if(!$money instanceof Money){
            $money = \tran($money,Money::class);
        }
        $this->setMoney($money);
        $money = @$array[self::OLDMONEY];
        if(!$money instanceof Money){
            $money = \tran($money,Money::class);
        }
        $this->setOldMoney($money);        
        $this->setTax(@$array[self::TAX]);
        $this->setUpdatedAt(@$array[self::UPDATEDAT]);
        $this->setType(@$array[self::TYPE]);

        $category = $array[self::CATEGORY];
        if(!$category instanceof Category){
            $category = \tran($category,Category::class);
        }
        $this->setCategory($category);  
        $this->setDefaultVariant(@$array[self::DEFAULTVARIANT]);
        $this->setAvailableForPurchase(@$array[self::AVAILABLEFORPURCHASE]);
        $this->setVariants(@$array[self::VARIANTS]);
    }

    /**
     * @var AttributeStorage|null
     */
    protected $attributes;
    /**
     * 
     *
     * @var Image
     */
    protected $logo;
    /**
     * 
     *
     * @var Money
     */
    protected $money;

    /**
     * 
     *
     * @var Money
     */
    protected $oldMoney;

        /**
     * 
     *
     * @var Money
     */
    protected $tax;

    /**
     * @var DateTime
     */
    protected $updatedAt;

    /**
     * @var string
     */
    protected $type;

        /**
     * @var Category
     */
    protected $category;

    /**
     * @var string
     */
    protected $slug;

            /**
     * @var bool
     */
    protected $availableForPurchase;

    /**
     * @var Product
     */
    protected $defaultVariant;

        /**
     * @var ProductStorage
     */
    protected $variants;

    /**
     * Get the value of money
     *
     * @return  Money
     */ 
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set the value of money
     *
     * @param  Money  $money
     *
     * @return  self
     */ 
    public function setMoney(Money $money = null)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get the value of oldMoney
     *
     * @return  Money
     */ 
    public function getOldMoney()
    {
        return $this->oldMoney;
    }

    /**
     * Set the value of oldMoney
     *
     * @param  Money  $oldMoney
     *
     * @return  self
     */ 
    public function setOldMoney(Money $oldMoney = null)
    {
        $this->oldMoney = $oldMoney;

        return $this;
    }

    /**
     * Get the value of tax
     *
     * @return  Money
     */ 
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * Set the value of tax
     *
     * @param  Money  $tax
     *
     * @return  self
     */ 
    public function setTax(Money $tax = null)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * Get the value of updatedAt
     *
     * @return  DateTime
     */ 
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set the value of updatedAt
     *
     * @param  DateTime  $updatedAt
     *
     * @return  self
     */ 
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of category
     *
     * @return  Category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  Category  $category
     *
     * @return  self
     */ 
    public function setCategory(Category $category = null)
    {
        $this->category = $category;

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
    public function setSlug(string $slug = null)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of availableForPurchase
     *
     * @return  bool
     */ 
    public function getAvailableForPurchase()
    {
        return $this->availableForPurchase;
    }

    /**
     * Set the value of availableForPurchase
     *
     * @param  bool  $availableForPurchase
     *
     * @return  self
     */ 
    public function setAvailableForPurchase(bool $availableForPurchase = false)
    {
        $this->availableForPurchase = $availableForPurchase;

        return $this;
    }

    /**
     * Get the value of defaultVariant
     *
     * @return  Product
     */ 
    public function getDefaultVariant()
    {
        return $this->defaultVariant;
    }

    /**
     * Set the value of defaultVariant
     *
     * @param  Product  $defaultVariant
     *
     * @return  self
     */ 
    public function setDefaultVariant(Product $defaultVariant = null)
    {
        $this->defaultVariant = $defaultVariant;

        return $this;
    }

    /**
     * Get the value of variants
     *
     * @return  ProductStorage
     */ 
    public function getVariants()
    {
        return $this->variants;
    }

    /**
     * Set the value of variants
     *
     * @param  ProductStorage  $variants
     *
     * @return  self
     */ 
    public function setVariants($variants)
    {
        if($variants instanceof ProductStorage)
        $this->variants = $variants;
        return $this;
    }

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
    public function setLogo(Image $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }
}