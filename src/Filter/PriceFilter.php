<?php
namespace Ecomo\Filter;
use Ecomo\Money;
use Ecomo\MoneyHelper;

class PriceFilter extends EntityFilter
{

    const MIN = "min";
    const MAX = "max";
    /**
     * 
     *
     * @var Money
     */
    protected $min;
    /**
     * 
     *
     * @var MoneyHelper
     */
    protected $moneyHelper;

    /**
     * 
     *
     * @var Money
     */
    protected $max;

    public function __toArray() {
        return array_merge_recursive(parent::__toArray(),[
            self::MIN => $this->getMin(),
            self::MAX => $this->getMax(),
        ]);
    }

    public function __construct(Money $min = null,Money $max = null,$id = null)
    {
        $this->setMax($max)->setMin($min);
        $this->setMoneyHelper(new MoneyHelper);
        parent::__construct($id);
    }

    public function filter($items)
    {
        if(is_iterable($items)){
            $moneyHelper = $this->getMoneyHelper();
            foreach ($items as $key => $item) {
                if($item instanceof AwarePriceInterface){
                    if(($this->getMin() == null || $moneyHelper->compare($item->getPrice(),$this->getMin()) == -1)  && ($this->getMax() == null || $moneyHelper->compare($item->getPrice(),$this->getMax()) == 1)){

                    }else{
                        unset($items[$key]);
                    }
                }
            }
        }
        return $items;
    }


    /**
     * Get the value of min
     *
     * @return  Money
     */ 
    public function getMin()
    {
        return $this->min;
    }

    /**
     * Set the value of min
     *
     * @param  Money  $min
     *
     * @return  self
     */ 
    public function setMin(Money $min = null)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get the value of max
     *
     * @return  Money
     */ 
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set the value of max
     *
     * @param  Money  $max
     *
     * @return  self
     */ 
    public function setMax(Money $max = null)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get the value of moneyHelper
     *
     * @return  MoneyHelper
     */ 
    public function getMoneyHelper()
    {
        return $this->moneyHelper;
    }

    /**
     * Set the value of moneyHelper
     *
     * @param  MoneyHelper  $moneyHelper
     *
     * @return  self
     */ 
    public function setMoneyHelper(MoneyHelper $moneyHelper)
    {
        $this->moneyHelper = $moneyHelper;

        return $this;
    }
}