<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_72e4785b95284ee5fab3814afad3fbbf59ec1da5ae728eec0dae4fa54d970c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle::layout.html.twig", 1);
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
        $__internal_d10a78253d385de142294234344025b32e7d85c53dc7bf2fc49d67710aa4c81e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10a78253d385de142294234344025b32e7d85c53dc7bf2fc49d67710aa4c81e->enter($__internal_d10a78253d385de142294234344025b32e7d85c53dc7bf2fc49d67710aa4c81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d10a78253d385de142294234344025b32e7d85c53dc7bf2fc49d67710aa4c81e->leave($__internal_d10a78253d385de142294234344025b32e7d85c53dc7bf2fc49d67710aa4c81e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_df374b251aa30a5b2a6f4dcc01ea61c2f31075c9170e454025a1939e83d7a610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df374b251aa30a5b2a6f4dcc01ea61c2f31075c9170e454025a1939e83d7a610->enter($__internal_df374b251aa30a5b2a6f4dcc01ea61c2f31075c9170e454025a1939e83d7a610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        $this->displayBlock('main_menu', $context, $blocks);
        // line 11
        echo "
    <div class=\"page_title\" id=\"page_title\">
        <h1>
            ";
        // line 14
        $this->displayBlock('page_title', $context, $blocks);
        // line 16
        echo "        </h1>
    </div>

    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_df374b251aa30a5b2a6f4dcc01ea61c2f31075c9170e454025a1939e83d7a610->leave($__internal_df374b251aa30a5b2a6f4dcc01ea61c2f31075c9170e454025a1939e83d7a610_prof);

    }

    // line 5
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_974d630978c451484391ae9893dab73ecb3a466e5413c2d561d4281e1135ad1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_974d630978c451484391ae9893dab73ecb3a466e5413c2d561d4281e1135ad1a->enter($__internal_974d630978c451484391ae9893dab73ecb3a466e5413c2d561d4281e1135ad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 6
        echo "        <ul>
            <li>Link 1</li>
            <li>Link 2</li>
        </ul>
    ";
        
        $__internal_974d630978c451484391ae9893dab73ecb3a466e5413c2d561d4281e1135ad1a->leave($__internal_974d630978c451484391ae9893dab73ecb3a466e5413c2d561d4281e1135ad1a_prof);

    }

    // line 14
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_7e943172b8b29845a22538ebca9e2ba0dd4328faa0890d66c8297f4f7c648348 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e943172b8b29845a22538ebca9e2ba0dd4328faa0890d66c8297f4f7c648348->enter($__internal_7e943172b8b29845a22538ebca9e2ba0dd4328faa0890d66c8297f4f7c648348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 15
        echo "            ";
        
        $__internal_7e943172b8b29845a22538ebca9e2ba0dd4328faa0890d66c8297f4f7c648348->leave($__internal_7e943172b8b29845a22538ebca9e2ba0dd4328faa0890d66c8297f4f7c648348_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_f00726078a0ac382b5d69d3022624641af1edc2f24da63435ee0bbac1644600b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00726078a0ac382b5d69d3022624641af1edc2f24da63435ee0bbac1644600b->enter($__internal_f00726078a0ac382b5d69d3022624641af1edc2f24da63435ee0bbac1644600b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "
    ";
        
        $__internal_f00726078a0ac382b5d69d3022624641af1edc2f24da63435ee0bbac1644600b->leave($__internal_f00726078a0ac382b5d69d3022624641af1edc2f24da63435ee0bbac1644600b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 20,  97 => 19,  90 => 15,  84 => 14,  73 => 6,  67 => 5,  60 => 19,  55 => 16,  53 => 14,  48 => 11,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block body %}

    {% block main_menu %}
        <ul>
            <li>Link 1</li>
            <li>Link 2</li>
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
