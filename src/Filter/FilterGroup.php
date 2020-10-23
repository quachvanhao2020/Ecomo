<?php
namespace UltimateModel\Filter;

use JsonSerializable;
use UltimateModel\Filter\Traits\FilterTrait;
use UltimateModel\Filter\Traits\FilterTraitInterface;

class FilterGroup implements
FilterTraitInterface, 
JsonSerializable
{
    public function __debugInfo() {
        return $this->jsonSerialize();
    }

    public function jsonSerialize() {
        return [
            self::FILTERS => $this->getFilters(),
            self::FILTERACTIVES => $this->getFilterActives(),
        ];
    }

    use FilterTrait;

}