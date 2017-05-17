<?php

/* layout.html.twig */
class __TwigTemplate_31ebda3df0480fe3e3cfd266dcb76e3c3b78858a83628a39b27a71a70f09b151 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b885ae9745a659411d76827f6da2c997ed0d326c8dddf050bc1bf862c9ede29b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b885ae9745a659411d76827f6da2c997ed0d326c8dddf050bc1bf862c9ede29b->enter($__internal_b885ae9745a659411d76827f6da2c997ed0d326c8dddf050bc1bf862c9ede29b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        $__internal_d0b8270030f04092ad47cd9101a6c4f80fa54314d1d034c15afff8ed3298cd6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b8270030f04092ad47cd9101a6c4f80fa54314d1d034c15afff8ed3298cd6e->enter($__internal_d0b8270030f04092ad47cd9101a6c4f80fa54314d1d034c15afff8ed3298cd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
    ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "</body>
</html>
";
        
        $__internal_b885ae9745a659411d76827f6da2c997ed0d326c8dddf050bc1bf862c9ede29b->leave($__internal_b885ae9745a659411d76827f6da2c997ed0d326c8dddf050bc1bf862c9ede29b_prof);

        
        $__internal_d0b8270030f04092ad47cd9101a6c4f80fa54314d1d034c15afff8ed3298cd6e->leave($__internal_d0b8270030f04092ad47cd9101a6c4f80fa54314d1d034c15afff8ed3298cd6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43140ced00ccffb5b5ed294e798691305bda957f3e9d522e38f9e4f26e47ee8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43140ced00ccffb5b5ed294e798691305bda957f3e9d522e38f9e4f26e47ee8f->enter($__internal_43140ced00ccffb5b5ed294e798691305bda957f3e9d522e38f9e4f26e47ee8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_437c26f62da610b0f8c17783d6cbc6523c129822e954caf3e6025f540144d2b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437c26f62da610b0f8c17783d6cbc6523c129822e954caf3e6025f540144d2b8->enter($__internal_437c26f62da610b0f8c17783d6cbc6523c129822e954caf3e6025f540144d2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Asignación de tareas";
        
        $__internal_437c26f62da610b0f8c17783d6cbc6523c129822e954caf3e6025f540144d2b8->leave($__internal_437c26f62da610b0f8c17783d6cbc6523c129822e954caf3e6025f540144d2b8_prof);

        
        $__internal_43140ced00ccffb5b5ed294e798691305bda957f3e9d522e38f9e4f26e47ee8f->leave($__internal_43140ced00ccffb5b5ed294e798691305bda957f3e9d522e38f9e4f26e47ee8f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8dd57d1cf94f8e703ad9c85dd112ab6772163b2d4cda85b8d01dacf1c5f0e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8dd57d1cf94f8e703ad9c85dd112ab6772163b2d4cda85b8d01dacf1c5f0e15->enter($__internal_d8dd57d1cf94f8e703ad9c85dd112ab6772163b2d4cda85b8d01dacf1c5f0e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_138be82dbb7ff49db7911e484b20593c4d2f13d9cdb27fcee606e7c9274e3796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138be82dbb7ff49db7911e484b20593c4d2f13d9cdb27fcee606e7c9274e3796->enter($__internal_138be82dbb7ff49db7911e484b20593c4d2f13d9cdb27fcee606e7c9274e3796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
    ";
        
        $__internal_138be82dbb7ff49db7911e484b20593c4d2f13d9cdb27fcee606e7c9274e3796->leave($__internal_138be82dbb7ff49db7911e484b20593c4d2f13d9cdb27fcee606e7c9274e3796_prof);

        
        $__internal_d8dd57d1cf94f8e703ad9c85dd112ab6772163b2d4cda85b8d01dacf1c5f0e15->leave($__internal_d8dd57d1cf94f8e703ad9c85dd112ab6772163b2d4cda85b8d01dacf1c5f0e15_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6557157eceac62345564d12bfd1ac68b5745334a0506574164e86886176d460 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6557157eceac62345564d12bfd1ac68b5745334a0506574164e86886176d460->enter($__internal_b6557157eceac62345564d12bfd1ac68b5745334a0506574164e86886176d460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8fde0d3e91231a677a81e48b7af5a170d360b38543fb47aaf914c69e18d34f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fde0d3e91231a677a81e48b7af5a170d360b38543fb47aaf914c69e18d34f2->enter($__internal_b8fde0d3e91231a677a81e48b7af5a170d360b38543fb47aaf914c69e18d34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 14
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "            ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
        ";
        }
        // line 17
        echo "    ";
        
        $__internal_b8fde0d3e91231a677a81e48b7af5a170d360b38543fb47aaf914c69e18d34f2->leave($__internal_b8fde0d3e91231a677a81e48b7af5a170d360b38543fb47aaf914c69e18d34f2_prof);

        
        $__internal_b6557157eceac62345564d12bfd1ac68b5745334a0506574164e86886176d460->leave($__internal_b6557157eceac62345564d12bfd1ac68b5745334a0506574164e86886176d460_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41bc5d066c65c4d71265212b5fe57e77200633745e2a2976af4108739f537cbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41bc5d066c65c4d71265212b5fe57e77200633745e2a2976af4108739f537cbb->enter($__internal_41bc5d066c65c4d71265212b5fe57e77200633745e2a2976af4108739f537cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2d4a50ade3792de20b854b7d43350e47971afb946f02750d3f3cbb348ad5abfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d4a50ade3792de20b854b7d43350e47971afb946f02750d3f3cbb348ad5abfa->enter($__internal_2d4a50ade3792de20b854b7d43350e47971afb946f02750d3f3cbb348ad5abfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_2d4a50ade3792de20b854b7d43350e47971afb946f02750d3f3cbb348ad5abfa->leave($__internal_2d4a50ade3792de20b854b7d43350e47971afb946f02750d3f3cbb348ad5abfa_prof);

        
        $__internal_41bc5d066c65c4d71265212b5fe57e77200633745e2a2976af4108739f537cbb->leave($__internal_41bc5d066c65c4d71265212b5fe57e77200633745e2a2976af4108739f537cbb_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 21,  151 => 20,  146 => 19,  137 => 18,  127 => 17,  121 => 15,  118 => 14,  109 => 13,  97 => 8,  92 => 7,  83 => 6,  65 => 5,  53 => 23,  50 => 18,  48 => 13,  41 => 10,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}Asignación de tareas{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\" />
        <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\" />
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
</head>
<body>
    {% block body %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            {{ include('menu.html.twig') }}
        {% endif %}
    {% endblock %}
    {% block javascripts %}
        <script src=\"{{ asset('public/js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
    {% endblock %}
</body>
</html>
", "layout.html.twig", "/var/www/workspace/asignaciones/app/Resources/views/layout.html.twig");
    }
}
