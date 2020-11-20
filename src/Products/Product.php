<?php
namespace Ecomo\Products;

use YPHP\DateTime;
use Ecomo\Categorys\Category;
use Ecomo\Filter\AwareKeepInterface;
use Ecomo\Filter\AwarePriceInterface;
use Ecomo\Filter\AwareSortFilterInterface;
use Ecomo\Products\Storage\ProductStorage;
use YPHP\EntityFertilityFinal;
use YPHP\Model\Media\Image;
use YPHP\Storage\AttributeStorage;
use Ecomo\Filter\SortFilter;
use Ecomo\Money;

class Product extends EntityFertilityFinal implements 
ProductInterface,
AwarePriceInterface,
AwareSortFilterInterface
{

    const LOGO = "logo";
    const MONEY = "money";
    const OLDMONEY = "oldMoney";
    const TAX = "tax";
    const TYPE = "type";
    const CATEGORY = "category";
    const SLUG = "slug";
    const AVAILABLEFORPURCHASE = "availableForPurchase";
    const VARIANTS = "variants";

    public function getPrice(){
        return $this->getMoney();
    }

    public function getWeight($flag = SortFilter::MOST){
        switch ($flag) {
            case SortFilter::MOST:
                //return count($this->get());
                break;
            case SortFilter::SORT_DESC:
            case SortFilter::SORT_ASC:
                return $this->getMoney()->getPrice();
                break;
            default:
                # code...
                break;
        }
    }


    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::LOGO => $this->getLogo(),
            self::MONEY => $this->getMoney(),
            self::OLDMONEY => $this->getOldMoney(),
            self::TAX => $this->getTax(),
            self::TYPE => $this->getType(),
            self::CATEGORY => $this->getCategory(),
            self::SLUG => $this->getSlug(),
            self::AVAILABLEFORPURCHASE => $this->getAvailableForPurchase(),
            self::VARIANTS => $this->getVariants(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setLogo(\tran(@$array[self::LOGO],Image::class));
        $this->setSlug(@$array[self::SLUG]);
        $this->setMoney(\tran(@$array[self::MONEY],Money::class));
        $this->setOldMoney(\tran(@$array[self::OLDMONEY],Money::class));        
        $this->setTax(@$array[self::TAX]);
        $this->setType(@$array[self::TYPE]);
        $this->setCategory(\tran($array[self::CATEGORY],Category::class));  
        $this->setAvailableForPurchase(@$array[self::AVAILABLEFORPURCHASE]);
        $this->setVariants(@$array[self::VARIANTS]);
    }

    /**
     * @var AttributeStorage
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
        if(!$this->money) $this->money = new Money();
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
        if(!$this->oldMoney) $this->oldMoney = new Money();
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
        if(!$this->tax) $this->tax = new Money();
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
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        if(!$this->type) $this->type = "";
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
        if(!$this->category) $this->category = new Category();
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

    /**
     * Get the value of availableForPurchase
     *
     * @return  bool
     */ 
    public function getAvailableForPurchase()
    {
        if(!$this->availableForPurchase) $this->availableForPurchase = false;
        return $this->availableForPurchase;
    }

    /**
     * Set the value of availableForPurchase
     *
     * @param  bool  $availableForPurchase
     *
     * @return  self
     */ 
    public function setAvailableForPurchase(bool $availableForPurchase = null)
    {
        $this->availableForPurchase = $availableForPurchase;

        return $this;
    }

    /**
     * Get the value of variants
     *
     * @return  ProductStorage
     */ 
    public function getVariants()
    {
        if(!$this->variants) $this->variants = new ProductStorage();
        return $this->variants;
    }

    /**
     * Set the value of variants
     *
     * @param  \Ecomo\Products\Storage\ProductStorage  $variants
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
}