<?php

/* BIJIUserBundle:User:add.html.twig */
class __TwigTemplate_38d23d8a8f853c465258ffe024dad4cbed1a0191c6a5c850165264cfc451805e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:User:add.html.twig", 1);
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
        $__internal_ab330aba57f9b4271943bdfdd35031874c81e2c98b0b5f4f8ae409a059f51f84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab330aba57f9b4271943bdfdd35031874c81e2c98b0b5f4f8ae409a059f51f84->enter($__internal_ab330aba57f9b4271943bdfdd35031874c81e2c98b0b5f4f8ae409a059f51f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:add.html.twig"));

        $__internal_e12ac334a393898dcda9f31498287b43d94451eaa8afc1466adaae17f142a328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e12ac334a393898dcda9f31498287b43d94451eaa8afc1466adaae17f142a328->enter($__internal_e12ac334a393898dcda9f31498287b43d94451eaa8afc1466adaae17f142a328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab330aba57f9b4271943bdfdd35031874c81e2c98b0b5f4f8ae409a059f51f84->leave($__internal_ab330aba57f9b4271943bdfdd35031874c81e2c98b0b5f4f8ae409a059f51f84_prof);

        
        $__internal_e12ac334a393898dcda9f31498287b43d94451eaa8afc1466adaae17f142a328->leave($__internal_e12ac334a393898dcda9f31498287b43d94451eaa8afc1466adaae17f142a328_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_076019fd5922ffb7185829872ef582a269c94990c14428b281870b2b12aa077b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076019fd5922ffb7185829872ef582a269c94990c14428b281870b2b12aa077b->enter($__internal_076019fd5922ffb7185829872ef582a269c94990c14428b281870b2b12aa077b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc3b1fc94c9d078ac3de0ba3cb3dd00058ef7c67ed408f89e3fd329dd704b3ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3b1fc94c9d078ac3de0ba3cb3dd00058ef7c67ed408f89e3fd329dd704b3ea->enter($__internal_cc3b1fc94c9d078ac3de0ba3cb3dd00058ef7c67ed408f89e3fd329dd704b3ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New User", array(), "messages");
        echo "</h2>
            </div>
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
            <fieldset>
            <div class=\"form-group\">
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                <span class=\"text-danger\">";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
                ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your firstname")));
        echo "
                <span class=\"text-danger\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
                ";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your lastname")));
        echo "
                <span class=\"text-danger\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'label');
        echo "
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
                <span class=\"text-danger\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'label');
        echo "
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
                <span class=\"text-danger\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"form-group\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'label');
        echo "
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your role")));
        echo "
                <span class=\"text-danger\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
            </div>

            <div class=\"checkbox\">
                <label>
                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 52
        echo "                    <span class=\"text-danger\">";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
                </label>
            </div>
            </fieldset>

            <p>
                ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create user", "attr" => array("class" => "btn btn-success")));
        echo "
            </p>

            ";
        // line 61
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
     </div>
</div>
";
        
        $__internal_cc3b1fc94c9d078ac3de0ba3cb3dd00058ef7c67ed408f89e3fd329dd704b3ea->leave($__internal_cc3b1fc94c9d078ac3de0ba3cb3dd00058ef7c67ed408f89e3fd329dd704b3ea_prof);

        
        $__internal_076019fd5922ffb7185829872ef582a269c94990c14428b281870b2b12aa077b->leave($__internal_076019fd5922ffb7185829872ef582a269c94990c14428b281870b2b12aa077b_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 61,  174 => 58,  164 => 52,  160 => 51,  152 => 46,  148 => 45,  144 => 44,  137 => 40,  133 => 39,  129 => 38,  122 => 34,  118 => 33,  114 => 32,  107 => 28,  103 => 27,  99 => 26,  92 => 22,  88 => 21,  84 => 20,  77 => 16,  73 => 15,  69 => 14,  63 => 11,  58 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
                <h2>{% trans %}New User{% endtrans %}</h2>
            </div>
            {{ form_start(form, {'attr' :  {'novalidate':'novalidate','role' : 'form'} }) }}
            <fieldset>
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
                {{ form_widget(form.save, {'label' : 'Create user', 'attr': {'class': 'btn btn-success'}}) }}
            </p>

            {{ form_end(form) }}
        </div>
     </div>
</div>
{% endblock %}", "BIJIUserBundle:User:add.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/User/add.html.twig");
    }
}
