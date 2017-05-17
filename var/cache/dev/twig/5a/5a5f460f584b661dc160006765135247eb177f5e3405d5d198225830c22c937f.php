<?php

/* BIJIUserBundle:User:edit.html.twig */
class __TwigTemplate_221b2e5504e3a70c813fc28e81e4d4c6239bc04bc07f31c2033637357a1fdbef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:User:edit.html.twig", 1);
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
        $__internal_29cbc5b663299014cef428cb95d5b92b302385d9bd9d24d3fe26f646fe4369d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29cbc5b663299014cef428cb95d5b92b302385d9bd9d24d3fe26f646fe4369d1->enter($__internal_29cbc5b663299014cef428cb95d5b92b302385d9bd9d24d3fe26f646fe4369d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:edit.html.twig"));

        $__internal_6645c387a82613a5e4f56f5c519a00287e68825900cc538794fcb24ff6aabc2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6645c387a82613a5e4f56f5c519a00287e68825900cc538794fcb24ff6aabc2b->enter($__internal_6645c387a82613a5e4f56f5c519a00287e68825900cc538794fcb24ff6aabc2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29cbc5b663299014cef428cb95d5b92b302385d9bd9d24d3fe26f646fe4369d1->leave($__internal_29cbc5b663299014cef428cb95d5b92b302385d9bd9d24d3fe26f646fe4369d1_prof);

        
        $__internal_6645c387a82613a5e4f56f5c519a00287e68825900cc538794fcb24ff6aabc2b->leave($__internal_6645c387a82613a5e4f56f5c519a00287e68825900cc538794fcb24ff6aabc2b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95377533fd4e9b888493047d88044aab496eda55e8f0e38187a51263ecd62713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95377533fd4e9b888493047d88044aab496eda55e8f0e38187a51263ecd62713->enter($__internal_95377533fd4e9b888493047d88044aab496eda55e8f0e38187a51263ecd62713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ac6b4d8e3819a012bf26784091c2f98a9f26d7402dfea07b3c9b3427619ebb37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac6b4d8e3819a012bf26784091c2f98a9f26d7402dfea07b3c9b3427619ebb37->enter($__internal_ac6b4d8e3819a012bf26784091c2f98a9f26d7402dfea07b3c9b3427619ebb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
        // line 5
        echo twig_include($this->env, $context, "BIJIUserBundle:User:messages/success.html.twig");
        echo "
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Edit user", array(), "messages");
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

                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your firstname")));
        echo "
                    <span class=\"text-danger\">";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your lastname")));
        echo "
                    <span class=\"text-danger\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                    <span class=\"text-danger\">";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                    <span class=\"text-danger\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your role")));
        echo "
                    <span class=\"text-danger\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
                </div>

                <div class=\"checkbox\">
                    <label>
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 54
        echo "                        <span class=\"text-danger\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
                    </label>
                </div>
                </fieldset>

                <p>
                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Update user", "attr" => array("class" => "btn btn-success")));
        echo "
                </p>

                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_ac6b4d8e3819a012bf26784091c2f98a9f26d7402dfea07b3c9b3427619ebb37->leave($__internal_ac6b4d8e3819a012bf26784091c2f98a9f26d7402dfea07b3c9b3427619ebb37_prof);

        
        $__internal_95377533fd4e9b888493047d88044aab496eda55e8f0e38187a51263ecd62713->leave($__internal_95377533fd4e9b888493047d88044aab496eda55e8f0e38187a51263ecd62713_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 63,  182 => 60,  172 => 54,  168 => 53,  160 => 48,  156 => 47,  152 => 46,  145 => 42,  141 => 41,  137 => 40,  130 => 36,  126 => 35,  122 => 34,  115 => 30,  111 => 29,  107 => 28,  100 => 24,  96 => 23,  92 => 22,  85 => 18,  81 => 17,  77 => 16,  71 => 13,  67 => 12,  62 => 10,  54 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {{ include('BIJIUserBundle:User:messages/success.html.twig') }}
    <div class=\"main container\">
        <div class=\"row well\">
            <div class=\"col-md-6\">
                <div class=\"page-header\">
                    <h2>{% trans %}Edit user{% endtrans %}</h2>
                </div>
                {{ form_start(form, {'attr' :  {'novalidate':'novalidate','role' : 'form'} }) }}
                <h4 class=\"text-danger\">{{ form_errors(form) }}</h4>

                <div class=\"form-group\">
                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, {'attr': {class : 'form-control', 'placeholder' : 'Your username'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.firstName) }}
                    {{ form_widget(form.firstName, {'attr': {class : 'form-control', 'placeholder' : 'Your firstname'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.lastName) }}
                    {{ form_widget(form.lastName, {'attr': {class : 'form-control', 'placeholder' : 'Your lastname'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.lastName) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'attr': {class : 'form-control', 'placeholder' : 'Your email'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.password) }}
                    {{ form_widget(form.password, {'attr': {class : 'form-control', 'placeholder' : 'Your password'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
                </div>

                <div class=\"form-group\">
                    {{ form_label(form.role) }}
                    {{ form_widget(form.role, {'attr': {class : 'form-control', 'placeholder' : 'Your role'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
                </div>

                <div class=\"checkbox\">
                    <label>
                        {{ form_widget(form.isActive) }} {% trans %}Active{% endtrans %}
                        <span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
                    </label>
                </div>
                </fieldset>

                <p>
                    {{ form_widget(form.save, {'label' : 'Update user', 'attr': {'class': 'btn btn-success'}}) }}
                </p>

                {{ form_end(form) }}
            </div>
        </div>
    </div>
{% endblock %}", "BIJIUserBundle:User:edit.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/edit.html.twig");
    }
}
