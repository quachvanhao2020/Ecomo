<?php
namespace Ecomo;
use Laminas\Paginator\Paginator as BasePaginator;
use Laminas\Paginator\Adapter\AdapterInterface;

class Paginator extends BasePaginator{

        /**
     * @var callable
     */

    protected $callableAdapter;
        /**
     * Constructor.
     *
     * @param AdapterInterface|AdapterAggregateInterface $adapter
     * @throws Exception\InvalidArgumentException
     */
    public function __construct($adapter = null)
    {
        if($adapter) parent::__construct($adapter);
    }

        /**
     * Get adapter
     *
     * @return  AdapterInterface
     */ 
    public function getAdapter()
    {
        return $this->adapter;
    }

    /**
     * Set adapter
     *
     * @param  AdapterInterface  $adapter  Adapter
     *
     * @return  self
     */ 
    public function setAdapter(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
        if(is_callable($this->getCallableAdapter())){
            $this->getCallableAdapter()($this);
        }
        return $this;
    }


    /**
     * Get the value of callableAdapter
     */ 
    public function getCallableAdapter()
    {
        return $this->callableAdapter;
    }

    /**
     * Set the value of callableAdapter
     *
     * @return  self
     */ 
    public function setCallableAdapter($callableAdapter)
    {
        $this->callableAdapter = $callableAdapter;

        return $this;
    }
}