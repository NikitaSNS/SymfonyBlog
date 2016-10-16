<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_ae9c7995082181661f2edf77ac7f77daa5b5da804e457caa6f9dd01f4f6fabb2 extends Twig_Template
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
        $__internal_50e31792bdc00571d5d7f432e0aab2b13c505b1f5cdf3ff1a7cd0ac204279510 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e31792bdc00571d5d7f432e0aab2b13c505b1f5cdf3ff1a7cd0ac204279510->enter($__internal_50e31792bdc00571d5d7f432e0aab2b13c505b1f5cdf3ff1a7cd0ac204279510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e31792bdc00571d5d7f432e0aab2b13c505b1f5cdf3ff1a7cd0ac204279510->leave($__internal_50e31792bdc00571d5d7f432e0aab2b13c505b1f5cdf3ff1a7cd0ac204279510_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a21fb1273e9005fc400011a26d21016a297e51fb50c0b4b6059f6dcbf6a28f26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a21fb1273e9005fc400011a26d21016a297e51fb50c0b4b6059f6dcbf6a28f26->enter($__internal_a21fb1273e9005fc400011a26d21016a297e51fb50c0b4b6059f6dcbf6a28f26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a21fb1273e9005fc400011a26d21016a297e51fb50c0b4b6059f6dcbf6a28f26->leave($__internal_a21fb1273e9005fc400011a26d21016a297e51fb50c0b4b6059f6dcbf6a28f26_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1afcaa9551ee5e060e99ea6f53c7e13a6a3fc6bd400f1ec3de08cc2ff70b0004 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afcaa9551ee5e060e99ea6f53c7e13a6a3fc6bd400f1ec3de08cc2ff70b0004->enter($__internal_1afcaa9551ee5e060e99ea6f53c7e13a6a3fc6bd400f1ec3de08cc2ff70b0004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1afcaa9551ee5e060e99ea6f53c7e13a6a3fc6bd400f1ec3de08cc2ff70b0004->leave($__internal_1afcaa9551ee5e060e99ea6f53c7e13a6a3fc6bd400f1ec3de08cc2ff70b0004_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_61d870bc56a6e8d3f2a8cbf03904e240ba5e211230f6d4d4e7c76590ece76ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d870bc56a6e8d3f2a8cbf03904e240ba5e211230f6d4d4e7c76590ece76ccc->enter($__internal_61d870bc56a6e8d3f2a8cbf03904e240ba5e211230f6d4d4e7c76590ece76ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_61d870bc56a6e8d3f2a8cbf03904e240ba5e211230f6d4d4e7c76590ece76ccc->leave($__internal_61d870bc56a6e8d3f2a8cbf03904e240ba5e211230f6d4d4e7c76590ece76ccc_prof);

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
