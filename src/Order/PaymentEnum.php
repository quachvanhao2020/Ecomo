<?php
namespace Ecomo\Order;
use YPHP\Enum;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class PaymentEnum extends Enum{
    const UNPAID = "unpaid";
    const FULLY_REFUNDED = "fully_refunded";
    const FULLY_PAID = "fully_paid";
}