<?php

/* BIJIUserBundle:User:index.html.twig */
class __TwigTemplate_3261711091bc553238d506b29f7b54f66bf682107ee0073decb1d036cb4f9e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:User:index.html.twig", 1);
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
        $__internal_5e25911944f706627a0976f7df9927d0bae35ff0e4d548f1bb79205870827ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e25911944f706627a0976f7df9927d0bae35ff0e4d548f1bb79205870827ab0->enter($__internal_5e25911944f706627a0976f7df9927d0bae35ff0e4d548f1bb79205870827ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:index.html.twig"));

        $__internal_adb8c30d836e1fa40305cafdb6a1e8766a019ddbe4c8288101e2a089ad889b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb8c30d836e1fa40305cafdb6a1e8766a019ddbe4c8288101e2a089ad889b30->enter($__internal_adb8c30d836e1fa40305cafdb6a1e8766a019ddbe4c8288101e2a089ad889b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e25911944f706627a0976f7df9927d0bae35ff0e4d548f1bb79205870827ab0->leave($__internal_5e25911944f706627a0976f7df9927d0bae35ff0e4d548f1bb79205870827ab0_prof);

        
        $__internal_adb8c30d836e1fa40305cafdb6a1e8766a019ddbe4c8288101e2a089ad889b30->leave($__internal_adb8c30d836e1fa40305cafdb6a1e8766a019ddbe4c8288101e2a089ad889b30_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d9c56c1d51c819e8cbcabb97e6c4993a12a238e76dbec21716058c8d0d35e813 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9c56c1d51c819e8cbcabb97e6c4993a12a238e76dbec21716058c8d0d35e813->enter($__internal_d9c56c1d51c819e8cbcabb97e6c4993a12a238e76dbec21716058c8d0d35e813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_660935b738ce7556b9b2e77caf59073847d9ecf91093b759a209bc53370cd07f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_660935b738ce7556b9b2e77caf59073847d9ecf91093b759a209bc53370cd07f->enter($__internal_660935b738ce7556b9b2e77caf59073847d9ecf91093b759a209bc53370cd07f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    ";
        // line 6
        echo "    <div class=\"progress no-border hidden\" id=\"delete-progress\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>

    ";
        // line 12
        echo twig_include($this->env, $context, "BIJIUserBundle:User:messages/success.html.twig");
        echo "
    ";
        // line 13
        echo twig_include($this->env, $context, "BIJIUserBundle:User:messages/danger.html.twig");
        echo "
<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"page-header margin-none\">
            <h2 class=\"padding-none\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
        echo "</h2>
        </div>
        <div class=\"table-responsive\">
            <p>
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pagination"] ?? $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
            </p>

            <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"query\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search user"), "html", null, true);
        echo "\" required />
                </div>
                <input type=\"submit\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "\" class=\"btn btn-default\">
            </form><br>
            ";
        // line 30
        if ( !twig_length_filter($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")))) {
            // line 31
            echo "                <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No search results"), "html", null, true);
            echo "</h2>
            ";
        }
        // line 33
        echo "            ";
        if (twig_length_filter($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")))) {
            // line 34
            echo "                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>";
            // line 37
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
            echo "</th>
                            <th>";
            // line 38
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
            echo "</th>
                            <th>";
            // line 39
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
            echo "</th>
                            <th>";
            // line 40
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
            echo "</th>
                            <th>";
            // line 41
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
            echo "</th>
                            <th>";
            // line 42
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "u.createdAt");
            echo "</th>
                            <th>";
            // line 43
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "u.updatedAt");
            echo "</th>
                            <th>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 49
                echo "                        <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                            <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 55
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 56
                    echo "                                    <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                    echo "</strong>
                                ";
                } elseif (($this->getAttribute(                // line 57
$context["user"], "role", array()) == "ROLE_USER")) {
                    // line 58
                    echo "                                    <strong>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                    echo "</strong>
                                ";
                }
                // line 60
                echo "                            </td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                            <td class=\"actions\">
                                <a href=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
                                    ";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "
                                </a>

                                <a href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
                                    ";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "
                                </a>

                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    ";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "
                                </a>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                    </tbody>
                </table>
            ";
        }
        // line 81
        echo "                ";
        // line 82
        echo "                <div class=\"navigation\">
                    ";
        // line 83
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["pagination"] ?? $this->getContext($context, "pagination")));
        echo "
                </div>
        </div>
    </div>
</div>

    ";
        // line 89
        echo twig_include($this->env, $context, "BIJIUserBundle:User:forms/form.html.twig", array("form" => ($context["delete_form_ajax"] ?? $this->getContext($context, "delete_form_ajax")), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "

";
        
        $__internal_660935b738ce7556b9b2e77caf59073847d9ecf91093b759a209bc53370cd07f->leave($__internal_660935b738ce7556b9b2e77caf59073847d9ecf91093b759a209bc53370cd07f_prof);

        
        $__internal_d9c56c1d51c819e8cbcabb97e6c4993a12a238e76dbec21716058c8d0d35e813->leave($__internal_d9c56c1d51c819e8cbcabb97e6c4993a12a238e76dbec21716058c8d0d35e813_prof);

    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b18c107fbb7b7301962f813621050573e8cde2757d7acb68c2ad178eb756ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b18c107fbb7b7301962f813621050573e8cde2757d7acb68c2ad178eb756ae0->enter($__internal_2b18c107fbb7b7301962f813621050573e8cde2757d7acb68c2ad178eb756ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_8b03317a03e05adcb9cd18bdd039844917dc331d575ded14809ed9b8181e031b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b03317a03e05adcb9cd18bdd039844917dc331d575ded14809ed9b8181e031b->enter($__internal_8b03317a03e05adcb9cd18bdd039844917dc331d575ded14809ed9b8181e031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 94
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bijiuser/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_8b03317a03e05adcb9cd18bdd039844917dc331d575ded14809ed9b8181e031b->leave($__internal_8b03317a03e05adcb9cd18bdd039844917dc331d575ded14809ed9b8181e031b_prof);

        
        $__internal_2b18c107fbb7b7301962f813621050573e8cde2757d7acb68c2ad178eb756ae0->leave($__internal_2b18c107fbb7b7301962f813621050573e8cde2757d7acb68c2ad178eb756ae0_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 95,  281 => 94,  272 => 93,  259 => 89,  250 => 83,  247 => 82,  245 => 81,  240 => 78,  229 => 73,  222 => 69,  218 => 68,  212 => 65,  208 => 64,  203 => 62,  199 => 61,  196 => 60,  190 => 58,  188 => 57,  183 => 56,  181 => 55,  176 => 53,  172 => 52,  168 => 51,  164 => 50,  159 => 49,  155 => 48,  148 => 44,  144 => 43,  140 => 42,  136 => 41,  132 => 40,  128 => 39,  124 => 38,  120 => 37,  115 => 34,  112 => 33,  106 => 31,  104 => 30,  99 => 28,  92 => 26,  82 => 21,  75 => 17,  68 => 13,  64 => 12,  56 => 6,  50 => 3,  41 => 2,  11 => 1,);
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

    {# Progress bar #}
    <div class=\"progress no-border hidden\" id=\"delete-progress\">
        <div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
            <span class=\"sr-only\">Loading...</span>
        </div>
    </div>

    {{ include('BIJIUserBundle:User:messages/success.html.twig') }}
    {{ include('BIJIUserBundle:User:messages/danger.html.twig') }}
<div class=\"container\">
    <div class=\"col-md-12\">
        <div class=\"page-header margin-none\">
            <h2 class=\"padding-none\">{% trans %}Users{% endtrans %}</h2>
        </div>
        <div class=\"table-responsive\">
            <p>
            {% trans %} Total records: {% endtrans %} <span id=\"total\">{{ pagination.getTotalItemCount }}</span>
            </p>

            <form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"query\" value=\"{{ app.request.get('query') }}\" class=\"form-control\" placeholder=\"{{'Search user'|trans}}\" required />
                </div>
                <input type=\"submit\" value=\"{{ 'Search'|trans }}\" class=\"btn btn-default\">
            </form><br>
            {% if not pagination|length %}
                <h2>{{ 'No search results'|trans}}</h2>
            {% endif %}
            {% if pagination|length %}
                <table class=\"table table-striped table-hover\">
                    <thead>
                        <tr>
                            <th>{{ knp_pagination_sortable(pagination, 'Username'|trans, 'u.username') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'First name'|trans, 'u.firstName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Last name'|trans, 'u.lastName') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Email'|trans, 'u.email') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Role'|trans, 'u.role') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Created'|trans, 'u.createdAt') }}</th>
                            <th>{{ knp_pagination_sortable(pagination, 'Updated'|trans, 'u.updatedAt') }}</th>
                            <th>{{ 'Actions'|trans }}</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for user in pagination %}
                        <tr data-id=\"{{ user.id }}\">
                            <td>{{ user.username }}</td>
                            <td>{{ user.firstName }}</td>
                            <td>{{ user.lastName }}</td>
                            <td>{{ user.email }}</td>
                            <td>
                                {% if user.role == 'ROLE_ADMIN' %}
                                    <strong>{% trans %}Administrator{% endtrans %}</strong>
                                {% elseif user.role == 'ROLE_USER' %}
                                    <strong>{% trans %}User{% endtrans %}</strong>
                                {% endif %}
                            </td>
                            <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>
                            <td>{{ user.updatedAt|date('d-m-Y H:i') }}</td>
                            <td class=\"actions\">
                                <a href=\"{{ path('biji_user_view',{ id:user.id}) }}\" class=\"btn btn-sm btn-info\">
                                    {{ 'View'|trans }}
                                </a>

                                <a href=\"{{ path('biji_user_edit',{ id:user.id}) }}\" class=\"btn btn-sm btn-primary\">
                                    {{ 'Edit'|trans }}
                                </a>

                                <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
                                    {{ 'Delete'|trans }}
                                </a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% endif %}
                {# display navigation #}
                <div class=\"navigation\">
                    {{ knp_pagination_render(pagination) }}
                </div>
        </div>
    </div>
</div>

    {{ include('BIJIUserBundle:User:forms/form.html.twig', { form: delete_form_ajax, message: 'Are you sure ?'|trans, id: 'form-delete', with_submit: false}) }}

{% endblock %}

{% block javascripts %}
    {{  parent() }}
    <script src=\"{{ asset('bundles/bijiuser/js/delete-user.js') }}\"></script>
{% endblock %}", "BIJIUserBundle:User:index.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/index.html.twig");
    }
}
