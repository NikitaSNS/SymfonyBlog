<?php

/* ::page.html.twig */
class __TwigTemplate_0715f7a4f5e039f481f0d3ffddaca8ba6ae8641826306043b7df36b2490ae5ab extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
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
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
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
    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
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
    }

    // line 14
    public function block_main_menu($context, array $blocks = array())
    {
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
    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 30
    public function block_site_title($context, array $blocks = array())
    {
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
    }

    // line 34
    public function block_page_title($context, array $blocks = array())
    {
        // line 35
        echo "                                Page title
                            ";
    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        // line 44
        echo "
            ";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "        <footer role=\"contentinfo\">
            <div class=\"block block-copyrigth\">
                Copyright &copy; 2016. All right reserved.
            </div>
        </footer>
    ";
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
        return array (  168 => 51,  165 => 50,  160 => 44,  157 => 43,  152 => 35,  149 => 34,  142 => 37,  140 => 34,  135 => 31,  132 => 30,  126 => 46,  124 => 43,  120 => 41,  118 => 30,  115 => 29,  112 => 28,  104 => 19,  100 => 18,  96 => 17,  92 => 15,  89 => 14,  81 => 9,  77 => 7,  74 => 6,  68 => 23,  66 => 14,  63 => 13,  61 => 6,  58 => 5,  55 => 4,  51 => 50,  48 => 49,  46 => 28,  42 => 26,  39 => 4,  36 => 3,  11 => 1,);
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
