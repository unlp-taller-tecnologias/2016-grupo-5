<?php

/* sector/show.html.twig */
class __TwigTemplate_2a83cd7ae086cb750ac117323cf2d0240a52d473f1b6e51592e5be720641ac6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sector/show.html.twig", 1);
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
        $__internal_883d689a3fa0472e068b585ed6ae40a19eac43b096d27eea36098b49df306457 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_883d689a3fa0472e068b585ed6ae40a19eac43b096d27eea36098b49df306457->enter($__internal_883d689a3fa0472e068b585ed6ae40a19eac43b096d27eea36098b49df306457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sector/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_883d689a3fa0472e068b585ed6ae40a19eac43b096d27eea36098b49df306457->leave($__internal_883d689a3fa0472e068b585ed6ae40a19eac43b096d27eea36098b49df306457_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c166856416d1855c3fc27c3f0d5e6196b066e5dfe6e53b893b69f43e0ca1734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c166856416d1855c3fc27c3f0d5e6196b066e5dfe6e53b893b69f43e0ca1734->enter($__internal_4c166856416d1855c3fc27c3f0d5e6196b066e5dfe6e53b893b69f43e0ca1734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sector/show.html.twig"));

        // line 4
        echo "    <h1>Sector</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sector"]) ? $context["sector"] : $this->getContext($context, "sector")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sector"]) ? $context["sector"] : $this->getContext($context, "sector")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_edit", array("id" => $this->getAttribute((isset($context["sector"]) ? $context["sector"] : $this->getContext($context, "sector")), "id", array()))), "html", null, true);
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
        
        $__internal_4c166856416d1855c3fc27c3f0d5e6196b066e5dfe6e53b893b69f43e0ca1734->leave($__internal_4c166856416d1855c3fc27c3f0d5e6196b066e5dfe6e53b893b69f43e0ca1734_prof);

    }

    public function getTemplateName()
    {
        return "sector/show.html.twig";
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
    <h1>Sector</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ sector.id }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ sector.nombre }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('sector_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('sector_edit', { 'id': sector.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "sector/show.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/sector/show.html.twig");
    }
}
