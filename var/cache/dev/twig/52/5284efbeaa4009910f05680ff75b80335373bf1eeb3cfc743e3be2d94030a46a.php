<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d25b0c450e34c4a826766f77f679b64a0bb6b535cc256203ddc48cff18e368be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_e91aa159b19b2d6a77a43a20a9f55f503aadeca0b5d1a2611a194aa0a84321b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e91aa159b19b2d6a77a43a20a9f55f503aadeca0b5d1a2611a194aa0a84321b4->enter($__internal_e91aa159b19b2d6a77a43a20a9f55f503aadeca0b5d1a2611a194aa0a84321b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e91aa159b19b2d6a77a43a20a9f55f503aadeca0b5d1a2611a194aa0a84321b4->leave($__internal_e91aa159b19b2d6a77a43a20a9f55f503aadeca0b5d1a2611a194aa0a84321b4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9ffa316680f282c0e097f9b80e6f32dc0e1fdb75079e5b352b5d9e03832539ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ffa316680f282c0e097f9b80e6f32dc0e1fdb75079e5b352b5d9e03832539ed->enter($__internal_9ffa316680f282c0e097f9b80e6f32dc0e1fdb75079e5b352b5d9e03832539ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9ffa316680f282c0e097f9b80e6f32dc0e1fdb75079e5b352b5d9e03832539ed->leave($__internal_9ffa316680f282c0e097f9b80e6f32dc0e1fdb75079e5b352b5d9e03832539ed_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_364f7f18137c6f8a70823d4a34e8c60a43a7dc1a8ad05855973383282853d8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_364f7f18137c6f8a70823d4a34e8c60a43a7dc1a8ad05855973383282853d8e9->enter($__internal_364f7f18137c6f8a70823d4a34e8c60a43a7dc1a8ad05855973383282853d8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_364f7f18137c6f8a70823d4a34e8c60a43a7dc1a8ad05855973383282853d8e9->leave($__internal_364f7f18137c6f8a70823d4a34e8c60a43a7dc1a8ad05855973383282853d8e9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_dec0fba0d79a03749972a50a9e34895f4c51fa6884376c75d6e82d2dae31c21f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec0fba0d79a03749972a50a9e34895f4c51fa6884376c75d6e82d2dae31c21f->enter($__internal_dec0fba0d79a03749972a50a9e34895f4c51fa6884376c75d6e82d2dae31c21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/exception.html.twig"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_dec0fba0d79a03749972a50a9e34895f4c51fa6884376c75d6e82d2dae31c21f->leave($__internal_dec0fba0d79a03749972a50a9e34895f4c51fa6884376c75d6e82d2dae31c21f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/leandro/grupo5/2016-grupo-5/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
