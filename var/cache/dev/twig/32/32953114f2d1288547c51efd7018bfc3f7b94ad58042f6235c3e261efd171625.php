<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_3372c956c4a52a0420a67707453a2f1c2f3ca9c882688ce3e6f39c1c207dee07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_52554a1bab2beb55eb5d9cbd108de5564b41b42b7226afcb8589efcb9b640f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52554a1bab2beb55eb5d9cbd108de5564b41b42b7226afcb8589efcb9b640f3c->enter($__internal_52554a1bab2beb55eb5d9cbd108de5564b41b42b7226afcb8589efcb9b640f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52554a1bab2beb55eb5d9cbd108de5564b41b42b7226afcb8589efcb9b640f3c->leave($__internal_52554a1bab2beb55eb5d9cbd108de5564b41b42b7226afcb8589efcb9b640f3c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_614e62980118dd915bf898ec2d5415a7b457eb2bb4202fef600798be523ab643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614e62980118dd915bf898ec2d5415a7b457eb2bb4202fef600798be523ab643->enter($__internal_614e62980118dd915bf898ec2d5415a7b457eb2bb4202fef600798be523ab643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_614e62980118dd915bf898ec2d5415a7b457eb2bb4202fef600798be523ab643->leave($__internal_614e62980118dd915bf898ec2d5415a7b457eb2bb4202fef600798be523ab643_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dc1a790272ef5489950c6eea24915979f77f3dba9a041fada87f6427d20aa7fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc1a790272ef5489950c6eea24915979f77f3dba9a041fada87f6427d20aa7fe->enter($__internal_dc1a790272ef5489950c6eea24915979f77f3dba9a041fada87f6427d20aa7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_dc1a790272ef5489950c6eea24915979f77f3dba9a041fada87f6427d20aa7fe->leave($__internal_dc1a790272ef5489950c6eea24915979f77f3dba9a041fada87f6427d20aa7fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8a84898a2b38ec2f298bf2b385e282b1bf127cb33ed0179b16e1517c61370d8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a84898a2b38ec2f298bf2b385e282b1bf127cb33ed0179b16e1517c61370d8a->enter($__internal_8a84898a2b38ec2f298bf2b385e282b1bf127cb33ed0179b16e1517c61370d8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8a84898a2b38ec2f298bf2b385e282b1bf127cb33ed0179b16e1517c61370d8a->leave($__internal_8a84898a2b38ec2f298bf2b385e282b1bf127cb33ed0179b16e1517c61370d8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}
