<?php

/* menu.html.twig */
class __TwigTemplate_a502f8478a83e1be49b4f2b97edaf34166acb58ed8c700c3135755b1309832be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15671da87288772f009c449bf29a6cff3bab50310c6d0cdc650fbf5ce8ebdd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15671da87288772f009c449bf29a6cff3bab50310c6d0cdc650fbf5ce8ebdd56->enter($__internal_15671da87288772f009c449bf29a6cff3bab50310c6d0cdc650fbf5ce8ebdd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        $__internal_dac3393b7cb3a5960a2e55123b5dac971871c7693f396435af91339ce6b1b861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac3393b7cb3a5960a2e55123b5dac971871c7693f396435af91339ce6b1b861->enter($__internal_dac3393b7cb3a5960a2e55123b5dac971871c7693f396435af91339ce6b1b861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Assignments", array(), "messages");
        echo "</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
            echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List Users", array(), "messages");
            echo "</a></li>
                        <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_add");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New User", array(), "messages");
            echo "</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
            echo "<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_index");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List Tasks", array(), "messages");
            echo "</a></li>
                        <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_add");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New Task", array(), "messages");
            echo "</a></li>
                    </ul>
                </li>
                ";
        }
        // line 33
        echo "
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 35
            echo "                    <li>
                        <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_task_custom");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My tasks"), "html", null, true);
            echo "</a>
                    </li>
                ";
        }
        // line 39
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_15671da87288772f009c449bf29a6cff3bab50310c6d0cdc650fbf5ce8ebdd56->leave($__internal_15671da87288772f009c449bf29a6cff3bab50310c6d0cdc650fbf5ce8ebdd56_prof);

        
        $__internal_dac3393b7cb3a5960a2e55123b5dac971871c7693f396435af91339ce6b1b861->leave($__internal_dac3393b7cb3a5960a2e55123b5dac971871c7693f396435af91339ce6b1b861_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  107 => 39,  99 => 36,  96 => 35,  94 => 34,  91 => 33,  82 => 29,  76 => 28,  71 => 26,  62 => 22,  56 => 21,  51 => 19,  48 => 18,  46 => 17,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">{% trans %}Assignments{% endtrans %}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}Users{% endtrans %}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('biji_user_index') }}\">{% trans %}List Users{% endtrans %}</a></li>
                        <li><a href=\"{{ path('biji_user_add') }}\">{% trans %}New User{% endtrans %}</a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}Tasks{% endtrans %}<span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('biji_task_index') }}\">{% trans %}List Tasks{% endtrans %}</a></li>
                        <li><a href=\"{{ path('biji_task_add') }}\">{% trans %}New Task{% endtrans %}</a></li>
                    </ul>
                </li>
                {% endif %}

                {% if is_granted('ROLE_USER') %}
                    <li>
                        <a href=\"{{ path('biji_task_custom') }}\">{{ 'My tasks'|trans }}</a>
                    </li>
                {% endif %}
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ path('biji_user_logout') }}\">{{ 'Logout'|trans }}</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "menu.html.twig", "/var/www/workspace/asignaciones/app/Resources/views/menu.html.twig");
    }
}
