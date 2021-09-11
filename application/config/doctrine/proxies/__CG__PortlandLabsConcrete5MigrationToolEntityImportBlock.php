<?php

namespace DoctrineProxies\__CG__\PortlandLabs\Concrete5\MigrationTool\Entity\Import;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Block extends \PortlandLabs\Concrete5\MigrationTool\Entity\Import\Block implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'type', 'name', 'custom_template', 'block_value', 'style_set', 'position', 'area', 'defaults_output_identifier'];
        }

        return ['__isInitialized__', 'id', 'type', 'name', 'custom_template', 'block_value', 'style_set', 'position', 'area', 'defaults_output_identifier'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Block $proxy) {
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
    public function getArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArea', []);

        return parent::getArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setArea($area)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArea', [$area]);

        return parent::setArea($area);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
    }

    /**
     * {@inheritDoc}
     */
    public function getBlockValue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlockValue', []);

        return parent::getBlockValue();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlockValue($block_value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlockValue', [$block_value]);

        return parent::setBlockValue($block_value);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultsOutputIdentifier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultsOutputIdentifier', []);

        return parent::getDefaultsOutputIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultsOutputIdentifier($defaults_output_identifier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultsOutputIdentifier', [$defaults_output_identifier]);

        return parent::setDefaultsOutputIdentifier($defaults_output_identifier);
    }

    /**
     * {@inheritDoc}
     */
    public function getStyleSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStyleSet', []);

        return parent::getStyleSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStyleSet($style_set)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStyleSet', [$style_set]);

        return parent::setStyleSet($style_set);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomTemplate', []);

        return parent::getCustomTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomTemplate($custom_template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomTemplate', [$custom_template]);

        return parent::setCustomTemplate($custom_template);
    }

    /**
     * {@inheritDoc}
     */
    public function createPublisherLogObject($publishedObject = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'createPublisherLogObject', [$publishedObject]);

        return parent::createPublisherLogObject($publishedObject);
    }

}