<?php
namespace Ecomo\Product;
use Societymo\Storage\RatingStorage;
use Ecomo\Product\Storage\ProductStorage;
use Ecomo\Product\Storage\ProductSocietyStorage;
use Ecomo\Filter\SortFilter;

class ProductSociety extends ProductX{
    
    const SCRIPT = "script";
    const RATINGS = "ratings";
    const COMPARES = "compares";
    const RATINGAVERAGE = "ratingAverage";
    const RATINGCOUNT = "ratingCount";
    
    public function getWeight($flag = SortFilter::MOST){
        switch ($flag) {
            case SortFilter::MOST:
                return $this->getRatingCount();
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
            self::SCRIPT => $this->getScript(),
            self::RATINGS => $this->getRatings(),
            self::COMPARES => $this->getCompares(),
            self::RATINGAVERAGE => $this->getRatingAverage(),
            self::RATINGCOUNT => $this->getRatingCount()
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setScript(@$array[self::SCRIPT]);
        $this->setRatings(\tran(@$array[self::RATINGS],RatingStorage::class));
        $this->setCompares(\tran(@$array[self::COMPARES],ProductStorage::class));
        $this->setRatingAverage(@$array[self::RATINGAVERAGE]);
        $this->setRatingCount(@$array[self::RATINGCOUNT]);
    }

        /**
     * 
     *
     * @var ProductStorage
     */
    protected $compares;
        /**
     * 
     *
     * @var RatingStorage
     */
    protected $ratings;

    /**
     * @var int
     */
    protected $ratingAverage;

        /**
     * @var int
     */
    protected $ratingCount;

        /**
     * 
     *
     * @var string
     */
    protected $script;

    /**
     * Get the value of compares
     *
     * @return  ProductStorage
     */ 
    public function getCompares()
    {
        return $this->compares;
    }

    /**
     * Set the value of compares
     *
     * @param  \Ecomo\Product\Storage\ProductStorage  $compares
     *
     * @return  self
     */ 
    public function setCompares($compares)
    {
        $this->compares = $compares;

        return $this;
    }

    /**
     * Get the value of ratings
     *
     * @return  RatingStorage
     */ 
    public function getRatings()
    {
        return $this->ratings;
    }

    /**
     * Set the value of ratings
     *
     * @param  \Societymo\Storage\RatingStorage  $ratings
     *
     * @return  self
     */ 
    public function setRatings(RatingStorage $ratings = null)
    {
        $this->ratings = $ratings;

        return $this;
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
    public function setScript(string $script = null)
    {
        $this->script = $script;

        return $this;
    }


    /**
     * Get the value of ratingAverage
     *
     * @return  int
     */ 
    public function getRatingAverage()
    {
        return $this->ratingAverage;
    }

    /**
     * Set the value of ratingAverage
     *
     * @param  int  $ratingAverage
     *
     * @return  self
     */ 
    public function setRatingAverage(int $ratingAverage = null)
    {
        $this->ratingAverage = $ratingAverage;

        return $this;
    }

    /**
     * Get the value of ratingCount
     *
     * @return  int
     */ 
    public function getRatingCount()
    {
        return $this->ratingCount;
    }

    /**
     * Set the value of ratingCount
     *
     * @param  int  $ratingCount
     *
     * @return  self
     */ 
    public function setRatingCount(int $ratingCount = null)
    {
        $this->ratingCount = $ratingCount;

        return $this;
    }
}