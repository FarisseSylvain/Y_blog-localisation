<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_c1271c4e35c76d8551456b09cc5fe4c53c52f2e505b31f444dcf3cf5f3d7640f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "BloggerBlogBundle::layout.html.twig", 2);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9a18dfd3fccb8df61c69020b079997b45c18d9bb584a1287a50c942d10d4385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a18dfd3fccb8df61c69020b079997b45c18d9bb584a1287a50c942d10d4385->enter($__internal_a9a18dfd3fccb8df61c69020b079997b45c18d9bb584a1287a50c942d10d4385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $__internal_06b5627b6632dce68530a6d5ff6ce5a0774617026fdf74ecbcd6e146f70c4b22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06b5627b6632dce68530a6d5ff6ce5a0774617026fdf74ecbcd6e146f70c4b22->enter($__internal_06b5627b6632dce68530a6d5ff6ce5a0774617026fdf74ecbcd6e146f70c4b22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9a18dfd3fccb8df61c69020b079997b45c18d9bb584a1287a50c942d10d4385->leave($__internal_a9a18dfd3fccb8df61c69020b079997b45c18d9bb584a1287a50c942d10d4385_prof);

        
        $__internal_06b5627b6632dce68530a6d5ff6ce5a0774617026fdf74ecbcd6e146f70c4b22->leave($__internal_06b5627b6632dce68530a6d5ff6ce5a0774617026fdf74ecbcd6e146f70c4b22_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9e40afbba890f174725bc5bf4caf36888a5f0eaa894aeb5c0fb8003074212d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9e40afbba890f174725bc5bf4caf36888a5f0eaa894aeb5c0fb8003074212d8->enter($__internal_e9e40afbba890f174725bc5bf4caf36888a5f0eaa894aeb5c0fb8003074212d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_da2d7d381a05d2bc6d100ad8b8d9a0ae02604d6bb72f54610c7e71b0f64f0fa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2d7d381a05d2bc6d100ad8b8d9a0ae02604d6bb72f54610c7e71b0f64f0fa3->enter($__internal_da2d7d381a05d2bc6d100ad8b8d9a0ae02604d6bb72f54610c7e71b0f64f0fa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "  ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
  <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\"/>
";
        
        $__internal_da2d7d381a05d2bc6d100ad8b8d9a0ae02604d6bb72f54610c7e71b0f64f0fa3->leave($__internal_da2d7d381a05d2bc6d100ad8b8d9a0ae02604d6bb72f54610c7e71b0f64f0fa3_prof);

        
        $__internal_e9e40afbba890f174725bc5bf4caf36888a5f0eaa894aeb5c0fb8003074212d8->leave($__internal_e9e40afbba890f174725bc5bf4caf36888a5f0eaa894aeb5c0fb8003074212d8_prof);

    }

    // line 9
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_00070ba6d25e6db76d155748498dede96b1dca44a9d594ee80d45ca207e4ff0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00070ba6d25e6db76d155748498dede96b1dca44a9d594ee80d45ca207e4ff0a->enter($__internal_00070ba6d25e6db76d155748498dede96b1dca44a9d594ee80d45ca207e4ff0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_365410c2ca4fd92fa1d243588520b428a2a2fa3e6ab0562086aa533ccf5cb567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365410c2ca4fd92fa1d243588520b428a2a2fa3e6ab0562086aa533ccf5cb567->enter($__internal_365410c2ca4fd92fa1d243588520b428a2a2fa3e6ab0562086aa533ccf5cb567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 10
        echo "    Sidebar content
";
        
        $__internal_365410c2ca4fd92fa1d243588520b428a2a2fa3e6ab0562086aa533ccf5cb567->leave($__internal_365410c2ca4fd92fa1d243588520b428a2a2fa3e6ab0562086aa533ccf5cb567_prof);

        
        $__internal_00070ba6d25e6db76d155748498dede96b1dca44a9d594ee80d45ca207e4ff0a->leave($__internal_00070ba6d25e6db76d155748498dede96b1dca44a9d594ee80d45ca207e4ff0a_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  67 => 9,  55 => 6,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/layout.html.twig #}
{% extends '::base.html.twig' %}

{% block stylesheets %}
  {{ parent() }}
  <link href=\"{{ asset('bundles/bloggerblog/css/blog.css')}}\" type=\"text/css\" rel=\"stylesheet\"/>
{% endblock %}

{% block sidebar %}
    Sidebar content
{% endblock %}
", "BloggerBlogBundle::layout.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/layout.html.twig");
    }
}
