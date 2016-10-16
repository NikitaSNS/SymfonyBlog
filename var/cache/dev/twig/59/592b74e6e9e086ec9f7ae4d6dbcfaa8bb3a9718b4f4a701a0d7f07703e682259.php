<?php

/* ::base.html.twig */
class __TwigTemplate_8f439d0430e05839d21b35256f60bd7053e75329ec2340e429a93e6cbb6f2a33 extends Twig_Template
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
        $__internal_98dd1ae66b30156815e8172e7c1b32a1aa19a4a0efa99c5725f4b33f7127f8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98dd1ae66b30156815e8172e7c1b32a1aa19a4a0efa99c5725f4b33f7127f8b8->enter($__internal_98dd1ae66b30156815e8172e7c1b32a1aa19a4a0efa99c5725f4b33f7127f8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_98dd1ae66b30156815e8172e7c1b32a1aa19a4a0efa99c5725f4b33f7127f8b8->leave($__internal_98dd1ae66b30156815e8172e7c1b32a1aa19a4a0efa99c5725f4b33f7127f8b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ba3acd2655a9b164f9d2e4746f265c5fa3f40867bf969b93c5fe9ca17008778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ba3acd2655a9b164f9d2e4746f265c5fa3f40867bf969b93c5fe9ca17008778->enter($__internal_9ba3acd2655a9b164f9d2e4746f265c5fa3f40867bf969b93c5fe9ca17008778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9ba3acd2655a9b164f9d2e4746f265c5fa3f40867bf969b93c5fe9ca17008778->leave($__internal_9ba3acd2655a9b164f9d2e4746f265c5fa3f40867bf969b93c5fe9ca17008778_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_99fef68c888087ad3ef46890bd0317ef329cbc6f0940214652a3b8b55cfd6f55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99fef68c888087ad3ef46890bd0317ef329cbc6f0940214652a3b8b55cfd6f55->enter($__internal_99fef68c888087ad3ef46890bd0317ef329cbc6f0940214652a3b8b55cfd6f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/symfony_blog.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_99fef68c888087ad3ef46890bd0317ef329cbc6f0940214652a3b8b55cfd6f55->leave($__internal_99fef68c888087ad3ef46890bd0317ef329cbc6f0940214652a3b8b55cfd6f55_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_71192addbd4b25f7fedbbddc2f521428f59db5e2a6d7a4d94f1072cde5261585 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71192addbd4b25f7fedbbddc2f521428f59db5e2a6d7a4d94f1072cde5261585->enter($__internal_71192addbd4b25f7fedbbddc2f521428f59db5e2a6d7a4d94f1072cde5261585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        ";
        
        $__internal_71192addbd4b25f7fedbbddc2f521428f59db5e2a6d7a4d94f1072cde5261585->leave($__internal_71192addbd4b25f7fedbbddc2f521428f59db5e2a6d7a4d94f1072cde5261585_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_307f0e858ed222399e720ae1875f1ff9ac1af3a4ee533de15e0893e61d76c1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_307f0e858ed222399e720ae1875f1ff9ac1af3a4ee533de15e0893e61d76c1d0->enter($__internal_307f0e858ed222399e720ae1875f1ff9ac1af3a4ee533de15e0893e61d76c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_307f0e858ed222399e720ae1875f1ff9ac1af3a4ee533de15e0893e61d76c1d0->leave($__internal_307f0e858ed222399e720ae1875f1ff9ac1af3a4ee533de15e0893e61d76c1d0_prof);

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
