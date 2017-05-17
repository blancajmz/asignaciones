<?php

/* BIJIUserBundle:Task:index.html.twig */
class __TwigTemplate_5d9afe38aeaeb92c1b600f7e884bb91eb80b074393057b52c0cf4ebb00eff933 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Task:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4002af0640cbc8a52c64751000068ccb47cc3f957a230e50c4e0c74110c8e7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4002af0640cbc8a52c64751000068ccb47cc3f957a230e50c4e0c74110c8e7b->enter($__internal_c4002af0640cbc8a52c64751000068ccb47cc3f957a230e50c4e0c74110c8e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:index.html.twig"));

        $__internal_a12de395f8701d87a46d29c37038dd5a2b61051ab517715b5b81510b44063578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12de395f8701d87a46d29c37038dd5a2b61051ab517715b5b81510b44063578->enter($__internal_a12de395f8701d87a46d29c37038dd5a2b61051ab517715b5b81510b44063578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4002af0640cbc8a52c64751000068ccb47cc3f957a230e50c4e0c74110c8e7b->leave($__internal_c4002af0640cbc8a52c64751000068ccb47cc3f957a230e50c4e0c74110c8e7b_prof);

        
        $__internal_a12de395f8701d87a46d29c37038dd5a2b61051ab517715b5b81510b44063578->leave($__internal_a12de395f8701d87a46d29c37038dd5a2b61051ab517715b5b81510b44063578_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4185246cc8f634757aacc94a93b2dfd0ce599e5acb68e0125ef15712798b1135 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4185246cc8f634757aacc94a93b2dfd0ce599e5acb68e0125ef15712798b1135->enter($__internal_4185246cc8f634757aacc94a93b2dfd0ce599e5acb68e0125ef15712798b1135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f3864a4d2b2b5e1e5c43771b398063181dee686808602c33d3c6e1903ecaabc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f3864a4d2b2b5e1e5c43771b398063181dee686808602c33d3c6e1903ecaabc->enter($__internal_1f3864a4d2b2b5e1e5c43771b398063181dee686808602c33d3c6e1903ecaabc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "BIJIUserBundle:Task:messages/success.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
        echo "</h2>
            </div>
            <div class=\"table-responsive\">
                <p>
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " </span>
                </p>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "t.title");
        echo "</th>
                        <th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "t.createdAt");
        echo "</th>
                        <th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
                        <th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "t.status");
        echo "</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "                        <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "\">
                            <td>
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "fullName", array()), "html", null, true);
            echo "</td>
                            <td>
                                ";
            // line 35
            if (($this->getAttribute($context["task"], "status", array()) == 0)) {
                // line 36
                echo "                                    <span class=\"glyphicon glyphicon-time text-danger\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Waiting", array(), "messages");
                echo "\" id=\"glyphicon-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"></span>
                                ";
            } elseif (($this->getAttribute(            // line 37
$context["task"], "status", array()) == 1)) {
                // line 38
                echo "                                    <span class=\"glyphicon glyphicon-ok text-success\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Finish", array(), "messages");
                echo "\"></span>
                                ";
            }
            // line 40
            echo "                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                    </tbody>
                </table>
                ";
        // line 46
        echo "                <div class=\"navigation\">
                    ";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1f3864a4d2b2b5e1e5c43771b398063181dee686808602c33d3c6e1903ecaabc->leave($__internal_1f3864a4d2b2b5e1e5c43771b398063181dee686808602c33d3c6e1903ecaabc_prof);

        
        $__internal_4185246cc8f634757aacc94a93b2dfd0ce599e5acb68e0125ef15712798b1135->leave($__internal_4185246cc8f634757aacc94a93b2dfd0ce599e5acb68e0125ef15712798b1135_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 47,  154 => 46,  150 => 43,  142 => 40,  136 => 38,  134 => 37,  127 => 36,  125 => 35,  120 => 33,  116 => 32,  109 => 30,  103 => 28,  99 => 27,  92 => 23,  88 => 22,  84 => 21,  80 => 20,  70 => 15,  63 => 11,  55 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}

    {{ include('BIJIUserBundle:Task:messages/success.html.twig') }}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{% trans %}Tasks{% endtrans %}</h2>
            </div>
            <div class=\"table-responsive\">
                <p>
                    {% trans %}Total records: {% endtrans %} <span id=\"total\"> {{ pagination.getTotalItemCount }} </span>
                </p>
                <table class=\"table table-striped table-hover\">
                    <thead>
                    <tr>
                        <th>{{ knp_pagination_sortable(pagination, 'Title'|trans, 't.title') }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Date'|trans, 't.createdAt') }}</th>
                        <th>{{ 'User'|trans }}</th>
                        <th>{{ knp_pagination_sortable(pagination, 'Status'|trans, 't.status') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for task in pagination %}
                        <tr data-id=\"{{ task.id }}\">
                            <td>
                                <a href=\"{{ path('biji_task_view', {id: task.id}) }}\">{{ task.title }}</a>
                            </td>
                            <td>{{ task.createdAt|date('d-m-Y H:i') }}</td>
                            <td>{{ task.user.fullName }}</td>
                            <td>
                                {% if task.status == 0 %}
                                    <span class=\"glyphicon glyphicon-time text-danger\" title=\"{% trans %}Waiting{% endtrans %}\" id=\"glyphicon-{{task.id}}\"></span>
                                {% elseif task.status == 1 %}
                                    <span class=\"glyphicon glyphicon-ok text-success\" title=\"{% trans %}Finish{% endtrans %}\"></span>
                                {% endif %}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "BIJIUserBundle:Task:index.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/index.html.twig");
    }
}
