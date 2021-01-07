<?php
namespace Ecomo\Tests;

use Ecomo\Orm;
use PHPUnit\Framework\TestCase;
use \Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\StringInput;
use Symfony\Component\Console\Output\NullOutput;

class TestApp{

      /**
     * @var Application
     */
    public $app;

    /**
     * @var EntityManager
     */
    public $em;

        /**
     * @var bool
     */
    public $drop = false;

    public function __construct(bool $drop = false)
    {
        $em = Orm::getEntityManager();
        $helperSet = \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($em);
        $app = ConsoleRunner::createApplication($helperSet);
        $app->setAutoExit(false);
        $this->em = $em;
        $this->app = $app;
        try {
            //$app->run(new StringInput("orm:schema-tool:create --dump-sql"));
            $app->run(new StringInput("orm:schema-tool:update --force"),new NullOutput());
        } catch (\Throwable $th) {
            //throw $th;
        }
        $this->drop = $drop;
    }

    public function __destruct()
    {
       $this->drop && $this->app->run(new StringInput("orm:schema-tool:drop --full-database --force"));
    }

    static private $_instance = NULL;

    /**
     * @return self
     */
    static function getInstance(bool $drop = false) {
      if (self::$_instance == NULL) {
        self::$_instance = new TestApp($drop);
      }
      return self::$_instance;
    }
}