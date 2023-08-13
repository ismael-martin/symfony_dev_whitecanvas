<?php

namespace ContainerK9x9YnE;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9d9ab = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer60997 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties2cfd1 = [
        
    ];

    public function getConnection()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getConnection', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getMetadataFactory', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getExpressionBuilder', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'beginTransaction', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getCache', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getCache();
    }

    public function transactional($func)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'transactional', array('func' => $func), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'wrapInTransaction', array('func' => $func), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'commit', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->commit();
    }

    public function rollback()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'rollback', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getClassMetadata', array('className' => $className), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'createQuery', array('dql' => $dql), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'createNamedQuery', array('name' => $name), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'createQueryBuilder', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'flush', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'clear', array('entityName' => $entityName), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->clear($entityName);
    }

    public function close()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'close', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->close();
    }

    public function persist($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'persist', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'remove', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'refresh', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'detach', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'merge', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getRepository', array('entityName' => $entityName), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'contains', array('entity' => $entity), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getEventManager', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getConfiguration', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'isOpen', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getUnitOfWork', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getProxyFactory', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'initializeObject', array('obj' => $obj), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'getFilters', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'isFiltersStateClean', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'hasFilters', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return $this->valueHolder9d9ab->hasFilters();
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

        $instance->initializer60997 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder9d9ab) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9d9ab = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9d9ab->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__get', ['name' => $name], $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        if (isset(self::$publicProperties2cfd1[$name])) {
            return $this->valueHolder9d9ab->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d9ab;

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

        $targetObject = $this->valueHolder9d9ab;
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
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d9ab;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9d9ab;
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
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__isset', array('name' => $name), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d9ab;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9d9ab;
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
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__unset', array('name' => $name), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9d9ab;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9d9ab;
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
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__clone', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        $this->valueHolder9d9ab = clone $this->valueHolder9d9ab;
    }

    public function __sleep()
    {
        $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, '__sleep', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;

        return array('valueHolder9d9ab');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer60997 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer60997;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer60997 && ($this->initializer60997->__invoke($valueHolder9d9ab, $this, 'initializeProxy', array(), $this->initializer60997) || 1) && $this->valueHolder9d9ab = $valueHolder9d9ab;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9d9ab;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9d9ab;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
