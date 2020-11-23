<?php
namespace Ecomo\Order;
use YPHP\Enum;

class PaymentEnum extends Enum{
    const UNPAID = "unpaid";
    const FULLY_REFUNDED = "fully_refunded";
    const FULLY_PAID = "fully_paid";
}