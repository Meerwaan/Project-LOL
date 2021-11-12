<?php

namespace ContainerRxc1JTf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder5ac84 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera6e2a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4fbd9 = [
        
    ];

    public function getConnection()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getConnection', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getMetadataFactory', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getExpressionBuilder', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'beginTransaction', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getCache', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getCache();
    }

    public function transactional($func)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'transactional', array('func' => $func), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'wrapInTransaction', array('func' => $func), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'commit', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->commit();
    }

    public function rollback()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'rollback', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getClassMetadata', array('className' => $className), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'createQuery', array('dql' => $dql), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'createNamedQuery', array('name' => $name), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'createQueryBuilder', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'flush', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'clear', array('entityName' => $entityName), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->clear($entityName);
    }

    public function close()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'close', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->close();
    }

    public function persist($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'persist', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'remove', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'refresh', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'detach', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'merge', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getRepository', array('entityName' => $entityName), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'contains', array('entity' => $entity), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getEventManager', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getConfiguration', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'isOpen', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getUnitOfWork', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getProxyFactory', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'initializeObject', array('obj' => $obj), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'getFilters', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'isFiltersStateClean', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'hasFilters', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return $this->valueHolder5ac84->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializera6e2a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder5ac84) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5ac84 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder5ac84->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__get', ['name' => $name], $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        if (isset(self::$publicProperties4fbd9[$name])) {
            return $this->valueHolder5ac84->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac84;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ac84;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac84;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder5ac84;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__isset', array('name' => $name), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac84;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder5ac84;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__unset', array('name' => $name), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5ac84;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder5ac84;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__clone', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        $this->valueHolder5ac84 = clone $this->valueHolder5ac84;
    }

    public function __sleep()
    {
        $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, '__sleep', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;

        return array('valueHolder5ac84');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera6e2a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera6e2a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera6e2a && ($this->initializera6e2a->__invoke($valueHolder5ac84, $this, 'initializeProxy', array(), $this->initializera6e2a) || 1) && $this->valueHolder5ac84 = $valueHolder5ac84;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5ac84;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5ac84;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
