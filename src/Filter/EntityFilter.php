<?php
namespace Ecomo\Filter;
use YPHP\Entity;

class EntityFilter extends Entity {
    public function filter($items)
    {
        return $items;
    }
}