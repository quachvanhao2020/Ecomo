<?php
namespace Ecomo\Products;
use Societymo\Communication;
class ProductSocietyX extends ProductSociety{

    const COMMUNICATION = "communication";
    
    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::COMMUNICATION => $this->getCommunication(),
        ]);
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
    public function setCommunication(Communication $communication)
    {
        $this->communication = $communication;

        return $this;
    }
}