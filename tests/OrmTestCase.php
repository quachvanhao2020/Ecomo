<?php
namespace Ecomo\Tests;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Console\Application;
use Doctrine\ORM\EntityManager;
use YPHP\Storage\EntityStorage;

abstract class OrmTestCase extends TestCase
{
    const ENTITY_CLASS = Category::class;


    /**
     * @var EntityManager
     */
    protected $em;

    protected function setUp(): void
    {
        $this->em = TestApp::getInstance()->em;
    }

    public function testCreate(): void
    {
        $em = $this->em;
        $entity = $this->getEntity($em);
        $em->persist($entity);
        $em->flush();
        $this->assertEquals(true,true);
    }

    public function testFetchAll(): void
    {
        $entitys = $this->em->getRepository($this::ENTITY_CLASS)->findAll();
        if(is_array($entitys)){
            $entitys = new EntityStorage($entitys);
        }
        $this->assertAll($entitys);
    }

    public abstract function getEntity(EntityManager $em);
    public abstract function assertAll(EntityStorage $storage);
}