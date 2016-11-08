<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_dbdf01976de104e3901a5ed3a2cd002e30d10e2ab901f7271c3f545e1318bb73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07a11646271bc123e132eacf019dc638791c4e732c2ee63956435d3f23c0ff10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07a11646271bc123e132eacf019dc638791c4e732c2ee63956435d3f23c0ff10->enter($__internal_07a11646271bc123e132eacf019dc638791c4e732c2ee63956435d3f23c0ff10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07a11646271bc123e132eacf019dc638791c4e732c2ee63956435d3f23c0ff10->leave($__internal_07a11646271bc123e132eacf019dc638791c4e732c2ee63956435d3f23c0ff10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb694500312422443fdb8c5770333acd4a5279bfe8c6706d433194ec7a3403b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb694500312422443fdb8c5770333acd4a5279bfe8c6706d433194ec7a3403b0->enter($__internal_fb694500312422443fdb8c5770333acd4a5279bfe8c6706d433194ec7a3403b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "FOSUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "FOSUserBundle:Security:login_content.html.twig");
        echo "
";
        
        $__internal_fb694500312422443fdb8c5770333acd4a5279bfe8c6706d433194ec7a3403b0->leave($__internal_fb694500312422443fdb8c5770333acd4a5279bfe8c6706d433194ec7a3403b0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('FOSUserBundle:Security:login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/2016-grupo-5/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
