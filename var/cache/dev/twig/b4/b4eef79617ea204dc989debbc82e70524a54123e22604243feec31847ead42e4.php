<?php

/* ::base.html.twig */
class __TwigTemplate_abf23251911a73780bb6ef0a1137549a61d95bf8040c757768f6a8a020906a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42bde56152a43f3eae28a1cfd0d858edcf198d6328ff6434f7bd8e125f9d3b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bde56152a43f3eae28a1cfd0d858edcf198d6328ff6434f7bd8e125f9d3b2a->enter($__internal_42bde56152a43f3eae28a1cfd0d858edcf198d6328ff6434f7bd8e125f9d3b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "            <div class=\"flash-notice\">
                ";
            // line 16
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>

";
        
        $__internal_42bde56152a43f3eae28a1cfd0d858edcf198d6328ff6434f7bd8e125f9d3b2a->leave($__internal_42bde56152a43f3eae28a1cfd0d858edcf198d6328ff6434f7bd8e125f9d3b2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffa2e39823a593ef8a554371ea76a6e7583d9e4be44f9fd475463427813ed245 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa2e39823a593ef8a554371ea76a6e7583d9e4be44f9fd475463427813ed245->enter($__internal_ffa2e39823a593ef8a554371ea76a6e7583d9e4be44f9fd475463427813ed245_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ffa2e39823a593ef8a554371ea76a6e7583d9e4be44f9fd475463427813ed245->leave($__internal_ffa2e39823a593ef8a554371ea76a6e7583d9e4be44f9fd475463427813ed245_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7dd7db4f3af08b1aeebfde71f2d968584816e017ddf232d6ab7f9eeece1d2f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dd7db4f3af08b1aeebfde71f2d968584816e017ddf232d6ab7f9eeece1d2f29->enter($__internal_7dd7db4f3af08b1aeebfde71f2d968584816e017ddf232d6ab7f9eeece1d2f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/symfony_blog.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_7dd7db4f3af08b1aeebfde71f2d968584816e017ddf232d6ab7f9eeece1d2f29->leave($__internal_7dd7db4f3af08b1aeebfde71f2d968584816e017ddf232d6ab7f9eeece1d2f29_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_19fe21e62dfcecea08fbac0bc376641e2054a5efa7b3c4067a76d8acb377315a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19fe21e62dfcecea08fbac0bc376641e2054a5efa7b3c4067a76d8acb377315a->enter($__internal_19fe21e62dfcecea08fbac0bc376641e2054a5efa7b3c4067a76d8acb377315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        
        $__internal_19fe21e62dfcecea08fbac0bc376641e2054a5efa7b3c4067a76d8acb377315a->leave($__internal_19fe21e62dfcecea08fbac0bc376641e2054a5efa7b3c4067a76d8acb377315a_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_571dab6a68725d7ef0180fb4b129a2bfb2c287d3125a10d9dcd3275572cf5ff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_571dab6a68725d7ef0180fb4b129a2bfb2c287d3125a10d9dcd3275572cf5ff4->enter($__internal_571dab6a68725d7ef0180fb4b129a2bfb2c287d3125a10d9dcd3275572cf5ff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_571dab6a68725d7ef0180fb4b129a2bfb2c287d3125a10d9dcd3275572cf5ff4->leave($__internal_571dab6a68725d7ef0180fb4b129a2bfb2c287d3125a10d9dcd3275572cf5ff4_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 19,  111 => 13,  105 => 12,  95 => 7,  89 => 6,  77 => 5,  67 => 20,  64 => 19,  55 => 16,  52 => 15,  47 => 14,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/symfony_blog.css') }}\">
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
        {% endblock %}
        {% for flash_message in app.session.flashBag.get('notice') %}
            <div class=\"flash-notice\">
                {{ flash_message }}
            </div>
        {% endfor %}
        {% block javascripts %}{% endblock %}
    </body>
</html>

";
    }
}
