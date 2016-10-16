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
        $__internal_086967a85fb55ed3a488db9653e381d822a77a3983d2277ff8a2632265a12567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_086967a85fb55ed3a488db9653e381d822a77a3983d2277ff8a2632265a12567->enter($__internal_086967a85fb55ed3a488db9653e381d822a77a3983d2277ff8a2632265a12567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_086967a85fb55ed3a488db9653e381d822a77a3983d2277ff8a2632265a12567->leave($__internal_086967a85fb55ed3a488db9653e381d822a77a3983d2277ff8a2632265a12567_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8387ab87a80b8c60fd01a19c5074aae1719c27197490077d59ce7b2fc340092a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8387ab87a80b8c60fd01a19c5074aae1719c27197490077d59ce7b2fc340092a->enter($__internal_8387ab87a80b8c60fd01a19c5074aae1719c27197490077d59ce7b2fc340092a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8387ab87a80b8c60fd01a19c5074aae1719c27197490077d59ce7b2fc340092a->leave($__internal_8387ab87a80b8c60fd01a19c5074aae1719c27197490077d59ce7b2fc340092a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_861424088fb887579de08344e958ce99fd6921290ed2f81b80611a2b56d0989c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861424088fb887579de08344e958ce99fd6921290ed2f81b80611a2b56d0989c->enter($__internal_861424088fb887579de08344e958ce99fd6921290ed2f81b80611a2b56d0989c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_861424088fb887579de08344e958ce99fd6921290ed2f81b80611a2b56d0989c->leave($__internal_861424088fb887579de08344e958ce99fd6921290ed2f81b80611a2b56d0989c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e21e574b0559a13e244c635f9390832bf81e119df04996078779a8eaac8840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05e21e574b0559a13e244c635f9390832bf81e119df04996078779a8eaac8840->enter($__internal_05e21e574b0559a13e244c635f9390832bf81e119df04996078779a8eaac8840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_05e21e574b0559a13e244c635f9390832bf81e119df04996078779a8eaac8840->leave($__internal_05e21e574b0559a13e244c635f9390832bf81e119df04996078779a8eaac8840_prof);

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
