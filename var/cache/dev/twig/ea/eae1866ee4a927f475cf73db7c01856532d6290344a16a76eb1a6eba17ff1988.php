<?php

/* sector/new.html.twig */
class __TwigTemplate_f1958bd4b3b3a76d4898e40f90f3d6f69bf068955d6f91134f2f886ce9a0104d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sector/new.html.twig", 1);
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
        $__internal_b60c3adfefc523e284b15a1ac0703a0fb2f4106c2b7a1acbf72c36b10321dbe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60c3adfefc523e284b15a1ac0703a0fb2f4106c2b7a1acbf72c36b10321dbe9->enter($__internal_b60c3adfefc523e284b15a1ac0703a0fb2f4106c2b7a1acbf72c36b10321dbe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sector/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b60c3adfefc523e284b15a1ac0703a0fb2f4106c2b7a1acbf72c36b10321dbe9->leave($__internal_b60c3adfefc523e284b15a1ac0703a0fb2f4106c2b7a1acbf72c36b10321dbe9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ea95285bb822e9bca4c10ee6fa7aecc6c17592e46e4779d8d4e42008d06e8d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ea95285bb822e9bca4c10ee6fa7aecc6c17592e46e4779d8d4e42008d06e8d8->enter($__internal_6ea95285bb822e9bca4c10ee6fa7aecc6c17592e46e4779d8d4e42008d06e8d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sector/new.html.twig"));

        // line 4
        echo "    <h1>Sector creation</h1>

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6ea95285bb822e9bca4c10ee6fa7aecc6c17592e46e4779d8d4e42008d06e8d8->leave($__internal_6ea95285bb822e9bca4c10ee6fa7aecc6c17592e46e4779d8d4e42008d06e8d8_prof);

    }

    public function getTemplateName()
    {
        return "sector/new.html.twig";
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
    <h1>Sector creation</h1>

    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('sector_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "sector/new.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/sector/new.html.twig");
    }
}
