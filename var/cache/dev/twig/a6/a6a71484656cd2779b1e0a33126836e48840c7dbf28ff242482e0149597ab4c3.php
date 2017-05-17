<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_885f6399a3762ba7fc25affae19885efe55a5d9891422ea6e6babebcd32e43e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0158eb218b717507bdce1abce96ddc32d900bba2b3dba215a468f53c95e6e6c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0158eb218b717507bdce1abce96ddc32d900bba2b3dba215a468f53c95e6e6c4->enter($__internal_0158eb218b717507bdce1abce96ddc32d900bba2b3dba215a468f53c95e6e6c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_baf7c8900f3a8ea08f607b7b4b4b68ebbe4afb119c8f6ccceaa9501b30c84f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baf7c8900f3a8ea08f607b7b4b4b68ebbe4afb119c8f6ccceaa9501b30c84f66->enter($__internal_baf7c8900f3a8ea08f607b7b4b4b68ebbe4afb119c8f6ccceaa9501b30c84f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0158eb218b717507bdce1abce96ddc32d900bba2b3dba215a468f53c95e6e6c4->leave($__internal_0158eb218b717507bdce1abce96ddc32d900bba2b3dba215a468f53c95e6e6c4_prof);

        
        $__internal_baf7c8900f3a8ea08f607b7b4b4b68ebbe4afb119c8f6ccceaa9501b30c84f66->leave($__internal_baf7c8900f3a8ea08f607b7b4b4b68ebbe4afb119c8f6ccceaa9501b30c84f66_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0210dc0829d850ccdafc336f4f7d354dfe439ba7207a48e62ad92e7be822641a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0210dc0829d850ccdafc336f4f7d354dfe439ba7207a48e62ad92e7be822641a->enter($__internal_0210dc0829d850ccdafc336f4f7d354dfe439ba7207a48e62ad92e7be822641a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2fa6f39049b07f2134c1496b3d8bb76369f4cc47c60be7148478bc7b948ed9e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa6f39049b07f2134c1496b3d8bb76369f4cc47c60be7148478bc7b948ed9e3->enter($__internal_2fa6f39049b07f2134c1496b3d8bb76369f4cc47c60be7148478bc7b948ed9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_2fa6f39049b07f2134c1496b3d8bb76369f4cc47c60be7148478bc7b948ed9e3->leave($__internal_2fa6f39049b07f2134c1496b3d8bb76369f4cc47c60be7148478bc7b948ed9e3_prof);

        
        $__internal_0210dc0829d850ccdafc336f4f7d354dfe439ba7207a48e62ad92e7be822641a->leave($__internal_0210dc0829d850ccdafc336f4f7d354dfe439ba7207a48e62ad92e7be822641a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e64aa35e5aedf71b1194c2451dc969101f1c10c227b9e9602f6aca0cdb7e4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e64aa35e5aedf71b1194c2451dc969101f1c10c227b9e9602f6aca0cdb7e4a4->enter($__internal_1e64aa35e5aedf71b1194c2451dc969101f1c10c227b9e9602f6aca0cdb7e4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_623fd1bd183128be5795d5c37fdb06319771de4a4ca2a06914c7ce34cb6ba31f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_623fd1bd183128be5795d5c37fdb06319771de4a4ca2a06914c7ce34cb6ba31f->enter($__internal_623fd1bd183128be5795d5c37fdb06319771de4a4ca2a06914c7ce34cb6ba31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_623fd1bd183128be5795d5c37fdb06319771de4a4ca2a06914c7ce34cb6ba31f->leave($__internal_623fd1bd183128be5795d5c37fdb06319771de4a4ca2a06914c7ce34cb6ba31f_prof);

        
        $__internal_1e64aa35e5aedf71b1194c2451dc969101f1c10c227b9e9602f6aca0cdb7e4a4->leave($__internal_1e64aa35e5aedf71b1194c2451dc969101f1c10c227b9e9602f6aca0cdb7e4a4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_37f41d2f30bf2187426c7844a11f5dd0c4abe59252abf26162dde3d9baaefb1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f41d2f30bf2187426c7844a11f5dd0c4abe59252abf26162dde3d9baaefb1e->enter($__internal_37f41d2f30bf2187426c7844a11f5dd0c4abe59252abf26162dde3d9baaefb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8c813aa09bb85d6cf9a92ade1fd7591129cfbfef2e42d85e195be1206c79009d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c813aa09bb85d6cf9a92ade1fd7591129cfbfef2e42d85e195be1206c79009d->enter($__internal_8c813aa09bb85d6cf9a92ade1fd7591129cfbfef2e42d85e195be1206c79009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_8c813aa09bb85d6cf9a92ade1fd7591129cfbfef2e42d85e195be1206c79009d->leave($__internal_8c813aa09bb85d6cf9a92ade1fd7591129cfbfef2e42d85e195be1206c79009d_prof);

        
        $__internal_37f41d2f30bf2187426c7844a11f5dd0c4abe59252abf26162dde3d9baaefb1e->leave($__internal_37f41d2f30bf2187426c7844a11f5dd0c4abe59252abf26162dde3d9baaefb1e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/workspace/asignaciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
