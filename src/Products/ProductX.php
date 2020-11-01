<?php
namespace Ecomo\Products;

use Ecomo\Filter\AwarePriceInterface;
use Ecomo\Filter\AwareSortFilterInterface;
use Ecomo\Filter\AwareKeepInterface;
use Ecomo\Filter\SortFilter;
use Ecomo\Money;
use YPHP\Model\Media\Image;
use Societymo\Storage\RatingStorage;

class ProductX extends Product implements 
AwarePriceInterface,
AwareSortFilterInterface,
AwareKeepInterface 
{

    const INSTALLMENT = "installment";
    const PROMO = "promo";
    const DISCOUNT = "discount";
    const ISNEW = "isNew";
    const ISFEATURE = "isFeature";
    const UNTRAIMAGE = "untraImage";
    const INNERIMAGE = "innerImage";
    const DESCRIPTION = "description";
    const ISMONOPOLY = "ismonopoly";

    /**
     * 
     *
     * @var int
     */
    protected $installment;

    /**
     * 
     *
     * @var self
     */
    protected $promo;

        /**
     * 
     *
     * @var Money
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
     * @var Image 
     */
    protected $untraImage;

    /**
     * 
     *
     * @var Image 
     */
    protected $innerImage;


    /**
     * 
     *
     * @var string
     */
    protected $description;

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
                //return count($this->getRatings());
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
     * Get 
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
     * Get 
     *
     * @return  Image
     */ 
    public function getInnerImage()
    {
        return $this->innerImage;
    }

    /**
     * Set 
     *
     * @param  Image | null  $innerImage 
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
        $path = "$this->getScript()".".php";
        if(file_exists($path)){
            return include($path);
        }
    }

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::INSTALLMENT => $this->getInstallment(),
            self::PROMO => $this->getPromo(),
            self::DISCOUNT => $this->getDiscount(),
            self::ISNEW => $this->getIsNew(),
            self::ISFEATURE => $this->getIsFeature(),
            self::UNTRAIMAGE => $this->getUntraImage(),
            self::INNERIMAGE => $this->getInnerImage(),
            self::DESCRIPTION => $this->getDescription(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setInnerImage(@$array[self::INNERIMAGE]);
        $this->setPromo(@$array[self::PROMO]);
        $this->setDiscount(@$array[self::DISCOUNT]);
        $this->setIsNew(@$array[self::ISNEW]);
        $this->setIsFeature(@$array[self::ISFEATURE]);
        $this->setUntraImage(@$array[self::UNTRAIMAGE]);
        $this->setInstallment(@$array[self::INSTALLMENT]);
        $this->setDescription(@$array[self::DESCRIPTION]);
    }

    /**
     * Get 
     *
     * @return  Image
     */ 
    public function getUntraImage()
    {
        return $this->untraImage;
    }

    /**
     * Set 
     *
     * @param  Image  $untraImage  
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

}