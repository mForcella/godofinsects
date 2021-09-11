<?php

namespace DoctrineProxies\__CG__\PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class UserAttributeKeyCategoryInstance extends \PortlandLabs\Concrete5\MigrationTool\Entity\Import\AttributeKey\UserAttributeKeyCategoryInstance implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'displayed_in_profile', 'editable_in_profile', 'required_in_profile', 'editable_in_registration', 'required_in_registration', 'displayed_in_member_list', 'id', 'key'];
        }

        return ['__isInitialized__', 'displayed_in_profile', 'editable_in_profile', 'required_in_profile', 'editable_in_registration', 'required_in_registration', 'displayed_in_member_list', 'id', 'key'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (UserAttributeKeyCategoryInstance $proxy) {
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
    public function getHandle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHandle', []);

        return parent::getHandle();
    }

    /**
     * {@inheritDoc}
     */
    public function getFormatter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFormatter', []);

        return parent::getFormatter();
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayedInProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayedInProfile', []);

        return parent::getDisplayedInProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayedInProfile($displayed_in_profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayedInProfile', [$displayed_in_profile]);

        return parent::setDisplayedInProfile($displayed_in_profile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditableInProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditableInProfile', []);

        return parent::getEditableInProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditableInProfile($editable_in_profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditableInProfile', [$editable_in_profile]);

        return parent::setEditableInProfile($editable_in_profile);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequiredInProfile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequiredInProfile', []);

        return parent::getRequiredInProfile();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequiredInProfile($required_in_profile)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequiredInProfile', [$required_in_profile]);

        return parent::setRequiredInProfile($required_in_profile);
    }

    /**
     * {@inheritDoc}
     */
    public function getEditableInRegistration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEditableInRegistration', []);

        return parent::getEditableInRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function setEditableInRegistration($editable_in_registration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEditableInRegistration', [$editable_in_registration]);

        return parent::setEditableInRegistration($editable_in_registration);
    }

    /**
     * {@inheritDoc}
     */
    public function getRequiredInRegistration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequiredInRegistration', []);

        return parent::getRequiredInRegistration();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequiredInRegistration($required_in_registration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequiredInRegistration', [$required_in_registration]);

        return parent::setRequiredInRegistration($required_in_registration);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayedInMemberList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayedInMemberList', []);

        return parent::getDisplayedInMemberList();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayedInMemberList($displayed_in_member_list)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayedInMemberList', [$displayed_in_member_list]);

        return parent::setDisplayedInMemberList($displayed_in_member_list);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublisher()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublisher', []);

        return parent::getPublisher();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
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
    public function getKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKey', []);

        return parent::getKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setKey($key)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKey', [$key]);

        return parent::setKey($key);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getAttributeController()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttributeController', []);

        return parent::getAttributeController();
    }

}
