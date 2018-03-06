<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_45210378ad38c86f804adad8123ee2e01207f245b419baad86a07fba02c444de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b9a0df0b9fda3faaa2942ebdde55980a37a1c4c1cf3cfbcbf74eee6c96b5cbd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a0df0b9fda3faaa2942ebdde55980a37a1c4c1cf3cfbcbf74eee6c96b5cbd6->enter($__internal_b9a0df0b9fda3faaa2942ebdde55980a37a1c4c1cf3cfbcbf74eee6c96b5cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_0157608f4793c866223594390dbf4db2ea0d13d8c8db0526d3787d420f22abda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0157608f4793c866223594390dbf4db2ea0d13d8c8db0526d3787d420f22abda->enter($__internal_0157608f4793c866223594390dbf4db2ea0d13d8c8db0526d3787d420f22abda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_b9a0df0b9fda3faaa2942ebdde55980a37a1c4c1cf3cfbcbf74eee6c96b5cbd6->leave($__internal_b9a0df0b9fda3faaa2942ebdde55980a37a1c4c1cf3cfbcbf74eee6c96b5cbd6_prof);

        
        $__internal_0157608f4793c866223594390dbf4db2ea0d13d8c8db0526d3787d420f22abda->leave($__internal_0157608f4793c866223594390dbf4db2ea0d13d8c8db0526d3787d420f22abda_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cc49eac823bfcfea1fae3000852fac8683288b5a2c1576fbbb1c2ac30503fed0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc49eac823bfcfea1fae3000852fac8683288b5a2c1576fbbb1c2ac30503fed0->enter($__internal_cc49eac823bfcfea1fae3000852fac8683288b5a2c1576fbbb1c2ac30503fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1e86b26f098d3b6fa7d6cba507ffa8acbd8ec8796bbd8f67f488058d1531051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1e86b26f098d3b6fa7d6cba507ffa8acbd8ec8796bbd8f67f488058d1531051->enter($__internal_d1e86b26f098d3b6fa7d6cba507ffa8acbd8ec8796bbd8f67f488058d1531051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d1e86b26f098d3b6fa7d6cba507ffa8acbd8ec8796bbd8f67f488058d1531051->leave($__internal_d1e86b26f098d3b6fa7d6cba507ffa8acbd8ec8796bbd8f67f488058d1531051_prof);

        
        $__internal_cc49eac823bfcfea1fae3000852fac8683288b5a2c1576fbbb1c2ac30503fed0->leave($__internal_cc49eac823bfcfea1fae3000852fac8683288b5a2c1576fbbb1c2ac30503fed0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_418330fa74b0a45485c4280e4d9bdd202cb97749b0b5dbf692efaf0e3e24794b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418330fa74b0a45485c4280e4d9bdd202cb97749b0b5dbf692efaf0e3e24794b->enter($__internal_418330fa74b0a45485c4280e4d9bdd202cb97749b0b5dbf692efaf0e3e24794b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e1ecc608579159daf553dc5e2eb3b3c5c1f2e18cebf81893e4467e4e31066145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1ecc608579159daf553dc5e2eb3b3c5c1f2e18cebf81893e4467e4e31066145->enter($__internal_e1ecc608579159daf553dc5e2eb3b3c5c1f2e18cebf81893e4467e4e31066145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e1ecc608579159daf553dc5e2eb3b3c5c1f2e18cebf81893e4467e4e31066145->leave($__internal_e1ecc608579159daf553dc5e2eb3b3c5c1f2e18cebf81893e4467e4e31066145_prof);

        
        $__internal_418330fa74b0a45485c4280e4d9bdd202cb97749b0b5dbf692efaf0e3e24794b->leave($__internal_418330fa74b0a45485c4280e4d9bdd202cb97749b0b5dbf692efaf0e3e24794b_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc70369e2c575f997d5099f34bc723b1511c747f653c89b31634cd0831e9d3cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc70369e2c575f997d5099f34bc723b1511c747f653c89b31634cd0831e9d3cb->enter($__internal_bc70369e2c575f997d5099f34bc723b1511c747f653c89b31634cd0831e9d3cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_59c1e500cc625d735938a37f3369531fe7152541302f9ad532143645a1df6393 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c1e500cc625d735938a37f3369531fe7152541302f9ad532143645a1df6393->enter($__internal_59c1e500cc625d735938a37f3369531fe7152541302f9ad532143645a1df6393_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_59c1e500cc625d735938a37f3369531fe7152541302f9ad532143645a1df6393->leave($__internal_59c1e500cc625d735938a37f3369531fe7152541302f9ad532143645a1df6393_prof);

        
        $__internal_bc70369e2c575f997d5099f34bc723b1511c747f653c89b31634cd0831e9d3cb->leave($__internal_bc70369e2c575f997d5099f34bc723b1511c747f653c89b31634cd0831e9d3cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
