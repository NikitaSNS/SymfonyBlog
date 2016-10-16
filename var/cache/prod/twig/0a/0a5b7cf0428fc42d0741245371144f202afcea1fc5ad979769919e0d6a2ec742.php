<?php

/* @Blog/admin/admin-layout.html.twig */
class __TwigTemplate_3b2e0ffa63625a4d927e893ad93312d507bcf5e8d5b9b24822a06b2244bd8c22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Blog/admin/admin-layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'main_menu' => array($this, 'block_main_menu'),
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
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
        echo "
    ";
        // line 5
        $this->displayBlock('main_menu', $context, $blocks);
        // line 12
        echo "
    <div class=\"page_title\" id=\"page_title\">
        <h1>
            ";
        // line 15
        $this->displayBlock('page_title', $context, $blocks);
        // line 17
        echo "        </h1>
    </div>

    ";
        // line 20
        $this->displayBlock('content', $context, $blocks);
    }

    // line 5
    public function block_main_menu($context, array $blocks = array())
    {
        // line 6
        echo "        <ul>
            <li><a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Главная</a></li>
            <li><a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_teaser");
        echo "\">Блог</a></li>
            <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_about");
        echo "\">О Нас</a></li>
        </ul>
    ";
    }

    // line 15
    public function block_page_title($context, array $blocks = array())
    {
        // line 16
        echo "            ";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "@Blog/admin/admin-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 21,  83 => 20,  79 => 16,  76 => 15,  69 => 9,  65 => 8,  61 => 7,  58 => 6,  55 => 5,  51 => 20,  46 => 17,  44 => 15,  39 => 12,  37 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block body %}

    {% block main_menu %}
        <ul>
            <li><a href=\"{{ path('homepage') }}\">Главная</a></li>
            <li><a href=\"{{ path('blog_teaser') }}\">Блог</a></li>
            <li><a href=\"{{ path('blog_about') }}\">О Нас</a></li>
        </ul>
    {% endblock %}

    <div class=\"page_title\" id=\"page_title\">
        <h1>
            {% block page_title %}
            {% endblock %}
        </h1>
    </div>

    {% block content %}

    {% endblock %}
{% endblock %}
";
    }
}
