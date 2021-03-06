<?php
namespace Ecomo\Product;

use ArrayAccess;
use YPHP\Entity;
use YPHP\FilterInputInterface;
use Ecomo\Paginator;
use Laminas\Paginator\Adapter;
use Ecomo\Product\Storage\ProductStorage;
use YPHP\Attribute;
use YPHP\AttributeFilter;
use YPHP\Storage\AttributeStorage;
use Ecomo\Filter\PriceFilter;

class ProductFilter extends Entity implements FilterInputInterface{
    
    const CATEGORY = "category";
    const MANUFACTURE = "manufacture";
    const PRICERANGE = "priceRange";
    const FEATURE = "feature";
    const PROPERTY = "property";
    const ORDERBY = "orderBy";
    const PAGESIZE = "pageSize";
    const PAGEINDEX = "pageIndex";
    const OTHERS = "others";
    const CLEARCACHE = "clearCache";
    const COUNT = "count";
    const PRICEFILTERS = "priceFilters";

    public function __toArray() {
        return array_merge(parent::__toArray(),[
            self::CATEGORY => $this->getCategory(),
            self::MANUFACTURE => $this->getManufacture(),
            self::PRICERANGE => $this->getPriceRange(),
            self::FEATURE => $this->getFeature(),
            self::PROPERTY => $this->getProperty(),
            self::ORDERBY => $this->getOrderBy(),
            self::PAGESIZE => $this->getPageSize(),
            self::PAGEINDEX => $this->getPageIndex(),
            self::OTHERS => $this->getOthers(),
            self::COUNT => $this->getCount(),
            self::CLEARCACHE => $this->getClearCache(),
            self::PRICEFILTERS => $this->getPriceFilters(),
        ]);
    }

    /**
     * @var PriceFilter[]
     */
    protected $priceFilters;

    /**
     * @var string
     */    
    protected $category;

        /**
     * @var string
     */    
    protected $manufacture;

            /**
     * @var string
     */    
    protected $priceRange;

        /**
     * @var string
     */    
    protected $feature;

        /**
     * @var string
     */    
    protected $property;

            /**
     * @var string
     */    
    protected $orderBy;

            /**
     * @var string
     */    
    protected $pageSize;

        /**
     * @var string
     */    
    protected $pageIndex;

            /**
     * @var string
     */    
    protected $others;

                /**
     * @var string
     */    
    protected $count;

                /**
     * @var string
     */    
    protected $clearCache;

    /**
     * Get the value of category
     */ 
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @return  self
     */ 
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of manufacture
     */ 
    public function getManufacture()
    {
        return $this->manufacture;
    }

    /**
     * Set the value of manufacture
     *
     * @return  self
     */ 
    public function setManufacture($manufacture)
    {
        $this->manufacture = $manufacture;

        return $this;
    }

    /**
     * Get the value of priceRange
     */ 
    public function getPriceRange()
    {
        return $this->priceRange;
    }

    /**
     * Set the value of priceRange
     *
     * @return  self
     */ 
    public function setPriceRange($priceRange)
    {
        $this->priceRange = $priceRange;

        return $this;
    }

    /**
     * Get the value of feature
     */ 
    public function getFeature()
    {
        return $this->feature;
    }

    /**
     * Set the value of feature
     *
     * @return  self
     */ 
    public function setFeature($feature)
    {
        $this->feature = $feature;

        return $this;
    }

    /**
     * Get the value of property
     */ 
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Set the value of property
     *
     * @return  self
     */ 
    public function setProperty($property)
    {
        $this->property = $property;

        return $this;
    }

    /**
     * Get the value of orderBy
     */ 
    public function getOrderBy()
    {
        return $this->orderBy;
    }

    /**
     * Set the value of orderBy
     *
     * @return  self
     */ 
    public function setOrderBy($orderBy)
    {
        $this->orderBy = $orderBy;

        return $this;
    }

    /**
     * Get the value of pageSize
     */ 
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Set the value of pageSize
     *
     * @return  self
     */ 
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * Get the value of pageIndex
     */ 
    public function getPageIndex()
    {
        return $this->pageIndex;
    }

    /**
     * Set the value of pageIndex
     *
     * @return  self
     */ 
    public function setPageIndex($pageIndex)
    {
        $this->pageIndex = $pageIndex;

        return $this;
    }

    /**
     * Get the value of others
     */ 
    public function getOthers()
    {
        return $this->others;
    }

    /**
     * Set the value of others
     *
     * @return  self
     */ 
    public function setOthers($others)
    {
        $this->others = $others;

        return $this;
    }

    /**
     * Get the value of clearCache
     */ 
    public function getClearCache()
    {
        return $this->clearCache;
    }

    /**
     * Set the value of clearCache
     *
     * @return  self
     */ 
    public function setClearCache($clearCache)
    {
        $this->clearCache = $clearCache;

        return $this;
    }

    /**
     * Get the value of count
     */ 
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set the value of count
     *
     * @return  self
     */ 
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * @param ProductStorage $products
     * @return mixed
     */
    function filter(ArrayAccess &$products){
        $self = $this;
        $paginator =new Paginator();
        $paginator->setCallableAdapter(function(Paginator $paginator) use($self){
            $paginator->setCurrentPageNumber($self->getPageIndex());
            $paginator->setItemCountPerPage($self->getPageSize());
        });
        $paginator->setAdapter(new Adapter\ArrayAdapter($products->getStorage()));
        $products->setStorage((array)$paginator->getCurrentItems());
        if($property = $this->getProperty()){
            $propertys = explode(",",$property);
            $attributes = new AttributeStorage();
            foreach ($propertys as $property) {
                $attributes->append(new Attribute($property));
            }
            $filter = new AttributeFilter();
            $filter->setAttributes($attributes);
            $filter->filter($products);
        }
        if($priceRange = $this->getPriceRange()){
            $priceFilters = $this->getPriceFilters();
            if(isset($priceFilters[$priceRange])){
                $filter = $priceFilters[$priceRange];
                if($filter instanceof PriceFilter){
                    $filter->filter($products);
                }
            }
        }
    }


    /**
     * Get the value of priceFilters
     *
     * @return  PriceFilter[]
     */ 
    public function getPriceFilters()
    {
        return $this->priceFilters;
    }

    /**
     * Set the value of priceFilters
     *
     * @param  PriceFilter[]  $priceFilters
     *
     * @return  self
     */ 
    public function setPriceFilters($priceFilters)
    {
        $this->priceFilters = $priceFilters;

        return $this;
    }
}