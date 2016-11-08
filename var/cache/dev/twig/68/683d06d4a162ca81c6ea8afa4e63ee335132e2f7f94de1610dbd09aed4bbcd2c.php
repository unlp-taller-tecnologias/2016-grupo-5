<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9baa43625362034c768a1df0a421778b815e1b76be13adf42fe1023910e2dba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20f8c2907fbcc25caf2d7f6c37d1e546057c8f42d6468da6195830e80c5c7cff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20f8c2907fbcc25caf2d7f6c37d1e546057c8f42d6468da6195830e80c5c7cff->enter($__internal_20f8c2907fbcc25caf2d7f6c37d1e546057c8f42d6468da6195830e80c5c7cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20f8c2907fbcc25caf2d7f6c37d1e546057c8f42d6468da6195830e80c5c7cff->leave($__internal_20f8c2907fbcc25caf2d7f6c37d1e546057c8f42d6468da6195830e80c5c7cff_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b0c05d9080f0025193040bf3c12e25bc4b94d08d7822b9570e82cc40f2c0a327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c05d9080f0025193040bf3c12e25bc4b94d08d7822b9570e82cc40f2c0a327->enter($__internal_b0c05d9080f0025193040bf3c12e25bc4b94d08d7822b9570e82cc40f2c0a327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b0c05d9080f0025193040bf3c12e25bc4b94d08d7822b9570e82cc40f2c0a327->leave($__internal_b0c05d9080f0025193040bf3c12e25bc4b94d08d7822b9570e82cc40f2c0a327_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f5d568b38a965452d9624a7025b0d090c14ae1d20e4980127e3020c5cfe1b186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5d568b38a965452d9624a7025b0d090c14ae1d20e4980127e3020c5cfe1b186->enter($__internal_f5d568b38a965452d9624a7025b0d090c14ae1d20e4980127e3020c5cfe1b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f5d568b38a965452d9624a7025b0d090c14ae1d20e4980127e3020c5cfe1b186->leave($__internal_f5d568b38a965452d9624a7025b0d090c14ae1d20e4980127e3020c5cfe1b186_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_100196705f8fd77861388ce5774313e4c5bbfa4a742a4aef11818be3b14687ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_100196705f8fd77861388ce5774313e4c5bbfa4a742a4aef11818be3b14687ee->enter($__internal_100196705f8fd77861388ce5774313e4c5bbfa4a742a4aef11818be3b14687ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@Twig/Exception/exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_100196705f8fd77861388ce5774313e4c5bbfa4a742a4aef11818be3b14687ee->leave($__internal_100196705f8fd77861388ce5774313e4c5bbfa4a742a4aef11818be3b14687ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/html/2016-grupo-5/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
