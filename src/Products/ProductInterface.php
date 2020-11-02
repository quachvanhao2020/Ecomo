<?php
namespace Ecomo\Products;

use YPHP\EntityInterface;

interface ProductInterface extends EntityInterface{
    function getLogo();
    function getMoney();
    function getOldMoney();
    function getTax();
    function getUpdatedAt();
    function getType();
    function getCategory();
    function getSlug();
    function getAvailableForPurchase();
    function getDefaultVariant();
    function getVariants();
}