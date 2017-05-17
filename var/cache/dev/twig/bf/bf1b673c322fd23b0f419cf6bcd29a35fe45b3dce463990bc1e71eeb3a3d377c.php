<?php

/* BIJIUserBundle:User:home.html.twig */
class __TwigTemplate_d4727dce98775662bd3fb2317d56ea87f6c71d6ba8e39211347fd138c56aaeac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:User:home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07a18a43bf13dfc3c3b600fa1ec997032b28b657a65233f525c3df241c2fda90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07a18a43bf13dfc3c3b600fa1ec997032b28b657a65233f525c3df241c2fda90->enter($__internal_07a18a43bf13dfc3c3b600fa1ec997032b28b657a65233f525c3df241c2fda90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:home.html.twig"));

        $__internal_a6231aedc3bd5762a71de794ba873084a9a3f7b87ebd138d09bd10eeec0eb57e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6231aedc3bd5762a71de794ba873084a9a3f7b87ebd138d09bd10eeec0eb57e->enter($__internal_a6231aedc3bd5762a71de794ba873084a9a3f7b87ebd138d09bd10eeec0eb57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a18a43bf13dfc3c3b600fa1ec997032b28b657a65233f525c3df241c2fda90->leave($__internal_07a18a43bf13dfc3c3b600fa1ec997032b28b657a65233f525c3df241c2fda90_prof);

        
        $__internal_a6231aedc3bd5762a71de794ba873084a9a3f7b87ebd138d09bd10eeec0eb57e->leave($__internal_a6231aedc3bd5762a71de794ba873084a9a3f7b87ebd138d09bd10eeec0eb57e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_99d18f8cdb1c535c29d4969136b8275ae53828c515219254f764bf9003fb531c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d18f8cdb1c535c29d4969136b8275ae53828c515219254f764bf9003fb531c->enter($__internal_99d18f8cdb1c535c29d4969136b8275ae53828c515219254f764bf9003fb531c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_800c244ae921daf342edbb1b6735aa04cb9a6ec45dbcaa3fbf37d140822da8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800c244ae921daf342edbb1b6735aa04cb9a6ec45dbcaa3fbf37d140822da8c2->enter($__internal_800c244ae921daf342edbb1b6735aa04cb9a6ec45dbcaa3fbf37d140822da8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container\">
        <h2 class=\"text-center\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
($context["app"] ?? $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_USER")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "
            ";
        }
        // line 13
        echo "            :
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
        </h2>
    </div>
";
        
        $__internal_800c244ae921daf342edbb1b6735aa04cb9a6ec45dbcaa3fbf37d140822da8c2->leave($__internal_800c244ae921daf342edbb1b6735aa04cb9a6ec45dbcaa3fbf37d140822da8c2_prof);

        
        $__internal_99d18f8cdb1c535c29d4969136b8275ae53828c515219254f764bf9003fb531c->leave($__internal_99d18f8cdb1c535c29d4969136b8275ae53828c515219254f764bf9003fb531c_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 14,  75 => 13,  69 => 11,  67 => 10,  62 => 9,  60 => 8,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
    <div class=\"container\">
        <h2 class=\"text-center\">
            {{ 'Welcome'|trans }}
            {% if app.user.role == 'ROLE_ADMIN' %}
                {{ 'Administrator'|trans }}
            {% elseif app.user.role == 'ROLE_USER' %}
                {{ 'User'|trans }}
            {% endif %}
            :
            {{ app.user.username }}
        </h2>
    </div>
{% endblock %}", "BIJIUserBundle:User:home.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/home.html.twig");
    }
}
