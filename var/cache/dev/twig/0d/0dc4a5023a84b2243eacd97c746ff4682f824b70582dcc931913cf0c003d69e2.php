<?php

/* producto/index.html.twig */
class __TwigTemplate_6264ffed0e47844539056e04518afbca558bed6f9a29ab19ae5e3912b57c8aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "producto/index.html.twig", 1);
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
        $__internal_f257bc09847197b58ed6c3ac723c9b9a058a02406ca11b940e389cc1ef3e4d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f257bc09847197b58ed6c3ac723c9b9a058a02406ca11b940e389cc1ef3e4d98->enter($__internal_f257bc09847197b58ed6c3ac723c9b9a058a02406ca11b940e389cc1ef3e4d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "producto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f257bc09847197b58ed6c3ac723c9b9a058a02406ca11b940e389cc1ef3e4d98->leave($__internal_f257bc09847197b58ed6c3ac723c9b9a058a02406ca11b940e389cc1ef3e4d98_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfe35da6fcd8d1893a6fb44762542439495097fe15f7ce7dabf8bcc63f738c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfe35da6fcd8d1893a6fb44762542439495097fe15f7ce7dabf8bcc63f738c1e->enter($__internal_dfe35da6fcd8d1893a6fb44762542439495097fe15f7ce7dabf8bcc63f738c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "producto/index.html.twig"));

        // line 4
        echo "    <h1>Productos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Stockminimo</th>
                <th>Stockideal</th>
                <th>Stock</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "stockMinimo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "stockIdeal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "stock", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_edit", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_new");
        echo "\">Create a new producto</a>
        </li>
    </ul>
";
        
        $__internal_dfe35da6fcd8d1893a6fb44762542439495097fe15f7ce7dabf8bcc63f738c1e->leave($__internal_dfe35da6fcd8d1893a6fb44762542439495097fe15f7ce7dabf8bcc63f738c1e_prof);

    }

    public function getTemplateName()
    {
        return "producto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
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
    <h1>Productos list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Stockminimo</th>
                <th>Stockideal</th>
                <th>Stock</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for producto in productos %}
            <tr>
                <td><a href=\"{{ path('producto_show', { 'id': producto.id }) }}\">{{ producto.id }}</a></td>
                <td>{{ producto.stockMinimo }}</td>
                <td>{{ producto.stockIdeal }}</td>
                <td>{{ producto.stock }}</td>
                <td>{{ producto.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('producto_show', { 'id': producto.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('producto_edit', { 'id': producto.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('producto_new') }}\">Create a new producto</a>
        </li>
    </ul>
{% endblock %}
", "producto/index.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/producto/index.html.twig");
    }
}
