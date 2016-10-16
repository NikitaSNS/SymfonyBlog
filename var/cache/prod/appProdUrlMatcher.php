<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::teaserAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_teaser
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'BlogBundle\\Controller\\BlogController::teaserAction',  '_route' => 'blog_teaser',);
            }

            // blog_view
            if (preg_match('#^/blog/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_view')), array (  '_controller' => 'BlogBundle\\Controller\\BlogController::blogViewAction',));
            }

        }

        if (0 === strpos($pathinfo, '/a')) {
            // blog_about
            if ($pathinfo === '/about') {
                return array (  '_controller' => 'BlogBundle\\Controller\\PageController::aboutUsAction',  '_route' => 'blog_about',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // admin_page
                if ($pathinfo === '/admin') {
                    return array (  '_controller' => 'BlogBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_page',);
                }

                if (0 === strpos($pathinfo, '/admin/blog')) {
                    // admin_blog
                    if ($pathinfo === '/admin/blog') {
                        return array (  '_controller' => 'BlogBundle\\Controller\\AdminController::blogAction',  '_route' => 'admin_blog',);
                    }

                    // admin_blog_edit
                    if (preg_match('#^/admin/blog/(?P<id>\\d+)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_edit')), array (  '_controller' => 'BlogBundle\\Controller\\AdminController::blogEditAction',));
                    }

                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
