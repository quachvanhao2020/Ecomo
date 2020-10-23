<?php
namespace UltimateModel\Filter;

class KeepFilter extends EntityFilter
{
            /**
     * 
     *
     * @var string
     */
    protected $flag;

    public function __construct($flag = "")
    {
        $this->setFlag($flag);
    }

    public static function propertySpecificity(){
        
    }

    public function filter($items)
    {
        $newItems = [];

        if(is_array($items)){

            foreach ($items as $key => $value) {
                
                if($value instanceof AwareKeepInterface){

                    if($value->keepReason($this->getFlag())){

                        $newItems[] = $value;

                    };

                }

            }

        }

        return $newItems;

    }


    /**
     * Get the value of flag
     *
     * @return  string
     */ 
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set the value of flag
     *
     * @param  string  $flag
     *
     * @return  self
     */ 
    public function setFlag(string $flag)
    {
        $this->flag = $flag;

        return $this;
    }
}