<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b12e13e2c47b62370e01a98d6b739ce6214b61d0f071a17187f9614318dd0651 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_521014c61ff0b9ed0d69f10eb862df02fd898e02465475be0383bc90180908ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521014c61ff0b9ed0d69f10eb862df02fd898e02465475be0383bc90180908ef->enter($__internal_521014c61ff0b9ed0d69f10eb862df02fd898e02465475be0383bc90180908ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_521014c61ff0b9ed0d69f10eb862df02fd898e02465475be0383bc90180908ef->leave($__internal_521014c61ff0b9ed0d69f10eb862df02fd898e02465475be0383bc90180908ef_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_525116098e0c4cf50161144bfa6f88cc896f57274ce1d11cc8335d472f2e0e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_525116098e0c4cf50161144bfa6f88cc896f57274ce1d11cc8335d472f2e0e4d->enter($__internal_525116098e0c4cf50161144bfa6f88cc896f57274ce1d11cc8335d472f2e0e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_525116098e0c4cf50161144bfa6f88cc896f57274ce1d11cc8335d472f2e0e4d->leave($__internal_525116098e0c4cf50161144bfa6f88cc896f57274ce1d11cc8335d472f2e0e4d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_47150c28ef624f79ecc7336d327cdedbda790928291d6b661711953942a8e6d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47150c28ef624f79ecc7336d327cdedbda790928291d6b661711953942a8e6d3->enter($__internal_47150c28ef624f79ecc7336d327cdedbda790928291d6b661711953942a8e6d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_47150c28ef624f79ecc7336d327cdedbda790928291d6b661711953942a8e6d3->leave($__internal_47150c28ef624f79ecc7336d327cdedbda790928291d6b661711953942a8e6d3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_42bdb030654569480ecb5c4360ccd229a359dd635b2b8a1f254026184e960147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42bdb030654569480ecb5c4360ccd229a359dd635b2b8a1f254026184e960147->enter($__internal_42bdb030654569480ecb5c4360ccd229a359dd635b2b8a1f254026184e960147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_42bdb030654569480ecb5c4360ccd229a359dd635b2b8a1f254026184e960147->leave($__internal_42bdb030654569480ecb5c4360ccd229a359dd635b2b8a1f254026184e960147_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}
