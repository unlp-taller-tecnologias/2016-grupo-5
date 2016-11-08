<?php

/* base.html.twig */
class __TwigTemplate_2ee3197d00950d2e15eaad8e80cc6514203740bf65e586f8e052e012c2b89311 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0cd69a047fa369a54bc599d34041603114e14aafc3aec7932e7faccf2548746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0cd69a047fa369a54bc599d34041603114e14aafc3aec7932e7faccf2548746->enter($__internal_a0cd69a047fa369a54bc599d34041603114e14aafc3aec7932e7faccf2548746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_a0cd69a047fa369a54bc599d34041603114e14aafc3aec7932e7faccf2548746->leave($__internal_a0cd69a047fa369a54bc599d34041603114e14aafc3aec7932e7faccf2548746_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_43deefb08f57e7977175cb099c29c45582b73403029f21eea51921d96510d235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43deefb08f57e7977175cb099c29c45582b73403029f21eea51921d96510d235->enter($__internal_43deefb08f57e7977175cb099c29c45582b73403029f21eea51921d96510d235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "lalalaololo!";
        
        $__internal_43deefb08f57e7977175cb099c29c45582b73403029f21eea51921d96510d235->leave($__internal_43deefb08f57e7977175cb099c29c45582b73403029f21eea51921d96510d235_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaac5d24985b5769140b2118f60b21b7a0f7082fbf936848cfa9572e1f34234b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aaac5d24985b5769140b2118f60b21b7a0f7082fbf936848cfa9572e1f34234b->enter($__internal_aaac5d24985b5769140b2118f60b21b7a0f7082fbf936848cfa9572e1f34234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_aaac5d24985b5769140b2118f60b21b7a0f7082fbf936848cfa9572e1f34234b->leave($__internal_aaac5d24985b5769140b2118f60b21b7a0f7082fbf936848cfa9572e1f34234b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c871e670efb1b5092602659c7b9e034a03879937d3aca3d25881ce6bd7e0c23b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c871e670efb1b5092602659c7b9e034a03879937d3aca3d25881ce6bd7e0c23b->enter($__internal_c871e670efb1b5092602659c7b9e034a03879937d3aca3d25881ce6bd7e0c23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_c871e670efb1b5092602659c7b9e034a03879937d3aca3d25881ce6bd7e0c23b->leave($__internal_c871e670efb1b5092602659c7b9e034a03879937d3aca3d25881ce6bd7e0c23b_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b091882f963eec31b514f7b2de6f7615d6603f94d13c9fa225042bf05b57a32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b091882f963eec31b514f7b2de6f7615d6603f94d13c9fa225042bf05b57a32->enter($__internal_3b091882f963eec31b514f7b2de6f7615d6603f94d13c9fa225042bf05b57a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_3b091882f963eec31b514f7b2de6f7615d6603f94d13c9fa225042bf05b57a32->leave($__internal_3b091882f963eec31b514f7b2de6f7615d6603f94d13c9fa225042bf05b57a32_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}lalalaololo!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/html/2016-grupo-5/app/Resources/views/base.html.twig");
    }
}
