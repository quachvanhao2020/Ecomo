<?php
namespace Ecomo\Product;

use Ecomo\Filter\AwarePriceInterface;
use Ecomo\Filter\AwareSortFilterInterface;
use Ecomo\Filter\AwareKeepInterface;
use Ecomo\Filter\SortFilter;
use YPHP\Model\Stream\Image;
use Exchamo\Money;

class ProductX extends Product implements 
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
    public function setInstallment(int $installment = null)
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
    public function setIsNew(bool $isNew = null)
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
     * @param  Money $discount 
     *
     * @return  self
     */ 
    public function setDiscount(Money $discount = null)
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
     * @param Product  $promo
     *
     * @return  self
     */ 
    public function setPromo(Product $promo = null)
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
     * @param  Image $innerImage 
     *
     * @return  self
     */ 
    public function setInnerImage(Image $innerImage = null)
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
    public function setIsFeature(bool $isFeature = null)
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
    public function setDescription(string $description = null)
    {
        $this->description = $description;

        return $this;
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
        $this->setInnerImage(\tran(@$array[self::INNERIMAGE],Image::class));
        $this->setPromo(@$array[self::PROMO]);
        $this->setDiscount(@$array[self::DISCOUNT]);
        $this->setIsNew(@$array[self::ISNEW]);
        $this->setIsFeature(@$array[self::ISFEATURE]);
        $this->setUntraImage(\tran(@$array[self::UNTRAIMAGE],Image::class));
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
        if($this->isMonopoly == null) $this->isMonopoly = false;
        return $this->isMonopoly;
    }

    /**
     * Set the value of isMonopoly
     *
     * @param  bool  $isMonopoly
     *
     * @return  self
     */ 
    public function setIsMonopoly(bool $isMonopoly = null)
    {
        $this->isMonopoly = $isMonopoly;

        return $this;
    }

}