<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_9fe237a296649a71b724edbad6a5f1a9a18b1f5b526b4eafd43cb03fe3cf67bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fe237a296649a71b724edbad6a5f1a9a18b1f5b526b4eafd43cb03fe3cf67bc->enter($__internal_9fe237a296649a71b724edbad6a5f1a9a18b1f5b526b4eafd43cb03fe3cf67bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6ba65a89b32ef8e1e0b525ed8472e6754cd990efd55428b9a08b601f5955c1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba65a89b32ef8e1e0b525ed8472e6754cd990efd55428b9a08b601f5955c1ab->enter($__internal_6ba65a89b32ef8e1e0b525ed8472e6754cd990efd55428b9a08b601f5955c1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fe237a296649a71b724edbad6a5f1a9a18b1f5b526b4eafd43cb03fe3cf67bc->leave($__internal_9fe237a296649a71b724edbad6a5f1a9a18b1f5b526b4eafd43cb03fe3cf67bc_prof);

        
        $__internal_6ba65a89b32ef8e1e0b525ed8472e6754cd990efd55428b9a08b601f5955c1ab->leave($__internal_6ba65a89b32ef8e1e0b525ed8472e6754cd990efd55428b9a08b601f5955c1ab_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d291b2af9ba0af5566393c32ce2c8a0204a9c411ca098e4e9b846ac290819acf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d291b2af9ba0af5566393c32ce2c8a0204a9c411ca098e4e9b846ac290819acf->enter($__internal_d291b2af9ba0af5566393c32ce2c8a0204a9c411ca098e4e9b846ac290819acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d985bde4551d63a13615bd46ac6e1d7b31b4ccbab38bc5c3060d425b87fdf905 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d985bde4551d63a13615bd46ac6e1d7b31b4ccbab38bc5c3060d425b87fdf905->enter($__internal_d985bde4551d63a13615bd46ac6e1d7b31b4ccbab38bc5c3060d425b87fdf905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d985bde4551d63a13615bd46ac6e1d7b31b4ccbab38bc5c3060d425b87fdf905->leave($__internal_d985bde4551d63a13615bd46ac6e1d7b31b4ccbab38bc5c3060d425b87fdf905_prof);

        
        $__internal_d291b2af9ba0af5566393c32ce2c8a0204a9c411ca098e4e9b846ac290819acf->leave($__internal_d291b2af9ba0af5566393c32ce2c8a0204a9c411ca098e4e9b846ac290819acf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f853a0dc1ee3580d2cda553f03e52d37c5782f1ad71e41bed41e99c6fe8dcd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f853a0dc1ee3580d2cda553f03e52d37c5782f1ad71e41bed41e99c6fe8dcd6->enter($__internal_1f853a0dc1ee3580d2cda553f03e52d37c5782f1ad71e41bed41e99c6fe8dcd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_72e65cb354e784e943affe5872509f47db3e6570ce06903ed577873d95e54f44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e65cb354e784e943affe5872509f47db3e6570ce06903ed577873d95e54f44->enter($__internal_72e65cb354e784e943affe5872509f47db3e6570ce06903ed577873d95e54f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_72e65cb354e784e943affe5872509f47db3e6570ce06903ed577873d95e54f44->leave($__internal_72e65cb354e784e943affe5872509f47db3e6570ce06903ed577873d95e54f44_prof);

        
        $__internal_1f853a0dc1ee3580d2cda553f03e52d37c5782f1ad71e41bed41e99c6fe8dcd6->leave($__internal_1f853a0dc1ee3580d2cda553f03e52d37c5782f1ad71e41bed41e99c6fe8dcd6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2f0dfc395574fc74dd69f87139641c9411c59416fc1f1538ac26817cdd94508e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f0dfc395574fc74dd69f87139641c9411c59416fc1f1538ac26817cdd94508e->enter($__internal_2f0dfc395574fc74dd69f87139641c9411c59416fc1f1538ac26817cdd94508e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bf9a4ec6928df8a8072b3f64e11e53f9e55647de6921ff857c8840772487ddc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf9a4ec6928df8a8072b3f64e11e53f9e55647de6921ff857c8840772487ddc5->enter($__internal_bf9a4ec6928df8a8072b3f64e11e53f9e55647de6921ff857c8840772487ddc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_bf9a4ec6928df8a8072b3f64e11e53f9e55647de6921ff857c8840772487ddc5->leave($__internal_bf9a4ec6928df8a8072b3f64e11e53f9e55647de6921ff857c8840772487ddc5_prof);

        
        $__internal_2f0dfc395574fc74dd69f87139641c9411c59416fc1f1538ac26817cdd94508e->leave($__internal_2f0dfc395574fc74dd69f87139641c9411c59416fc1f1538ac26817cdd94508e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
