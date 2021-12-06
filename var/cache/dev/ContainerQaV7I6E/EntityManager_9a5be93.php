<?php

namespace ContainerQaV7I6E;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder84efe = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer10864 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties5d6a8 = [
        
    ];

    public function getConnection()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getConnection', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getMetadataFactory', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getExpressionBuilder', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'beginTransaction', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getCache', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getCache();
    }

    public function transactional($func)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'transactional', array('func' => $func), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'wrapInTransaction', array('func' => $func), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'commit', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->commit();
    }

    public function rollback()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'rollback', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getClassMetadata', array('className' => $className), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'createQuery', array('dql' => $dql), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'createNamedQuery', array('name' => $name), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'createQueryBuilder', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'flush', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'clear', array('entityName' => $entityName), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->clear($entityName);
    }

    public function close()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'close', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->close();
    }

    public function persist($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'persist', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'remove', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'refresh', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'detach', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'merge', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getRepository', array('entityName' => $entityName), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'contains', array('entity' => $entity), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getEventManager', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getConfiguration', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'isOpen', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getUnitOfWork', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getProxyFactory', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'initializeObject', array('obj' => $obj), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'getFilters', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'isFiltersStateClean', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'hasFilters', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return $this->valueHolder84efe->hasFilters();
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

        $instance->initializer10864 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder84efe) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder84efe = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder84efe->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__get', ['name' => $name], $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        if (isset(self::$publicProperties5d6a8[$name])) {
            return $this->valueHolder84efe->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84efe;

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

        $targetObject = $this->valueHolder84efe;
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
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84efe;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder84efe;
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
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__isset', array('name' => $name), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84efe;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder84efe;
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
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__unset', array('name' => $name), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder84efe;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder84efe;
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
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__clone', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        $this->valueHolder84efe = clone $this->valueHolder84efe;
    }

    public function __sleep()
    {
        $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, '__sleep', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;

        return array('valueHolder84efe');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer10864 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer10864;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer10864 && ($this->initializer10864->__invoke($valueHolder84efe, $this, 'initializeProxy', array(), $this->initializer10864) || 1) && $this->valueHolder84efe = $valueHolder84efe;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder84efe;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder84efe;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
