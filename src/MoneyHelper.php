<?php
namespace Ecomo;

class MoneyHelper{

    public function toNewNation(Money $money,Nation $nation){
        return $money->setNation($nation);
    }

    public function compare(Money $money1,Money $money2){
        $this->toNewNation($money2,$money1->getNation());
        if($money1->getNation() == $money2->getNation()){
            if($money1->getPrice() > $money2->getPrice()){
                return -1;
            }else if($money1->getPrice() < $money2->getPrice()){
                return 1;
            }else return 0;
        }
    }
}