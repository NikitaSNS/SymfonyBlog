<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5ecc6130d813b67acf9f97b78623361e1f09896305043f7885f4295e9c581246 extends Twig_Template
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
        $__internal_e75b72e2753e60eebffc554d3019351441ded0296d85753f96c6b8d69bed602f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75b72e2753e60eebffc554d3019351441ded0296d85753f96c6b8d69bed602f->enter($__internal_e75b72e2753e60eebffc554d3019351441ded0296d85753f96c6b8d69bed602f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e75b72e2753e60eebffc554d3019351441ded0296d85753f96c6b8d69bed602f->leave($__internal_e75b72e2753e60eebffc554d3019351441ded0296d85753f96c6b8d69bed602f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_035cc8036dc1bef58d18196c266d2048b70e209812119afd981433180f2e24a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_035cc8036dc1bef58d18196c266d2048b70e209812119afd981433180f2e24a7->enter($__internal_035cc8036dc1bef58d18196c266d2048b70e209812119afd981433180f2e24a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_035cc8036dc1bef58d18196c266d2048b70e209812119afd981433180f2e24a7->leave($__internal_035cc8036dc1bef58d18196c266d2048b70e209812119afd981433180f2e24a7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fea8ea44d5ccc81ee97a6db397dcc1fbf73335185a1e8f406351d92359d8527 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fea8ea44d5ccc81ee97a6db397dcc1fbf73335185a1e8f406351d92359d8527->enter($__internal_2fea8ea44d5ccc81ee97a6db397dcc1fbf73335185a1e8f406351d92359d8527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2fea8ea44d5ccc81ee97a6db397dcc1fbf73335185a1e8f406351d92359d8527->leave($__internal_2fea8ea44d5ccc81ee97a6db397dcc1fbf73335185a1e8f406351d92359d8527_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8dcc945a1d9b98ea557c4d087cdfbf8a95a62366802bc6fb47315cdeb86b1e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8dcc945a1d9b98ea557c4d087cdfbf8a95a62366802bc6fb47315cdeb86b1e7->enter($__internal_a8dcc945a1d9b98ea557c4d087cdfbf8a95a62366802bc6fb47315cdeb86b1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8dcc945a1d9b98ea557c4d087cdfbf8a95a62366802bc6fb47315cdeb86b1e7->leave($__internal_a8dcc945a1d9b98ea557c4d087cdfbf8a95a62366802bc6fb47315cdeb86b1e7_prof);

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
