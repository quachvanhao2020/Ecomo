<?php
namespace Ecomo\Ships;
use YPHP\Entity;
use Exchamo\Money;
use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="ships")
 */
class Shipping extends Entity{

    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $method;

    /**
     * @ORM\Embedded(class = "Exchamo\Money")
     * @var Money
     */
    protected $amount;

    /**
     * Get the value of amount
     *
     * @return  Money
     */ 
    public function getAmount()
    {
        if(!$this->amount) $this->amount = new Money(0);

        return $this->amount;
    }

    /**
     * Set the value of amount
     *
     * @param  Money  $amount
     *
     * @return  self
     */ 
    public function setAmount(Money $amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get the value of method
     *
     * @return  string
     */ 
    public function getMethod()
    {
        if(!$this->method) $this->method = "";

        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @param  string  $method
     *
     * @return  self
     */ 
    public function setMethod(string $method = null)
    {
        $this->method = $method;

        return $this;
    }
}