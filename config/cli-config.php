<?php
use Ecomo\Orm;
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet(Orm::getEntityManager());
