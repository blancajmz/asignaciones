<?php

/* BIJIUserBundle:Task:edit.html.twig */
class __TwigTemplate_c3548e34f844eb8c6aef69d525fb0413cedb5e4d0269bf314b0cd6510967afde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Task:edit.html.twig", 1);
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
        $__internal_339add711124e17e1b3f105f2cb0593dac6f9e3b28982c76b3fde90f005eccea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_339add711124e17e1b3f105f2cb0593dac6f9e3b28982c76b3fde90f005eccea->enter($__internal_339add711124e17e1b3f105f2cb0593dac6f9e3b28982c76b3fde90f005eccea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:edit.html.twig"));

        $__internal_65895bc9fbba1def85ece7e6c249b53608f4ed9cc8c568dd5a9366aefc1b1001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65895bc9fbba1def85ece7e6c249b53608f4ed9cc8c568dd5a9366aefc1b1001->enter($__internal_65895bc9fbba1def85ece7e6c249b53608f4ed9cc8c568dd5a9366aefc1b1001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_339add711124e17e1b3f105f2cb0593dac6f9e3b28982c76b3fde90f005eccea->leave($__internal_339add711124e17e1b3f105f2cb0593dac6f9e3b28982c76b3fde90f005eccea_prof);

        
        $__internal_65895bc9fbba1def85ece7e6c249b53608f4ed9cc8c568dd5a9366aefc1b1001->leave($__internal_65895bc9fbba1def85ece7e6c249b53608f4ed9cc8c568dd5a9366aefc1b1001_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c1c8ff7deb6db93ce149f0fd5e3fad8e3299728b5997150e9bc1d2e6a6a6a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1c8ff7deb6db93ce149f0fd5e3fad8e3299728b5997150e9bc1d2e6a6a6a1e->enter($__internal_5c1c8ff7deb6db93ce149f0fd5e3fad8e3299728b5997150e9bc1d2e6a6a6a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f599256d6cbd510d8e44011d6124a5e1764b8aab6ef9e92ec0c563793fea646d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f599256d6cbd510d8e44011d6124a5e1764b8aab6ef9e92ec0c563793fea646d->enter($__internal_f599256d6cbd510d8e44011d6124a5e1764b8aab6ef9e92ec0c563793fea646d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "BIJIUserBundle:Task:messages/success.html.twig");
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit task"), "html", null, true);
        echo "</h2>
                </div>
                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                <h4 class=\"text-danger\">";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "</h4>

                <fieldset>
                    <div class=\"form-group\">
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label');
        echo "
                        ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task title")));
        echo "
                        <span class=\"text-danger\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label');
        echo "
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        <span class=\"text-danger\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'errors');
        echo "</span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task description")));
        echo "
                        <span class=\"text-danger\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
                    </div>
                </fieldset>

                <p>
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Update task"), "attr" => array("class" => "btn btn-success")));
        echo "
                </p>

                ";
        // line 39
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_f599256d6cbd510d8e44011d6124a5e1764b8aab6ef9e92ec0c563793fea646d->leave($__internal_f599256d6cbd510d8e44011d6124a5e1764b8aab6ef9e92ec0c563793fea646d_prof);

        
        $__internal_5c1c8ff7deb6db93ce149f0fd5e3fad8e3299728b5997150e9bc1d2e6a6a6a1e->leave($__internal_5c1c8ff7deb6db93ce149f0fd5e3fad8e3299728b5997150e9bc1d2e6a6a6a1e_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 39,  124 => 36,  116 => 31,  112 => 30,  108 => 29,  101 => 25,  97 => 24,  93 => 23,  86 => 19,  82 => 18,  78 => 17,  71 => 13,  67 => 12,  62 => 10,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{{ 'Edit task'|trans }}</h2>
                </div>
                {{ form_start(form, {'attr': {'novalidate': 'novalidate', 'role' : 'form'}}) }}
                <h4 class=\"text-danger\">{{ form_errors(form) }}</h4>

                <fieldset>
                    <div class=\"form-group\">
                        {{ form_label(form.title) }}
                        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Task title'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.title) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.user) }}</span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Task description'}}) }}
                        <span class=\"text-danger\">{{ form_errors(form.description) }}</span>
                    </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Update task'|trans, 'attr': {'class': 'btn btn-success'}}) }}
                </p>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "BIJIUserBundle:Task:edit.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/edit.html.twig");
    }
}
