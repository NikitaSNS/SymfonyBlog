<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_86c90d120794b651b5515028516dd63c4262d9cd5755afdc38fd5af33e96841f extends Twig_Template
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
        $__internal_b8ee0c007f7d6c2d5b6324e0ea3a14e38c4878cbe488bb54bcfe856564ceb2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8ee0c007f7d6c2d5b6324e0ea3a14e38c4878cbe488bb54bcfe856564ceb2ff->enter($__internal_b8ee0c007f7d6c2d5b6324e0ea3a14e38c4878cbe488bb54bcfe856564ceb2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8ee0c007f7d6c2d5b6324e0ea3a14e38c4878cbe488bb54bcfe856564ceb2ff->leave($__internal_b8ee0c007f7d6c2d5b6324e0ea3a14e38c4878cbe488bb54bcfe856564ceb2ff_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_59223ab0b1bddb06aace761bb2812bfb64bda916b1afe3d3fe98491a52a97663 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59223ab0b1bddb06aace761bb2812bfb64bda916b1afe3d3fe98491a52a97663->enter($__internal_59223ab0b1bddb06aace761bb2812bfb64bda916b1afe3d3fe98491a52a97663_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_59223ab0b1bddb06aace761bb2812bfb64bda916b1afe3d3fe98491a52a97663->leave($__internal_59223ab0b1bddb06aace761bb2812bfb64bda916b1afe3d3fe98491a52a97663_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_246ab3066055831b87e1e5a8866aba4662c8b8adeb431d22f507f367511366a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_246ab3066055831b87e1e5a8866aba4662c8b8adeb431d22f507f367511366a3->enter($__internal_246ab3066055831b87e1e5a8866aba4662c8b8adeb431d22f507f367511366a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_246ab3066055831b87e1e5a8866aba4662c8b8adeb431d22f507f367511366a3->leave($__internal_246ab3066055831b87e1e5a8866aba4662c8b8adeb431d22f507f367511366a3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8f0c7dd42c215997c14b724af8caa908ff21f7c01eab258428ceff10178d4c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0c7dd42c215997c14b724af8caa908ff21f7c01eab258428ceff10178d4c0f->enter($__internal_8f0c7dd42c215997c14b724af8caa908ff21f7c01eab258428ceff10178d4c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8f0c7dd42c215997c14b724af8caa908ff21f7c01eab258428ceff10178d4c0f->leave($__internal_8f0c7dd42c215997c14b724af8caa908ff21f7c01eab258428ceff10178d4c0f_prof);

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
