<?php
namespace Ecomo;
use Brick\Money\ExchangeRateProvider\ConfigurableProvider;
use Brick\Money\ExchangeRateProvider\BaseCurrencyProvider;

class ExchangeRateProviderHelper{

    /**
     * @var ConfigurableProvider
     */
    protected $configurableProvider;
    /**
     * @var BaseCurrencyProvider
     */
    protected $currencyProvider;

    public function __construct()
    {
        $provider = new ConfigurableProvider();
        $data = require_once __DIR__."/../data/exchange_rate_provider.php";
        foreach ($data as $value) {
            $provider->setExchangeRate($value[0], $value[1], $value[2]);
        }
        $this->configurableProvider = $provider;
        $provider = new BaseCurrencyProvider($provider, 'USD');
        $this->currencyProvider = $provider;
    }


    /**
     * Get the value of configurableProvider
     *
     * @return  ConfigurableProvider
     */ 
    public function getConfigurableProvider()
    {
        return $this->configurableProvider;
    }

    /**
     * Set the value of configurableProvider
     *
     * @param  ConfigurableProvider  $configurableProvider
     *
     * @return  self
     */ 
    public function setConfigurableProvider(ConfigurableProvider $configurableProvider)
    {
        $this->configurableProvider = $configurableProvider;

        return $this;
    }

    /**
     * Get the value of currencyProvider
     *
     * @return  BaseCurrencyProvider
     */ 
    public function getCurrencyProvider()
    {
        return $this->currencyProvider;
    }

    /**
     * Set the value of currencyProvider
     *
     * @param  BaseCurrencyProvider  $currencyProvider
     *
     * @return  self
     */ 
    public function setCurrencyProvider(BaseCurrencyProvider $currencyProvider)
    {
        $this->currencyProvider = $currencyProvider;

        return $this;
    }
}