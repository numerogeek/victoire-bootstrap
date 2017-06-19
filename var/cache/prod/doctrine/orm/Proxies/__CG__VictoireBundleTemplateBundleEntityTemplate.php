<?php

namespace Proxies\__CG__\Victoire\Bundle\TemplateBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Template extends \Victoire\Bundle\TemplateBundle\Entity\Template implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'inheritors', 'layout', 'translations', 'id', 'bodyId', 'bodyClass', 'widgetMaps', 'parent', 'position', 'lft', 'lvl', 'rgt', 'root', 'children', 'author', 'undeletable', 'references', 'template', 'cssHash', 'cssUpToDate', 'roles', 'builtWidgetMap', 'createdAt', 'updatedAt', 'newTranslations', 'currentLocale', 'defaultLocale'];
        }

        return ['__isInitialized__', 'inheritors', 'layout', 'translations', 'id', 'bodyId', 'bodyClass', 'widgetMaps', 'parent', 'position', 'lft', 'lvl', 'rgt', 'root', 'children', 'author', 'undeletable', 'references', 'template', 'cssHash', 'cssUpToDate', 'roles', 'builtWidgetMap', 'createdAt', 'updatedAt', 'newTranslations', 'currentLocale', 'defaultLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Template $proxy) {
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
    public function addPage(\Victoire\Bundle\PageBundle\Entity\BasePage $page)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPage', [$page]);

        return parent::addPage($page);
    }

    /**
     * {@inheritDoc}
     */
    public function setPages(array $pages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPages', [$pages]);

        return parent::setPages($pages);
    }

    /**
     * {@inheritDoc}
     */
    public function removePage($page)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePage', [$page]);

        return parent::removePage($page);
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
    public function setLayout($layout)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLayout', [$layout]);

        return parent::setLayout($layout);
    }

    /**
     * {@inheritDoc}
     */
    public function getLayout()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLayout', []);

        return parent::getLayout();
    }

    /**
     * {@inheritDoc}
     */
    public function setInheritors($inheritors)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInheritors', [$inheritors]);

        return parent::setInheritors($inheritors);
    }

    /**
     * {@inheritDoc}
     */
    public function getInheritors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInheritors', []);

        return parent::getInheritors();
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplateInheritors()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplateInheritors', []);

        return parent::getTemplateInheritors();
    }

    /**
     * {@inheritDoc}
     */
    public function validate(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'validate', [$context]);

        return parent::validate($context);
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
    public function setTemplate($template)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplate', [$template]);

        return parent::setTemplate($template);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplate', []);

        return parent::getTemplate();
    }

    /**
     * {@inheritDoc}
     */
    public function setParent(\Victoire\Bundle\CoreBundle\Entity\View $parent = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParent', [$parent]);

        return parent::setParent($parent);
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
    public function setChildren($children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChildren', [$children]);

        return parent::setChildren($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', []);

        return parent::getChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function hasChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasChildren', []);

        return parent::hasChildren();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\Victoire\Bundle\CoreBundle\Entity\View $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', [$child]);

        return parent::addChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\Victoire\Bundle\CoreBundle\Entity\View $child)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', [$child]);

        return parent::removeChild($child);
    }

    /**
     * {@inheritDoc}
     */
    public function getLft()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLft', []);

        return parent::getLft();
    }

    /**
     * {@inheritDoc}
     */
    public function setLft($lft)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLft', [$lft]);

        return parent::setLft($lft);
    }

    /**
     * {@inheritDoc}
     */
    public function getRgt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRgt', []);

        return parent::getRgt();
    }

    /**
     * {@inheritDoc}
     */
    public function setRgt($rgt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRgt', [$rgt]);

        return parent::setRgt($rgt);
    }

    /**
     * {@inheritDoc}
     */
    public function getLvl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLvl', []);

        return parent::getLvl();
    }

    /**
     * {@inheritDoc}
     */
    public function setLvl($lvl)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLvl', [$lvl]);

        return parent::setLvl($lvl);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoot()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoot', []);

        return parent::getRoot();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoot($root)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoot', [$root]);

        return parent::setRoot($root);
    }

    /**
     * {@inheritDoc}
     */
    public function setUndeletable($undeletable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUndeletable', [$undeletable]);

        return parent::setUndeletable($undeletable);
    }

    /**
     * {@inheritDoc}
     */
    public function isUndeletable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isUndeletable', []);

        return parent::isUndeletable();
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getBodyId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBodyId', []);

        return parent::getBodyId();
    }

    /**
     * {@inheritDoc}
     */
    public function setBodyId($bodyId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBodyId', [$bodyId]);

        return parent::setBodyId($bodyId);
    }

    /**
     * {@inheritDoc}
     */
    public function getBodyClass()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBodyClass', []);

        return parent::getBodyClass();
    }

    /**
     * {@inheritDoc}
     */
    public function setBodyClass($bodyClass)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBodyClass', [$bodyClass]);

        return parent::setBodyClass($bodyClass);
    }

    /**
     * {@inheritDoc}
     */
    public function setWidgetMaps($widgetMaps)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidgetMaps', [$widgetMaps]);

        return parent::setWidgetMaps($widgetMaps);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidgetMaps()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidgetMaps', []);

        return parent::getWidgetMaps();
    }

    /**
     * {@inheritDoc}
     */
    public function addWidgetMap(\Victoire\Bundle\WidgetMapBundle\Entity\WidgetMap $widgetMap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addWidgetMap', [$widgetMap]);

        return parent::addWidgetMap($widgetMap);
    }

    /**
     * {@inheritDoc}
     */
    public function removeWidgetMap(\Victoire\Bundle\WidgetMapBundle\Entity\WidgetMap $widgetMap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeWidgetMap', [$widgetMap]);

        return parent::removeWidgetMap($widgetMap);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidgetMapsForViewAndTemplates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidgetMapsForViewAndTemplates', []);

        return parent::getWidgetMapsForViewAndTemplates();
    }

    /**
     * {@inheritDoc}
     */
    public function getBuiltWidgetMap()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBuiltWidgetMap', []);

        return parent::getBuiltWidgetMap();
    }

    /**
     * {@inheritDoc}
     */
    public function setBuiltWidgetMap($builtWidgetMap)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBuiltWidgetMap', [$builtWidgetMap]);

        return parent::setBuiltWidgetMap($builtWidgetMap);
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
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
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
    public function getReference($locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', [$locale]);

        return parent::getReference($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getReferences()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReferences', []);

        return parent::getReferences();
    }

    /**
     * {@inheritDoc}
     */
    public function setReferences($references)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReferences', [$references]);

        return parent::setReferences($references);
    }

    /**
     * {@inheritDoc}
     */
    public function setReference(\Victoire\Bundle\ViewReferenceBundle\ViewReference\ViewReference $reference = NULL, $locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference, $locale]);

        return parent::setReference($reference, $locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCssHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCssHash', []);

        return parent::getCssHash();
    }

    /**
     * {@inheritDoc}
     */
    public function setCssHash($cssHash)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCssHash', [$cssHash]);

        return parent::setCssHash($cssHash);
    }

    /**
     * {@inheritDoc}
     */
    public function changeCssHash()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'changeCssHash', []);

        return parent::changeCssHash();
    }

    /**
     * {@inheritDoc}
     */
    public function isTemplateOf(\Victoire\Bundle\CoreBundle\Entity\View $view)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isTemplateOf', [$view]);

        return parent::isTemplateOf($view);
    }

    /**
     * {@inheritDoc}
     */
    public function isCssUpToDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCssUpToDate', []);

        return parent::isCssUpToDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setCssUpToDate($cssUpToDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCssUpToDate', [$cssUpToDate]);

        return parent::setCssUpToDate($cssUpToDate);
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
    public function setName($name, $locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name, $locale]);

        return parent::setName($name, $locale);
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
    public function setSlug($slug, $locale = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug, $locale]);

        return parent::setSlug($slug, $locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles($roles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewTranslations', []);

        return parent::getNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function translate($locale = NULL, $fallbackToDefault = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'translate', [$locale, $fallbackToDefault]);

        return parent::translate($locale, $fallbackToDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function mergeNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mergeNewTranslations', []);

        return parent::mergeNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$locale]);

        return parent::setCurrentLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentLocale', []);

        return parent::getCurrentLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLocale', [$locale]);

        return parent::setDefaultLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

}