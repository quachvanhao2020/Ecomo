<?php
namespace Ecomo\Filter;

use JsonSerializable;

class SortFilter extends EntityFilter implements 
JsonSerializable
{

    const SORT_ASC = "SORT_ASC";
    const SORT_DESC = "SORT_DESC";
    const MOST = "MOST";
    const ORDER = "order";

    public function jsonSerialize() {
        return array_merge_recursive(parent::jsonSerialize(),[
            self::ORDER => $this->getOrder(),
        ]);
    }
        /**
     * 
     *
     * @var int
     */
    protected $order;

    public function __construct($order = self::SORT_ASC,$id = null)
    {
        $this->order = $order;
        $this->setId($id);
    }

    public function cmp($a, $b) {
        $order = $this->getOrder();
        if(($a instanceof AwareSortFilterInterface) && ($b instanceof AwareSortFilterInterface)){
            $x = $a->getWeight($order);
            $y = $b->getWeight($order);
            if ($x == $y) {
                return 0;
            }
            if(is_numeric($x) && is_numeric($y)){
                switch ($order) {
                    case self::SORT_ASC:
                        return ($x < $y) ? -1 : 1;
                    break;
                    case self::MOST:
                        return ($x < $y) ? -1 : 1;
                    break;
                    case self::SORT_DESC:
                        return ($y < $x) ? -1 : 1;
                    break;
                }
            }
            switch ($order) {
                case self::SORT_ASC:
                    return strcmp($y,$x);
                break;
                case self::MOST:
                    return strcmp($x,$y);
                break;
                case self::SORT_DESC:
                    return strcmp($x,$y);
                break;
            }

        }
    }

    public function filter($items)
    {
        usort($items,[$this,"cmp"]);
        return $items;
    }

    public static function array_sort($array, $on, $order=SORT_ASC)
    {
        $new_array = array();
        $sortable_array = array();
        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                break;
                case SORT_DESC:
                    arsort($sortable_array);
                break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }


    /**
     * Get the value of order
     *
     * @return  int
     */ 
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set the value of order
     *
     * @param  int  $order
     *
     * @return  self
     */ 
    public function setOrder(int $order)
    {
        $this->order = $order;

        return $this;
    }
}