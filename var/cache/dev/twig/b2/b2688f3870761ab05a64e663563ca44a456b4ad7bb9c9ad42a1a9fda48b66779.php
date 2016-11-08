<?php

/* sector/index.html.twig */
class __TwigTemplate_9190284e1beebc4fad02bd5bddfad6657b0b30ef0f778bba61fd6b9ba48d2c4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sector/index.html.twig", 1);
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
        $__internal_8ebf44bbe166b9418fdfcbca76082fa3289ca800abe16aab738120cf04f936be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ebf44bbe166b9418fdfcbca76082fa3289ca800abe16aab738120cf04f936be->enter($__internal_8ebf44bbe166b9418fdfcbca76082fa3289ca800abe16aab738120cf04f936be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sector/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ebf44bbe166b9418fdfcbca76082fa3289ca800abe16aab738120cf04f936be->leave($__internal_8ebf44bbe166b9418fdfcbca76082fa3289ca800abe16aab738120cf04f936be_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2fa5f7638321baa50c89a7739c546320a7e13f6174954e69a0ac887a9696296d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fa5f7638321baa50c89a7739c546320a7e13f6174954e69a0ac887a9696296d->enter($__internal_2fa5f7638321baa50c89a7739c546320a7e13f6174954e69a0ac887a9696296d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sector/index.html.twig"));

        // line 4
        echo "    <h1>Sectors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sectors"]) ? $context["sectors"] : $this->getContext($context, "sectors")));
        foreach ($context['_seq'] as $context["_key"] => $context["sector"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_show", array("id" => $this->getAttribute($context["sector"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["sector"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["sector"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_show", array("id" => $this->getAttribute($context["sector"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_edit", array("id" => $this->getAttribute($context["sector"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sector'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sector_new");
        echo "\">Create a new sector</a>
        </li>
    </ul>
";
        
        $__internal_2fa5f7638321baa50c89a7739c546320a7e13f6174954e69a0ac887a9696296d->leave($__internal_2fa5f7638321baa50c89a7739c546320a7e13f6174954e69a0ac887a9696296d_prof);

    }

    public function getTemplateName()
    {
        return "sector/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Sectors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for sector in sectors %}
            <tr>
                <td><a href=\"{{ path('sector_show', { 'id': sector.id }) }}\">{{ sector.id }}</a></td>
                <td>{{ sector.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('sector_show', { 'id': sector.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('sector_edit', { 'id': sector.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('sector_new') }}\">Create a new sector</a>
        </li>
    </ul>
{% endblock %}
", "sector/index.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/sector/index.html.twig");
    }
}
