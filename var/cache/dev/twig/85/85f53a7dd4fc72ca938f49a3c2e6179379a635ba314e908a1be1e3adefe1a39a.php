<?php

/* ::page.html.twig */
class __TwigTemplate_3291eb2ef0774d9d8a85085ffa33875ab25dd7bdb38c7974242c139a647fab6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "::page.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'logo' => array($this, 'block_logo'),
            'main_menu' => array($this, 'block_main_menu'),
            'content' => array($this, 'block_content'),
            'site_title' => array($this, 'block_site_title'),
            'page_title' => array($this, 'block_page_title'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9ef4b28a199c5e69c4e925c75505e564d37a6bd30cd594830c02a70a8a9e319 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9ef4b28a199c5e69c4e925c75505e564d37a6bd30cd594830c02a70a8a9e319->enter($__internal_f9ef4b28a199c5e69c4e925c75505e564d37a6bd30cd594830c02a70a8a9e319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::page.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9ef4b28a199c5e69c4e925c75505e564d37a6bd30cd594830c02a70a8a9e319->leave($__internal_f9ef4b28a199c5e69c4e925c75505e564d37a6bd30cd594830c02a70a8a9e319_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92e621d0761cf7d01eaf25dcf2808b7d761938e137fd793e46a3ea5c237a7e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92e621d0761cf7d01eaf25dcf2808b7d761938e137fd793e46a3ea5c237a7e5->enter($__internal_d92e621d0761cf7d01eaf25dcf2808b7d761938e137fd793e46a3ea5c237a7e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "

    ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        
        $__internal_d92e621d0761cf7d01eaf25dcf2808b7d761938e137fd793e46a3ea5c237a7e5->leave($__internal_d92e621d0761cf7d01eaf25dcf2808b7d761938e137fd793e46a3ea5c237a7e5_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_919bede0d10d4830c85b42fe8f80a469d7b136b36a4f3199a8a7617b274970ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_919bede0d10d4830c85b42fe8f80a469d7b136b36a4f3199a8a7617b274970ee->enter($__internal_919bede0d10d4830c85b42fe8f80a469d7b136b36a4f3199a8a7617b274970ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 5
        echo "        <header>
            ";
        // line 6
        $this->displayBlock('logo', $context, $blocks);
        // line 13
        echo "
            ";
        // line 14
        $this->displayBlock('main_menu', $context, $blocks);
        // line 23
        echo "
        </header>
    ";
        
        $__internal_919bede0d10d4830c85b42fe8f80a469d7b136b36a4f3199a8a7617b274970ee->leave($__internal_919bede0d10d4830c85b42fe8f80a469d7b136b36a4f3199a8a7617b274970ee_prof);

    }

    // line 6
    public function block_logo($context, array $blocks = array())
    {
        $__internal_be65645ef940bda942bf59c51a9e8b294c2f608c5be68742158c41cde34c7271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be65645ef940bda942bf59c51a9e8b294c2f608c5be68742158c41cde34c7271->enter($__internal_be65645ef940bda942bf59c51a9e8b294c2f608c5be68742158c41cde34c7271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        // line 7
        echo "                <div class=\"block block-logo\">
                    <div class=\"side-log\">
                        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"logo\">
                    </div>
                </div>
            ";
        
        $__internal_be65645ef940bda942bf59c51a9e8b294c2f608c5be68742158c41cde34c7271->leave($__internal_be65645ef940bda942bf59c51a9e8b294c2f608c5be68742158c41cde34c7271_prof);

    }

    // line 14
    public function block_main_menu($context, array $blocks = array())
    {
        $__internal_a325323b93ef35cd2c7b29e882b498e048f6b36a1cb3a0656a344e2233d10ec4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a325323b93ef35cd2c7b29e882b498e048f6b36a1cb3a0656a344e2233d10ec4->enter($__internal_a325323b93ef35cd2c7b29e882b498e048f6b36a1cb3a0656a344e2233d10ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu"));

        // line 15
        echo "                <div class=\"main-menu\" id=\"main_menu\">
                    <ul>
                        <li><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Главная</a></li>
                        <li><a href=\"";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_teaser");
        echo "\">Блог</a></li>
                        <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_about");
        echo "\">О Нас</a></li>
                    </ul>
                </div>
            ";
        
        $__internal_a325323b93ef35cd2c7b29e882b498e048f6b36a1cb3a0656a344e2233d10ec4->leave($__internal_a325323b93ef35cd2c7b29e882b498e048f6b36a1cb3a0656a344e2233d10ec4_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_a52b7f56f9b7dc718f719de836a2e5dca7ed1247b29f5aade40bdffa2672480f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52b7f56f9b7dc718f719de836a2e5dca7ed1247b29f5aade40bdffa2672480f->enter($__internal_a52b7f56f9b7dc718f719de836a2e5dca7ed1247b29f5aade40bdffa2672480f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 29
        echo "        <div id=\"main_container\">
            ";
        // line 30
        $this->displayBlock('site_title', $context, $blocks);
        // line 41
        echo "
            <main>
            ";
        // line 43
        $this->displayBlock('main', $context, $blocks);
        // line 46
        echo "            </main>
        </div>
    ";
        
        $__internal_a52b7f56f9b7dc718f719de836a2e5dca7ed1247b29f5aade40bdffa2672480f->leave($__internal_a52b7f56f9b7dc718f719de836a2e5dca7ed1247b29f5aade40bdffa2672480f_prof);

    }

    // line 30
    public function block_site_title($context, array $blocks = array())
    {
        $__internal_5112ff103cb80b5711e601b3c7e0f5dcdcb5bacda7c954ddffcfa4e1d2b90fdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5112ff103cb80b5711e601b3c7e0f5dcdcb5bacda7c954ddffcfa4e1d2b90fdf->enter($__internal_5112ff103cb80b5711e601b3c7e0f5dcdcb5bacda7c954ddffcfa4e1d2b90fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "site_title"));

        // line 31
        echo "                <div class=\"page_title\" id=\"page_title\">
                    <div class=\"type-menu\">
                        <h1>
                            ";
        // line 34
        $this->displayBlock('page_title', $context, $blocks);
        // line 37
        echo "                        </h1>
                    </div>
                </div>
            ";
        
        $__internal_5112ff103cb80b5711e601b3c7e0f5dcdcb5bacda7c954ddffcfa4e1d2b90fdf->leave($__internal_5112ff103cb80b5711e601b3c7e0f5dcdcb5bacda7c954ddffcfa4e1d2b90fdf_prof);

    }

    // line 34
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a8bc9c3fffdc5b15adef8b7d76eed92a19b1cd89cc580688970cf5729ef97052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8bc9c3fffdc5b15adef8b7d76eed92a19b1cd89cc580688970cf5729ef97052->enter($__internal_a8bc9c3fffdc5b15adef8b7d76eed92a19b1cd89cc580688970cf5729ef97052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        // line 35
        echo "                                Page title
                            ";
        
        $__internal_a8bc9c3fffdc5b15adef8b7d76eed92a19b1cd89cc580688970cf5729ef97052->leave($__internal_a8bc9c3fffdc5b15adef8b7d76eed92a19b1cd89cc580688970cf5729ef97052_prof);

    }

    // line 43
    public function block_main($context, array $blocks = array())
    {
        $__internal_1fd6b32a43c55c662555aadd6482f002d1686d666635484715be986cfc50fc70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fd6b32a43c55c662555aadd6482f002d1686d666635484715be986cfc50fc70->enter($__internal_1fd6b32a43c55c662555aadd6482f002d1686d666635484715be986cfc50fc70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 44
        echo "
            ";
        
        $__internal_1fd6b32a43c55c662555aadd6482f002d1686d666635484715be986cfc50fc70->leave($__internal_1fd6b32a43c55c662555aadd6482f002d1686d666635484715be986cfc50fc70_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b3d14385048d26f06e2115c7fcab2c6448130827c3f349a1553714513db802e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3d14385048d26f06e2115c7fcab2c6448130827c3f349a1553714513db802e3->enter($__internal_b3d14385048d26f06e2115c7fcab2c6448130827c3f349a1553714513db802e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "        <footer role=\"contentinfo\">
            <div class=\"block block-copyrigth\">
                Copyright &copy; 2016. All right reserved.
            </div>
        </footer>
    ";
        
        $__internal_b3d14385048d26f06e2115c7fcab2c6448130827c3f349a1553714513db802e3->leave($__internal_b3d14385048d26f06e2115c7fcab2c6448130827c3f349a1553714513db802e3_prof);

    }

    public function getTemplateName()
    {
        return "::page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 51,  219 => 50,  211 => 44,  205 => 43,  197 => 35,  191 => 34,  181 => 37,  179 => 34,  174 => 31,  168 => 30,  159 => 46,  157 => 43,  153 => 41,  151 => 30,  148 => 29,  142 => 28,  131 => 19,  127 => 18,  123 => 17,  119 => 15,  113 => 14,  102 => 9,  98 => 7,  92 => 6,  83 => 23,  81 => 14,  78 => 13,  76 => 6,  73 => 5,  67 => 4,  60 => 50,  57 => 49,  55 => 28,  51 => 26,  48 => 4,  42 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '::base.html.twig' %}

{% block body %}
    {% block header %}
        <header>
            {% block logo %}
                <div class=\"block block-logo\">
                    <div class=\"side-log\">
                        <img src=\"{{ asset('images/logo.png') }}\" alt=\"logo\">
                    </div>
                </div>
            {% endblock %}

            {% block main_menu %}
                <div class=\"main-menu\" id=\"main_menu\">
                    <ul>
                        <li><a href=\"{{ path('homepage') }}\">Главная</a></li>
                        <li><a href=\"{{ path('blog_teaser') }}\">Блог</a></li>
                        <li><a href=\"{{ path('blog_about') }}\">О Нас</a></li>
                    </ul>
                </div>
            {% endblock %}

        </header>
    {% endblock %}


    {% block content %}
        <div id=\"main_container\">
            {% block site_title %}
                <div class=\"page_title\" id=\"page_title\">
                    <div class=\"type-menu\">
                        <h1>
                            {% block page_title %}
                                Page title
                            {% endblock %}
                        </h1>
                    </div>
                </div>
            {% endblock %}

            <main>
            {% block main %}

            {% endblock %}
            </main>
        </div>
    {% endblock %}

    {% block footer %}
        <footer role=\"contentinfo\">
            <div class=\"block block-copyrigth\">
                Copyright &copy; 2016. All right reserved.
            </div>
        </footer>
    {% endblock %}
{% endblock %}";
    }
}
