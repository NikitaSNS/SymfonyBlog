<?php

/* ::base.html.twig */
class __TwigTemplate_54603a7f252802dd45bf7939b8fec916a8058aeef01e7644c033c377e11c29d8 extends Twig_Template
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
        $__internal_0d53964afc3a1a28d5c0f684c0cf2107c694c3ba7e8a56264d2970a5f64e496d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d53964afc3a1a28d5c0f684c0cf2107c694c3ba7e8a56264d2970a5f64e496d->enter($__internal_0d53964afc3a1a28d5c0f684c0cf2107c694c3ba7e8a56264d2970a5f64e496d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            echo "            <div class=\"flash-notice\">
                ";
            // line 14
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>

";
        
        $__internal_0d53964afc3a1a28d5c0f684c0cf2107c694c3ba7e8a56264d2970a5f64e496d->leave($__internal_0d53964afc3a1a28d5c0f684c0cf2107c694c3ba7e8a56264d2970a5f64e496d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa2758b3cd418f496e35efa1c2d878bcb53544cbdb79d86c5dbc3e5360f81ce7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2758b3cd418f496e35efa1c2d878bcb53544cbdb79d86c5dbc3e5360f81ce7->enter($__internal_fa2758b3cd418f496e35efa1c2d878bcb53544cbdb79d86c5dbc3e5360f81ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa2758b3cd418f496e35efa1c2d878bcb53544cbdb79d86c5dbc3e5360f81ce7->leave($__internal_fa2758b3cd418f496e35efa1c2d878bcb53544cbdb79d86c5dbc3e5360f81ce7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fae453f1408f10582d0df56f40a85f19282f226f55697ccbd50970fc35782317 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fae453f1408f10582d0df56f40a85f19282f226f55697ccbd50970fc35782317->enter($__internal_fae453f1408f10582d0df56f40a85f19282f226f55697ccbd50970fc35782317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fae453f1408f10582d0df56f40a85f19282f226f55697ccbd50970fc35782317->leave($__internal_fae453f1408f10582d0df56f40a85f19282f226f55697ccbd50970fc35782317_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_94b861af3d0946430243b90ef1a006e7b6a08bcece4d4f98ba2ae61056a007ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b861af3d0946430243b90ef1a006e7b6a08bcece4d4f98ba2ae61056a007ee->enter($__internal_94b861af3d0946430243b90ef1a006e7b6a08bcece4d4f98ba2ae61056a007ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "        ";
        
        $__internal_94b861af3d0946430243b90ef1a006e7b6a08bcece4d4f98ba2ae61056a007ee->leave($__internal_94b861af3d0946430243b90ef1a006e7b6a08bcece4d4f98ba2ae61056a007ee_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4eed29b3a3e8bd6048e658d9e3aa2da88e982baa3e289f7bf9e2398aff7b00a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eed29b3a3e8bd6048e658d9e3aa2da88e982baa3e289f7bf9e2398aff7b00a4->enter($__internal_4eed29b3a3e8bd6048e658d9e3aa2da88e982baa3e289f7bf9e2398aff7b00a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4eed29b3a3e8bd6048e658d9e3aa2da88e982baa3e289f7bf9e2398aff7b00a4->leave($__internal_4eed29b3a3e8bd6048e658d9e3aa2da88e982baa3e289f7bf9e2398aff7b00a4_prof);

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
        return array (  113 => 17,  106 => 11,  100 => 10,  89 => 6,  77 => 5,  67 => 18,  64 => 17,  55 => 14,  52 => 13,  47 => 12,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
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
