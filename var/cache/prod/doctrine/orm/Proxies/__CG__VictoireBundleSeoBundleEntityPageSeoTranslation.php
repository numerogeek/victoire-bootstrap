<?php

namespace Proxies\__CG__\Victoire\Bundle\SeoBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PageSeoTranslation extends \Victoire\Bundle\SeoBundle\Entity\PageSeoTranslation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'metaTitle', 'metaDescription', 'relAuthor', 'relPublisher', 'ogTitle', 'ogType', 'ogImage', 'ogUrl', 'ogDescription', 'fbAdmins', 'twitterCard', 'twitterUrl', 'twitterCreator', 'twitterTitle', 'twitterDescription', 'twitterImage', 'schemaPageType', 'schemaName', 'schemaDescription', 'schemaImage', 'metaRobotsIndex', 'metaRobotsFollow', 'metaRobotsAdvanced', 'sitemapIndexed', 'sitemapPriority', 'sitemapChangeFreq', 'relCanonical', 'keyword', 'redirectTo', 'id', 'locale', 'translatable'];
        }

        return ['__isInitialized__', 'metaTitle', 'metaDescription', 'relAuthor', 'relPublisher', 'ogTitle', 'ogType', 'ogImage', 'ogUrl', 'ogDescription', 'fbAdmins', 'twitterCard', 'twitterUrl', 'twitterCreator', 'twitterTitle', 'twitterDescription', 'twitterImage', 'schemaPageType', 'schemaName', 'schemaDescription', 'schemaImage', 'metaRobotsIndex', 'metaRobotsFollow', 'metaRobotsAdvanced', 'sitemapIndexed', 'sitemapPriority', 'sitemapChangeFreq', 'relCanonical', 'keyword', 'redirectTo', 'id', 'locale', 'translatable'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PageSeoTranslation $proxy) {
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
    public function setRedirectTo(\Victoire\Bundle\CoreBundle\Entity\Link $redirectTo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRedirectTo', [$redirectTo]);

        return parent::setRedirectTo($redirectTo);
    }

    /**
     * {@inheritDoc}
     */
    public function getRedirectTo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRedirectTo', []);

        return parent::getRedirectTo();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaTitle($metaTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaTitle', [$metaTitle]);

        return parent::setMetaTitle($metaTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaTitle', []);

        return parent::getMetaTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaDescription($metaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaDescription', [$metaDescription]);

        return parent::setMetaDescription($metaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaDescription', []);

        return parent::getMetaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelAuthor($relAuthor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelAuthor', [$relAuthor]);

        return parent::setRelAuthor($relAuthor);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelAuthor', []);

        return parent::getRelAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelPublisher($relPublisher)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelPublisher', [$relPublisher]);

        return parent::setRelPublisher($relPublisher);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelPublisher()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelPublisher', []);

        return parent::getRelPublisher();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgTitle($ogTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgTitle', [$ogTitle]);

        return parent::setOgTitle($ogTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgTitle', []);

        return parent::getOgTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgType($ogType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgType', [$ogType]);

        return parent::setOgType($ogType);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgType', []);

        return parent::getOgType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImage($ogImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImage', [$ogImage]);

        return parent::setOgImage($ogImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImage', []);

        return parent::getOgImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgUrl($ogUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgUrl', [$ogUrl]);

        return parent::setOgUrl($ogUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgUrl', []);

        return parent::getOgUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgDescription($ogDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgDescription', [$ogDescription]);

        return parent::setOgDescription($ogDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgDescription', []);

        return parent::getOgDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setFbAdmins($fbAdmins)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFbAdmins', [$fbAdmins]);

        return parent::setFbAdmins($fbAdmins);
    }

    /**
     * {@inheritDoc}
     */
    public function getFbAdmins()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFbAdmins', []);

        return parent::getFbAdmins();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterCard($twitterCard)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterCard', [$twitterCard]);

        return parent::setTwitterCard($twitterCard);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterCard()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterCard', []);

        return parent::getTwitterCard();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterUrl($twitterUrl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterUrl', [$twitterUrl]);

        return parent::setTwitterUrl($twitterUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterUrl', []);

        return parent::getTwitterUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterCreator($twitterCreator)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterCreator', [$twitterCreator]);

        return parent::setTwitterCreator($twitterCreator);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterCreator()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterCreator', []);

        return parent::getTwitterCreator();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterTitle($twitterTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterTitle', [$twitterTitle]);

        return parent::setTwitterTitle($twitterTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterTitle', []);

        return parent::getTwitterTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterDescription($twitterDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterDescription', [$twitterDescription]);

        return parent::setTwitterDescription($twitterDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterDescription', []);

        return parent::getTwitterDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setTwitterImage($twitterImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTwitterImage', [$twitterImage]);

        return parent::setTwitterImage($twitterImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getTwitterImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTwitterImage', []);

        return parent::getTwitterImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemaPageType($schemaPageType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemaPageType', [$schemaPageType]);

        return parent::setSchemaPageType($schemaPageType);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemaPageType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemaPageType', []);

        return parent::getSchemaPageType();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemaName($schemaName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemaName', [$schemaName]);

        return parent::setSchemaName($schemaName);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemaName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemaName', []);

        return parent::getSchemaName();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemaDescription($schemaDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemaDescription', [$schemaDescription]);

        return parent::setSchemaDescription($schemaDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemaDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemaDescription', []);

        return parent::getSchemaDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemaImage($schemaImage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemaImage', [$schemaImage]);

        return parent::setSchemaImage($schemaImage);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemaImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemaImage', []);

        return parent::getSchemaImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaRobotsIndex($metaRobotsIndex)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaRobotsIndex', [$metaRobotsIndex]);

        return parent::setMetaRobotsIndex($metaRobotsIndex);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaRobotsIndex()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaRobotsIndex', []);

        return parent::getMetaRobotsIndex();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaRobotsFollow($metaRobotsFollow)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaRobotsFollow', [$metaRobotsFollow]);

        return parent::setMetaRobotsFollow($metaRobotsFollow);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaRobotsFollow()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaRobotsFollow', []);

        return parent::getMetaRobotsFollow();
    }

    /**
     * {@inheritDoc}
     */
    public function setMetaRobotsAdvanced($metaRobotsAdvanced)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetaRobotsAdvanced', [$metaRobotsAdvanced]);

        return parent::setMetaRobotsAdvanced($metaRobotsAdvanced);
    }

    /**
     * {@inheritDoc}
     */
    public function getMetaRobotsAdvanced()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetaRobotsAdvanced', []);

        return parent::getMetaRobotsAdvanced();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitemapIndexed($sitemapIndexed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitemapIndexed', [$sitemapIndexed]);

        return parent::setSitemapIndexed($sitemapIndexed);
    }

    /**
     * {@inheritDoc}
     */
    public function isSitemapIndexed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isSitemapIndexed', []);

        return parent::isSitemapIndexed();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitemapPriority($sitemapPriority)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitemapPriority', [$sitemapPriority]);

        return parent::setSitemapPriority($sitemapPriority);
    }

    /**
     * {@inheritDoc}
     */
    public function getSitemapPriority()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSitemapPriority', []);

        return parent::getSitemapPriority();
    }

    /**
     * {@inheritDoc}
     */
    public function setSitemapChangeFreq($sitemapChangeFreq)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSitemapChangeFreq', [$sitemapChangeFreq]);

        return parent::setSitemapChangeFreq($sitemapChangeFreq);
    }

    /**
     * {@inheritDoc}
     */
    public function getSitemapChangeFreq()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSitemapChangeFreq', []);

        return parent::getSitemapChangeFreq();
    }

    /**
     * {@inheritDoc}
     */
    public function setRelCanonical($relCanonical)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRelCanonical', [$relCanonical]);

        return parent::setRelCanonical($relCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function getRelCanonical()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRelCanonical', []);

        return parent::getRelCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function setKeyword($keyword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKeyword', [$keyword]);

        return parent::setKeyword($keyword);
    }

    /**
     * {@inheritDoc}
     */
    public function getKeyword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKeyword', []);

        return parent::getKeyword();
    }

    /**
     * {@inheritDoc}
     */
    public function setTranslatable($translatable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTranslatable', [$translatable]);

        return parent::setTranslatable($translatable);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslatable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslatable', []);

        return parent::getTranslatable();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocale', [$locale]);

        return parent::setLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocale', []);

        return parent::getLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function isEmpty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEmpty', []);

        return parent::isEmpty();
    }

}
