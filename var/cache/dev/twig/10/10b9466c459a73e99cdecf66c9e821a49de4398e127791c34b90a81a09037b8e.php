<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_7188a6681446fefbdf96734fee7ba358e93dee160ed893e57e56be54a8dbcff8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2395ce5eb1ad106cdd46bfb7d736f2428d1c3890fbd3a545bef6051c5d39039d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2395ce5eb1ad106cdd46bfb7d736f2428d1c3890fbd3a545bef6051c5d39039d->enter($__internal_2395ce5eb1ad106cdd46bfb7d736f2428d1c3890fbd3a545bef6051c5d39039d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_585db60ba3b81926d8b30bc855a4ba56257cdf65bd6a2526d788c1ef574b7e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585db60ba3b81926d8b30bc855a4ba56257cdf65bd6a2526d788c1ef574b7e67->enter($__internal_585db60ba3b81926d8b30bc855a4ba56257cdf65bd6a2526d788c1ef574b7e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2395ce5eb1ad106cdd46bfb7d736f2428d1c3890fbd3a545bef6051c5d39039d->leave($__internal_2395ce5eb1ad106cdd46bfb7d736f2428d1c3890fbd3a545bef6051c5d39039d_prof);

        
        $__internal_585db60ba3b81926d8b30bc855a4ba56257cdf65bd6a2526d788c1ef574b7e67->leave($__internal_585db60ba3b81926d8b30bc855a4ba56257cdf65bd6a2526d788c1ef574b7e67_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c250b2eef388e04ebb2bfdcfe38a498013d9851d53279a61666b13eed7f40b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c250b2eef388e04ebb2bfdcfe38a498013d9851d53279a61666b13eed7f40b1->enter($__internal_8c250b2eef388e04ebb2bfdcfe38a498013d9851d53279a61666b13eed7f40b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a43b0d79049608175e125907cd7669269e2914a022b0d39aa682ff6d2709e38c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a43b0d79049608175e125907cd7669269e2914a022b0d39aa682ff6d2709e38c->enter($__internal_a43b0d79049608175e125907cd7669269e2914a022b0d39aa682ff6d2709e38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a43b0d79049608175e125907cd7669269e2914a022b0d39aa682ff6d2709e38c->leave($__internal_a43b0d79049608175e125907cd7669269e2914a022b0d39aa682ff6d2709e38c_prof);

        
        $__internal_8c250b2eef388e04ebb2bfdcfe38a498013d9851d53279a61666b13eed7f40b1->leave($__internal_8c250b2eef388e04ebb2bfdcfe38a498013d9851d53279a61666b13eed7f40b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_11d73fe925649ce22f1f557dfde06d25d7b7e2ad1ca7a11c6aef0fff5b39f97e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d73fe925649ce22f1f557dfde06d25d7b7e2ad1ca7a11c6aef0fff5b39f97e->enter($__internal_11d73fe925649ce22f1f557dfde06d25d7b7e2ad1ca7a11c6aef0fff5b39f97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_163348b720cb1d24e8f4a073dfa6c99364b595b32fbb70dd92bb597bb5e1ba1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_163348b720cb1d24e8f4a073dfa6c99364b595b32fbb70dd92bb597bb5e1ba1a->enter($__internal_163348b720cb1d24e8f4a073dfa6c99364b595b32fbb70dd92bb597bb5e1ba1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_163348b720cb1d24e8f4a073dfa6c99364b595b32fbb70dd92bb597bb5e1ba1a->leave($__internal_163348b720cb1d24e8f4a073dfa6c99364b595b32fbb70dd92bb597bb5e1ba1a_prof);

        
        $__internal_11d73fe925649ce22f1f557dfde06d25d7b7e2ad1ca7a11c6aef0fff5b39f97e->leave($__internal_11d73fe925649ce22f1f557dfde06d25d7b7e2ad1ca7a11c6aef0fff5b39f97e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_192afb77c8fc72faa9964956b6eef769e28ecd653a439667bceaebbb23ab5f1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_192afb77c8fc72faa9964956b6eef769e28ecd653a439667bceaebbb23ab5f1d->enter($__internal_192afb77c8fc72faa9964956b6eef769e28ecd653a439667bceaebbb23ab5f1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1fac5f77f2a51d8688651bd82672ed4dab0649a65e0e3874a791a376c566422d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fac5f77f2a51d8688651bd82672ed4dab0649a65e0e3874a791a376c566422d->enter($__internal_1fac5f77f2a51d8688651bd82672ed4dab0649a65e0e3874a791a376c566422d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1fac5f77f2a51d8688651bd82672ed4dab0649a65e0e3874a791a376c566422d->leave($__internal_1fac5f77f2a51d8688651bd82672ed4dab0649a65e0e3874a791a376c566422d_prof);

        
        $__internal_192afb77c8fc72faa9964956b6eef769e28ecd653a439667bceaebbb23ab5f1d->leave($__internal_192afb77c8fc72faa9964956b6eef769e28ecd653a439667bceaebbb23ab5f1d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/workspace/asignaciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
