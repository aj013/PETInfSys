<?php

namespace ContainerAD8ylXO;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderda112 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6ff24 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties82255 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getConnection', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getMetadataFactory', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getExpressionBuilder', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'beginTransaction', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getCache', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'transactional', array('func' => $func), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'commit', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->commit();
    }

    public function rollback()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'rollback', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getClassMetadata', array('className' => $className), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'createQuery', array('dql' => $dql), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'createNamedQuery', array('name' => $name), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'createQueryBuilder', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'flush', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'clear', array('entityName' => $entityName), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->clear($entityName);
    }

    public function close()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'close', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->close();
    }

    public function persist($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'persist', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'remove', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'refresh', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'detach', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'merge', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'contains', array('entity' => $entity), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getEventManager', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getConfiguration', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'isOpen', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getUnitOfWork', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getProxyFactory', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'initializeObject', array('obj' => $obj), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'getFilters', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'isFiltersStateClean', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'hasFilters', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return $this->valueHolderda112->hasFilters();
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

        $instance->initializer6ff24 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderda112) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderda112 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderda112->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__get', ['name' => $name], $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        if (isset(self::$publicProperties82255[$name])) {
            return $this->valueHolderda112->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda112;

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

        $targetObject = $this->valueHolderda112;
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
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda112;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderda112;
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
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__isset', array('name' => $name), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda112;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderda112;
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
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__unset', array('name' => $name), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderda112;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderda112;
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
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__clone', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        $this->valueHolderda112 = clone $this->valueHolderda112;
    }

    public function __sleep()
    {
        $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, '__sleep', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;

        return array('valueHolderda112');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6ff24 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6ff24;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6ff24 && ($this->initializer6ff24->__invoke($valueHolderda112, $this, 'initializeProxy', array(), $this->initializer6ff24) || 1) && $this->valueHolderda112 = $valueHolderda112;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderda112;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderda112;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
