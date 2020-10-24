<?php
namespace Ecomo\Products;

use YPHP\EntityFertility;
use YPHP\DateTime;
use Ecomo\Categorys\Category;
use Ecomo\Money;
use Ecomo\Tech\Storage\ProductStorage;
use YPHP\Model\Media\Image;


class Product extends EntityFertility{

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
    public function setMoney(Money $money)
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
    public function setOldMoney(Money $oldMoney)
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
    public function setTax(Money $tax)
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
    public function setUpdatedAt(DateTime $updatedAt)
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
    public function setType(string $type)
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
    public function setCategory(Category $category)
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
    public function setSlug(string $slug)
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
    public function setAvailableForPurchase(bool $availableForPurchase)
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
    public function setDefaultVariant(Product $defaultVariant)
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
    public function setVariants(ProductStorage $variants)
    {
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
    public function setLogo(Image $logo)
    {
        $this->logo = $logo;

        return $this;
    }
}