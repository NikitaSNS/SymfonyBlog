<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bf1b02b725040a82c37ebc8a2b3668fae216422285fc6988c55b824c88a68c93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9d018e5aeec438c74c1825937cf5fd0fcbb23d614d71d0a6acf4740a0f360609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d018e5aeec438c74c1825937cf5fd0fcbb23d614d71d0a6acf4740a0f360609->enter($__internal_9d018e5aeec438c74c1825937cf5fd0fcbb23d614d71d0a6acf4740a0f360609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d018e5aeec438c74c1825937cf5fd0fcbb23d614d71d0a6acf4740a0f360609->leave($__internal_9d018e5aeec438c74c1825937cf5fd0fcbb23d614d71d0a6acf4740a0f360609_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fce07e24bb4f649313eb30f22d5031f80e176eb1edd7a12071e900c478ed4908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce07e24bb4f649313eb30f22d5031f80e176eb1edd7a12071e900c478ed4908->enter($__internal_fce07e24bb4f649313eb30f22d5031f80e176eb1edd7a12071e900c478ed4908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fce07e24bb4f649313eb30f22d5031f80e176eb1edd7a12071e900c478ed4908->leave($__internal_fce07e24bb4f649313eb30f22d5031f80e176eb1edd7a12071e900c478ed4908_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_533b9cbc7abe4137fac740afd12aa28bbb2d7b179ea14fb607d29df313777202 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_533b9cbc7abe4137fac740afd12aa28bbb2d7b179ea14fb607d29df313777202->enter($__internal_533b9cbc7abe4137fac740afd12aa28bbb2d7b179ea14fb607d29df313777202_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_533b9cbc7abe4137fac740afd12aa28bbb2d7b179ea14fb607d29df313777202->leave($__internal_533b9cbc7abe4137fac740afd12aa28bbb2d7b179ea14fb607d29df313777202_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6e4ebf08680c0e3db51b49fbafb418e52ab829a4b0de04331b0239bda4d70dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6e4ebf08680c0e3db51b49fbafb418e52ab829a4b0de04331b0239bda4d70dd->enter($__internal_c6e4ebf08680c0e3db51b49fbafb418e52ab829a4b0de04331b0239bda4d70dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c6e4ebf08680c0e3db51b49fbafb418e52ab829a4b0de04331b0239bda4d70dd->leave($__internal_c6e4ebf08680c0e3db51b49fbafb418e52ab829a4b0de04331b0239bda4d70dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}
