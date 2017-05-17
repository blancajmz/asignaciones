<?php

/* BIJIUserBundle:Task:messages/success.html.twig */
class __TwigTemplate_df92922cec4425fbf97eb4792b99c982607378fc52687af175aed06cc9922a28 extends Twig_Template
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
        $__internal_be5f348484e888ce005f1dac16b9863864b54f11fd5130ddb5b3905c8d886ff9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be5f348484e888ce005f1dac16b9863864b54f11fd5130ddb5b3905c8d886ff9->enter($__internal_be5f348484e888ce005f1dac16b9863864b54f11fd5130ddb5b3905c8d886ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:messages/success.html.twig"));

        $__internal_3e6056a06b03645460c07e53f4fbb5b92a82d159030e52ae74b2caa4b8654028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e6056a06b03645460c07e53f4fbb5b92a82d159030e52ae74b2caa4b8654028->enter($__internal_3e6056a06b03645460c07e53f4fbb5b92a82d159030e52ae74b2caa4b8654028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:messages/success.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\"><span id=\"user-message\"></span></div>
    </div>
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "    <div class=\"alert alert-success\" role=\"alert\">
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
        
        $__internal_be5f348484e888ce005f1dac16b9863864b54f11fd5130ddb5b3905c8d886ff9->leave($__internal_be5f348484e888ce005f1dac16b9863864b54f11fd5130ddb5b3905c8d886ff9_prof);

        
        $__internal_3e6056a06b03645460c07e53f4fbb5b92a82d159030e52ae74b2caa4b8654028->leave($__internal_3e6056a06b03645460c07e53f4fbb5b92a82d159030e52ae74b2caa4b8654028_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:messages/success.html.twig";
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
    <div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
        <div class=\"container\"><span id=\"user-message\"></span></div>
    </div>
{% endif %}
{% for flashMessage in app.session.flashbag.get('mensaje') %}
    <div class=\"alert alert-success\" role=\"alert\">
        <div class=\"container\">{{ flashMessage }}</div>
    </div>
{% endfor %}", "BIJIUserBundle:Task:messages/success.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/messages/success.html.twig");
    }
}
