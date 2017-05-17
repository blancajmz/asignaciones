<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_3c9aa0fb2e4a90dfc6e618a563429d32e7bf1c885272d2531236ae754103f427 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_743c23e2c6c2085e0376de38e9f19f353e10af44d77dc11a50360af4b2a862ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_743c23e2c6c2085e0376de38e9f19f353e10af44d77dc11a50360af4b2a862ef->enter($__internal_743c23e2c6c2085e0376de38e9f19f353e10af44d77dc11a50360af4b2a862ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_f131e5e67e139273d705e471fa59eb3f7af02d81d56ca816f52ff7fc2c30cc41 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f131e5e67e139273d705e471fa59eb3f7af02d81d56ca816f52ff7fc2c30cc41->enter($__internal_f131e5e67e139273d705e471fa59eb3f7af02d81d56ca816f52ff7fc2c30cc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_743c23e2c6c2085e0376de38e9f19f353e10af44d77dc11a50360af4b2a862ef->leave($__internal_743c23e2c6c2085e0376de38e9f19f353e10af44d77dc11a50360af4b2a862ef_prof);

        
        $__internal_f131e5e67e139273d705e471fa59eb3f7af02d81d56ca816f52ff7fc2c30cc41->leave($__internal_f131e5e67e139273d705e471fa59eb3f7af02d81d56ca816f52ff7fc2c30cc41_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_51ca25425f493eb482285e3e7388abeaa15db8ec6dc56201bfe607d4fc088d20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51ca25425f493eb482285e3e7388abeaa15db8ec6dc56201bfe607d4fc088d20->enter($__internal_51ca25425f493eb482285e3e7388abeaa15db8ec6dc56201bfe607d4fc088d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2c9d57f72ce4d5ed6574f459d3049f444dccda83a45157541ae148dd64dae0e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9d57f72ce4d5ed6574f459d3049f444dccda83a45157541ae148dd64dae0e1->enter($__internal_2c9d57f72ce4d5ed6574f459d3049f444dccda83a45157541ae148dd64dae0e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_2c9d57f72ce4d5ed6574f459d3049f444dccda83a45157541ae148dd64dae0e1->leave($__internal_2c9d57f72ce4d5ed6574f459d3049f444dccda83a45157541ae148dd64dae0e1_prof);

        
        $__internal_51ca25425f493eb482285e3e7388abeaa15db8ec6dc56201bfe607d4fc088d20->leave($__internal_51ca25425f493eb482285e3e7388abeaa15db8ec6dc56201bfe607d4fc088d20_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/workspace/asignaciones/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
