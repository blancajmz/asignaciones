<?php

/* BIJIUserBundle:User:messages/success.html.twig */
class __TwigTemplate_b5cdf65d82addcb7da569c1bb36f70596db84709d3eab58edd8db4785431c0d4 extends Twig_Template
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
        $__internal_c97782388f7ed203e55b7787549aad0d9bff219fcd3a38f6ee6d9e5276a2b92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c97782388f7ed203e55b7787549aad0d9bff219fcd3a38f6ee6d9e5276a2b92b->enter($__internal_c97782388f7ed203e55b7787549aad0d9bff219fcd3a38f6ee6d9e5276a2b92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:messages/success.html.twig"));

        $__internal_2c94ad86dd06ca46da8709523d99bfd17f326ffaa8d194bdf378993b7bdf8e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c94ad86dd06ca46da8709523d99bfd17f326ffaa8d194bdf378993b7bdf8e01->enter($__internal_2c94ad86dd06ca46da8709523d99bfd17f326ffaa8d194bdf378993b7bdf8e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:messages/success.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "   <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\"></div>
    <div class=\"container\">
        <span id=\"user-message\"></span>
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
            echo "    <div class=\"alert alert-success\" role=\"alert\">
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
        
        $__internal_c97782388f7ed203e55b7787549aad0d9bff219fcd3a38f6ee6d9e5276a2b92b->leave($__internal_c97782388f7ed203e55b7787549aad0d9bff219fcd3a38f6ee6d9e5276a2b92b_prof);

        
        $__internal_2c94ad86dd06ca46da8709523d99bfd17f326ffaa8d194bdf378993b7bdf8e01->leave($__internal_2c94ad86dd06ca46da8709523d99bfd17f326ffaa8d194bdf378993b7bdf8e01_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:messages/success.html.twig";
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
   <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\"></div>
    <div class=\"container\">
        <span id=\"user-message\"></span>
    </div>
{% endif %}

{% for flashMessage in app.session.flashbag.get('mensaje') %}
    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">{{ flashMessage }}</div>
    </div>
{% endfor %}", "BIJIUserBundle:User:messages/success.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/messages/success.html.twig");
    }
}
