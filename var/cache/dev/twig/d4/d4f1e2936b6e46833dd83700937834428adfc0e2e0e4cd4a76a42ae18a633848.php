<?php

/* producto/new.html.twig */
class __TwigTemplate_d69014bb72c8e91fd859a0984550c12f6ca5fb556d55101280ace39495d9897f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producto/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1576561daa05178c2e8e394f0dc25775a100f6e826c1453df52997104914d0ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1576561daa05178c2e8e394f0dc25775a100f6e826c1453df52997104914d0ea->enter($__internal_1576561daa05178c2e8e394f0dc25775a100f6e826c1453df52997104914d0ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1576561daa05178c2e8e394f0dc25775a100f6e826c1453df52997104914d0ea->leave($__internal_1576561daa05178c2e8e394f0dc25775a100f6e826c1453df52997104914d0ea_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_81de9d31a81924b353eaae342e2c885b45a3b078bc4dd97d2a344de1571a5db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81de9d31a81924b353eaae342e2c885b45a3b078bc4dd97d2a344de1571a5db8->enter($__internal_81de9d31a81924b353eaae342e2c885b45a3b078bc4dd97d2a344de1571a5db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "producto/new.html.twig"));

        // line 4
        echo "    <h1>Producto creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <br>
        ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
        lalala loloolo
        <br>
        <br>
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "stockMinimo", array()), 'label');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "stockMinimo", array()), 'widget');
        echo "
        lalala loloolo
        <br>
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_81de9d31a81924b353eaae342e2c885b45a3b078bc4dd97d2a344de1571a5db8->leave($__internal_81de9d31a81924b353eaae342e2c885b45a3b078bc4dd97d2a344de1571a5db8_prof);

    }

    public function getTemplateName()
    {
        return "producto/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  71 => 18,  64 => 14,  60 => 13,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Producto creation</h1>

    {{ form_start(form) }}
        <br>
        {{ form_label(form.nombre) }}
        {{ form_widget(form.nombre) }}
        lalala loloolo
        <br>
        <br>
        {{ form_label(form.stockMinimo) }}
        {{ form_widget(form.stockMinimo) }}
        lalala loloolo
        <br>
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('producto_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "producto/new.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/producto/new.html.twig");
    }
}
