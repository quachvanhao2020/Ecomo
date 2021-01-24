<?php
namespace Ecomo\Category\Factory;
use Laminas\Hydrator\Strategy\DateTimeArrayFormatterStrategy;
use Laminas\Hydrator\Strategy\EnumStrategy;
use Laminas\Hydrator\Strategy\NewClassStrategy;
use Laminas\Hydrator\Strategy\StorageStrategy;
use Laminas\Hydrator\HydratorInterface;
use YPHP\Factory\ExcelEntityFactoryTrait;
use Ecomo\Category\Category;
use Ecomo\Category\Storage\CategoryStorage;
use Laminas\Hydrator\Strategy\Serializable\StaticServer;
use Laminas\Hydrator\Strategy\StreamStrategy;

class ExcelCategoryFactory extends BaseCategoryFactory{
    use ExcelEntityFactoryTrait;

    /**
     * Get the value of strategys
     *
     * @return  StrategyInterface[]
     */ 
    public static function getStrategys(HydratorInterface $hydrator)
    {
        $minimum_new_class = new NewClassStrategy($hydrator);
        $new_class = new NewClassStrategy($hydrator,false);
        $storage_strategy = new StorageStrategy();
        $stream_strategy = new StreamStrategy(new StaticServer);
        return [
            Category::PARENT => [
                "strategy" => $minimum_new_class,
                "recursive" => true,
                "children" => [],
            ],
            Category::STATUS => [
                "strategy" => new EnumStrategy(),
                "recursive" => true,
                "children" => [],
            ],
            Category::DATECREATED => [
                "strategy" => new DateTimeArrayFormatterStrategy(),
                "recursive" => true,
                "children" => [],
            ],
            Category::LOGO => [
                "strategy" => $stream_strategy,
                "recursive" => true,
                "children" => [],
            ],
            Category::PRODUCTS => [
                "strategy" => $storage_strategy,
                "recursive" => true,
                "children" => [],
            ],
        ];
    }

    /**
     * Get the value of storage
     *
     * @return  CategoryStorage
     */ 
    public function getStorage()
    {
        if(!$this->storage) $this->storage = new CategoryStorage();
        return $this->storage;
    }

    public function getClassEntity(){
        return Category::class;
    }

    protected function _convertArraySheet(array &$array){
        return;
    }
}