<?php

/* BlogBundle:Blog:view.html.twig */
class __TwigTemplate_c5300d45ef9e5de101c51117a631fcd23e300009737a4d889681e3a967342948 extends Twig_Template
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
        $__internal_bc4dcb135dc3c6490226e3e46030572ea22aceee29b4789f5b0e008609352beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc4dcb135dc3c6490226e3e46030572ea22aceee29b4789f5b0e008609352beb->enter($__internal_bc4dcb135dc3c6490226e3e46030572ea22aceee29b4789f5b0e008609352beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc4dcb135dc3c6490226e3e46030572ea22aceee29b4789f5b0e008609352beb->leave($__internal_bc4dcb135dc3c6490226e3e46030572ea22aceee29b4789f5b0e008609352beb_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_99f588f6c5fd1af4849ae9bf0f846c782ffdfa38b97c9a478e1a0c62713fe06b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99f588f6c5fd1af4849ae9bf0f846c782ffdfa38b97c9a478e1a0c62713fe06b->enter($__internal_99f588f6c5fd1af4849ae9bf0f846c782ffdfa38b97c9a478e1a0c62713fe06b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "
";
        
        $__internal_99f588f6c5fd1af4849ae9bf0f846c782ffdfa38b97c9a478e1a0c62713fe06b->leave($__internal_99f588f6c5fd1af4849ae9bf0f846c782ffdfa38b97c9a478e1a0c62713fe06b_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_fbc7cf9caee830121953428463988b6d3e7003a92c29277757dfa1f2cd14cf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc7cf9caee830121953428463988b6d3e7003a92c29277757dfa1f2cd14cf8e->enter($__internal_fbc7cf9caee830121953428463988b6d3e7003a92c29277757dfa1f2cd14cf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_fbc7cf9caee830121953428463988b6d3e7003a92c29277757dfa1f2cd14cf8e->leave($__internal_fbc7cf9caee830121953428463988b6d3e7003a92c29277757dfa1f2cd14cf8e_prof);

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
