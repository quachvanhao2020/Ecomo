<?php
namespace Ecomo\Orders;
use YPHP\BaseEnum;

abstract class OrderStatus extends BaseEnum {
    const CANCELED = "CANCELED";
    const DRAFT = "DRAFT";
    const FULFILLED = "FULFILLED";
    const PARTIALLY_FULFILLED = "PARTIALLY_FULFILLED";
    const UNFULFILLED = "UNFULFILLED";
}