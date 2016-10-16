<?php

/* BlogBundle:Blog:view.html.twig */
class __TwigTemplate_a7bad22a537ab11b6d040273dce0e5f061c105c239c36ee52d084cfaf11a827f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:Blog:view.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_409c1594fe9bd2be51a76055da34f6d736d09adf58561f51ebdc1b5f021fe7a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409c1594fe9bd2be51a76055da34f6d736d09adf58561f51ebdc1b5f021fe7a5->enter($__internal_409c1594fe9bd2be51a76055da34f6d736d09adf58561f51ebdc1b5f021fe7a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_409c1594fe9bd2be51a76055da34f6d736d09adf58561f51ebdc1b5f021fe7a5->leave($__internal_409c1594fe9bd2be51a76055da34f6d736d09adf58561f51ebdc1b5f021fe7a5_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_10c28dcb32767ad348edf7b0096ac01a5b3a058e263d8e0fa5f0e307a219de14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10c28dcb32767ad348edf7b0096ac01a5b3a058e263d8e0fa5f0e307a219de14->enter($__internal_10c28dcb32767ad348edf7b0096ac01a5b3a058e263d8e0fa5f0e307a219de14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_10c28dcb32767ad348edf7b0096ac01a5b3a058e263d8e0fa5f0e307a219de14->leave($__internal_10c28dcb32767ad348edf7b0096ac01a5b3a058e263d8e0fa5f0e307a219de14_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_17143f2b1fdebf5a9a66a9e653504818adcabacc2a358df7f0ade7c8dd96a407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17143f2b1fdebf5a9a66a9e653504818adcabacc2a358df7f0ade7c8dd96a407->enter($__internal_17143f2b1fdebf5a9a66a9e653504818adcabacc2a358df7f0ade7c8dd96a407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <article class=\"blog\">
        <div class=\"container blog-container\">
            <div class=\"field field_created\">
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "d-m-Y H:i"), "html", null, true);
        echo "
            </div>
            <div class=\"field field-body\">
                ";
        // line 14
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "body", array());
        echo "
            </div>
        </div>
    </article>
";
        
        $__internal_17143f2b1fdebf5a9a66a9e653504818adcabacc2a358df7f0ade7c8dd96a407->leave($__internal_17143f2b1fdebf5a9a66a9e653504818adcabacc2a358df7f0ade7c8dd96a407_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 14,  62 => 11,  57 => 8,  51 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::page.html.twig' %}

{% block page_title %}
    {{ blog.title }}
{% endblock %}

{% block main %}
    <article class=\"blog\">
        <div class=\"container blog-container\">
            <div class=\"field field_created\">
                {{ blog.created|date(\"d-m-Y H:i\") }}
            </div>
            <div class=\"field field-body\">
                {{ blog.body|raw }}
            </div>
        </div>
    </article>
{% endblock %}
";
    }
}
