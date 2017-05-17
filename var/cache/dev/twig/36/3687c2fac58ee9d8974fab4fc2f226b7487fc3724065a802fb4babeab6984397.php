<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_260ca5319ac56b4e11d232768edd4d7f3b0273bf390f664875dd6620cd07fad2 extends Twig_Template
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
        $__internal_b217d8b25df6aced614ee89919b7a4f184f3b0f0648a9868ecbb11fa7a4c41d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b217d8b25df6aced614ee89919b7a4f184f3b0f0648a9868ecbb11fa7a4c41d6->enter($__internal_b217d8b25df6aced614ee89919b7a4f184f3b0f0648a9868ecbb11fa7a4c41d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_1cd87e4470125fa178d17ba692f4fde42de4838babb51f3f6cd8d24d85478141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cd87e4470125fa178d17ba692f4fde42de4838babb51f3f6cd8d24d85478141->enter($__internal_1cd87e4470125fa178d17ba692f4fde42de4838babb51f3f6cd8d24d85478141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_b217d8b25df6aced614ee89919b7a4f184f3b0f0648a9868ecbb11fa7a4c41d6->leave($__internal_b217d8b25df6aced614ee89919b7a4f184f3b0f0648a9868ecbb11fa7a4c41d6_prof);

        
        $__internal_1cd87e4470125fa178d17ba692f4fde42de4838babb51f3f6cd8d24d85478141->leave($__internal_1cd87e4470125fa178d17ba692f4fde42de4838babb51f3f6cd8d24d85478141_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/var/www/workspace/asignaciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
