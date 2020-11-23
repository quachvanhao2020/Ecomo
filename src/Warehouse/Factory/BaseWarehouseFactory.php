<?php
namespace Ecomo\Warehouse\Factory;

use YPHP\ContainerFactoryInterface;
use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;
use Ecomo\Warehouse\Warehouse;
use Ecomo\Warehouse\WarehouseFilter;
use Ecomo\Warehouse\Storage\WarehouseStorage;

abstract class BaseWarehouseFactory implements ContainerFactoryInterface{

        /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return mixed Warehouse.
     */
    public abstract function get($id);
            /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param WarehouseFilter $filter
     * @param SortingInputInterface $sort
     * @return WarehouseStorage
     */
    public abstract function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null);
    /**
     * @param string $id Identifier of the entry to look for.
     * @param Warehouse $entity
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