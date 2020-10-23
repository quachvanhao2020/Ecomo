<?php
namespace Ecomo\Filter;

interface AwareSortFilterInterface{
    function getWeight($flag = SortFilter::MOST);
}