<?php
namespace Ecomo;
use YPHP\Entity;
use Doctrine\ORM\Mapping as ORM;

/** 
 * @ORM\Entity 
 * @ORM\Table(name="address")
 */
class Address extends Entity{

    /**
     * 
     * @ORM\Id
     * @ORM\Column(type="string",name="id")
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Doctrine\ORM\Id\UuidGenerator")
     * @var string
     */
    protected $id;
    
    const COMPANYNAME = "companyName";
    const STREETADDRESS1 = "streetAddress1";
    const STREETADDRESS2 = "streetAddress2";
    const CITY = "city";
    const CITYAREA = "cityArea";
    const POSTALCODE = "postalCode";
    const COUNTRY = "country";
    const COUNTRYAREA = "countryArea";

    public function __toArray()
    {
        return array_merge(parent::__toArray(),[
            self::COMPANYNAME => $this->getCompanyName(),
            self::STREETADDRESS1 => $this->getStreetAddress1(),
            self::STREETADDRESS2 => $this->getStreetAddress2(),
            self::CITY => $this->getCity(),
            self::CITYAREA => $this->getCityArea(),
            self::POSTALCODE => $this->getPostalCode(),
            self::COUNTRY => $this->getCountry(),
            self::COUNTRYAREA => $this->getCountryArea(),
        ]);
    }

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $companyName = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $streetAddress1 = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $streetAddress2 = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $city = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $cityArea = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $postalCode = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $country = "" ;

    /**
     * @ORM\Column(type="string",nullable=true)
     * @var string
     */
    protected $countryArea = "" ;

    /**
     * Get the value of companyName
     *
     * @return  string
     */ 
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the value of companyName
     *
     * @param  string  $companyName
     *
     * @return  self
     */ 
    public function setCompanyName(string $companyName = null)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get the value of streetAddress1
     *
     * @return  string
     */ 
    public function getStreetAddress1()
    {
        return $this->streetAddress1;
    }

    /**
     * Set the value of streetAddress1
     *
     * @param  string  $streetAddress1
     *
     * @return  self
     */ 
    public function setStreetAddress1(string $streetAddress1 = null)
    {
        $this->streetAddress1 = $streetAddress1;

        return $this;
    }

    /**
     * Get the value of streetAddress2
     *
     * @return  string
     */ 
    public function getStreetAddress2()
    {
        return $this->streetAddress2;
    }

    /**
     * Set the value of streetAddress2
     *
     * @param  string  $streetAddress2
     *
     * @return  self
     */ 
    public function setStreetAddress2(string $streetAddress2 = null)
    {
        $this->streetAddress2 = $streetAddress2;

        return $this;
    }

    /**
     * Get the value of city
     *
     * @return  string
     */ 
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set the value of city
     *
     * @param  string  $city
     *
     * @return  self
     */ 
    public function setCity(string $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the value of cityArea
     *
     * @return  string
     */ 
    public function getCityArea()
    {
        return $this->cityArea;
    }

    /**
     * Set the value of cityArea
     *
     * @param  string  $cityArea
     *
     * @return  self
     */ 
    public function setCityArea(string $cityArea = null)
    {
        $this->cityArea = $cityArea;

        return $this;
    }

    /**
     * Get the value of postalCode
     *
     * @return  string
     */ 
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set the value of postalCode
     *
     * @param  string  $postalCode
     *
     * @return  self
     */ 
    public function setPostalCode(string $postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the value of country
     *
     * @return  string
     */ 
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set the value of country
     *
     * @param  string  $country
     *
     * @return  self
     */ 
    public function setCountry(string $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get the value of countryArea
     *
     * @return  string
     */ 
    public function getCountryArea()
    {
        return $this->countryArea;
    }

    /**
     * Set the value of countryArea
     *
     * @param  string  $countryArea
     *
     * @return  self
     */ 
    public function setCountryArea(string $countryArea = null)
    {
        $this->countryArea = $countryArea;

        return $this;
    }
}