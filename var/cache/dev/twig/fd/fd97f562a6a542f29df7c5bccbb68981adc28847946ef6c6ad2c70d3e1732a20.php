<?php

/* proveedor/new.html.twig */
class __TwigTemplate_b55f2d022c4a72fdc2925e83b5225c860a9c5f4c5cf054d015c110ed207f2784 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/new.html.twig", 1);
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
        $__internal_94b999aa35b7c51f563427acf0d5dfd30ef3353ffb1fb7dc95345ddf3ae682ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b999aa35b7c51f563427acf0d5dfd30ef3353ffb1fb7dc95345ddf3ae682ac->enter($__internal_94b999aa35b7c51f563427acf0d5dfd30ef3353ffb1fb7dc95345ddf3ae682ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b999aa35b7c51f563427acf0d5dfd30ef3353ffb1fb7dc95345ddf3ae682ac->leave($__internal_94b999aa35b7c51f563427acf0d5dfd30ef3353ffb1fb7dc95345ddf3ae682ac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0a4adb40c0569ccc069b0838d97568a1182e567654489947467aca60f37a973e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4adb40c0569ccc069b0838d97568a1182e567654489947467aca60f37a973e->enter($__internal_0a4adb40c0569ccc069b0838d97568a1182e567654489947467aca60f37a973e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proveedor/new.html.twig"));

        // line 4
        echo "    <h1>Proveedor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_0a4adb40c0569ccc069b0838d97568a1182e567654489947467aca60f37a973e->leave($__internal_0a4adb40c0569ccc069b0838d97568a1182e567654489947467aca60f37a973e_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Proveedor creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('proveedor_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "proveedor/new.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/proveedor/new.html.twig");
    }
}
