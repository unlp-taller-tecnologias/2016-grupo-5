<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60afe69085886be96802d2ef78e32764e14204bf558b063cc157dce4cd577926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c067f7c1d3e9a251adcdcb638da30f448696e503b0c9b0d22c57a611c73579ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c067f7c1d3e9a251adcdcb638da30f448696e503b0c9b0d22c57a611c73579ce->enter($__internal_c067f7c1d3e9a251adcdcb638da30f448696e503b0c9b0d22c57a611c73579ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c067f7c1d3e9a251adcdcb638da30f448696e503b0c9b0d22c57a611c73579ce->leave($__internal_c067f7c1d3e9a251adcdcb638da30f448696e503b0c9b0d22c57a611c73579ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ba2bc8f91d72b258c58d5f854072c04a6f3df75396ad50c2af2ca52743ad9742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba2bc8f91d72b258c58d5f854072c04a6f3df75396ad50c2af2ca52743ad9742->enter($__internal_ba2bc8f91d72b258c58d5f854072c04a6f3df75396ad50c2af2ca52743ad9742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_ba2bc8f91d72b258c58d5f854072c04a6f3df75396ad50c2af2ca52743ad9742->leave($__internal_ba2bc8f91d72b258c58d5f854072c04a6f3df75396ad50c2af2ca52743ad9742_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_49fba320117f0e6dc2cde94216d6e77ae59e040e5e0bc3d61b6d5bd877d7fcef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49fba320117f0e6dc2cde94216d6e77ae59e040e5e0bc3d61b6d5bd877d7fcef->enter($__internal_49fba320117f0e6dc2cde94216d6e77ae59e040e5e0bc3d61b6d5bd877d7fcef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_49fba320117f0e6dc2cde94216d6e77ae59e040e5e0bc3d61b6d5bd877d7fcef->leave($__internal_49fba320117f0e6dc2cde94216d6e77ae59e040e5e0bc3d61b6d5bd877d7fcef_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a83d0980444560add049e85cee99e8a2cbd0a9279aaf820f6dfdee1cfa08174b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a83d0980444560add049e85cee99e8a2cbd0a9279aaf820f6dfdee1cfa08174b->enter($__internal_a83d0980444560add049e85cee99e8a2cbd0a9279aaf820f6dfdee1cfa08174b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a83d0980444560add049e85cee99e8a2cbd0a9279aaf820f6dfdee1cfa08174b->leave($__internal_a83d0980444560add049e85cee99e8a2cbd0a9279aaf820f6dfdee1cfa08174b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/html/2016-grupo-5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
