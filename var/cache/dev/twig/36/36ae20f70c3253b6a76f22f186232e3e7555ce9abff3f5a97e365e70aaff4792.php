<?php

/* BlogBundle:Page:about_us.html.twig */
class __TwigTemplate_80ec401ee123702bfb974fddd65747a60c474984aa4a4a82e5bb68d2a51dfbad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Page:about_us.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8f0f70d9f588af32dec44a5f2cf74296897556a9bc29fb384ef5de4578b6657e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0f70d9f588af32dec44a5f2cf74296897556a9bc29fb384ef5de4578b6657e->enter($__internal_8f0f70d9f588af32dec44a5f2cf74296897556a9bc29fb384ef5de4578b6657e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Page:about_us.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f0f70d9f588af32dec44a5f2cf74296897556a9bc29fb384ef5de4578b6657e->leave($__internal_8f0f70d9f588af32dec44a5f2cf74296897556a9bc29fb384ef5de4578b6657e_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_53b519945b9f2181731b2f2c19016bffd7c70ca706f4148be312f573831131c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53b519945b9f2181731b2f2c19016bffd7c70ca706f4148be312f573831131c9->enter($__internal_53b519945b9f2181731b2f2c19016bffd7c70ca706f4148be312f573831131c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 4
        echo "    About Us
";
        
        $__internal_53b519945b9f2181731b2f2c19016bffd7c70ca706f4148be312f573831131c9->leave($__internal_53b519945b9f2181731b2f2c19016bffd7c70ca706f4148be312f573831131c9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_62d9c3cf8995451437931af80be3a57990543c6277137786aa18b0c6b5e6d969 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62d9c3cf8995451437931af80be3a57990543c6277137786aa18b0c6b5e6d969->enter($__internal_62d9c3cf8995451437931af80be3a57990543c6277137786aa18b0c6b5e6d969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
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
        
        $__internal_62d9c3cf8995451437931af80be3a57990543c6277137786aa18b0c6b5e6d969->leave($__internal_62d9c3cf8995451437931af80be3a57990543c6277137786aa18b0c6b5e6d969_prof);

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
        return array (  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'BlogBundle::layout.html.twig' %}

{% block page_title %}
    About Us
{% endblock %}

{% block content %}
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
