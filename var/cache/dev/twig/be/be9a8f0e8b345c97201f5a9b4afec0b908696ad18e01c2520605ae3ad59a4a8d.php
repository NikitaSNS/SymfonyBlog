<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_578ff9e4f8af4a331166dd2ae47c43a49593920f7bd7b5d595056c25ed6bd31b extends Twig_Template
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
        $__internal_592a70b0b0066c278c4cc576e1f366b246e50057d121953ddaee8f71931b2378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_592a70b0b0066c278c4cc576e1f366b246e50057d121953ddaee8f71931b2378->enter($__internal_592a70b0b0066c278c4cc576e1f366b246e50057d121953ddaee8f71931b2378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_592a70b0b0066c278c4cc576e1f366b246e50057d121953ddaee8f71931b2378->leave($__internal_592a70b0b0066c278c4cc576e1f366b246e50057d121953ddaee8f71931b2378_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef3d2ea21ca10b5ceb4563282e946fcf38de663c4eae560bc22d2759f33950d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef3d2ea21ca10b5ceb4563282e946fcf38de663c4eae560bc22d2759f33950d6->enter($__internal_ef3d2ea21ca10b5ceb4563282e946fcf38de663c4eae560bc22d2759f33950d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ef3d2ea21ca10b5ceb4563282e946fcf38de663c4eae560bc22d2759f33950d6->leave($__internal_ef3d2ea21ca10b5ceb4563282e946fcf38de663c4eae560bc22d2759f33950d6_prof);

    }

    // line 5
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_2c7f178f14b382c58e5efafb72f4961057a1a642ba788be37be6705214b4e150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c7f178f14b382c58e5efafb72f4961057a1a642ba788be37be6705214b4e150->enter($__internal_2c7f178f14b382c58e5efafb72f4961057a1a642ba788be37be6705214b4e150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

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
        
        $__internal_2c7f178f14b382c58e5efafb72f4961057a1a642ba788be37be6705214b4e150->leave($__internal_2c7f178f14b382c58e5efafb72f4961057a1a642ba788be37be6705214b4e150_prof);

    }

    // line 15
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f93f1935d7bb11a97b1420d9213b9861dab655f02ee396f28e466cf691395f48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f93f1935d7bb11a97b1420d9213b9861dab655f02ee396f28e466cf691395f48->enter($__internal_f93f1935d7bb11a97b1420d9213b9861dab655f02ee396f28e466cf691395f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 16
        echo "            ";
        
        $__internal_f93f1935d7bb11a97b1420d9213b9861dab655f02ee396f28e466cf691395f48->leave($__internal_f93f1935d7bb11a97b1420d9213b9861dab655f02ee396f28e466cf691395f48_prof);

    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        $__internal_0aafa8a0f1869797c8da98fdac324a6a8531691011e7d08783d401bcab6ac786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aafa8a0f1869797c8da98fdac324a6a8531691011e7d08783d401bcab6ac786->enter($__internal_0aafa8a0f1869797c8da98fdac324a6a8531691011e7d08783d401bcab6ac786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 21
        echo "
    ";
        
        $__internal_0aafa8a0f1869797c8da98fdac324a6a8531691011e7d08783d401bcab6ac786->leave($__internal_0aafa8a0f1869797c8da98fdac324a6a8531691011e7d08783d401bcab6ac786_prof);

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
        return array (  113 => 21,  107 => 20,  100 => 16,  94 => 15,  84 => 9,  80 => 8,  76 => 7,  73 => 6,  67 => 5,  60 => 20,  55 => 17,  53 => 15,  48 => 12,  46 => 5,  43 => 4,  37 => 3,  11 => 1,);
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
