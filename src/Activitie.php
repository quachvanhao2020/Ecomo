<?php
namespace Ecomo;
use Identimo\User;
use DateTime;
use YPHP\Entity;

class Activitie extends Entity{
    /**
    * @var int
    */
    public $amount = 0 ;
    /**
    * @var string
    */
    public $composedId = "string" ;
    /**
    * @var DateTime
    */
    public $date = null ;
            /**
    * @var string
    */
    public $email = "string" ;
    public $emailType = "OrderEventsEmailsEnum" ;
        /**
    * @var string
    */
    public $message = "string" ;
            /**
    * @var string
    */
    public $order0 = "string" ;
    /**
    * @var string[]
    */
    public $oversoldItems = ("string" );
        /**
    * @var int
    */
    public $quantity = 0 ;
    public $type = "OrderEventsEnum" ;
    /**
    * @var User
    */
    public $user;
}