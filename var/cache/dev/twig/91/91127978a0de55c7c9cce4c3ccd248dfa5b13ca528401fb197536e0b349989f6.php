<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_718e790f9b5ad1903e5fcc3edf9b245d52d63448133c8780b056eabfd14b67b9 extends Twig_Template
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
        $__internal_801d560f85385a8cf7325e6f47b7b92341752f96f250d1f6bdd662934691c87a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_801d560f85385a8cf7325e6f47b7b92341752f96f250d1f6bdd662934691c87a->enter($__internal_801d560f85385a8cf7325e6f47b7b92341752f96f250d1f6bdd662934691c87a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        $__internal_5a8c03df5420aa8fd72715f58a4bb5b8d5cbd7a5b43caa04092308f696677344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a8c03df5420aa8fd72715f58a4bb5b8d5cbd7a5b43caa04092308f696677344->enter($__internal_5a8c03df5420aa8fd72715f58a4bb5b8d5cbd7a5b43caa04092308f696677344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["options"] ?? $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_801d560f85385a8cf7325e6f47b7b92341752f96f250d1f6bdd662934691c87a->leave($__internal_801d560f85385a8cf7325e6f47b7b92341752f96f250d1f6bdd662934691c87a_prof);

        
        $__internal_5a8c03df5420aa8fd72715f58a4bb5b8d5cbd7a5b43caa04092308f696677344->leave($__internal_5a8c03df5420aa8fd72715f58a4bb5b8d5cbd7a5b43caa04092308f696677344_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a{% for attr, value in options %} {{ attr }}=\"{{ value }}\"{% endfor %}>{{ title }}</a>
", "KnpPaginatorBundle:Pagination:sortable_link.html.twig", "/var/www/workspace/asignaciones/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/sortable_link.html.twig");
    }
}
