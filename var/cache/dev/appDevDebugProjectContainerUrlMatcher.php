<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // bazinga_jstranslation_js
        if (0 === strpos($pathinfo, '/translations') && preg_match('#^/translations(?:/(?P<domain>[\\w]+)(?:\\.(?P<_format>js|json))?)?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_bazinga_jstranslation_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bazinga_jstranslation_js')), array (  '_controller' => 'bazinga.jstranslation.controller:getTranslationsAction',  'domain' => 'messages',  '_format' => 'js',));
        }
        not_bazinga_jstranslation_js:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ($pathinfo === '/resetting/request') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_send_email
            if ($pathinfo === '/resetting/send-email') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ($pathinfo === '/resetting/check-email') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
            }
            not_fos_user_resetting_reset:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        // victoire_analytics_track
        if (preg_match('#^/(?P<_locale>[^/]++)/browseEvent/track/(?P<viewReferenceId>[^/]++)(?:/(?P<referer>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_analytics_track')), array (  'referer' => NULL,  '_controller' => 'Victoire\\Bundle\\AnalyticsBundle\\Controller\\BrowseEventController::trackAction',));
        }

        // victoire_analytics_heartbeat
        if (preg_match('#^/(?P<_locale>[^/]++)/browseEvent/heartbeat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_analytics_heartbeat')), array (  '_controller' => 'Victoire\\Bundle\\AnalyticsBundle\\Controller\\BrowseEventController::heartbeatAction',));
        }

        // victoire_template_index
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/template/index$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_template_index')), array (  '_controller' => 'Victoire\\Bundle\\TemplateBundle\\Controller\\TemplateController::indexAction',));
        }

        // victoire_template_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/template/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_template_show')), array (  '_controller' => 'Victoire\\Bundle\\TemplateBundle\\Controller\\TemplateController::showAction',));
        }

        // victoire_template_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/template/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_template_new')), array (  '_controller' => 'Victoire\\Bundle\\TemplateBundle\\Controller\\TemplateController::newAction',));
        }

        // victoire_template_settings
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/template/(?P<id>[^/]++)/parametres$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_template_settings')), array (  '_controller' => 'Victoire\\Bundle\\TemplateBundle\\Controller\\TemplateController::settingsAction',));
        }

        // victoire_template_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/template/edit/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_template_edit')), array (  '_controller' => 'Victoire\\Bundle\\TemplateBundle\\Controller\\TemplateController::editAction',));
        }

        // victoire_errorPage_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/error/(?P<code>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_errorPage_show')), array (  '_controller' => 'Victoire\\Bundle\\TwigBundle\\Controller\\ErrorPageController::showAction',));
        }

        // victoire_blog_article_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/article/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_blog_article_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_article_new')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\ArticleController::newAction',));
        }
        not_victoire_blog_article_new:

        // victoire_blog_article_new_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/article/new/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_blog_article_new_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_article_new_post')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\ArticleController::newPostAction',));
        }
        not_victoire_blog_article_new_post:

        // victoire_blog_article_settings
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/article/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_blog_article_settings;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_article_settings')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\ArticleController::settingsAction',));
        }
        not_victoire_blog_article_settings:

        // victoire_blog_article_settings_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/article/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_blog_article_settings_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_article_settings_post')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\ArticleController::settingsPostAction',));
        }
        not_victoire_blog_article_settings_post:

        // victoire_core_article_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_article_delete')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\ArticleController::deleteAction',));
        }

        // victoire_blog_index
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/index(?:/(?P<blogId>[^/]++)(?:/(?P<tab>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_index')), array (  'blogId' => NULL,  'tab' => 'articles',  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::indexAction',));
        }

        // victoire_blog_rss
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/feed/(?P<id>[^/\\.]++)\\.rss$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_rss')), array (  '_format' => 'rss',  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::feedAction',));
        }

        // victoire_blog_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_blog_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_new')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::newAction',));
        }
        not_victoire_blog_new:

        // victoire_blog_new_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_blog_new_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_new_post')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::newPostAction',));
        }
        not_victoire_blog_new_post:

        // victoire_blog_settings
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_blog_settings;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_settings')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::settingsAction',));
        }
        not_victoire_blog_settings:

        // victoire_blog_settings_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_blog_settings_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_settings_post')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::settingsPostAction',));
        }
        not_victoire_blog_settings_post:

        // victoire_blog_category
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/(?P<id>[^/]++)/category$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_category')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::categoryAction',));
        }

        // victoire_blog_articles
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/(?P<id>[^/]++)/articles$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_articles')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::articlesAction',));
        }

        // victoire_blog_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/blog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_blog_delete')), array (  '_controller' => 'Victoire\\Bundle\\BlogBundle\\Controller\\BlogController::deleteAction',));
        }

        // victoire_business_template_index
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'victoire_business_template_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_index')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::indexAction',));
        }

        // victoire_business_template_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_show')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::showAction',));
        }

        // victoire_business_template_create
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template(?P<id>[^/]++)/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_business_template_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_create')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::createAction',));
        }
        not_victoire_business_template_create:

        // victoire_business_template_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_business_template_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_new')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::newAction',));
        }
        not_victoire_business_template_new:

        // victoire_business_template_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_business_template_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_edit')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::editAction',));
        }
        not_victoire_business_template_edit:

        // victoire_business_template_update
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'PUT') {
                $allow[] = 'PUT';
                goto not_victoire_business_template_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_update')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::updateAction',));
        }
        not_victoire_business_template_update:

        // victoire_business_template_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_victoire_business_template_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_delete')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::deleteAction',));
        }
        not_victoire_business_template_delete:

        // victoire_business_template_listentities
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/business\\-template/listEntities/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_business_template_listentities')), array (  '_controller' => 'Victoire\\Bundle\\BusinessPageBundle\\Controller\\BusinessTemplateController::listEntitiesAction',));
        }

        // victoire_seo_pageSeo_settings
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/seo/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_seo_pageSeo_settings;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_seo_pageSeo_settings')), array (  '_controller' => 'Victoire\\Bundle\\SeoBundle\\Controller\\PageSeoController::settingsAction',));
        }
        not_victoire_seo_pageSeo_settings:

        // victoire_seo_pageSeo_settings_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/seo/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_seo_pageSeo_settings_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_seo_pageSeo_settings_post')), array (  '_controller' => 'Victoire\\Bundle\\SeoBundle\\Controller\\PageSeoController::settingsPostAction',));
        }
        not_victoire_seo_pageSeo_settings_post:

        // VictoireMediaBundle_aviary
        if (preg_match('#^/(?P<_locale>[^/]++)/aviary/(?P<folderId>\\d+)/(?P<mediaId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_aviary')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\AviaryController::indexAction',));
        }

        // VictoireMediaBundle_chooser
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/chooser/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'VictoireMediaBundle_chooser');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_chooser')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\ChooserController::chooserIndexAction',));
        }

        // VictoireMediaBundle_chooser_show_folder
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/chooser/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_chooser_show_folder')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\ChooserController::chooserShowFolderAction',));
        }

        // VictoireMediaBundle_folder_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/folder/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_folder_show')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\FolderController::showAction',));
        }

        // VictoireMediaBundle_folder_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/folder/delete/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_folder_delete')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\FolderController::deleteAction',));
        }

        // VictoireMediaBundle_folder_sub_create
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/folder/subcreate/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VictoireMediaBundle_folder_sub_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_folder_sub_create')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\FolderController::subCreateAction',));
        }
        not_VictoireMediaBundle_folder_sub_create:

        // VictoireMediaBundle_media_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/media/(?P<mediaId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_show')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::showAction',));
        }

        // VictoireMediaBundle_media_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/media/delete/(?P<mediaId>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_delete')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::deleteAction',));
        }

        // VictoireMediaBundle_media_bulk_upload
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/mediabulkupload/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VictoireMediaBundle_media_bulk_upload;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_bulk_upload')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::bulkUploadAction',));
        }
        not_VictoireMediaBundle_media_bulk_upload:

        // VictoireMediaBundle_media_drop_upload
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/mediadrop/(?P<folderId>\\d+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VictoireMediaBundle_media_drop_upload;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_drop_upload')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::dropAction',));
        }
        not_VictoireMediaBundle_media_drop_upload:

        // VictoireMediaBundle_media_create
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/mediacreate/(?P<folderId>\\d+)/(?P<type>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VictoireMediaBundle_media_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_create')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::createAction',));
        }
        not_VictoireMediaBundle_media_create:

        // VictoireMediaBundle_media_modal_create
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-media/mediacreate/modal/(?P<folderId>\\d+)/(?P<type>.+)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_VictoireMediaBundle_media_modal_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'VictoireMediaBundle_media_modal_create')), array (  '_controller' => 'Victoire\\Bundle\\MediaBundle\\Controller\\MediaController::createModalAction',));
        }
        not_VictoireMediaBundle_media_modal_create:

        // victoire_core_page_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_core_page_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_new')), array (  'isHomepage' => false,  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::newAction',));
        }
        not_victoire_core_page_new:

        // victoire_core_page_new_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_core_page_new_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_new_post')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::newPostAction',));
        }
        not_victoire_core_page_new_post:

        // victoire_core_homepage_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/homepage/new$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_core_homepage_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_homepage_new')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::newPostAction',));
        }
        not_victoire_core_homepage_new:

        // victoire_core_page_settings
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_victoire_core_page_settings;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_settings')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::settingsAction',));
        }
        not_victoire_core_page_settings:

        // victoire_core_page_settings_post
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/(?P<id>[^/]++)/settings$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_victoire_core_page_settings_post;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_settings_post')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::settingsPostAction',));
        }
        not_victoire_core_page_settings_post:

        // victoire_core_page_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/page/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_delete')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::deleteAction',));
        }

        // victoire_core_switchMode
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/switch/mode/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_switchMode')), array (  '_controller' => 'Victoire\\Bundle\\CoreBundle\\Controller\\SwitchController::switchModeAction',));
        }

        // victoire_core_ui_confirm
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/ui/confirm$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_ui_confirm')), array (  '_controller' => 'Victoire\\Bundle\\CoreBundle\\Controller\\UIController::confirmAction',));
        }

        // victoire_core_widget_cache_clear
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms\\-public/widget\\-cache/clear$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_cache_clear')), array (  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetCacheController::clearAction',));
        }

        // victoire_core_widget_show
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms\\-public/widget/show/(?P<id>[^/]++)/(?P<viewReferenceId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_show')), array (  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::showAction',));
        }

        // victoire_core_widget_apiWidgets
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms\\-public/api/widgets/(?P<widgetIds>[^/]++)/(?P<viewReferenceId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_apiWidgets')), array (  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::apiWidgetsAction',));
        }

        // victoire_core_widget_new
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/new/(?P<type>[^/]++)/(?P<viewReference>[^/]++)(?:/(?P<slot>[^/]++)(?:/(?P<quantum>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_new')), array (  'slot' => NULL,  'quantum' => 'a',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::newAction',));
        }

        // victoire_core_widget_create_static
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/create/static/(?P<type>[^/]++)/(?P<viewReference>[^/]++)(?:/(?P<slot>[^/]++)(?:/(?P<quantum>[^/]++)(?:/(?P<position>[^/]++)(?:/(?P<parentWidgetMap>[^/]++))?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_create_static')), array (  'mode' => 'static',  'slot' => NULL,  'businessEntityId' => NULL,  'position' => NULL,  'parentWidgetMap' => NULL,  '_format' => 'json',  'quantum' => 'a',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::createAction',));
        }

        // victoire_core_widget_create
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/create/(?P<mode>[^/]++)/(?P<type>[^/]++)/(?P<viewReference>[^/]++)(?:/(?P<slot>[^/]++)(?:/(?P<quantum>[^/]++)(?:/(?P<businessEntityId>[^/]++)(?:/(?P<position>[^/]++)(?:/(?P<parentWidgetMap>[^/]++))?)?)?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_create')), array (  'slot' => NULL,  'businessEntityId' => NULL,  'position' => NULL,  'parentWidgetMap' => NULL,  '_format' => 'json',  'quantum' => 'a',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::createAction',));
        }

        // victoire_core_widget_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/edit/(?P<id>[^/]++)/(?P<viewReference>[^/]++)(?:/(?P<mode>[^/]++)(?:/(?P<businessEntityId>[^/]++))?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_edit')), array (  'quantum' => 'a',  'mode' => 'static',  'businessEntityId' => NULL,  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::editAction',));
        }

        // victoire_core_widget_update
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/update/(?P<id>[^/]++)/(?P<viewReference>[^/]++)(?:/(?P<mode>[^/]++)(?:/(?P<quantum>[^/]++)(?:/(?P<businessEntityId>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_update')), array (  'businessEntityId' => NULL,  'mode' => 'static',  'quantum' => NULL,  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::editAction',));
        }

        // victoire_core_widget_stylize
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/stylize/(?P<id>[^/]++)/(?P<viewReference>[^/]++)/(?P<quantum>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'victoire_core_widget_stylize');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_stylize')), array (  'quantum' => 'a',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::stylizeAction',));
        }

        // victoire_core_widget_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/delete/(?P<id>[^/]++)/(?P<viewReference>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_delete')), array (  '_format' => 'json',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::deleteAction',));
        }

        // victoire_core_widget_delete_bulk
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/delete/quantum/(?P<id>[^/]++)/(?P<viewReference>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_delete_bulk')), array (  '_format' => 'json',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::deleteBulkAction',));
        }

        // victoire_core_widget_unlink
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/unlink/(?P<id>[^/]++)/(?P<viewReference>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_unlink')), array (  '_format' => 'json',  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::unlinkAction',));
        }

        // victoire_core_widget_update_position
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/updatePosition/(?P<viewReference>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_update_position')), array (  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::updatePositionAction',));
        }

        // victoire_core_widget_get_available_positions
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms/widget/get\\-available\\-positions/(?P<viewReference>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_widget_get_available_positions')), array (  '_controller' => 'Victoire\\Bundle\\WidgetBundle\\Controller\\WidgetController::getAvailablePositionsAction',));
        }

        // victoire_sitemap_xml
        if (preg_match('#^/(?P<_locale>[^/]++)/sitemap\\.(?P<_format>xml)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_sitemap_xml')), array (  '_controller' => 'Victoire\\Bundle\\SitemapBundle\\Controller\\SitemapController::xmlAction',));
        }

        // victoire_sitemap_reorganize
        if (preg_match('#^/(?P<_locale>[^/]++)/sitemap/reorganize$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_sitemap_reorganize')), array (  '_controller' => 'Victoire\\Bundle\\SitemapBundle\\Controller\\SitemapController::reorganizeAction',));
        }

        // victoire_sitemap_changePriority
        if (preg_match('#^/(?P<_locale>[^/]++)/sitemap/changePriority/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_sitemap_changePriority')), array (  '_controller' => 'Victoire\\Bundle\\SitemapBundle\\Controller\\SitemapController::changePriorityAction',));
        }

        // victoire_core_page_show_by_id
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms\\-public/show\\-page\\-by\\-id/(?P<viewId>\\d+)(?:/(?P<entityId>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_show_by_id')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::showByIdAction',  'entityId' => NULL,));
        }

        // victoire_core_business_page_show_by_id
        if (preg_match('#^/(?P<_locale>[^/]++)/victoire\\-dcms\\-public/show\\-business\\-page\\-by\\-id/(?P<entityId>[^/]++)/(?P<type>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_business_page_show_by_id')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::showBusinessPageByIdAction',));
        }

        // victoire_core_page_show
        if (preg_match('#^/(?P<_locale>[^/]++)/(?P<url>.*)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_page_show')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::showAction',));
        }

        // victoire_core_homepage_show
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'victoire_core_homepage_show');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'victoire_core_homepage_show')), array (  '_controller' => 'Victoire\\Bundle\\PageBundle\\Controller\\PageController::showAction',));
        }

        // victoire_redirect_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'victoire_redirect_homepage');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/en',  'permanent' => true,  '_route' => 'victoire_redirect_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
