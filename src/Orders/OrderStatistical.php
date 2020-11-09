<?php
namespace Ecomo\Orders;
use YPHP\EntityStatistical;
use Ecomo\Money;

class OrderStatistical extends EntityStatistical{
    const TOTALFULFILLED = "totalFulfilled";
    const TOTALCANCELED = "totalCanceled";
    const TOTALREVENUE = "totalRevenue";

    public function __toArray(){
        return array_merge([
            self::TOTALREVENUE => $this->getTotalRevenue(),
            self::TOTALFULFILLED => $this->getTotalFulfilled(),
            self::TOTALCHANGED => $this->getTotalCanceled(),
        ],parent::__toArray());
    }

    /**
     * @var Money
     */
    protected $totalRevenue;
    /**
     * @var int
     */
    protected $totalFulfilled = 0;

    /**
     * @var int
     */
    protected $totalCanceled = 0;


    /**
     * Get the value of totalFulfilled
     *
     * @return  int
     */ 
    public function getTotalFulfilled()
    {
        return $this->totalFulfilled;
    }

    /**
     * Set the value of totalFulfilled
     *
     * @param  int  $totalFulfilled
     *
     * @return  self
     */ 
    public function setTotalFulfilled(int $totalFulfilled = null)
    {
        $this->totalFulfilled = $totalFulfilled;

        return $this;
    }

    /**
     * Get the value of totalCanceled
     *
     * @return  int
     */ 
    public function getTotalCanceled()
    {
        return $this->totalCanceled;
    }

    /**
     * Set the value of totalCanceled
     *
     * @param  int  $totalCanceled
     *
     * @return  self
     */ 
    public function setTotalCanceled(int $totalCanceled = null)
    {
        $this->totalCanceled = $totalCanceled;

        return $this;
    }

    /**
     * Get the value of totalRevenue
     *
     * @return  Money
     */ 
    public function getTotalRevenue()
    {
        if(!$this->totalRevenue) $this->totalRevenue = new Money(0);

        return $this->totalRevenue;
    }

    /**
     * Set the value of totalRevenue
     *
     * @param  Money  $totalRevenue
     *
     * @return  self
     */ 
    public function setTotalRevenue(Money $totalRevenue = null)
    {
        $this->totalRevenue = $totalRevenue;

        return $this;
    }
}