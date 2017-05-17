<?php

/* BIJIUserBundle:User:forms/form.html.twig */
class __TwigTemplate_7fcee3d6f298de83606c92f5e3a98839bd20cafbd758e67ecf18c0c717b0684f extends Twig_Template
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
        $__internal_fc9f832cd9842c6add638e84b1630b1b5e640fb9e79f40378db94c76cd2d7e24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc9f832cd9842c6add638e84b1630b1b5e640fb9e79f40378db94c76cd2d7e24->enter($__internal_fc9f832cd9842c6add638e84b1630b1b5e640fb9e79f40378db94c76cd2d7e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:forms/form.html.twig"));

        $__internal_d731b0264d4c7f561a1556a6195aa7322885ab8236a9c5a0982af69522d21ae3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d731b0264d4c7f561a1556a6195aa7322885ab8236a9c5a0982af69522d21ae3->enter($__internal_d731b0264d4c7f561a1556a6195aa7322885ab8236a9c5a0982af69522d21ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:forms/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter(($context["id"] ?? $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "

    ";
        // line 5
        if (( !array_key_exists("with_submit", $context) || (($context["with_submit"] ?? $this->getContext($context, "with_submit")) == true))) {
            // line 6
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete User"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\">
    ";
        }
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 12
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "';

    function confirmDelete() {
        bootbox.confirm(message, function(result)
        {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_fc9f832cd9842c6add638e84b1630b1b5e640fb9e79f40378db94c76cd2d7e24->leave($__internal_fc9f832cd9842c6add638e84b1630b1b5e640fb9e79f40378db94c76cd2d7e24_prof);

        
        $__internal_d731b0264d4c7f561a1556a6195aa7322885ab8236a9c5a0982af69522d21ae3->leave($__internal_d731b0264d4c7f561a1556a6195aa7322885ab8236a9c5a0982af69522d21ae3_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  46 => 9,  43 => 8,  37 => 6,  35 => 5,  30 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr':{'id':id|default('form')}}) }}

    {{ form_widget(form)}}

    {% if with_submit is not defined or with_submit == true %}
    <input type=\"button\" value=\"{{ 'Delete User'|trans }}\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\">
    {% endif %}

{{ form_end(form) }}

<script>
    var message = '{{ message }}';

    function confirmDelete() {
        bootbox.confirm(message, function(result)
        {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>", "BIJIUserBundle:User:forms/form.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/forms/form.html.twig");
    }
}
