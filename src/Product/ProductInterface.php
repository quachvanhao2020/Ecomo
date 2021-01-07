<?php
namespace Ecomo\Product;
use YPHP\EntityInterface;

interface ProductInterface extends EntityInterface{
    function getLogo();
    function getMoney();
    function getOldMoney();
    function getTax();
    function getType();
    function getCategory();
    function getSlug();
    function getAvailableForPurchase();
    function getVariants();
}