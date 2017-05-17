<?php

/* BIJIUserBundle:Task:add.html.twig */
class __TwigTemplate_219fbfd027d43dd79a704a72e4f70fa6db70ddb8c4bb83f450f6e5196b3e1c6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Task:add.html.twig", 1);
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
        $__internal_188e67cb9f93c8902c3ba608799f320104c5ab8fa433257650e64e3a6a385e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188e67cb9f93c8902c3ba608799f320104c5ab8fa433257650e64e3a6a385e74->enter($__internal_188e67cb9f93c8902c3ba608799f320104c5ab8fa433257650e64e3a6a385e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:add.html.twig"));

        $__internal_5a6e9c79431eea2814ce3069cf5429cbd415c1883985597b13d714290e52a8e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6e9c79431eea2814ce3069cf5429cbd415c1883985597b13d714290e52a8e4->enter($__internal_5a6e9c79431eea2814ce3069cf5429cbd415c1883985597b13d714290e52a8e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Task:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_188e67cb9f93c8902c3ba608799f320104c5ab8fa433257650e64e3a6a385e74->leave($__internal_188e67cb9f93c8902c3ba608799f320104c5ab8fa433257650e64e3a6a385e74_prof);

        
        $__internal_5a6e9c79431eea2814ce3069cf5429cbd415c1883985597b13d714290e52a8e4->leave($__internal_5a6e9c79431eea2814ce3069cf5429cbd415c1883985597b13d714290e52a8e4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7d05e8f6a1dd20966bc09925ff561658ecf655c028fd14d8c244874868a6e11f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d05e8f6a1dd20966bc09925ff561658ecf655c028fd14d8c244874868a6e11f->enter($__internal_7d05e8f6a1dd20966bc09925ff561658ecf655c028fd14d8c244874868a6e11f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0466d6b8d2e32168cfc873429a57e768b90af4142d9ef210d3c94e360b79587b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0466d6b8d2e32168cfc873429a57e768b90af4142d9ef210d3c94e360b79587b->enter($__internal_0466d6b8d2e32168cfc873429a57e768b90af4142d9ef210d3c94e360b79587b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New Task", array(), "messages");
        echo "</h2>
                </div>
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("role" => "form")));
        echo "
                <fieldset>
                    <div class=\"form-group\">
                        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'label');
        echo "
                        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task title")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'label');
        echo "
                        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'label');
        echo "
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task description")));
        echo "
                    </div>
                </fieldset>

                <p>
                    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create task", "attr" => array("class" => "btn btn-success")));
        echo "
                </p>

                ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_0466d6b8d2e32168cfc873429a57e768b90af4142d9ef210d3c94e360b79587b->leave($__internal_0466d6b8d2e32168cfc873429a57e768b90af4142d9ef210d3c94e360b79587b_prof);

        
        $__internal_7d05e8f6a1dd20966bc09925ff561658ecf655c028fd14d8c244874868a6e11f->leave($__internal_7d05e8f6a1dd20966bc09925ff561658ecf655c028fd14d8c244874868a6e11f_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Task:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 33,  103 => 30,  95 => 25,  91 => 24,  84 => 20,  80 => 19,  73 => 15,  69 => 14,  63 => 11,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{% trans %}New Task{% endtrans %}</h2>
                </div>
                {{ form_start(form, {'attr': {'role' : 'form'}}) }}
                <fieldset>
                    <div class=\"form-group\">
                        {{ form_label(form.title) }}
                        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Task title'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.user) }}
                        {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
                    </div>

                    <div class=\"form-group\">
                        {{ form_label(form.description) }}
                        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Task description'}}) }}
                    </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Create task', 'attr': {'class': 'btn btn-success'}}) }}
                </p>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "BIJIUserBundle:Task:add.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Task/add.html.twig");
    }
}
