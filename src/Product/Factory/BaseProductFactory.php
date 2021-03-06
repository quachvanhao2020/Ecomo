<?php
namespace Ecomo\Product\Factory;

use YPHP\FilterInputInterface;
use YPHP\SortingInputInterface;
use Ecomo\Product\Product;
use Ecomo\Product\ProductFilter;
use YPHP\Factory\BaseEntityFactory;
use Ecomo\Product\Storage\ProductStorage;

abstract class BaseProductFactory extends BaseEntityFactory{

    const ENTITY = Product::class;
    const STORAGE = ProductStorage::class;
        /**
     * Finds an entry of the container by its identifier and returns it.
     *
     * @param string $id Identifier of the entry to look for.
     *
     * @return mixed Product.
     */
    public abstract function get($id);
            /**
     * @param int $first
     * @param string $after
     * @param int $last
     * @param string $before
     * @param ProductFilter $filter
     * @param SortingInputInterface $sort
     * @return ProductStorage
     */
    public abstract function list(int $first = 0,string $after = "",int $last = -1,string $before = "",FilterInputInterface $filter = null,SortingInputInterface $sort = null);
    /**
     * @param string $id Identifier of the entry to look for.
     * @param Product $entity
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