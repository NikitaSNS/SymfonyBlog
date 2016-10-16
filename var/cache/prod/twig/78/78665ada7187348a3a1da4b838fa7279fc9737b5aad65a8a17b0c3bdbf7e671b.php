<?php

/* BlogBundle:Blog:teaser.html.twig */
class __TwigTemplate_1eb36476990be4fed2db7c5d7350798887781cf3f8554214a6a2e11a37c51698 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_site_title($context, array $blocks = array())
    {
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blogs"]) ? $context["blogs"] : null));
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
        return array (  72 => 24,  64 => 19,  58 => 16,  50 => 11,  46 => 10,  42 => 8,  37 => 7,  34 => 6,  29 => 3,  11 => 1,);
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
