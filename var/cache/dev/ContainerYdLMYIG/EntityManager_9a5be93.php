<?php

namespace ContainerYdLMYIG;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldera3d88 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializercb6a7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb3230 = [
        
    ];

    public function getConnection()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getConnection', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getMetadataFactory', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getExpressionBuilder', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'beginTransaction', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->beginTransaction();
    }

    public function getCache()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getCache', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getCache();
    }

    public function transactional($func)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'transactional', array('func' => $func), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'wrapInTransaction', array('func' => $func), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'commit', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->commit();
    }

    public function rollback()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'rollback', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getClassMetadata', array('className' => $className), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'createQuery', array('dql' => $dql), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'createNamedQuery', array('name' => $name), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'createQueryBuilder', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'flush', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'clear', array('entityName' => $entityName), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->clear($entityName);
    }

    public function close()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'close', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->close();
    }

    public function persist($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'persist', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'remove', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'refresh', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'detach', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'merge', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getRepository', array('entityName' => $entityName), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'contains', array('entity' => $entity), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getEventManager', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getConfiguration', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'isOpen', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getUnitOfWork', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getProxyFactory', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'initializeObject', array('obj' => $obj), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'getFilters', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'isFiltersStateClean', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'hasFilters', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return $this->valueHoldera3d88->hasFilters();
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

        $instance->initializercb6a7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldera3d88) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3d88 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldera3d88->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__get', ['name' => $name], $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        if (isset(self::$publicPropertiesb3230[$name])) {
            return $this->valueHoldera3d88->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3d88;

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

        $targetObject = $this->valueHoldera3d88;
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
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__set', array('name' => $name, 'value' => $value), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3d88;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldera3d88;
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
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__isset', array('name' => $name), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3d88;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldera3d88;
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
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__unset', array('name' => $name), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3d88;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldera3d88;
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
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__clone', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        $this->valueHoldera3d88 = clone $this->valueHoldera3d88;
    }

    public function __sleep()
    {
        $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, '__sleep', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;

        return array('valueHoldera3d88');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializercb6a7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializercb6a7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializercb6a7 && ($this->initializercb6a7->__invoke($valueHoldera3d88, $this, 'initializeProxy', array(), $this->initializercb6a7) || 1) && $this->valueHoldera3d88 = $valueHoldera3d88;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3d88;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3d88;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
