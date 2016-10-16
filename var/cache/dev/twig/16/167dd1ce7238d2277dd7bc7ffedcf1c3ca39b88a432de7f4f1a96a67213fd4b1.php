<?php

/* ::page.html.twig */
class __TwigTemplate_8c7a3ac815bf2197eb528966809129081e9c0acaf6a50c45d72fb5b2912cff56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'logo' => array($this, 'block_logo'),
            'main_menu' => array($this, 'block_main_menu'),
            'content' => array($this, 'block_content'),
            'site_title' => array($this, 'block_site_title'),
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_35aad6014f7f66ac12b974d0052c99fb6455a910f82230fc81de4146be3d53fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35aad6014f7f66ac12b974d0052c99fb6455a910f82230fc81de4146be3d53fd->enter($__internal_35aad6014f7f66ac12b974d0052c99fb6455a910f82230fc81de4146be3d53fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35aad6014f7f66ac12b974d0052c99fb6455a910f82230fc81de4146be3d53fd->leave($__internal_35aad6014f7f66ac12b974d0052c99fb6455a910f82230fc81de4146be3d53fd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bd770b361e590a885c7eb753ee0067c8887a1742dc25b70d875d9cd8d88c409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bd770b361e590a885c7eb753ee0067c8887a1742dc25b70d875d9cd8d88c409->enter($__internal_0bd770b361e590a885c7eb753ee0067c8887a1742dc25b70d875d9cd8d88c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "

    ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_0bd770b361e590a885c7eb753ee0067c8887a1742dc25b70d875d9cd8d88c409->leave($__internal_0bd770b361e590a885c7eb753ee0067c8887a1742dc25b70d875d9cd8d88c409_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_efb0485f70355795aca35c09121daeb54e5e3134f13407f51c860dfa31340af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efb0485f70355795aca35c09121daeb54e5e3134f13407f51c860dfa31340af4->enter($__internal_efb0485f70355795aca35c09121daeb54e5e3134f13407f51c860dfa31340af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "        <header>
            ";
        // line 6
        $this->displayBlock('logo', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('main_menu', $context, $blocks);
        // line 23
        echo "
        </header>
    ";
        
        $__internal_efb0485f70355795aca35c09121daeb54e5e3134f13407f51c860dfa31340af4->leave($__internal_efb0485f70355795aca35c09121daeb54e5e3134f13407f51c860dfa31340af4_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_d5b064cb1e17d597560e66e7ac806931c28335618a6683dc6ca4237140704b24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b064cb1e17d597560e66e7ac806931c28335618a6683dc6ca4237140704b24->enter($__internal_d5b064cb1e17d597560e66e7ac806931c28335618a6683dc6ca4237140704b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 7
        echo "                <div class=\"block block-logo\">
                    <div class=\"side-log\">
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    </div>
                </div>
            ";
        
        $__internal_d5b064cb1e17d597560e66e7ac806931c28335618a6683dc6ca4237140704b24->leave($__internal_d5b064cb1e17d597560e66e7ac806931c28335618a6683dc6ca4237140704b24_prof);

    }

    // line 14
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_7c48f9cb6ec7fd2b366d41be4343c1282a09fb77958adbf1fb3724e4b2d2d118 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c48f9cb6ec7fd2b366d41be4343c1282a09fb77958adbf1fb3724e4b2d2d118->enter($__internal_7c48f9cb6ec7fd2b366d41be4343c1282a09fb77958adbf1fb3724e4b2d2d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 15
        echo "                <div class=\"main-menu\" id=\"main_menu\">
                    <ul>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Главная</a></li>
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_teaser");
        echo "\">Блог</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_about");
        echo "\">О Нас</a></li>
                    </ul>
                </div>
            ";
        
        $__internal_7c48f9cb6ec7fd2b366d41be4343c1282a09fb77958adbf1fb3724e4b2d2d118->leave($__internal_7c48f9cb6ec7fd2b366d41be4343c1282a09fb77958adbf1fb3724e4b2d2d118_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_a6cef8500b5abb8e6af7371820c52a941c0dc013800a73ea11eecda10123a866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6cef8500b5abb8e6af7371820c52a941c0dc013800a73ea11eecda10123a866->enter($__internal_a6cef8500b5abb8e6af7371820c52a941c0dc013800a73ea11eecda10123a866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "        <div id=\"main_container\">
            ";
        // line 30
        $this->displayBlock('site_title', $context, $blocks);
        // line 41
        echo "
            <main>
            ";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 46
        echo "            </main>
        </div>
    ";
        
        $__internal_a6cef8500b5abb8e6af7371820c52a941c0dc013800a73ea11eecda10123a866->leave($__internal_a6cef8500b5abb8e6af7371820c52a941c0dc013800a73ea11eecda10123a866_prof);

    }

    // line 30
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_91c2f24eb5b4d62aa30fb4c9e9de4c9af6f5ababd897ede4fc4f979cf748d4c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91c2f24eb5b4d62aa30fb4c9e9de4c9af6f5ababd897ede4fc4f979cf748d4c6->enter($__internal_91c2f24eb5b4d62aa30fb4c9e9de4c9af6f5ababd897ede4fc4f979cf748d4c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 31
        echo "                <div class=\"page_title\" id=\"page_title\">
                    <div class=\"type-menu\">
                        <h1>
                            ";
        // line 34
        $this->displayBlock('page_title', $context, $blocks);
        // line 37
        echo "                        </h1>
                    </div>
                </div>
            ";
        
        $__internal_91c2f24eb5b4d62aa30fb4c9e9de4c9af6f5ababd897ede4fc4f979cf748d4c6->leave($__internal_91c2f24eb5b4d62aa30fb4c9e9de4c9af6f5ababd897ede4fc4f979cf748d4c6_prof);

    }

    // line 34
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f5e1109992e611f6a9955fd4b9cdcfa18f543800b7e15f43a94f6ac341fd6fec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e1109992e611f6a9955fd4b9cdcfa18f543800b7e15f43a94f6ac341fd6fec->enter($__internal_f5e1109992e611f6a9955fd4b9cdcfa18f543800b7e15f43a94f6ac341fd6fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 35
        echo "                                Page title
                            ";
        
        $__internal_f5e1109992e611f6a9955fd4b9cdcfa18f543800b7e15f43a94f6ac341fd6fec->leave($__internal_f5e1109992e611f6a9955fd4b9cdcfa18f543800b7e15f43a94f6ac341fd6fec_prof);

    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        $__internal_19be4b82d9643501db7e1fa0911a41e74ebd46543d0feb118eff1e4844a8ce78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19be4b82d9643501db7e1fa0911a41e74ebd46543d0feb118eff1e4844a8ce78->enter($__internal_19be4b82d9643501db7e1fa0911a41e74ebd46543d0feb118eff1e4844a8ce78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 44
        echo "
            ";
        
        $__internal_19be4b82d9643501db7e1fa0911a41e74ebd46543d0feb118eff1e4844a8ce78->leave($__internal_19be4b82d9643501db7e1fa0911a41e74ebd46543d0feb118eff1e4844a8ce78_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7669c8f85e3be7cad255d2746d6ba45f7a1930f2699b020e797a5899e8e61936 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7669c8f85e3be7cad255d2746d6ba45f7a1930f2699b020e797a5899e8e61936->enter($__internal_7669c8f85e3be7cad255d2746d6ba45f7a1930f2699b020e797a5899e8e61936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "        <footer role=\"contentinfo\">
            <div class=\"block block-copyrigth\">
                Copyright &copy; 2016. All right reserved.
            </div>
        </footer>
    ";
        
        $__internal_7669c8f85e3be7cad255d2746d6ba45f7a1930f2699b020e797a5899e8e61936->leave($__internal_7669c8f85e3be7cad255d2746d6ba45f7a1930f2699b020e797a5899e8e61936_prof);

    }

    public function getTemplateName()
    {
        return "::page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 51,  219 => 50,  211 => 44,  205 => 43,  197 => 35,  191 => 34,  181 => 37,  179 => 34,  174 => 31,  168 => 30,  159 => 46,  157 => 43,  153 => 41,  151 => 30,  148 => 29,  142 => 28,  131 => 19,  127 => 18,  123 => 17,  119 => 15,  113 => 14,  102 => 9,  98 => 7,  92 => 6,  83 => 23,  81 => 14,  78 => 13,  76 => 6,  73 => 5,  67 => 4,  60 => 50,  57 => 49,  55 => 28,  51 => 26,  48 => 4,  42 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block body %}
    {% block header %}
        <header>
            {% block logo %}
                <div class=\"block block-logo\">
                    <div class=\"side-log\">
                        <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\">
                    </div>
                </div>
            {% endblock %}

            {% block main_menu %}
                <div class=\"main-menu\" id=\"main_menu\">
                    <ul>
                        <li><a href=\"{{ path('homepage') }}\">Главная</a></li>
                        <li><a href=\"{{ path('blog_teaser') }}\">Блог</a></li>
                        <li><a href=\"{{ path('blog_about') }}\">О Нас</a></li>
                    </ul>
                </div>
            {% endblock %}

        </header>
    {% endblock %}


    {% block content %}
        <div id=\"main_container\">
            {% block site_title %}
                <div class=\"page_title\" id=\"page_title\">
                    <div class=\"type-menu\">
                        <h1>
                            {% block page_title %}
                                Page title
                            {% endblock %}
                        </h1>
                    </div>
                </div>
            {% endblock %}

            <main>
            {% block main %}

            {% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block footer %}
        <footer role=\"contentinfo\">
            <div class=\"block block-copyrigth\">
                Copyright &copy; 2016. All right reserved.
            </div>
        </footer>
    {% endblock %}
{% endblock %}";
    }
}
