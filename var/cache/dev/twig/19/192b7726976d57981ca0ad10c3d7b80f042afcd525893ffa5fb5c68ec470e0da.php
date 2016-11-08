<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_02f74cb84b02cd835fc1fbc9272238834891e8e421697e98d3f9a3b9a7840178 extends Twig_Template
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
        $__internal_88c0fe0edf684b38f7692f622b619ac90136b44eecb0f2bec8978de6b880a3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88c0fe0edf684b38f7692f622b619ac90136b44eecb0f2bec8978de6b880a3f4->enter($__internal_88c0fe0edf684b38f7692f622b619ac90136b44eecb0f2bec8978de6b880a3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88c0fe0edf684b38f7692f622b619ac90136b44eecb0f2bec8978de6b880a3f4->leave($__internal_88c0fe0edf684b38f7692f622b619ac90136b44eecb0f2bec8978de6b880a3f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_54d34d36d2d359510130c9ff68959f1914912d904a12b45998780e7b9445205e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54d34d36d2d359510130c9ff68959f1914912d904a12b45998780e7b9445205e->enter($__internal_54d34d36d2d359510130c9ff68959f1914912d904a12b45998780e7b9445205e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_54d34d36d2d359510130c9ff68959f1914912d904a12b45998780e7b9445205e->leave($__internal_54d34d36d2d359510130c9ff68959f1914912d904a12b45998780e7b9445205e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b0b01d5c7fb25803a3bd63f7305f2a83bd75d85ee9a20e884381c67ab7c69668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0b01d5c7fb25803a3bd63f7305f2a83bd75d85ee9a20e884381c67ab7c69668->enter($__internal_b0b01d5c7fb25803a3bd63f7305f2a83bd75d85ee9a20e884381c67ab7c69668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b0b01d5c7fb25803a3bd63f7305f2a83bd75d85ee9a20e884381c67ab7c69668->leave($__internal_b0b01d5c7fb25803a3bd63f7305f2a83bd75d85ee9a20e884381c67ab7c69668_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0d15b6918b4dfa20161ea2fa7ab7e7ece9968cc29d031a2ef8fe83ada2c2a688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d15b6918b4dfa20161ea2fa7ab7e7ece9968cc29d031a2ef8fe83ada2c2a688->enter($__internal_0d15b6918b4dfa20161ea2fa7ab7e7ece9968cc29d031a2ef8fe83ada2c2a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0d15b6918b4dfa20161ea2fa7ab7e7ece9968cc29d031a2ef8fe83ada2c2a688->leave($__internal_0d15b6918b4dfa20161ea2fa7ab7e7ece9968cc29d031a2ef8fe83ada2c2a688_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/leandro/grupo5/2016-grupo-5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
