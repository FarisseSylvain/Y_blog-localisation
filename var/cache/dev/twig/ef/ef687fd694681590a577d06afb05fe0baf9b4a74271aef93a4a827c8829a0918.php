<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0d6428d0ca355063f196a11c6ad9ccd9f29fb8690cefbda5f77107db2838b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0d6428d0ca355063f196a11c6ad9ccd9f29fb8690cefbda5f77107db2838b36->enter($__internal_a0d6428d0ca355063f196a11c6ad9ccd9f29fb8690cefbda5f77107db2838b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_0d1653590b49d3fa6fb0a1cc5554e4e8b9b6be278e32c0c3d3772ac5ca027667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1653590b49d3fa6fb0a1cc5554e4e8b9b6be278e32c0c3d3772ac5ca027667->enter($__internal_0d1653590b49d3fa6fb0a1cc5554e4e8b9b6be278e32c0c3d3772ac5ca027667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0d6428d0ca355063f196a11c6ad9ccd9f29fb8690cefbda5f77107db2838b36->leave($__internal_a0d6428d0ca355063f196a11c6ad9ccd9f29fb8690cefbda5f77107db2838b36_prof);

        
        $__internal_0d1653590b49d3fa6fb0a1cc5554e4e8b9b6be278e32c0c3d3772ac5ca027667->leave($__internal_0d1653590b49d3fa6fb0a1cc5554e4e8b9b6be278e32c0c3d3772ac5ca027667_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8ac0876e3ad9f037023f6d96beaf2643352a412a627e60d532b47e1d7ccc0b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac0876e3ad9f037023f6d96beaf2643352a412a627e60d532b47e1d7ccc0b71->enter($__internal_8ac0876e3ad9f037023f6d96beaf2643352a412a627e60d532b47e1d7ccc0b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_294af6ecad76eb809cdfb5808892805b2d6cf633ff0b8c75a2f9f57b4a570db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294af6ecad76eb809cdfb5808892805b2d6cf633ff0b8c75a2f9f57b4a570db2->enter($__internal_294af6ecad76eb809cdfb5808892805b2d6cf633ff0b8c75a2f9f57b4a570db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_294af6ecad76eb809cdfb5808892805b2d6cf633ff0b8c75a2f9f57b4a570db2->leave($__internal_294af6ecad76eb809cdfb5808892805b2d6cf633ff0b8c75a2f9f57b4a570db2_prof);

        
        $__internal_8ac0876e3ad9f037023f6d96beaf2643352a412a627e60d532b47e1d7ccc0b71->leave($__internal_8ac0876e3ad9f037023f6d96beaf2643352a412a627e60d532b47e1d7ccc0b71_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_77228d89eff777032f0bed27b7385b2ec0860debd14ce4133502d2091b12eb93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77228d89eff777032f0bed27b7385b2ec0860debd14ce4133502d2091b12eb93->enter($__internal_77228d89eff777032f0bed27b7385b2ec0860debd14ce4133502d2091b12eb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_2225d1f731d88acde77d3bde985d5f294e7de32590b656e6322573979f982255 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2225d1f731d88acde77d3bde985d5f294e7de32590b656e6322573979f982255->enter($__internal_2225d1f731d88acde77d3bde985d5f294e7de32590b656e6322573979f982255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2225d1f731d88acde77d3bde985d5f294e7de32590b656e6322573979f982255->leave($__internal_2225d1f731d88acde77d3bde985d5f294e7de32590b656e6322573979f982255_prof);

        
        $__internal_77228d89eff777032f0bed27b7385b2ec0860debd14ce4133502d2091b12eb93->leave($__internal_77228d89eff777032f0bed27b7385b2ec0860debd14ce4133502d2091b12eb93_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0aa8dfde5dfd64404d8e7bbb70645703370ec0ea460c4b4512d61d82e593d81d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aa8dfde5dfd64404d8e7bbb70645703370ec0ea460c4b4512d61d82e593d81d->enter($__internal_0aa8dfde5dfd64404d8e7bbb70645703370ec0ea460c4b4512d61d82e593d81d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b763db399f788c3a49a334fd3439a4efd4a4521acc8fb9100189ddba34f8cbf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b763db399f788c3a49a334fd3439a4efd4a4521acc8fb9100189ddba34f8cbf0->enter($__internal_b763db399f788c3a49a334fd3439a4efd4a4521acc8fb9100189ddba34f8cbf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b763db399f788c3a49a334fd3439a4efd4a4521acc8fb9100189ddba34f8cbf0->leave($__internal_b763db399f788c3a49a334fd3439a4efd4a4521acc8fb9100189ddba34f8cbf0_prof);

        
        $__internal_0aa8dfde5dfd64404d8e7bbb70645703370ec0ea460c4b4512d61d82e593d81d->leave($__internal_0aa8dfde5dfd64404d8e7bbb70645703370ec0ea460c4b4512d61d82e593d81d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
