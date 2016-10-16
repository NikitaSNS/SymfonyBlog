<?php

/* BlogBundle:Page:about_us.html.twig */
class __TwigTemplate_fc66585f43f867516106801bf26588287c167176c8bcbe43cdad84bc6ddf4f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::page.html.twig", "BlogBundle:Page:about_us.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea43ee2fa22d9f302c3a39d89e4f53c1ea012c7f375bd951222310516fe10f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea43ee2fa22d9f302c3a39d89e4f53c1ea012c7f375bd951222310516fe10f4a->enter($__internal_ea43ee2fa22d9f302c3a39d89e4f53c1ea012c7f375bd951222310516fe10f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:about_us.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea43ee2fa22d9f302c3a39d89e4f53c1ea012c7f375bd951222310516fe10f4a->leave($__internal_ea43ee2fa22d9f302c3a39d89e4f53c1ea012c7f375bd951222310516fe10f4a_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dd4a139ef624b209e15bbd7c3073f4db9ef26d15e59db29d0622c1089e44711e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd4a139ef624b209e15bbd7c3073f4db9ef26d15e59db29d0622c1089e44711e->enter($__internal_dd4a139ef624b209e15bbd7c3073f4db9ef26d15e59db29d0622c1089e44711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 5
        echo "    About Us
";
        
        $__internal_dd4a139ef624b209e15bbd7c3073f4db9ef26d15e59db29d0622c1089e44711e->leave($__internal_dd4a139ef624b209e15bbd7c3073f4db9ef26d15e59db29d0622c1089e44711e_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_3db04417aed90dd940da044dfef66c6c96324d746abfaaff2aa79c465fdc4d2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db04417aed90dd940da044dfef66c6c96324d746abfaaff2aa79c465fdc4d2b->enter($__internal_3db04417aed90dd940da044dfef66c6c96324d746abfaaff2aa79c465fdc4d2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facere molestiae reiciendis rem
                    repellendus. Impedit.
                </div>
                <div>A accusamus cumque earum esse laborum reprehenderit rerum? Animi assumenda magnam rem voluptate?
                    Ab, dolores.
                </div>
                <div>Eius, nemo nobis? Cum delectus magnam odio pariatur quidem quis repellat. Dolore ducimus ipsam
                    nulla!
                </div>
                <div>Aspernatur culpa fugiat nisi pariatur reiciendis rem sed ullam! Eveniet impedit iste modi nobis
                    quas!
                </div>
                <div>Adipisci beatae, dolorem expedita, labore modi non, possimus quo quos soluta tempora temporibus
                    tenetur vero?
                </div>
            </div>
        </div>
    </article>
";
        
        $__internal_3db04417aed90dd940da044dfef66c6c96324d746abfaaff2aa79c465fdc4d2b->leave($__internal_3db04417aed90dd940da044dfef66c6c96324d746abfaaff2aa79c465fdc4d2b_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Page:about_us.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  49 => 8,  41 => 5,  35 => 4,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::page.html.twig' %}


{% block page_title %}
    About Us
{% endblock %}

{% block main %}
    <article>
        <div class=\"container blog-container\">
            <div class=\"field field-body\">
                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet facere molestiae reiciendis rem
                    repellendus. Impedit.
                </div>
                <div>A accusamus cumque earum esse laborum reprehenderit rerum? Animi assumenda magnam rem voluptate?
                    Ab, dolores.
                </div>
                <div>Eius, nemo nobis? Cum delectus magnam odio pariatur quidem quis repellat. Dolore ducimus ipsam
                    nulla!
                </div>
                <div>Aspernatur culpa fugiat nisi pariatur reiciendis rem sed ullam! Eveniet impedit iste modi nobis
                    quas!
                </div>
                <div>Adipisci beatae, dolorem expedita, labore modi non, possimus quo quos soluta tempora temporibus
                    tenetur vero?
                </div>
            </div>
        </div>
    </article>
{% endblock %}";
    }
}
