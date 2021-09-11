<?php

namespace DoctrineProxies\__CG__\PortlandLabs\Concrete5\MigrationTool\Entity\Import;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PageFeed extends \PortlandLabs\Concrete5\MigrationTool\Entity\Import\PageFeed implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'collection', 'handle', 'title', 'parent', 'description', 'include_all_descendants', 'display_aliases', 'display_featured_only', 'page_type', 'content_type', 'content_type_area'];
        }

        return ['__isInitialized__', 'id', 'collection', 'handle', 'title', 'parent', 'description', 'include_all_descendants', 'display_aliases', 'display_featured_only', 'page_type', 'content_type', 'content_type_area'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PageFeed $proxy) {
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
    public function getCollection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCollection', []);

        return parent::getCollection();
    }

    /**
     * {@inheritDoc}
     */
    public function setCollection($collection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCollection', [$collection]);

        return parent::setCollection($collection);
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
    public function setHandle($handle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHandle', [$handle]);

        return parent::setHandle($handle);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getParent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParent', []);

        return parent::getParent();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent($parent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getIncludeAllDescendants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIncludeAllDescendants', []);

        return parent::getIncludeAllDescendants();
    }

    /**
     * {@inheritDoc}
     */
    public function setIncludeAllDescendants($include_all_descendants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIncludeAllDescendants', [$include_all_descendants]);

        return parent::setIncludeAllDescendants($include_all_descendants);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayAliases()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayAliases', []);

        return parent::getDisplayAliases();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayAliases($display_aliases)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayAliases', [$display_aliases]);

        return parent::setDisplayAliases($display_aliases);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisplayFeaturedOnly()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisplayFeaturedOnly', []);

        return parent::getDisplayFeaturedOnly();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisplayFeaturedOnly($display_featured_only)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisplayFeaturedOnly', [$display_featured_only]);

        return parent::setDisplayFeaturedOnly($display_featured_only);
    }

    /**
     * {@inheritDoc}
     */
    public function getPageType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPageType', []);

        return parent::getPageType();
    }

    /**
     * {@inheritDoc}
     */
    public function setPageType($page_type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPageType', [$page_type]);

        return parent::setPageType($page_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getContentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContentType', []);

        return parent::getContentType();
    }

    /**
     * {@inheritDoc}
     */
    public function setContentType($content_type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContentType', [$content_type]);

        return parent::setContentType($content_type);
    }

    /**
     * {@inheritDoc}
     */
    public function getContentTypeArea()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContentTypeArea', []);

        return parent::getContentTypeArea();
    }

    /**
     * {@inheritDoc}
     */
    public function setContentTypeArea($content_type_area)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContentTypeArea', [$content_type_area]);

        return parent::setContentTypeArea($content_type_area);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublisherValidator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublisherValidator', []);

        return parent::getPublisherValidator();
    }

    /**
     * {@inheritDoc}
     */
    public function getInspector()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInspector', []);

        return parent::getInspector();
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
