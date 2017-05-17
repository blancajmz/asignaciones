<?php

/* BIJIUserBundle:Security:login.html.twig */
class __TwigTemplate_ba64fec30eae51de2d7514cffb16f6c865b55119605a2734685d0f26b5acd3d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "BIJIUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f4221b5a69c6b2aada92d4447faf5ae7f91900eb5584f6303f41c87b5f5b3140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4221b5a69c6b2aada92d4447faf5ae7f91900eb5584f6303f41c87b5f5b3140->enter($__internal_f4221b5a69c6b2aada92d4447faf5ae7f91900eb5584f6303f41c87b5f5b3140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Security:login.html.twig"));

        $__internal_d3170dc1ecdc7e036647c12e39b48b87db892c0af8b37daf15d5481040d9e5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3170dc1ecdc7e036647c12e39b48b87db892c0af8b37daf15d5481040d9e5b2->enter($__internal_d3170dc1ecdc7e036647c12e39b48b87db892c0af8b37daf15d5481040d9e5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BIJIUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4221b5a69c6b2aada92d4447faf5ae7f91900eb5584f6303f41c87b5f5b3140->leave($__internal_f4221b5a69c6b2aada92d4447faf5ae7f91900eb5584f6303f41c87b5f5b3140_prof);

        
        $__internal_d3170dc1ecdc7e036647c12e39b48b87db892c0af8b37daf15d5481040d9e5b2->leave($__internal_d3170dc1ecdc7e036647c12e39b48b87db892c0af8b37daf15d5481040d9e5b2_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6e27134ac979e644acde93edb0f568ca4c932ec67ca07df74f1a7190d557c6c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e27134ac979e644acde93edb0f568ca4c932ec67ca07df74f1a7190d557c6c0->enter($__internal_6e27134ac979e644acde93edb0f568ca4c932ec67ca07df74f1a7190d557c6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc8f052021d54740bdabf9da5b6a91d3ac4954555b7e23266a41c059ca671917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8f052021d54740bdabf9da5b6a91d3ac4954555b7e23266a41c059ca671917->enter($__internal_fc8f052021d54740bdabf9da5b6a91d3ac4954555b7e23266a41c059ca671917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_fc8f052021d54740bdabf9da5b6a91d3ac4954555b7e23266a41c059ca671917->leave($__internal_fc8f052021d54740bdabf9da5b6a91d3ac4954555b7e23266a41c059ca671917_prof);

        
        $__internal_6e27134ac979e644acde93edb0f568ca4c932ec67ca07df74f1a7190d557c6c0->leave($__internal_6e27134ac979e644acde93edb0f568ca4c932ec67ca07df74f1a7190d557c6c0_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a94a25f0212ce116e8e60018c01529aa0b494f3f4c827bbe29e7c37f57bea27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a94a25f0212ce116e8e60018c01529aa0b494f3f4c827bbe29e7c37f57bea27->enter($__internal_2a94a25f0212ce116e8e60018c01529aa0b494f3f4c827bbe29e7c37f57bea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa7b2f5d5e0df782c5b40791fa62727a2d6511409c201eb475674fc817703178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7b2f5d5e0df782c5b40791fa62727a2d6511409c201eb475674fc817703178->enter($__internal_fa7b2f5d5e0df782c5b40791fa62727a2d6511409c201eb475674fc817703178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
        <form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("biji_user_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
            <h2 class=\"form-signin-heading\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please sign in"), "html", null, true);
        echo "</h2>

            ";
        // line 15
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 16
            echo "                <div class=\"text-danger\">
                    <p>
                        <strong>
                            ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </strong>
                    </p>
                </div>
            ";
        }
        // line 24
        echo "
            <label for=\"username\" class=\"sr-only\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo ":</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "\" required autofocus />

            <label for=\"password\" class=\"sr-only\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo ":</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "\" required />

            <input type=\"hidden\" name=\"_target_path\" value=\"biji_user_homepage\" />

            <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in"), "html", null, true);
        echo "</button>
        </form>
    </div> <!-- /container -->
";
        
        $__internal_fa7b2f5d5e0df782c5b40791fa62727a2d6511409c201eb475674fc817703178->leave($__internal_fa7b2f5d5e0df782c5b40791fa62727a2d6511409c201eb475674fc817703178_prof);

        
        $__internal_2a94a25f0212ce116e8e60018c01529aa0b494f3f4c827bbe29e7c37f57bea27->leave($__internal_2a94a25f0212ce116e8e60018c01529aa0b494f3f4c827bbe29e7c37f57bea27_prof);

    }

    public function getTemplateName()
    {
        return "BIJIUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 33,  125 => 29,  121 => 28,  114 => 26,  110 => 25,  107 => 24,  99 => 19,  94 => 16,  92 => 15,  87 => 13,  83 => 12,  76 => 9,  67 => 8,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/signin.css') }}\">
{% endblock %}

{% block body %}
    {{ parent() }}

    <div class=\"container\">
        <form action=\"{{ path('biji_user_login_check') }}\" method=\"post\" class=\"form-signin\">
            <h2 class=\"form-signin-heading\">{{ 'Please sign in'|trans }}</h2>

            {% if error %}
                <div class=\"text-danger\">
                    <p>
                        <strong>
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </strong>
                    </p>
                </div>
            {% endif %}

            <label for=\"username\" class=\"sr-only\">{{ 'Username'|trans }}:</label>
            <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'Username'|trans }}\" required autofocus />

            <label for=\"password\" class=\"sr-only\">{{ 'Password'|trans }}:</label>
            <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"{{ 'Password'|trans }}\" required />

            <input type=\"hidden\" name=\"_target_path\" value=\"biji_user_homepage\" />

            <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">{{ 'Sign in'|trans }}</button>
        </form>
    </div> <!-- /container -->
{% endblock %}", "BIJIUserBundle:Security:login.html.twig", "/var/www/workspace/asignaciones/src/BIJI/UserBundle/Resources/views/Security/login.html.twig");
    }
}
