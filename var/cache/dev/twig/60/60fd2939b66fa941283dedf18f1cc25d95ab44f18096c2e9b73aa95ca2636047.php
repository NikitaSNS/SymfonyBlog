<?php

/* BlogBundle:Blog:view.html.twig */
class __TwigTemplate_4d7f67c5fd9b631a020039ec4fd2ac28f2828a6b02be8091cfbd02df959c8974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "BlogBundle:Blog:view.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_070526b89af9ca4418de1e7202f460f6b1d092a0a7a17684bf59c409a1669265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_070526b89af9ca4418de1e7202f460f6b1d092a0a7a17684bf59c409a1669265->enter($__internal_070526b89af9ca4418de1e7202f460f6b1d092a0a7a17684bf59c409a1669265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_070526b89af9ca4418de1e7202f460f6b1d092a0a7a17684bf59c409a1669265->leave($__internal_070526b89af9ca4418de1e7202f460f6b1d092a0a7a17684bf59c409a1669265_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b49cb7961fde4789d393c005c6fee438cd75988cb80f9d8ad27b4ed6bc2154bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b49cb7961fde4789d393c005c6fee438cd75988cb80f9d8ad27b4ed6bc2154bf->enter($__internal_b49cb7961fde4789d393c005c6fee438cd75988cb80f9d8ad27b4ed6bc2154bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"page_title\" id=\"page_title\">
        <h1>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "title", array()), "html", null, true);
        echo "</h1>
    </div>
    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                ";
        // line 9
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "body", array());
        echo "
            </div>
            <div class=\"field field_created\">
                ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : $this->getContext($context, "blog")), "created", array()), "d-m-Y H:i"), "html", null, true);
        echo "
            </div>
        </div>
    </article>
";
        
        $__internal_b49cb7961fde4789d393c005c6fee438cd75988cb80f9d8ad27b4ed6bc2154bf->leave($__internal_b49cb7961fde4789d393c005c6fee438cd75988cb80f9d8ad27b4ed6bc2154bf_prof);

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
        return array (  57 => 12,  51 => 9,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::base.html.twig\" %}
{% block body %}
    <div class=\"page_title\" id=\"page_title\">
        <h1>{{ blog.title }}</h1>
    </div>
    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                {{ blog.body|raw }}
            </div>
            <div class=\"field field_created\">
                {{ blog.created|date(\"d-m-Y H:i\") }}
            </div>
        </div>
    </article>
{% endblock %}
";
    }
}
