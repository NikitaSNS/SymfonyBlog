<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3fe1018391e4b9b53b1ee7baab440d0aac825bb35e4617323d44d08c65b1ad71 extends Twig_Template
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
        $__internal_92f847251f3a3c4ba8c0527983be677ff793e6b2d471c2b400d87e0b68cf8fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92f847251f3a3c4ba8c0527983be677ff793e6b2d471c2b400d87e0b68cf8fd7->enter($__internal_92f847251f3a3c4ba8c0527983be677ff793e6b2d471c2b400d87e0b68cf8fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92f847251f3a3c4ba8c0527983be677ff793e6b2d471c2b400d87e0b68cf8fd7->leave($__internal_92f847251f3a3c4ba8c0527983be677ff793e6b2d471c2b400d87e0b68cf8fd7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4bca1d97dbb358cb3bb6149e06288c4a7358ef523d565cb9cb4a350930031296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bca1d97dbb358cb3bb6149e06288c4a7358ef523d565cb9cb4a350930031296->enter($__internal_4bca1d97dbb358cb3bb6149e06288c4a7358ef523d565cb9cb4a350930031296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_4bca1d97dbb358cb3bb6149e06288c4a7358ef523d565cb9cb4a350930031296->leave($__internal_4bca1d97dbb358cb3bb6149e06288c4a7358ef523d565cb9cb4a350930031296_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d9c80ce81adc73351a8a86fa92bab8f2ef26e8d4a0dc336089262fce4afff6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03d9c80ce81adc73351a8a86fa92bab8f2ef26e8d4a0dc336089262fce4afff6->enter($__internal_03d9c80ce81adc73351a8a86fa92bab8f2ef26e8d4a0dc336089262fce4afff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_03d9c80ce81adc73351a8a86fa92bab8f2ef26e8d4a0dc336089262fce4afff6->leave($__internal_03d9c80ce81adc73351a8a86fa92bab8f2ef26e8d4a0dc336089262fce4afff6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87020438640e28c128ce3819b16d7c5796b0d47332603476971d8bdedfa41b1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87020438640e28c128ce3819b16d7c5796b0d47332603476971d8bdedfa41b1b->enter($__internal_87020438640e28c128ce3819b16d7c5796b0d47332603476971d8bdedfa41b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_87020438640e28c128ce3819b16d7c5796b0d47332603476971d8bdedfa41b1b->leave($__internal_87020438640e28c128ce3819b16d7c5796b0d47332603476971d8bdedfa41b1b_prof);

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
