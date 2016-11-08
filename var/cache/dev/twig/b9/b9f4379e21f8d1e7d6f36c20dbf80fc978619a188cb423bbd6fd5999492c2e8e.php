<?php

/* proveedor/show.html.twig */
class __TwigTemplate_85089ed7f9986b0f50c29fe7c39a74fcb1b5c9e53fa979a6f55c94c3014d1b21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/show.html.twig", 1);
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
        $__internal_b4f05429ca96f1a5564b6274756f7c22325799e7bbed80bf163cac123fcc3ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4f05429ca96f1a5564b6274756f7c22325799e7bbed80bf163cac123fcc3ee5->enter($__internal_b4f05429ca96f1a5564b6274756f7c22325799e7bbed80bf163cac123fcc3ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4f05429ca96f1a5564b6274756f7c22325799e7bbed80bf163cac123fcc3ee5->leave($__internal_b4f05429ca96f1a5564b6274756f7c22325799e7bbed80bf163cac123fcc3ee5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6d2676287376083c0fcac7170abb5a9e8e049fd23f5507d45755f1230c4d2b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6d2676287376083c0fcac7170abb5a9e8e049fd23f5507d45755f1230c4d2b5->enter($__internal_c6d2676287376083c0fcac7170abb5a9e8e049fd23f5507d45755f1230c4d2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proveedor/show.html.twig"));

        // line 4
        echo "    <h1>Proveedor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_edit", array("id" => $this->getAttribute((isset($context["proveedor"]) ? $context["proveedor"] : $this->getContext($context, "proveedor")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_c6d2676287376083c0fcac7170abb5a9e8e049fd23f5507d45755f1230c4d2b5->leave($__internal_c6d2676287376083c0fcac7170abb5a9e8e049fd23f5507d45755f1230c4d2b5_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Proveedor</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ proveedor.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ proveedor.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proveedor_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('proveedor_edit', { 'id': proveedor.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "proveedor/show.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/proveedor/show.html.twig");
    }
}
