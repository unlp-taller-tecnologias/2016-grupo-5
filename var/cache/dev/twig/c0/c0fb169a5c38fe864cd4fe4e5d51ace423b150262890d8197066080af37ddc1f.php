<?php

/* proveedor/index.html.twig */
class __TwigTemplate_3dba0635907c1f18faf8a9d0c3f365cc241c01b261fc1ca3908bdd94945893ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "proveedor/index.html.twig", 1);
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
        $__internal_2be77cc6617cbccba55c997d61f7a6178b8d7cb1c0ca3def587e077f986b51d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2be77cc6617cbccba55c997d61f7a6178b8d7cb1c0ca3def587e077f986b51d2->enter($__internal_2be77cc6617cbccba55c997d61f7a6178b8d7cb1c0ca3def587e077f986b51d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "proveedor/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2be77cc6617cbccba55c997d61f7a6178b8d7cb1c0ca3def587e077f986b51d2->leave($__internal_2be77cc6617cbccba55c997d61f7a6178b8d7cb1c0ca3def587e077f986b51d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ce507916bef4da70fe7250117aa7c99c47c095d15009821ab0b4e37df1b0c40a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce507916bef4da70fe7250117aa7c99c47c095d15009821ab0b4e37df1b0c40a->enter($__internal_ce507916bef4da70fe7250117aa7c99c47c095d15009821ab0b4e37df1b0c40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "proveedor/index.html.twig"));

        // line 4
        echo "    <h1>Proveedors list</h1>

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
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedors"]) ? $context["proveedors"] : $this->getContext($context, "proveedors")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_show", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_show", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_edit", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proveedor_new");
        echo "\">Create a new proveedor</a>
        </li>
    </ul>
";
        
        $__internal_ce507916bef4da70fe7250117aa7c99c47c095d15009821ab0b4e37df1b0c40a->leave($__internal_ce507916bef4da70fe7250117aa7c99c47c095d15009821ab0b4e37df1b0c40a_prof);

    }

    public function getTemplateName()
    {
        return "proveedor/index.html.twig";
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
    <h1>Proveedors list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for proveedor in proveedors %}
            <tr>
                <td><a href=\"{{ path('proveedor_show', { 'id': proveedor.id }) }}\">{{ proveedor.id }}</a></td>
                <td>{{ proveedor.nombre }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('proveedor_show', { 'id': proveedor.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('proveedor_edit', { 'id': proveedor.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('proveedor_new') }}\">Create a new proveedor</a>
        </li>
    </ul>
{% endblock %}
", "proveedor/index.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/proveedor/index.html.twig");
    }
}
