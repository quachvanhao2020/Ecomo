<?php
namespace Ecomo\Filter;

use JsonSerializable;
use Ecomo\Entity;

class EntityFilter extends Entity implements 
JsonSerializable
{
    public function jsonSerialize() {
        return [
            self::ID => $this->getId(),
        ];
    }

    public function filter($items)
    {
        return $items;
    }
}