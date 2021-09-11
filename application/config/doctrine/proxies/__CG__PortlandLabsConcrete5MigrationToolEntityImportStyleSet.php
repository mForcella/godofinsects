<?php

namespace DoctrineProxies\__CG__\PortlandLabs\Concrete5\MigrationTool\Entity\Import;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class StyleSet extends \PortlandLabs\Concrete5\MigrationTool\Entity\Import\StyleSet implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'customClass', 'backgroundColor', 'backgroundImage', 'backgroundRepeat', 'borderColor', 'borderStyle', 'borderWidth', 'borderRadius', 'baseFontSize', 'alignment', 'textColor', 'linkColor', 'marginTop', 'marginBottom', 'marginLeft', 'marginRight', 'paddingTop', 'paddingBottom', 'paddingLeft', 'paddingRight', 'rotate', 'boxShadowHorizontal', 'boxShadowVertical', 'boxShadowBlur', 'boxShadowSpread', 'boxShadowColor', 'hideOnExtraSmallDevice', 'hideOnSmallDevice', 'hideOnMediumDevice', 'hideOnLargeDevice'];
        }

        return ['__isInitialized__', 'id', 'customClass', 'backgroundColor', 'backgroundImage', 'backgroundRepeat', 'borderColor', 'borderStyle', 'borderWidth', 'borderRadius', 'baseFontSize', 'alignment', 'textColor', 'linkColor', 'marginTop', 'marginBottom', 'marginLeft', 'marginRight', 'paddingTop', 'paddingBottom', 'paddingLeft', 'paddingRight', 'rotate', 'boxShadowHorizontal', 'boxShadowVertical', 'boxShadowBlur', 'boxShadowSpread', 'boxShadowColor', 'hideOnExtraSmallDevice', 'hideOnSmallDevice', 'hideOnMediumDevice', 'hideOnLargeDevice'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (StyleSet $proxy) {
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
    public function getCustomClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomClass', []);

        return parent::getCustomClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomClass($customClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomClass', [$customClass]);

        return parent::setCustomClass($customClass);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackgroundColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackgroundColor', []);

        return parent::getBackgroundColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackgroundColor($backgroundColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackgroundColor', [$backgroundColor]);

        return parent::setBackgroundColor($backgroundColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackgroundImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackgroundImage', []);

        return parent::getBackgroundImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackgroundImage($backgroundImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackgroundImage', [$backgroundImage]);

        return parent::setBackgroundImage($backgroundImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getBackgroundRepeat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBackgroundRepeat', []);

        return parent::getBackgroundRepeat();
    }

    /**
     * {@inheritDoc}
     */
    public function setBackgroundRepeat($backgroundRepeat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBackgroundRepeat', [$backgroundRepeat]);

        return parent::setBackgroundRepeat($backgroundRepeat);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorderColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorderColor', []);

        return parent::getBorderColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorderColor($borderColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorderColor', [$borderColor]);

        return parent::setBorderColor($borderColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorderStyle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorderStyle', []);

        return parent::getBorderStyle();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorderStyle($borderStyle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorderStyle', [$borderStyle]);

        return parent::setBorderStyle($borderStyle);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorderWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorderWidth', []);

        return parent::getBorderWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorderWidth($borderWidth)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorderWidth', [$borderWidth]);

        return parent::setBorderWidth($borderWidth);
    }

    /**
     * {@inheritDoc}
     */
    public function getBorderRadius()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBorderRadius', []);

        return parent::getBorderRadius();
    }

    /**
     * {@inheritDoc}
     */
    public function setBorderRadius($borderRadius)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBorderRadius', [$borderRadius]);

        return parent::setBorderRadius($borderRadius);
    }

    /**
     * {@inheritDoc}
     */
    public function getBaseFontSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBaseFontSize', []);

        return parent::getBaseFontSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setBaseFontSize($baseFontSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBaseFontSize', [$baseFontSize]);

        return parent::setBaseFontSize($baseFontSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlignment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlignment', []);

        return parent::getAlignment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlignment($alignment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlignment', [$alignment]);

        return parent::setAlignment($alignment);
    }

    /**
     * {@inheritDoc}
     */
    public function getTextColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTextColor', []);

        return parent::getTextColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setTextColor($textColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTextColor', [$textColor]);

        return parent::setTextColor($textColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getLinkColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLinkColor', []);

        return parent::getLinkColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setLinkColor($linkColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLinkColor', [$linkColor]);

        return parent::setLinkColor($linkColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarginTop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarginTop', []);

        return parent::getMarginTop();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarginTop($marginTop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarginTop', [$marginTop]);

        return parent::setMarginTop($marginTop);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarginBottom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarginBottom', []);

        return parent::getMarginBottom();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarginBottom($marginBottom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarginBottom', [$marginBottom]);

        return parent::setMarginBottom($marginBottom);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarginLeft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarginLeft', []);

        return parent::getMarginLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarginLeft($marginLeft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarginLeft', [$marginLeft]);

        return parent::setMarginLeft($marginLeft);
    }

    /**
     * {@inheritDoc}
     */
    public function getMarginRight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMarginRight', []);

        return parent::getMarginRight();
    }

    /**
     * {@inheritDoc}
     */
    public function setMarginRight($marginRight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMarginRight', [$marginRight]);

        return parent::setMarginRight($marginRight);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaddingTop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaddingTop', []);

        return parent::getPaddingTop();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaddingTop($paddingTop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaddingTop', [$paddingTop]);

        return parent::setPaddingTop($paddingTop);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaddingBottom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaddingBottom', []);

        return parent::getPaddingBottom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaddingBottom($paddingBottom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaddingBottom', [$paddingBottom]);

        return parent::setPaddingBottom($paddingBottom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaddingLeft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaddingLeft', []);

        return parent::getPaddingLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaddingLeft($paddingLeft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaddingLeft', [$paddingLeft]);

        return parent::setPaddingLeft($paddingLeft);
    }

    /**
     * {@inheritDoc}
     */
    public function getPaddingRight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPaddingRight', []);

        return parent::getPaddingRight();
    }

    /**
     * {@inheritDoc}
     */
    public function setPaddingRight($paddingRight)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPaddingRight', [$paddingRight]);

        return parent::setPaddingRight($paddingRight);
    }

    /**
     * {@inheritDoc}
     */
    public function getRotate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRotate', []);

        return parent::getRotate();
    }

    /**
     * {@inheritDoc}
     */
    public function setRotate($rotate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRotate', [$rotate]);

        return parent::setRotate($rotate);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoxShadowHorizontal()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoxShadowHorizontal', []);

        return parent::getBoxShadowHorizontal();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoxShadowHorizontal($boxShadowHorizontal)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoxShadowHorizontal', [$boxShadowHorizontal]);

        return parent::setBoxShadowHorizontal($boxShadowHorizontal);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoxShadowVertical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoxShadowVertical', []);

        return parent::getBoxShadowVertical();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoxShadowVertical($boxShadowVertical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoxShadowVertical', [$boxShadowVertical]);

        return parent::setBoxShadowVertical($boxShadowVertical);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoxShadowBlur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoxShadowBlur', []);

        return parent::getBoxShadowBlur();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoxShadowBlur($boxShadowBlur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoxShadowBlur', [$boxShadowBlur]);

        return parent::setBoxShadowBlur($boxShadowBlur);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoxShadowSpread()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoxShadowSpread', []);

        return parent::getBoxShadowSpread();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoxShadowSpread($boxShadowSpread)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoxShadowSpread', [$boxShadowSpread]);

        return parent::setBoxShadowSpread($boxShadowSpread);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoxShadowColor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoxShadowColor', []);

        return parent::getBoxShadowColor();
    }

    /**
     * {@inheritDoc}
     */
    public function setBoxShadowColor($boxShadowColor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBoxShadowColor', [$boxShadowColor]);

        return parent::setBoxShadowColor($boxShadowColor);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideOnExtraSmallDevice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideOnExtraSmallDevice', []);

        return parent::getHideOnExtraSmallDevice();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideOnExtraSmallDevice($hideOnExtraSmallDevice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideOnExtraSmallDevice', [$hideOnExtraSmallDevice]);

        return parent::setHideOnExtraSmallDevice($hideOnExtraSmallDevice);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideOnSmallDevice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideOnSmallDevice', []);

        return parent::getHideOnSmallDevice();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideOnSmallDevice($hideOnSmallDevice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideOnSmallDevice', [$hideOnSmallDevice]);

        return parent::setHideOnSmallDevice($hideOnSmallDevice);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideOnMediumDevice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideOnMediumDevice', []);

        return parent::getHideOnMediumDevice();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideOnMediumDevice($hideOnMediumDevice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideOnMediumDevice', [$hideOnMediumDevice]);

        return parent::setHideOnMediumDevice($hideOnMediumDevice);
    }

    /**
     * {@inheritDoc}
     */
    public function getHideOnLargeDevice()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHideOnLargeDevice', []);

        return parent::getHideOnLargeDevice();
    }

    /**
     * {@inheritDoc}
     */
    public function setHideOnLargeDevice($hideOnLargeDevice)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHideOnLargeDevice', [$hideOnLargeDevice]);

        return parent::setHideOnLargeDevice($hideOnLargeDevice);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublisher()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublisher', []);

        return parent::getPublisher();
    }

}
