<?php
namespace Ecomo\Products\Factory;

use YPHP\ContainerFactoryInterface;
use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;
use Ecomo\Products\ProductStatistical;
use YPHP\Filter\StatisticalFilter;

abstract class BaseProductStatisticalFactory implements ContainerFactoryInterface{

        /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return ProductStatistical.
     */
    public abstract function get($id);
            /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param StatisticalFilter $filter
     * @param SortingInputInterface $sort
     * @return mixed
     */
    public abstract function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null);
    /**
     * @param string $id Identifier of the entry to look for.
     * @param ProductStatistical $entity
     * @return bool
     */
    public abstract function update($id,$entity);
        /**
     * @param string $id Identifier of the entry to look for.
     * 
     * @return bool
     */
    public abstract function delete($id);
}