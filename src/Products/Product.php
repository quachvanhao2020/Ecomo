<?php
namespace Ecomo\Products;

use Ecomo\Filter\AwarePriceInterface;
use Ecomo\Filter\AwareSortFilterInterface;
use Ecomo\Filter\AwareKeepInterface;
use Ecomo\Filter\SortFilter;
use YPHP\Entity;
use Ecomo\Money;

class Product extends Entity implements 
AwarePriceInterface,
AwareSortFilterInterface,
AwareKeepInterface 
{

    const NAME = "name";
    const HREF = "href";
    const MONEY = "money";
    const OLDMONEY = "oldMoney";
    const INSTALLMENT = "installment";
    const PROMO = "promo";
    const DISCOUNT = "discount";
    const ISNEW = "isNew";
    const ISFEATURE = "isFeature";
    const IMAGE = "image";
    const UNTRAIMAGE = "untraImage";
    const INNERIMAGE = "innerImage";
    const RATINGS = "ratings";
    const DESCRIPTION = "description";
    const SCRIPT = "script";
    const ISMONOPOLY = "ismonopoly";
    //const SCRIPT = "script";



        /**
     * 
     *
     * @var string
     */
    protected $name;

            /**
     * 
     *
     * @var string
     */
    protected $href;

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
     * @var int
     */
    protected $installment;

                    /**
     * 
     *
     * @var self || int
     */
    protected $promo;

        /**
     * 
     *
     * @var Money || int
     */
    protected $discount;

            /**
     * 
     *
     * @var bool
     */
    protected $isNew;

                /**
     * 
     *
     * @var bool
     */
    protected $isMonopoly;

                /**
     * 
     *
     * @var bool
     */
    protected $isFeature;

            /**
     * 
     *
     * @var ImageModel || ImgView
     */
    protected $image;

                /**
     * 
     *
     * @var ImageModel || ImgView
     */
    protected $untraImage;

                /**
     * 
     *
     * @var ImageModel || ImgView
     */
    protected $innerImage;


    /**
     * 
     *
     * @var string[]
     */
    protected $ratings;

        /**
     * 
     *
     * @var string
     */
    protected $description;

            /**
     * 
     *
     * @var string
     */
    protected $script;

    public function getPrice(){

        return $this->getMoney();

    }

    public function keepReason($flag = ''){

        switch ($flag) {
            case self::ISNEW:
                
                if(!$this->getIsNew()) return false;

                break;

            case self::ISMONOPOLY:

                if(!$this->getIsMonopoly()) return false;

                break;
            
            default:
                # code...
                break;
        }

        return true;

    }

    public function getWeight($flag = SortFilter::MOST){

        switch ($flag) {
            case SortFilter::MOST:
                return count($this->getRatings());
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

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of installment
     *
     * @return  int
     */ 
    public function getInstallment()
    {
        return $this->installment;
    }

    /**
     * Set the value of installment
     *
     * @param  int  $installment
     *
     * @return  self
     */ 
    public function setInstallment(int $installment)
    {
        $this->installment = $installment;

        return $this;
    }

    /**
     * Get the value of image
     *
     * @return  ImageModel
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @param  ImageModel || ImgView  $image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of href
     *
     * @return  string
     */ 
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set the value of href
     *
     * @param  string  $href
     *
     * @return  self
     */ 
    public function setHref(string $href)
    {
        $this->href = $href;

        return $this;
    }

    /**
     * Get the value of isNew
     *
     * @return  bool
     */ 
    public function getIsNew()
    {
        return $this->isNew;
    }

    /**
     * Set the value of isNew
     *
     * @param  bool  $isNew
     *
     * @return  self
     */ 
    public function setIsNew(bool $isNew)
    {
        $this->isNew = $isNew;

        return $this;
    }

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
     * Get || int
     *
     * @return  Money
     */ 
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set || int
     *
     * @param  Money | null $discount  || int
     *
     * @return  self
     */ 
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }


    /**
     * Get || int
     *
     * @return  self
     */ 
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set
     *
     * @param Product | null  $promo
     *
     * @return  self
     */ 
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get || ImgView
     *
     * @return  ImageModel
     */ 
    public function getInnerImage()
    {
        return $this->innerImage;
    }

    /**
     * Set || ImgView
     *
     * @param  ImageModel | null  $innerImage 
     *
     * @return  self
     */ 
    public function setInnerImage($innerImage)
    {
        $this->innerImage = $innerImage;

        return $this;
    }


    /**
     * Get the value of isFeature
     *
     * @return  bool
     */ 
    public function getIsFeature()
    {
        return $this->isFeature;
    }

    /**
     * Set the value of isFeature
     *
     * @param  bool  $isFeature
     *
     * @return  self
     */ 
    public function setIsFeature(bool $isFeature)
    {
        $this->isFeature = $isFeature;

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
     * @param  Money | null  $oldMoney
     *
     * @return  self
     */ 
    public function setOldMoney($oldMoney)
    {
        $this->oldMoney = $oldMoney;

        return $this;
    }


    /**
     * Get the value of description
     *
     * @return  string
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */ 
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

        /**
     * Get the value of script
     *
     * @return  string
     */ 
    public function impact(self $product,string $method)
    {
        $self = $this;

        $path = $this->getScript().".php";

        if(file_exists($path)){

            return include($path);

        }
    }

    /**
     * Get the value of script
     *
     * @return  string
     */ 
    public function getScript()
    {
        return $this->script;
    }

    /**
     * Set the value of script
     *
     * @param  string  $script
     *
     * @return  self
     */ 
    public function setScript(string $script)
    {
        $this->script = $script;

        return $this;
    }

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::MONEY => $this->getMoney(),
            self::OLDMONEY => $this->getOldMoney(),
            self::INNERIMAGE => $this->getInstallment(),
            self::PROMO => $this->getPromo(),
            self::DISCOUNT => $this->getDiscount(),
            self::ISNEW => $this->getIsNew(),
            self::ISFEATURE => $this->getIsFeature(),
            self::IMAGE => $this->getImage(),
            self::UNTRAIMAGE => $this->getUntraImage(),
            self::INNERIMAGE => $this->getInnerImage(),
            self::RATINGS => $this->getRatings(),
            self::DESCRIPTION => $this->getDescription(),
            self::SCRIPT => $this->getScript(),
        ]);
    }

    /**
     * Get || ImgView
     *
     * @return  ImageModel
     */ 
    public function getUntraImage()
    {
        return $this->untraImage;
    }

    /**
     * Set || ImgView
     *
     * @param  ImageModel  $untraImage  || ImgView
     *
     * @return  self
     */ 
    public function setUntraImage($untraImage)
    {
        $this->untraImage = $untraImage;

        return $this;
    }

    /**
     * Get the value of isMonopoly
     *
     * @return  bool
     */ 
    public function getIsMonopoly()
    {
        return $this->isMonopoly;
    }

    /**
     * Set the value of isMonopoly
     *
     * @param  bool  $isMonopoly
     *
     * @return  self
     */ 
    public function setIsMonopoly(bool $isMonopoly)
    {
        $this->isMonopoly = $isMonopoly;

        return $this;
    }

    /**
     * Get the value of ratings
     *
     * @return  string[]
     */ 
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Set the value of ratings
     *
     * @param  string[]  $ratings
     *
     * @return  self
     */ 
    public function setRatings($ratings)
    {
        $this->ratings = $ratings;

        return $this;
    }
}