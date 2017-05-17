<?php

/* BIJIUserBundle:Task:messages/warning.html.twig */
class __TwigTemplate_0d8e0c5d4a8be3fbfb0a84b3a5eba6e2ed8aa54870246d3cce5e0e7d85f032df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ec3eb8a5cf0be7979f2ffd27684b933593b34f0fb2768e898a98cb799cfaf9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ec3eb8a5cf0be7979f2ffd27684b933593b34f0fb2768e898a98cb799cfaf9c->enter($__internal_9ec3eb8a5cf0be7979f2ffd27684b933593b34f0fb2768e898a98cb799cfaf9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:messages/warning.html.twig"));

        $__internal_6b4bd3f1f42afe3a1097af5bda7d57208b462f0f6e48f488ca848be8179c57d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b4bd3f1f42afe3a1097af5bda7d57208b462f0f6e48f488ca848be8179c57d2->enter($__internal_6b4bd3f1f42afe3a1097af5bda7d57208b462f0f6e48f488ca848be8179c57d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:messages/warning.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-warning hidden\" id=\"message-warning\" role=\"alert\">
        <div class=\"container\"><span id=\"user-message-warning\"></span></div>
    </div>
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-warning\" role=\"alert\">
        <div class=\"container\">";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9ec3eb8a5cf0be7979f2ffd27684b933593b34f0fb2768e898a98cb799cfaf9c->leave($__internal_9ec3eb8a5cf0be7979f2ffd27684b933593b34f0fb2768e898a98cb799cfaf9c_prof);

        
        $__internal_6b4bd3f1f42afe3a1097af5bda7d57208b462f0f6e48f488ca848be8179c57d2->leave($__internal_6b4bd3f1f42afe3a1097af5bda7d57208b462f0f6e48f488ca848be8179c57d2_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:messages/warning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  37 => 7,  33 => 6,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flashMessage is not defined %}
    <div class=\"alert alert-warning hidden\" id=\"message-warning\" role=\"alert\">
        <div class=\"container\"><span id=\"user-message-warning\"></span></div>
    </div>
{% endif %}
{% for flashMessage in app.session.flashbag.get('mensaje') %}
    <div class=\"alert alert-warning\" role=\"alert\">
        <div class=\"container\">{{ flashMessage }}</div>
    </div>
{% endfor %}", "BIJIUserBundle:Task:messages/warning.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/messages/warning.html.twig");
    }
}
