<?php

namespace ContainerVn5x1WB;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder6af82 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5699a = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb184f = [
        
    ];

    public function getConnection()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getConnection', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getMetadataFactory', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getExpressionBuilder', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'beginTransaction', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getCache', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'transactional', array('func' => $func), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'commit', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->commit();
    }

    public function rollback()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'rollback', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getClassMetadata', array('className' => $className), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'createQuery', array('dql' => $dql), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'createNamedQuery', array('name' => $name), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'createQueryBuilder', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'flush', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'clear', array('entityName' => $entityName), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->clear($entityName);
    }

    public function close()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'close', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->close();
    }

    public function persist($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'persist', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'remove', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'refresh', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'detach', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'merge', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'contains', array('entity' => $entity), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getEventManager', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getConfiguration', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'isOpen', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getUnitOfWork', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getProxyFactory', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'initializeObject', array('obj' => $obj), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'getFilters', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'isFiltersStateClean', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'hasFilters', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return $this->valueHolder6af82->hasFilters();
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

        $instance->initializer5699a = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder6af82) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder6af82 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder6af82->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__get', ['name' => $name], $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        if (isset(self::$publicPropertiesb184f[$name])) {
            return $this->valueHolder6af82->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6af82;

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

        $targetObject = $this->valueHolder6af82;
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
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6af82;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder6af82;
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
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__isset', array('name' => $name), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6af82;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder6af82;
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
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__unset', array('name' => $name), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6af82;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder6af82;
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
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__clone', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        $this->valueHolder6af82 = clone $this->valueHolder6af82;
    }

    public function __sleep()
    {
        $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, '__sleep', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;

        return array('valueHolder6af82');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5699a = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5699a;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5699a && ($this->initializer5699a->__invoke($valueHolder6af82, $this, 'initializeProxy', array(), $this->initializer5699a) || 1) && $this->valueHolder6af82 = $valueHolder6af82;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6af82;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6af82;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
