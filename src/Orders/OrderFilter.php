<?php
namespace Ecomo\Orders;
use YPHP\FilterInputInterface;
use ArrayAccess;

class OrderFilter implements FilterInputInterface{
            /**
     * @param ArrayAccess $result
     * @return mixed
     */
    function filter(ArrayAccess &$result){
        return $result;
    }
}