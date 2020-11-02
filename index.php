<?php
require_once "vendor/autoload.php";
use Brick\Math\RoundingMode;
use Brick\Money\CurrencyConverter;
use Ecomo\ExchangeRateProviderHelper;
use Ecomo\MoneyHelper;
use Ecomo\Products\Product;
use Ecomo\Money;

$product = new Product();
$money = new Money("20000", 'VND');
$product->setMoney($money);
$product->setOldMoney($money);

//$money = MoneyHelper::getCurrencyConverter()->convert($money, 'USD', RoundingMode::UP);echo $money->formatTo('vi_VN');

var_dump(json_encode($product));