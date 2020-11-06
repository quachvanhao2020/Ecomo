<?php
namespace Ecomo;
use Identimo\User;
use DateTime;
use YPHP\Entity;
use YPHP\EntityFertility;
use Identimo\UserInterface;
use YPHP\EntityInterface;
use YPHP\EntityLife;

class Activitie extends EntityLife{
    const OWNER = "owner";
    const TARGER = "target";

    public function __toArray(){
        return array_merge(parent::__toArray(),[
            self::OWNER => $this->getOwner(),
            self::TARGER => $this->getTarget(),
        ]);
    }

    /**
    * @var UserInterface
    */
    protected $owner;

        /**
    * @var EntityInterface
    */
    protected $target;

        /**
    * @var string
    */
    protected $type;

    /**
     * Get the value of owner
     *
     * @return  UserInterface
     */ 
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set the value of owner
     *
     * @param  UserInterface  $owner
     *
     * @return  self
     */ 
    public function setOwner(UserInterface $owner = null)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return  string
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param  string  $type
     *
     * @return  self
     */ 
    public function setType(string $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of target
     *
     * @return  EntityInterface
     */ 
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set the value of target
     *
     * @param  EntityInterface  $target
     *
     * @return  self
     */ 
    public function setTarget(EntityInterface $target = null)
    {
        $this->target = $target;

        return $this;
    }
}