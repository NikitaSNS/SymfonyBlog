<?php

/* BlogBundle:Page:about_us.html.twig */
class __TwigTemplate_78f0a8cd5955aa287399230dc2cfff8a280447a22c5bd9b75ef7e4e32a6ad01b extends Twig_Template
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
        $__internal_1552f1ea1bf833616365be03baab812991546b3152072e083a49975f3a75ec3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1552f1ea1bf833616365be03baab812991546b3152072e083a49975f3a75ec3f->enter($__internal_1552f1ea1bf833616365be03baab812991546b3152072e083a49975f3a75ec3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:about_us.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1552f1ea1bf833616365be03baab812991546b3152072e083a49975f3a75ec3f->leave($__internal_1552f1ea1bf833616365be03baab812991546b3152072e083a49975f3a75ec3f_prof);

    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e3054166b652e5835696c0215be7aa26fc39a250397638b90176f1f734f29ada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3054166b652e5835696c0215be7aa26fc39a250397638b90176f1f734f29ada->enter($__internal_e3054166b652e5835696c0215be7aa26fc39a250397638b90176f1f734f29ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 5
        echo "    About Us
";
        
        $__internal_e3054166b652e5835696c0215be7aa26fc39a250397638b90176f1f734f29ada->leave($__internal_e3054166b652e5835696c0215be7aa26fc39a250397638b90176f1f734f29ada_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_ae0e55a0966ece7fae5e19ee06c82945f2a69180449f2e34ef022541cb0253d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0e55a0966ece7fae5e19ee06c82945f2a69180449f2e34ef022541cb0253d7->enter($__internal_ae0e55a0966ece7fae5e19ee06c82945f2a69180449f2e34ef022541cb0253d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ae0e55a0966ece7fae5e19ee06c82945f2a69180449f2e34ef022541cb0253d7->leave($__internal_ae0e55a0966ece7fae5e19ee06c82945f2a69180449f2e34ef022541cb0253d7_prof);

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
