<?php
namespace Ecomo\Products;
use Societymo\Storage\RatingStorage;
use Ecomo\Products\Storage\ProductStorage;
use Ecomo\Products\Storage\ProductSocietyStorage;

class ProductSociety extends ProductX{
    
    const SCRIPT = "script";
    const RATINGS = "ratings";
    const COMPARES = "compares";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::SCRIPT => $this->getScript(),
            self::RATINGS => $this->getRatings(),
            self::COMPARES => $this->getCompares(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setScript($array[self::SCRIPT]);
        $ratings = @$array[self::RATINGS];
        if(is_array($ratings)){
            $ratings = \tran($ratings,RatingStorage::class);
        }
        $this->setRatings($ratings);

        $compares = @$array[self::COMPARES];
        if(is_array($compares)){
            $compares = \tran($compares,ProductStorage::class);
        }
        $this->setCompares($compares);
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
     * @param  ProductStorage  $compares
     *
     * @return  self
     */ 
    public function setCompares(ProductStorage $compares)
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
     * @param  RatingStorage  $ratings
     *
     * @return  self
     */ 
    public function setRatings(RatingStorage $ratings)
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
    public function setScript(string $script)
    {
        $this->script = $script;

        return $this;
    }

}