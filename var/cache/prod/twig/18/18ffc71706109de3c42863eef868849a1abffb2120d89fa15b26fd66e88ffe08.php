<?php

/* BlogBundle:Blog:view.html.twig */
class __TwigTemplate_2c512b8bfcee0eb7f7a7ec53c60f16dd8a3853a1a5d32910b155745e9a0bfcf2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "title", array()), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "    <article class=\"blog\">
        <div class=\"container blog-container\">
            <div class=\"field field_created\">
                ";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "created", array()), "d-m-Y H:i"), "html", null, true);
        echo "
            </div>
            <div class=\"field field-body\">
                ";
        // line 14
        echo $this->getAttribute((isset($context["blog"]) ? $context["blog"] : null), "body", array());
        echo "
            </div>
        </div>
    </article>
";
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
        return array (  53 => 14,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
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
