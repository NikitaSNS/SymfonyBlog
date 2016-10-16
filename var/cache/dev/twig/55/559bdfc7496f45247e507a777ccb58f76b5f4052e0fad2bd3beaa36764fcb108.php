<?php

/* BlogBundle:Blog:teaser.html.twig */
class __TwigTemplate_3582f601194a64436504b8f9a9f2346706ba3cb0e9e1975e20edf2f9480cbfa6 extends Twig_Template
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
        $__internal_e1246ff537b82cfa7130277bfd6de45bf7b9e5d02f70ca0dcf53e5e8c2150a8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1246ff537b82cfa7130277bfd6de45bf7b9e5d02f70ca0dcf53e5e8c2150a8d->enter($__internal_e1246ff537b82cfa7130277bfd6de45bf7b9e5d02f70ca0dcf53e5e8c2150a8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Blog:teaser.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e1246ff537b82cfa7130277bfd6de45bf7b9e5d02f70ca0dcf53e5e8c2150a8d->leave($__internal_e1246ff537b82cfa7130277bfd6de45bf7b9e5d02f70ca0dcf53e5e8c2150a8d_prof);

    }

    // line 3
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_11d93440c86b3e22ef793f42f63dbec3daa1a2ba2f8738c5c3dc006653cfffb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11d93440c86b3e22ef793f42f63dbec3daa1a2ba2f8738c5c3dc006653cfffb3->enter($__internal_11d93440c86b3e22ef793f42f63dbec3daa1a2ba2f8738c5c3dc006653cfffb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        
        $__internal_11d93440c86b3e22ef793f42f63dbec3daa1a2ba2f8738c5c3dc006653cfffb3->leave($__internal_11d93440c86b3e22ef793f42f63dbec3daa1a2ba2f8738c5c3dc006653cfffb3_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_1041b5d3f48f8b07352f5369bd7f69b5d355d9349994ed6d6540df5dd72bea9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1041b5d3f48f8b07352f5369bd7f69b5d355d9349994ed6d6540df5dd72bea9d->enter($__internal_1041b5d3f48f8b07352f5369bd7f69b5d355d9349994ed6d6540df5dd72bea9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_1041b5d3f48f8b07352f5369bd7f69b5d355d9349994ed6d6540df5dd72bea9d->leave($__internal_1041b5d3f48f8b07352f5369bd7f69b5d355d9349994ed6d6540df5dd72bea9d_prof);

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
