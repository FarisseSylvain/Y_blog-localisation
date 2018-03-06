<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d1016fd08ddf20257e0d706e70ef21793052c0e71d719a1e4b2afd56a5320f97 extends Twig_Template
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
        $__internal_445fd61df190ae743fcd66563b1ef499404ed25191c6fc67e243758a3fdb1121 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_445fd61df190ae743fcd66563b1ef499404ed25191c6fc67e243758a3fdb1121->enter($__internal_445fd61df190ae743fcd66563b1ef499404ed25191c6fc67e243758a3fdb1121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d9dae7ad61c773dee758ac9b5dfe2a605b97bb5de3454e95f2cf921373d84651 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9dae7ad61c773dee758ac9b5dfe2a605b97bb5de3454e95f2cf921373d84651->enter($__internal_d9dae7ad61c773dee758ac9b5dfe2a605b97bb5de3454e95f2cf921373d84651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_445fd61df190ae743fcd66563b1ef499404ed25191c6fc67e243758a3fdb1121->leave($__internal_445fd61df190ae743fcd66563b1ef499404ed25191c6fc67e243758a3fdb1121_prof);

        
        $__internal_d9dae7ad61c773dee758ac9b5dfe2a605b97bb5de3454e95f2cf921373d84651->leave($__internal_d9dae7ad61c773dee758ac9b5dfe2a605b97bb5de3454e95f2cf921373d84651_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_918e8c08910657d8cb1d31f79a940f4fbfb846f93445c17e2401d83dbda6fb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918e8c08910657d8cb1d31f79a940f4fbfb846f93445c17e2401d83dbda6fb6c->enter($__internal_918e8c08910657d8cb1d31f79a940f4fbfb846f93445c17e2401d83dbda6fb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ac273c81ce12d35d33dbe85d906fa676c4af85d38da0bfe0aed4ec899b86ef54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac273c81ce12d35d33dbe85d906fa676c4af85d38da0bfe0aed4ec899b86ef54->enter($__internal_ac273c81ce12d35d33dbe85d906fa676c4af85d38da0bfe0aed4ec899b86ef54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_ac273c81ce12d35d33dbe85d906fa676c4af85d38da0bfe0aed4ec899b86ef54->leave($__internal_ac273c81ce12d35d33dbe85d906fa676c4af85d38da0bfe0aed4ec899b86ef54_prof);

        
        $__internal_918e8c08910657d8cb1d31f79a940f4fbfb846f93445c17e2401d83dbda6fb6c->leave($__internal_918e8c08910657d8cb1d31f79a940f4fbfb846f93445c17e2401d83dbda6fb6c_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_15ff94c482d68e62afe9f8f9c65ed17f26bd8dbbf24e4cee1fd7f091b680cca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15ff94c482d68e62afe9f8f9c65ed17f26bd8dbbf24e4cee1fd7f091b680cca0->enter($__internal_15ff94c482d68e62afe9f8f9c65ed17f26bd8dbbf24e4cee1fd7f091b680cca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59345d06e4e22e98868532a2066a027417b030e19a06d657a0ed20ebcb038c65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59345d06e4e22e98868532a2066a027417b030e19a06d657a0ed20ebcb038c65->enter($__internal_59345d06e4e22e98868532a2066a027417b030e19a06d657a0ed20ebcb038c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_59345d06e4e22e98868532a2066a027417b030e19a06d657a0ed20ebcb038c65->leave($__internal_59345d06e4e22e98868532a2066a027417b030e19a06d657a0ed20ebcb038c65_prof);

        
        $__internal_15ff94c482d68e62afe9f8f9c65ed17f26bd8dbbf24e4cee1fd7f091b680cca0->leave($__internal_15ff94c482d68e62afe9f8f9c65ed17f26bd8dbbf24e4cee1fd7f091b680cca0_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_17d28007056af21c9cecbe1ba49b0610d246a69b04e5149a6a1f8247de08f976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17d28007056af21c9cecbe1ba49b0610d246a69b04e5149a6a1f8247de08f976->enter($__internal_17d28007056af21c9cecbe1ba49b0610d246a69b04e5149a6a1f8247de08f976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_70e8111e296b6818755ceeb6c8c063a2910b444521e10d1ff57eb4cb730e890d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e8111e296b6818755ceeb6c8c063a2910b444521e10d1ff57eb4cb730e890d->enter($__internal_70e8111e296b6818755ceeb6c8c063a2910b444521e10d1ff57eb4cb730e890d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_70e8111e296b6818755ceeb6c8c063a2910b444521e10d1ff57eb4cb730e890d->leave($__internal_70e8111e296b6818755ceeb6c8c063a2910b444521e10d1ff57eb4cb730e890d_prof);

        
        $__internal_17d28007056af21c9cecbe1ba49b0610d246a69b04e5149a6a1f8247de08f976->leave($__internal_17d28007056af21c9cecbe1ba49b0610d246a69b04e5149a6a1f8247de08f976_prof);

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
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
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
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
