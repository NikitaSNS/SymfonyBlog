<?php

/* BlogBundle:Blog:teaser.html.twig */
class __TwigTemplate_7ec09cb0b4175b60018c8099b86011d79b135ee5eec19f1c7e80e612156b1d71 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:Blog:teaser.html.twig", 1);
        $this->blocks = array(
            'site_title' => array($this, 'block_site_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a14cbb4f5a3f2a041c0a9d8de67455ecee01f40d8b6d7b9a05a04db2332918b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a14cbb4f5a3f2a041c0a9d8de67455ecee01f40d8b6d7b9a05a04db2332918b->enter($__internal_6a14cbb4f5a3f2a041c0a9d8de67455ecee01f40d8b6d7b9a05a04db2332918b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:teaser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a14cbb4f5a3f2a041c0a9d8de67455ecee01f40d8b6d7b9a05a04db2332918b->leave($__internal_6a14cbb4f5a3f2a041c0a9d8de67455ecee01f40d8b6d7b9a05a04db2332918b_prof);

    }

    // line 3
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_1033266c42be67c504679fcebe486fb1107a7346b8a87b0188e4e723db34c5c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1033266c42be67c504679fcebe486fb1107a7346b8a87b0188e4e723db34c5c4->enter($__internal_1033266c42be67c504679fcebe486fb1107a7346b8a87b0188e4e723db34c5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        
        $__internal_1033266c42be67c504679fcebe486fb1107a7346b8a87b0188e4e723db34c5c4->leave($__internal_1033266c42be67c504679fcebe486fb1107a7346b8a87b0188e4e723db34c5c4_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_fa3098fb017ce328f15f9018c56c60dc909d50f1e5798ec141f06a5d2a1742e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3098fb017ce328f15f9018c56c60dc909d50f1e5798ec141f06a5d2a1742e5->enter($__internal_fa3098fb017ce328f15f9018c56c60dc909d50f1e5798ec141f06a5d2a1742e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "        <article class=\"blog blog-teaser\">
            <h2 class=\"article-title\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>
            <div class=\"container blog-container\">
                <div class=\"field field_created\">
                    ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blog"], "created", array()), "d-m-Y H:i"), "html", null, true);
            echo "
                </div>
                <div class=\"field field-body-summary\">
                    ";
            // line 19
            echo $this->getAttribute($context["blog"], "summary", array());
            echo "
                </div>
                <nav class=\"link-menu\" role=\"navigation\">
                    <ul>
                        <li class=\"read-more\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">
                                Далее
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </article>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fa3098fb017ce328f15f9018c56c60dc909d50f1e5798ec141f06a5d2a1742e5->leave($__internal_fa3098fb017ce328f15f9018c56c60dc909d50f1e5798ec141f06a5d2a1742e5_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Blog:teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 24,  79 => 19,  73 => 16,  65 => 11,  61 => 10,  57 => 8,  52 => 7,  46 => 6,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::page.html.twig' %}

{% block site_title %}
{% endblock %}

{% block main %}
    {% for blog in blogs %}
        <article class=\"blog blog-teaser\">
            <h2 class=\"article-title\">
                <a href=\"{{ path('blog_view', {'id' : blog.id}) }}\">
                    {{ blog.title }}
                </a>
            </h2>
            <div class=\"container blog-container\">
                <div class=\"field field_created\">
                    {{ blog.created|date(\"d-m-Y H:i\") }}
                </div>
                <div class=\"field field-body-summary\">
                    {{ blog.summary|raw }}
                </div>
                <nav class=\"link-menu\" role=\"navigation\">
                    <ul>
                        <li class=\"read-more\">
                            <a href=\"{{ path('blog_view', {'id' : blog.id}) }}\">
                                Далее
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </article>
    {% endfor %}
{% endblock %}
";
    }
}
