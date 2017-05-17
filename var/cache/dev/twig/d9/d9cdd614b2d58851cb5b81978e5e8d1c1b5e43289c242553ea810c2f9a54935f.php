<?php

/* BIJIUserBundle:User:messages/danger.html.twig */
class __TwigTemplate_adc308e7e37ff5dd81c3adc6646ebd173cdaa8916f3e4ed3e99025342a71f052 extends Twig_Template
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
        $__internal_f4ace862514e4c60f0cd3bdc961401d1bf04ecb26887af857ae5b36e5cdf9395 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ace862514e4c60f0cd3bdc961401d1bf04ecb26887af857ae5b36e5cdf9395->enter($__internal_f4ace862514e4c60f0cd3bdc961401d1bf04ecb26887af857ae5b36e5cdf9395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:messages/danger.html.twig"));

        $__internal_9d4f0854f58d110f891f7f5244d03eb9bd1a4db67942a9e37818722182d56935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4f0854f58d110f891f7f5244d03eb9bd1a4db67942a9e37818722182d56935->enter($__internal_9d4f0854f58d110f891f7f5244d03eb9bd1a4db67942a9e37818722182d56935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:messages/danger.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\"></div>
    <div class=\"container\">
        <span id=\"user-message-danger\"></span>
    </div>
";
        }
        // line 7
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 9
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\">";
            // line 10
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f4ace862514e4c60f0cd3bdc961401d1bf04ecb26887af857ae5b36e5cdf9395->leave($__internal_f4ace862514e4c60f0cd3bdc961401d1bf04ecb26887af857ae5b36e5cdf9395_prof);

        
        $__internal_9d4f0854f58d110f891f7f5244d03eb9bd1a4db67942a9e37818722182d56935->leave($__internal_9d4f0854f58d110f891f7f5244d03eb9bd1a4db67942a9e37818722182d56935_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:messages/danger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  37 => 8,  34 => 7,  27 => 2,  25 => 1,);
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
    <div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\"></div>
    <div class=\"container\">
        <span id=\"user-message-danger\"></span>
    </div>
{% endif %}

{% for flashMessage in app.session.flashbag.get('mensaje') %}
    <div class=\"alert alert-danger\" role=\"alert\">
        <div class=\"container\">{{ flashMessage }}</div>
    </div>
{% endfor %}", "BIJIUserBundle:User:messages/danger.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/messages/danger.html.twig");
    }
}
