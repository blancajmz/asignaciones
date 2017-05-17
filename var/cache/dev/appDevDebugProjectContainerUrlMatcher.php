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

        if (0 === strpos($pathinfo, '/user')) {
            // biji_user_index
            if ($pathinfo === '/user/index') {
                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'biji_user_index',);
            }

            // biji_user_add
            if ($pathinfo === '/user/add') {
                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::addAction',  '_route' => 'biji_user_add',);
            }

            // biji_user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_biji_user_create;
                }

                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'biji_user_create',);
            }
            not_biji_user_create:

            // biji_user_edit
            if (0 === strpos($pathinfo, '/user/edit') && preg_match('#^/user/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_user_edit')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::editAction',));
            }

            // biji_user_update
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_biji_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_user_update')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::updateAction',));
            }
            not_biji_user_update:

            // biji_user_view
            if (0 === strpos($pathinfo, '/user/view') && preg_match('#^/user/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_user_view')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::viewAction',));
            }

            // biji_user_delete
            if (0 === strpos($pathinfo, '/user/delete') && preg_match('#^/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_biji_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_user_delete')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::deleteAction',));
            }
            not_biji_user_delete:

            // biji_user_redirect_add
            if ($pathinfo === '/user/create') {
                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::addAction',  'permanent' => true,  '_route' => 'biji_user_redirect_add',);
            }

            // biji_user_redirect_edit
            if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_user_redirect_edit')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::editAction',  'path' => '/user/edit/{id}',  'permanent' => true,));
            }

        }

        if (0 === strpos($pathinfo, '/task')) {
            // biji_task_index
            if ($pathinfo === '/task/index') {
                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::indexAction',  '_route' => 'biji_task_index',);
            }

            // biji_task_add
            if ($pathinfo === '/task/add') {
                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::addAction',  '_route' => 'biji_task_add',);
            }

            // biji_task_create
            if ($pathinfo === '/task/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_biji_task_create;
                }

                return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::createAction',  '_route' => 'biji_task_create',);
            }
            not_biji_task_create:

            // biji_task_edit
            if (0 === strpos($pathinfo, '/task/edit') && preg_match('#^/task/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_edit')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::editAction',));
            }

            // biji_task_update
            if (0 === strpos($pathinfo, '/task/update') && preg_match('#^/task/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_biji_task_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_update')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::updateAction',));
            }
            not_biji_task_update:

            // biji_task_view
            if (0 === strpos($pathinfo, '/task/view') && preg_match('#^/task/view/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_view')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::viewAction',));
            }

            // biji_task_delete
            if (0 === strpos($pathinfo, '/task/delete') && preg_match('#^/task/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_biji_task_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_delete')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::deleteAction',));
            }
            not_biji_task_delete:

            if (0 === strpos($pathinfo, '/task/c')) {
                // biji_task_redirect_add
                if ($pathinfo === '/task/create') {
                    return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::addAction',  'path' => '/add',  'permanent' => true,  '_route' => 'biji_task_redirect_add',);
                }

                // biji_task_custom
                if ($pathinfo === '/task/custom') {
                    return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::customAction',  '_route' => 'biji_task_custom',);
                }

            }

            // biji_task_process
            if (0 === strpos($pathinfo, '/task/process') && preg_match('#^/task/process/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_biji_task_process;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_process')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::processAction',));
            }
            not_biji_task_process:

            // biji_task_redirect_edit
            if (0 === strpos($pathinfo, '/task/update') && preg_match('#^/task/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'biji_task_redirect_edit')), array (  '_controller' => 'BIJI\\UserBundle\\Controller\\TaskController::editAction',  'path' => '/edit/{id}',  'permanent' => true,));
            }

        }

        // biji_user_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'biji_user_homepage');
            }

            return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\UserController::homeAction',  '_route' => 'biji_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // biji_user_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'biji_user_login',);
                }

                // biji_user_login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'BIJI\\UserBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'biji_user_login_check',);
                }

            }

            // biji_user_logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'biji_user_logout');
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
