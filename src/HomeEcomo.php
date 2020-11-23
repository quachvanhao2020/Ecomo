<?php
namespace Ecomo;
use Ecomo\Storage\ActivitieStorage;
use Ecomo\Order\OrderStatistical;
use Ecomo\Products\ProductStatistical;
use Identimo\Statistical\StaffStatistical;
use YPHP\Entity;
use YPHP\EntityLife;

class HomeEcomo extends Entity{

    const ORDERSTATISTICAL = "orderStatistical";
    const PRODUCTSTATISTICAL = "productStatistical";
    const STAFFSTATISTICAL = "staffStatistical";
    const ACTIVITIES = "activities";

    public function __toArray(){
      return array_merge([
          self::ORDERSTATISTICAL => $this->getOrderStatistical(),
          self::PRODUCTSTATISTICAL => $this->getProductStatistical(),
          self::STAFFSTATISTICAL => $this->getStaffStatistical(),
          self::ACTIVITIES => $this->getActivities(),
      ],parent::__toArray());
  }

      /**
    * @var OrderStatistical
    */
    public $orderStatistical;
    /**
    * @var ProductStatistical
    */
    public $productStatistical;
    /**
    * @var StaffStatistical
    */
    public $staffStatistical;
    /**
    * @var ActivitieStorage
    */
    public $activities;

    /**
     * Get the value of orderStatistical
     *
     * @return  OrderStatistical
     */ 
    public function getOrderStatistical()
    {
        if(!$this->orderStatistical) $this->orderStatistical = new OrderStatistical();

        return $this->orderStatistical;
    }

    /**
     * Set the value of orderStatistical
     *
     * @param  OrderStatistical  $orderStatistical
     *
     * @return  self
     */ 
    public function setOrderStatistical(?OrderStatistical $orderStatistical)
    {
        $this->orderStatistical = $orderStatistical;

        return $this;
    }

    /**
     * Get the value of productStatistical
     *
     * @return  ProductStatistical
     */ 
    public function getProductStatistical()
    {
        if(!$this->productStatistical) $this->productStatistical = new ProductStatistical();

        return $this->productStatistical;
    }

    /**
     * Set the value of productStatistical
     *
     * @param  ProductStatistical  $productStatistical
     *
     * @return  self
     */ 
    public function setProductStatistical(?ProductStatistical $productStatistical)
    {
        $this->productStatistical = $productStatistical;

        return $this;
    }

    /**
     * Get the value of staffStatistical
     *
     * @return  StaffStatistical
     */ 
    public function getStaffStatistical()
    {
        if(!$this->staffStatistical) $this->staffStatistical = new StaffStatistical();

        return $this->staffStatistical;
    }

    /**
     * Set the value of staffStatistical
     *
     * @param  StaffStatistical  $staffStatistical
     *
     * @return  self
     */ 
    public function setStaffStatistical(?StaffStatistical $staffStatistical)
    {
        $this->staffStatistical = $staffStatistical;

        return $this;
    }

    /**
     * Get the value of activities
     *
     * @return  ActivitieStorage
     */ 
    public function getActivities()
    {
        if(!$this->activities) $this->activities = new ActivitieStorage();

        return $this->activities;
    }

    /**
     * Set the value of activities
     *
     * @param  ActivitieStorage  $activities
     *
     * @return  self
     */ 
    public function setActivities(?ActivitieStorage $activities)
    {
        $this->activities = $activities;

        return $this;
    }
}