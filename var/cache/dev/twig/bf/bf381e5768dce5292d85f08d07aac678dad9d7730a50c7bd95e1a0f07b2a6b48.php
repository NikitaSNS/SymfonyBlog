<?php

/* BlogBundle:Blog:teaser.html.twig */
class __TwigTemplate_902888e3283f983e41008c5b3fda8e0c049e46e5e92d54b43ac007c75f756be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Blog:teaser.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ddcadae0cddd94eeb1ce13242c1dd0839e803a65de8da6d8d43b470d6a728a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ddcadae0cddd94eeb1ce13242c1dd0839e803a65de8da6d8d43b470d6a728a8->enter($__internal_8ddcadae0cddd94eeb1ce13242c1dd0839e803a65de8da6d8d43b470d6a728a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:teaser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddcadae0cddd94eeb1ce13242c1dd0839e803a65de8da6d8d43b470d6a728a8->leave($__internal_8ddcadae0cddd94eeb1ce13242c1dd0839e803a65de8da6d8d43b470d6a728a8_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_2c6349448ada214059b3a801f118ea099d16e5d6400cd50790c2942468e656d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c6349448ada214059b3a801f118ea099d16e5d6400cd50790c2942468e656d4->enter($__internal_2c6349448ada214059b3a801f118ea099d16e5d6400cd50790c2942468e656d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    Блог
";
        
        $__internal_2c6349448ada214059b3a801f118ea099d16e5d6400cd50790c2942468e656d4->leave($__internal_2c6349448ada214059b3a801f118ea099d16e5d6400cd50790c2942468e656d4_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_e7df255f7e5a096c5c9ed9f83a840478d9d708fc51a47c4ea8aa5665a113f077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7df255f7e5a096c5c9ed9f83a840478d9d708fc51a47c4ea8aa5665a113f077->enter($__internal_e7df255f7e5a096c5c9ed9f83a840478d9d708fc51a47c4ea8aa5665a113f077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : $this->getContext($context, "blogs")));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "        <article>
            <h2>
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_view", array("id" => $this->getAttribute($context["blog"], "id", array()))), "html", null, true);
            echo "\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["blog"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>
            <div class=\"container blog-container\">
                <div class=\"field field-body-summary\">
                    ";
            // line 17
            echo $this->getAttribute($context["blog"], "body", array());
            echo "
                </div>
                <nav role=\"navigation\">
                    <ul>
                        <li class=\"read-more\">
                            <a href=\"";
            // line 22
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
        
        $__internal_e7df255f7e5a096c5c9ed9f83a840478d9d708fc51a47c4ea8aa5665a113f077->leave($__internal_e7df255f7e5a096c5c9ed9f83a840478d9d708fc51a47c4ea8aa5665a113f077_prof);

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
        return array (  84 => 22,  76 => 17,  68 => 12,  64 => 11,  60 => 9,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BlogBundle::layout.html.twig' %}

{% block page_title %}
    Блог
{% endblock %}

{% block content %}
    {% for blog in blogs %}
        <article>
            <h2>
                <a href=\"{{ path('blog_view', {'id' : blog.id}) }}\">
                    {{ blog.title }}
                </a>
            </h2>
            <div class=\"container blog-container\">
                <div class=\"field field-body-summary\">
                    {{ blog.body|raw }}
                </div>
                <nav role=\"navigation\">
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
