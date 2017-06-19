<?php

namespace Proxies\__CG__\Victoire\Bundle\BlogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tag extends \Victoire\Bundle\BlogBundle\Entity\Tag implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', 'title', 'slug', 'articles', 'blog', 'proxy', '' . "\0" . 'Victoire\\Bundle\\BlogBundle\\Entity\\Tag' . "\0" . 'visibleOnFront'];
        }

        return ['__isInitialized__', 'id', 'title', 'slug', 'articles', 'blog', 'proxy', '' . "\0" . 'Victoire\\Bundle\\BlogBundle\\Entity\\Tag' . "\0" . 'visibleOnFront'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tag $proxy) {
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
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
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setPages($pages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPages', [$pages]);

        return parent::setPages($pages);
    }

    /**
     * {@inheritDoc}
     */
    public function getPages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPages', []);

        return parent::getPages();
    }

    /**
     * {@inheritDoc}
     */
    public function setArticles($articles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArticles', [$articles]);

        return parent::setArticles($articles);
    }

    /**
     * {@inheritDoc}
     */
    public function getArticles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArticles', []);

        return parent::getArticles();
    }

    /**
     * {@inheritDoc}
     */
    public function getBlog()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBlog', []);

        return parent::getBlog();
    }

    /**
     * {@inheritDoc}
     */
    public function setBlog(\Victoire\Bundle\BlogBundle\Entity\Blog $blog)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBlog', [$blog]);

        return parent::setBlog($blog);
    }

    /**
     * {@inheritDoc}
     */
    public function setProxy(\Victoire\Bundle\CoreBundle\Entity\EntityProxy $proxy = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProxy', [$proxy]);

        return parent::setProxy($proxy);
    }

    /**
     * {@inheritDoc}
     */
    public function getProxy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProxy', []);

        return parent::getProxy();
    }

    /**
     * {@inheritDoc}
     */
    public function isVisibleOnFront()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVisibleOnFront', []);

        return parent::isVisibleOnFront();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisibleOnFront($visibleOnFront)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisibleOnFront', [$visibleOnFront]);

        return parent::setVisibleOnFront($visibleOnFront);
    }

    /**
     * {@inheritDoc}
     */
    public function getEntityAttributeValue($field)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEntityAttributeValue', [$field]);

        return parent::getEntityAttributeValue($field);
    }

}