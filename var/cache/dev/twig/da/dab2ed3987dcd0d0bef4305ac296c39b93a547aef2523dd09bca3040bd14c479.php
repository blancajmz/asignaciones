<?php

/* BIJIUserBundle:Task:custom.html.twig */
class __TwigTemplate_d8452d8e7621ce9386fd5a65fc79a832971244daeb2c3698e8673f17148e1280 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Task:custom.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bebcb0e485ec382f1e229c49d7cb102932a5c34ba50589c70b31f228d08d741e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bebcb0e485ec382f1e229c49d7cb102932a5c34ba50589c70b31f228d08d741e->enter($__internal_bebcb0e485ec382f1e229c49d7cb102932a5c34ba50589c70b31f228d08d741e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:custom.html.twig"));

        $__internal_cf50afa6c8bbe1fb6f1516285682d9c64eff11364f5633911858c3c85201a74c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf50afa6c8bbe1fb6f1516285682d9c64eff11364f5633911858c3c85201a74c->enter($__internal_cf50afa6c8bbe1fb6f1516285682d9c64eff11364f5633911858c3c85201a74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:custom.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bebcb0e485ec382f1e229c49d7cb102932a5c34ba50589c70b31f228d08d741e->leave($__internal_bebcb0e485ec382f1e229c49d7cb102932a5c34ba50589c70b31f228d08d741e_prof);

        
        $__internal_cf50afa6c8bbe1fb6f1516285682d9c64eff11364f5633911858c3c85201a74c->leave($__internal_cf50afa6c8bbe1fb6f1516285682d9c64eff11364f5633911858c3c85201a74c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4ab98d96a3931f00b02c762078f24dc4ca8261ac8f9da2b25c80bb2e93d6f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ab98d96a3931f00b02c762078f24dc4ca8261ac8f9da2b25c80bb2e93d6f03->enter($__internal_b4ab98d96a3931f00b02c762078f24dc4ca8261ac8f9da2b25c80bb2e93d6f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_705bf9e0450b812f390abe436f9fbf7b6199cd39063b15b127c325198dae3b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705bf9e0450b812f390abe436f9fbf7b6199cd39063b15b127c325198dae3b61->enter($__internal_705bf9e0450b812f390abe436f9fbf7b6199cd39063b15b127c325198dae3b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        echo twig_include($this->env, $context, "BIJIUserBundle:Task:messages/success.html.twig");
        echo "
    ";
        // line 7
        echo twig_include($this->env, $context, "BIJIUserBundle:Task:messages/warning.html.twig");
        echo "

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Tasks"), "html", null, true);
        echo "</h2>
            </div>
            ";
        // line 14
        if ( !twig_length_filter($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")))) {
            // line 15
            echo "                <h3>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No tasks"), "html", null, true);
            echo "</h3>
            ";
        }
        // line 17
        echo "            ";
        if (twig_length_filter($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")))) {
            // line 18
            echo "                <div class=\"table-responsive\">
                    <p>
                        ";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total records:"), "html", null, true);
            echo " <span id=\"total\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
            echo " </span>
                    </p>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>";
            // line 25
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "t.title");
            echo "</th>
                            <th>";
            // line 26
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "t.createdAt");
            echo "</th>
                            <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "</th>
                            <th>";
            // line 28
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "t.status");
            echo "</th>
                            <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                // line 34
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\">
                                <td>
                                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                echo "</a>
                                </td>
                                <td>";
                // line 38
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "lastName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 41
                if (($this->getAttribute($context["task"], "status", array()) == 0)) {
                    // line 42
                    echo "                                        <span class=\"glyphicon glyphicon-time text-danger\" title=\"Waiting\" id=\"glyphicon-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                    echo "\"></span>
                                    ";
                } elseif (($this->getAttribute(                // line 43
$context["task"], "status", array()) == 1)) {
                    // line 44
                    echo "                                        <span class=\"glyphicon glyphicon-ok text-success\" title=\"Finish\"></span>
                                    ";
                }
                // line 46
                echo "                                </td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success btn-process\" id=\"button-";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\">
                                        ";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Finish"), "html", null, true);
                echo "
                                    </a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "                        </tbody>
                    </table>
                    ";
            // line 57
            echo "                    <div class=\"navigation\">
                        ";
            // line 58
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
            echo "
                    </div>
                </div>
            ";
        }
        // line 62
        echo "        </div>
    </div>

    ";
        // line 65
        echo twig_include($this->env, $context, "BIJIUserBundle:User:forms/form.html.twig", array("form" => ($context["update_form"] ?? $this->getContext($context, "update_form")), "id" => "form-update", "with_submit" => false, "message" => null));
        echo "

";
        
        $__internal_705bf9e0450b812f390abe436f9fbf7b6199cd39063b15b127c325198dae3b61->leave($__internal_705bf9e0450b812f390abe436f9fbf7b6199cd39063b15b127c325198dae3b61_prof);

        
        $__internal_b4ab98d96a3931f00b02c762078f24dc4ca8261ac8f9da2b25c80bb2e93d6f03->leave($__internal_b4ab98d96a3931f00b02c762078f24dc4ca8261ac8f9da2b25c80bb2e93d6f03_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1bdf106af31c1c94b9561cc25fa13bddc02e18383b8b4a725aaa2f14268457e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bdf106af31c1c94b9561cc25fa13bddc02e18383b8b4a725aaa2f14268457e2->enter($__internal_1bdf106af31c1c94b9561cc25fa13bddc02e18383b8b4a725aaa2f14268457e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_633a63f44d47e3ba2f3092050b5dd64469e05e47b1b5786ef586b9a1b2920c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a63f44d47e3ba2f3092050b5dd64469e05e47b1b5786ef586b9a1b2920c6b->enter($__internal_633a63f44d47e3ba2f3092050b5dd64469e05e47b1b5786ef586b9a1b2920c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bijiuser/js/task-process.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_633a63f44d47e3ba2f3092050b5dd64469e05e47b1b5786ef586b9a1b2920c6b->leave($__internal_633a63f44d47e3ba2f3092050b5dd64469e05e47b1b5786ef586b9a1b2920c6b_prof);

        
        $__internal_1bdf106af31c1c94b9561cc25fa13bddc02e18383b8b4a725aaa2f14268457e2->leave($__internal_1bdf106af31c1c94b9561cc25fa13bddc02e18383b8b4a725aaa2f14268457e2_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:custom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 71,  222 => 70,  213 => 69,  200 => 65,  195 => 62,  188 => 58,  185 => 57,  181 => 54,  170 => 49,  166 => 48,  162 => 46,  158 => 44,  156 => 43,  151 => 42,  149 => 41,  142 => 39,  138 => 38,  131 => 36,  125 => 34,  121 => 33,  114 => 29,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  88 => 20,  84 => 18,  81 => 17,  75 => 15,  73 => 14,  68 => 12,  60 => 7,  56 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    {{ include('BIJIUserBundle:Task:messages/warning.html.twig') }}

    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"page-header margin-none\">
                <h2 class=\"padding-none\">{{ 'Tasks'|trans }}</h2>
            </div>
            {% if not pagination|length %}
                <h3>{{ 'No tasks'|trans }}</h3>
            {% endif %}
            {% if pagination|length %}
                <div class=\"table-responsive\">
                    <p>
                        {{ 'Total records:'|trans }} <span id=\"total\"> {{ pagination.getTotalItemCount }} </span>
                    </p>
                    <table class=\"table table-striped table-hover\">
                        <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Title'|trans, 't.title') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Date'|trans, 't.createdAt') }}</th>
                            <th>{{ 'User'|trans }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Status'|trans, 't.status') }}</th>
                            <th>{{ 'Actions'|trans }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for task in pagination %}
                            <tr data-id=\"{{ task.id }}\">
                                <td>
                                    <a href=\"{{ path('biji_task_view', { id: task.id }) }}\">{{ task.title }}</a>
                                </td>
                                <td>{{ task.createdAt|date('d-m-Y H:i') }}</td>
                                <td>{{ task.user.firstName }} {{ task.user.lastName }}</td>
                                <td>
                                    {% if task.status == 0 %}
                                        <span class=\"glyphicon glyphicon-time text-danger\" title=\"Waiting\" id=\"glyphicon-{{task.id}}\"></span>
                                    {% elseif task.status == 1 %}
                                        <span class=\"glyphicon glyphicon-ok text-success\" title=\"Finish\"></span>
                                    {% endif %}
                                </td>
                                <td class=\"actions\">
                                    <a href=\"#\" class=\"btn btn-sm btn-success btn-process\" id=\"button-{{ task.id }}\">
                                        {{ 'Finish'|trans }}
                                    </a>
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
            {% endif %}
        </div>
    </div>

    {{ include('BIJIUserBundle:User:forms/form.html.twig', {form: update_form, id: 'form-update', with_submit: false, message: null}) }}

{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('bundles/bijiuser/js/task-process.js') }}\"></script>
{% endblock %}", "BIJIUserBundle:Task:custom.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/custom.html.twig");
    }
}
