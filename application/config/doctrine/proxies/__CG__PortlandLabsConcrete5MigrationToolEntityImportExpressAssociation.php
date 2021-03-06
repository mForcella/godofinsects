<?php

namespace DoctrineProxies\__CG__\PortlandLabs\Concrete5\MigrationTool\Entity\Import\Express;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Association extends \PortlandLabs\Concrete5\MigrationTool\Entity\Import\Express\Association implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'id', 'entity', 'type', 'source_entity', 'target_entity', 'target_property_name', 'inversed_by_property_name'];
        }

        return ['__isInitialized__', 'id', 'entity', 'type', 'source_entity', 'target_entity', 'target_property_name', 'inversed_by_property_name'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Association $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntity', []);

        return parent::getEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setEntity($entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEntity', [$entity]);

        return parent::setEntity($entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getSourceEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSourceEntity', []);

        return parent::getSourceEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setSourceEntity($source_entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSourceEntity', [$source_entity]);

        return parent::setSourceEntity($source_entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetEntity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetEntity', []);

        return parent::getTargetEntity();
    }

    /**
     * {@inheritDoc}
     */
    public function setTargetEntity($target_entity)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTargetEntity', [$target_entity]);

        return parent::setTargetEntity($target_entity);
    }

    /**
     * {@inheritDoc}
     */
    public function getTargetPropertyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTargetPropertyName', []);

        return parent::getTargetPropertyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setTargetPropertyName($target_property_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTargetPropertyName', [$target_property_name]);

        return parent::setTargetPropertyName($target_property_name);
    }

    /**
     * {@inheritDoc}
     */
    public function getInversedByPropertyName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInversedByPropertyName', []);

        return parent::getInversedByPropertyName();
    }

    /**
     * {@inheritDoc}
     */
    public function setInversedByPropertyName($inversed_by_property_name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInversedByPropertyName', [$inversed_by_property_name]);

        return parent::setInversedByPropertyName($inversed_by_property_name);
    }

}
