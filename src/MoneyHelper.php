<?php
namespace Ecomo;
use Brick\Money\CurrencyConverter;
use Exchamo\Money;

class MoneyHelper{

    /**
     * @return CurrencyConverter
     */
    public static function getCurrencyConverter(){
        $provider = new ExchangeRateProviderHelper();
        $converter = new CurrencyConverter($provider->getCurrencyProvider());
        return $converter;
    }

    public function compare(Money $money1,Money $money2){
        if($money1->getCurrency() == $money2->getCurrency()){
            $f1 = $money1->getPrice();
            $f2 = $money2->getPrice();
            if($f1 > $f2){
                return -1;
            }else if($f1 < $f2){
                return 1;
            }else return 0;
        }
    }
}