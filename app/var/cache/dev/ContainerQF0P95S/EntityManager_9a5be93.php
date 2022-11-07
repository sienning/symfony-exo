<?php

namespace ContainerQF0P95S;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb89a7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer20201 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesab15e = [
        
    ];

    public function getConnection()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getConnection', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getMetadataFactory', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getExpressionBuilder', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'beginTransaction', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getCache', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'transactional', array('func' => $func), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'commit', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->commit();
    }

    public function rollback()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'rollback', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getClassMetadata', array('className' => $className), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'createQuery', array('dql' => $dql), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'createNamedQuery', array('name' => $name), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'createQueryBuilder', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'flush', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'clear', array('entityName' => $entityName), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->clear($entityName);
    }

    public function close()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'close', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->close();
    }

    public function persist($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'persist', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'remove', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'refresh', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'detach', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'merge', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'contains', array('entity' => $entity), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getEventManager', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getConfiguration', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'isOpen', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getUnitOfWork', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getProxyFactory', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'initializeObject', array('obj' => $obj), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'getFilters', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'isFiltersStateClean', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'hasFilters', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return $this->valueHolderb89a7->hasFilters();
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

        $instance->initializer20201 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolderb89a7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb89a7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb89a7->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__get', ['name' => $name], $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        if (isset(self::$publicPropertiesab15e[$name])) {
            return $this->valueHolderb89a7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb89a7;

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

        $targetObject = $this->valueHolderb89a7;
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
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb89a7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb89a7;
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
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__isset', array('name' => $name), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb89a7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb89a7;
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
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__unset', array('name' => $name), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb89a7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb89a7;
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
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__clone', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        $this->valueHolderb89a7 = clone $this->valueHolderb89a7;
    }

    public function __sleep()
    {
        $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, '__sleep', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;

        return array('valueHolderb89a7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer20201 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer20201;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer20201 && ($this->initializer20201->__invoke($valueHolderb89a7, $this, 'initializeProxy', array(), $this->initializer20201) || 1) && $this->valueHolderb89a7 = $valueHolderb89a7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb89a7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb89a7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
