<?php
namespace Ecomo\Orders;
use YPHP\Enum;

class OrderStatus extends Enum {
    const CANCELED = "CANCELED";
    const DRAFT = "DRAFT";
    const FULFILLED = "FULFILLED";
    const PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";
    const UNFULFILLED = "UNFULFILLED";
}