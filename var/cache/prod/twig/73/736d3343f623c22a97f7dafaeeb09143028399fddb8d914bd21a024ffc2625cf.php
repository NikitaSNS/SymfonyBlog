<?php

/* BlogBundle:Page:about_us.html.twig */
class __TwigTemplate_146424ec03e7832a354102942f4c65f0da0cfaeef9c5e7047c557ae250d1071c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        // line 5
        echo "    About Us
";
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
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
        return array (  40 => 9,  37 => 8,  32 => 5,  29 => 4,  11 => 1,);
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
