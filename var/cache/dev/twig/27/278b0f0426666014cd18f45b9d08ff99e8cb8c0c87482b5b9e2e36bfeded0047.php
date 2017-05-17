<?php

/* BIJIUserBundle:Task:forms/form.html.twig */
class __TwigTemplate_8c16548654aeacedc818c37b83c104951df4bdfa6bb7305351f7a41eb2a4599f extends Twig_Template
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
        $__internal_ec3454df34e20743c56d105f2bd1ae7b6ebd709bdd35e70cab8efa6269641ef0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec3454df34e20743c56d105f2bd1ae7b6ebd709bdd35e70cab8efa6269641ef0->enter($__internal_ec3454df34e20743c56d105f2bd1ae7b6ebd709bdd35e70cab8efa6269641ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:forms/form.html.twig"));

        $__internal_9188706fa7c9b81db2d0fec5193603b7ffc9f660b1118fe88bc4be492fecc2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9188706fa7c9b81db2d0fec5193603b7ffc9f660b1118fe88bc4be492fecc2d0->enter($__internal_9188706fa7c9b81db2d0fec5193603b7ffc9f660b1118fe88bc4be492fecc2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:forms/form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
    ";
        // line 2
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
<input type=\"button\" value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete task"), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete();\"/>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 7
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "';
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_ec3454df34e20743c56d105f2bd1ae7b6ebd709bdd35e70cab8efa6269641ef0->leave($__internal_ec3454df34e20743c56d105f2bd1ae7b6ebd709bdd35e70cab8efa6269641ef0_prof);

        
        $__internal_9188706fa7c9b81db2d0fec5193603b7ffc9f660b1118fe88bc4be492fecc2d0->leave($__internal_9188706fa7c9b81db2d0fec5193603b7ffc9f660b1118fe88bc4be492fecc2d0_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  37 => 4,  33 => 3,  29 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
    {{ form_widget(form) }}
<input type=\"button\" value=\"{{ 'Delete task'|trans }}\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete();\"/>
{{ form_end(form) }}

<script>
    var message = '{{ message }}';
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>", "BIJIUserBundle:Task:forms/form.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/forms/form.html.twig");
    }
}
