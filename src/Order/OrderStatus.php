<?php
namespace Ecomo\Order;
use YPHP\Enum;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Embeddable
 */
class OrderStatus extends Enum {
    const CANCELED = "CANCELED";
    const DRAFT = "DRAFT";
    const FULFILLED = "FULFILLED";
    const PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";
    const UNFULFILLED = "UNFULFILLED";
}