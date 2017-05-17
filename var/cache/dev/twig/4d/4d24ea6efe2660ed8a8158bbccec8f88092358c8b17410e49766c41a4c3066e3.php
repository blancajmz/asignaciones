<?php

/* BIJIUserBundle:User:view.html.twig */
class __TwigTemplate_d2eb3a4454d14964b483565184dbcd2c1b0c1b43c661228f1fb1c144ef5b0068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:User:view.html.twig", 1);
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
        $__internal_51aa170a13f492c6a80b6a350cf51fa96e6978344f7f71028ab6efa9a9fe47a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51aa170a13f492c6a80b6a350cf51fa96e6978344f7f71028ab6efa9a9fe47a9->enter($__internal_51aa170a13f492c6a80b6a350cf51fa96e6978344f7f71028ab6efa9a9fe47a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:view.html.twig"));

        $__internal_d50eaa7d48909b9f599c695a2655b44dc8d7105ddeb9f310ee7ca4eb249c3dea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50eaa7d48909b9f599c695a2655b44dc8d7105ddeb9f310ee7ca4eb249c3dea->enter($__internal_d50eaa7d48909b9f599c695a2655b44dc8d7105ddeb9f310ee7ca4eb249c3dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51aa170a13f492c6a80b6a350cf51fa96e6978344f7f71028ab6efa9a9fe47a9->leave($__internal_51aa170a13f492c6a80b6a350cf51fa96e6978344f7f71028ab6efa9a9fe47a9_prof);

        
        $__internal_d50eaa7d48909b9f599c695a2655b44dc8d7105ddeb9f310ee7ca4eb249c3dea->leave($__internal_d50eaa7d48909b9f599c695a2655b44dc8d7105ddeb9f310ee7ca4eb249c3dea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_34c2b5e0d50c1a0fb77803414fc1f91022d8f8c01f1f8ac16b2c590117e77a0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34c2b5e0d50c1a0fb77803414fc1f91022d8f8c01f1f8ac16b2c590117e77a0e->enter($__internal_34c2b5e0d50c1a0fb77803414fc1f91022d8f8c01f1f8ac16b2c590117e77a0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_53392d2b8ccfdb3ff79d42afae99823a3fd80c7229535615efc888569dbc8389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53392d2b8ccfdb3ff79d42afae99823a3fd80c7229535615efc888569dbc8389->enter($__internal_53392d2b8ccfdb3ff79d42afae99823a3fd80c7229535615efc888569dbc8389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "lastName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 40
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "role", array()) == "ROLE_ADMIN")) {
            // line 41
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
            // line 42
            echo "                    ";
        } elseif (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "role", array()) == "ROLE_USER")) {
            // line 43
            echo "                        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
            // line 44
            echo "                    ";
        }
        // line 45
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Active"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 51
        if (($this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "isActive", array()) == 1)) {
            // line 52
            echo "                        <span class=\"text-success\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Enabled", array(), "messages");
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 53
($context["user"] ?? $this->getContext($context, "user")), "isActive", array()) == 0)) {
            // line 54
            echo "                        <span class=\"text-warning\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Disabled", array(), "messages");
            echo "</span>
                    ";
        }
        // line 56
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 62
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 69
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
        echo ":</h3>
            <p>
                <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_edit", array("id" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    ";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit user"), "html", null, true);
        echo "
                </a>
            </p>
            <p>
                ";
        // line 84
        echo twig_include($this->env, $context, "BIJIUserBundle:User:forms/form.html.twig", array("form" => ($context["delete_form"] ?? $this->getContext($context, "delete_form")), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?")));
        echo "
            </p>
        </div>
    </div>
";
        
        $__internal_53392d2b8ccfdb3ff79d42afae99823a3fd80c7229535615efc888569dbc8389->leave($__internal_53392d2b8ccfdb3ff79d42afae99823a3fd80c7229535615efc888569dbc8389_prof);

        
        $__internal_34c2b5e0d50c1a0fb77803414fc1f91022d8f8c01f1f8ac16b2c590117e77a0e->leave($__internal_34c2b5e0d50c1a0fb77803414fc1f91022d8f8c01f1f8ac16b2c590117e77a0e_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 84,  205 => 80,  200 => 78,  195 => 76,  185 => 69,  180 => 67,  172 => 62,  167 => 60,  161 => 56,  155 => 54,  153 => 53,  148 => 52,  146 => 51,  141 => 49,  135 => 45,  132 => 44,  129 => 43,  126 => 42,  123 => 41,  121 => 40,  116 => 38,  108 => 33,  103 => 31,  95 => 26,  90 => 24,  82 => 19,  77 => 17,  69 => 12,  64 => 10,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>{{ user.firstName }} {{ user.lastName }}</h2>
            <br>
            <dl>
                <dt>{{'Username'|trans}}</dt>
                <dd>
                    {{ user.username }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'First name'|trans}}</dt>
                <dd>
                    {{ user.firstName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Last name'|trans}}</dt>
                <dd>
                    {{ user.lastName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Email'|trans}}</dt>
                <dd>
                    {{ user.email }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Role'|trans}}</dt>
                <dd>
                    {% if user.role == 'ROLE_ADMIN' %}
                        {% trans %}Administrator{% endtrans %}
                    {% elseif user.role == 'ROLE_USER' %}
                        {% trans %}User{% endtrans %}
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Active'|trans}}</dt>
                <dd>
                    {% if user.isActive == 1 %}
                        <span class=\"text-success\">{% trans %}Enabled{% endtrans %}</span>
                    {% elseif user.isActive == 0 %}
                        <span class=\"text-warning\">{% trans %}Disabled{% endtrans %}</span>
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Created'|trans}}</dt>
                <dd>
                    {{ user.createdAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{'Updated'|trans}}</dt>
                <dd>
                    {{ user.updatedAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        <div class=\"col-md-3\">
            <h3>{{ 'Actions'|trans }}:</h3>
            <p>
                <a href=\"{{ path('biji_user_edit', { id: user.id }) }}\" class=\"btn btn-primary btn-lg btn-block\">
                    <span class=\"glyphicon glyphicon-edit\"></span>
                    {{ 'Edit user'|trans }}
                </a>
            </p>
            <p>
                {{ include('BIJIUserBundle:User:forms/form.html.twig', { form: delete_form, message: 'Are you sure ?'|trans}) }}
            </p>
        </div>
    </div>
{% endblock %}", "BIJIUserBundle:User:view.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/view.html.twig");
    }
}
