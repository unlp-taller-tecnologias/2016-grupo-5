<?php

/* base.html.twig */
class __TwigTemplate_c7fe7d68f22390a718a02df80ac621556cb9078f1cd7e880acee622a712af107 extends Twig_Template
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
        $__internal_09760733e001f2d29fb0d20bd65ea4bb80b7d892b743d361714fe2c66290669c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09760733e001f2d29fb0d20bd65ea4bb80b7d892b743d361714fe2c66290669c->enter($__internal_09760733e001f2d29fb0d20bd65ea4bb80b7d892b743d361714fe2c66290669c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_09760733e001f2d29fb0d20bd65ea4bb80b7d892b743d361714fe2c66290669c->leave($__internal_09760733e001f2d29fb0d20bd65ea4bb80b7d892b743d361714fe2c66290669c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_61475c9342cd0e1bae199e3298a585b7ed6e8a3d426eff00903929bb304072ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61475c9342cd0e1bae199e3298a585b7ed6e8a3d426eff00903929bb304072ac->enter($__internal_61475c9342cd0e1bae199e3298a585b7ed6e8a3d426eff00903929bb304072ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_61475c9342cd0e1bae199e3298a585b7ed6e8a3d426eff00903929bb304072ac->leave($__internal_61475c9342cd0e1bae199e3298a585b7ed6e8a3d426eff00903929bb304072ac_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d8a20d5ce72d0722968616b2cc64ad8c765ae97a70d6c7570362be848116a8f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a20d5ce72d0722968616b2cc64ad8c765ae97a70d6c7570362be848116a8f2->enter($__internal_d8a20d5ce72d0722968616b2cc64ad8c765ae97a70d6c7570362be848116a8f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_d8a20d5ce72d0722968616b2cc64ad8c765ae97a70d6c7570362be848116a8f2->leave($__internal_d8a20d5ce72d0722968616b2cc64ad8c765ae97a70d6c7570362be848116a8f2_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f08869f51f6093507a1669edfa1611994df51282190e0236b188c6b35ed68c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f08869f51f6093507a1669edfa1611994df51282190e0236b188c6b35ed68c6->enter($__internal_0f08869f51f6093507a1669edfa1611994df51282190e0236b188c6b35ed68c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_0f08869f51f6093507a1669edfa1611994df51282190e0236b188c6b35ed68c6->leave($__internal_0f08869f51f6093507a1669edfa1611994df51282190e0236b188c6b35ed68c6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e1dcc482dc4aeeff73d669eee34ec198d0e4e616f3182d13a9e1e6409f1b9ede = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dcc482dc4aeeff73d669eee34ec198d0e4e616f3182d13a9e1e6409f1b9ede->enter($__internal_e1dcc482dc4aeeff73d669eee34ec198d0e4e616f3182d13a9e1e6409f1b9ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e1dcc482dc4aeeff73d669eee34ec198d0e4e616f3182d13a9e1e6409f1b9ede->leave($__internal_e1dcc482dc4aeeff73d669eee34ec198d0e4e616f3182d13a9e1e6409f1b9ede_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/leandro/grupo5/2016-grupo-5/app/Resources/views/base.html.twig");
    }
}
