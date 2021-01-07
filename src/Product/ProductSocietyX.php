<?php
namespace Ecomo\Product;

use Societymo\Communication;

class ProductSocietyX extends ProductSociety{

    const COMMUNICATION = "communication";
    
    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::COMMUNICATION => $this->getCommunication(),
        ]);
    }

    public function __arrayTo($array)
    {
        parent::__arrayTo($array);
        $this->setCommunication(\tran(@$array[self::COMMUNICATION],Communication::class));
    }
    /**
     * 
     *
     * @var Communication
     */
    protected $communication;

    /**
     * Get the value of communication
     *
     * @return  Communication
     */ 
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * Set the value of communication
     *
     * @param  Communication  $communication
     *
     * @return  self
     */ 
    public function setCommunication(Communication $communication = null)
    {
        $this->communication = $communication;

        return $this;
    }
}