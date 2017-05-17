<?php

/* BIJIUserBundle:Task:view.html.twig */
class __TwigTemplate_a3e3016cfcafabe5a26d0ef2b5c4d811d7eeb0a4e19be2f25db9c0c6ef503aea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Task:view.html.twig", 1);
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
        $__internal_2984ee73d12847ee16beef3b1cbda5ddf744f71f95dece1bf75fcf6b5fa3a692 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2984ee73d12847ee16beef3b1cbda5ddf744f71f95dece1bf75fcf6b5fa3a692->enter($__internal_2984ee73d12847ee16beef3b1cbda5ddf744f71f95dece1bf75fcf6b5fa3a692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:view.html.twig"));

        $__internal_5b686aaa5ad28cf27385ec3d061da462f2281b2d7a77a1428b188fd0247e73e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b686aaa5ad28cf27385ec3d061da462f2281b2d7a77a1428b188fd0247e73e7->enter($__internal_5b686aaa5ad28cf27385ec3d061da462f2281b2d7a77a1428b188fd0247e73e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2984ee73d12847ee16beef3b1cbda5ddf744f71f95dece1bf75fcf6b5fa3a692->leave($__internal_2984ee73d12847ee16beef3b1cbda5ddf744f71f95dece1bf75fcf6b5fa3a692_prof);

        
        $__internal_5b686aaa5ad28cf27385ec3d061da462f2281b2d7a77a1428b188fd0247e73e7->leave($__internal_5b686aaa5ad28cf27385ec3d061da462f2281b2d7a77a1428b188fd0247e73e7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e63731eb26e4b608a6bbe340fc88260667c4c0755ed2b4b83b76d6818804fbe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63731eb26e4b608a6bbe340fc88260667c4c0755ed2b4b83b76d6818804fbe7->enter($__internal_e63731eb26e4b608a6bbe340fc88260667c4c0755ed2b4b83b76d6818804fbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1c6f3677845bf1a370dd025f2e22ffd1adc07cfb36d0a333b88628cc2b0cab2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6f3677845bf1a370dd025f2e22ffd1adc07cfb36d0a333b88628cc2b0cab2a->enter($__internal_1c6f3677845bf1a370dd025f2e22ffd1adc07cfb36d0a333b88628cc2b0cab2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"container well\">
        <div class=\"col-md-9\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "title", array()), "html", null, true);
        echo "</h2>
            <br>
            <dl>
                <dt>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Description"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "description", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "fullName", array()), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 26
        if (($this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "status", array()) == 0)) {
            // line 27
            echo "                        <span class=\"text-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Waiting"), "html", null, true);
            echo "</span>
                    ";
        } elseif (($this->getAttribute(        // line 28
($context["task"] ?? $this->getContext($context, "task")), "status", array()) == 1)) {
            // line 29
            echo "                        <span class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Finish"), "html", null, true);
            echo "</span>
                    ";
        }
        // line 31
        echo "                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "createdAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>

                <dt>";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "html", null, true);
        echo "</dt>
                <dd>
                    ";
        // line 44
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
        echo "
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        ";
        // line 50
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 51
            echo "            <div class=\"col-md-3\">
                <h3>";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo ":</h3>
                <p>
                    <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_edit", array("id" => $this->getAttribute(($context["task"] ?? $this->getContext($context, "task")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg btn-block\">
                        <span class=\"glyphicon glyphicon-edit\"></span>
                        ";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit task"), "html", null, true);
            echo "
                    </a>
                </p>
                <p>
                    ";
            // line 60
            echo twig_include($this->env, $context, "BIJIUserBundle:Task:forms/form.html.twig", array("form" => ($context["delete_form"] ?? $this->getContext($context, "delete_form")), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?")));
            echo "
                </p>
            </div>
        ";
        }
        // line 64
        echo "    </div>
";
        
        $__internal_1c6f3677845bf1a370dd025f2e22ffd1adc07cfb36d0a333b88628cc2b0cab2a->leave($__internal_1c6f3677845bf1a370dd025f2e22ffd1adc07cfb36d0a333b88628cc2b0cab2a_prof);

        
        $__internal_e63731eb26e4b608a6bbe340fc88260667c4c0755ed2b4b83b76d6818804fbe7->leave($__internal_e63731eb26e4b608a6bbe340fc88260667c4c0755ed2b4b83b76d6818804fbe7_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 64,  163 => 60,  156 => 56,  151 => 54,  146 => 52,  143 => 51,  141 => 50,  132 => 44,  127 => 42,  119 => 37,  114 => 35,  108 => 31,  102 => 29,  100 => 28,  95 => 27,  93 => 26,  88 => 24,  80 => 19,  75 => 17,  67 => 12,  62 => 10,  56 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
            <h2>{{ task.title }}</h2>
            <br>
            <dl>
                <dt>{{ 'Description'|trans }}</dt>
                <dd>
                    {{ task.description }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'User'|trans }}</dt>
                <dd>
                    {{ user.fullName }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Status'|trans }}</dt>
                <dd>
                    {% if task.status == 0 %}
                        <span class=\"text-danger\">{{ 'Waiting'|trans }}</span>
                    {% elseif task.status == 1 %}
                        <span class=\"text-success\">{{ 'Finish'|trans }}</span>
                    {% endif %}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Created'|trans }}</dt>
                <dd>
                    {{ task.createdAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>

                <dt>{{ 'Updated'|trans }}</dt>
                <dd>
                    {{ task.updatedAt|date('d-m-Y H:i') }}
                    &nbsp;
                </dd>
                <br>
            </dl>
        </div>
        {% if is_granted('ROLE_ADMIN') %}
            <div class=\"col-md-3\">
                <h3>{{ 'Actions'|trans }}:</h3>
                <p>
                    <a href=\"{{ path('biji_task_edit', {id: task.id}) }}\" class=\"btn btn-primary btn-lg btn-block\">
                        <span class=\"glyphicon glyphicon-edit\"></span>
                        {{ 'Edit task'|trans }}
                    </a>
                </p>
                <p>
                    {{ include('BIJIUserBundle:Task:forms/form.html.twig', { form: delete_form, message: 'Are you sure ?'|trans }) }}
                </p>
            </div>
        {% endif %}
    </div>
{% endblock %}", "BIJIUserBundle:Task:view.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/view.html.twig");
    }
}
