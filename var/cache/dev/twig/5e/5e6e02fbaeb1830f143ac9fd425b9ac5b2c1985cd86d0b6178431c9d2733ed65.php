<?php

/* BloggerBlogBundle:Page:index.html.twig */
class __TwigTemplate_ab547ffab8b10c5bb28e5d26a0e33155b45a17a9a379ada1151e55dbdde9e293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:index.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_404f0092d8169019ae7b7b84a48df2125605a94f429fe7d7f2d47e96c5f6ed48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404f0092d8169019ae7b7b84a48df2125605a94f429fe7d7f2d47e96c5f6ed48->enter($__internal_404f0092d8169019ae7b7b84a48df2125605a94f429fe7d7f2d47e96c5f6ed48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $__internal_2bb12d9b851a31a35a60d1de9eab31276947497dd0c5e5bc23b79c526a25bf04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bb12d9b851a31a35a60d1de9eab31276947497dd0c5e5bc23b79c526a25bf04->enter($__internal_2bb12d9b851a31a35a60d1de9eab31276947497dd0c5e5bc23b79c526a25bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404f0092d8169019ae7b7b84a48df2125605a94f429fe7d7f2d47e96c5f6ed48->leave($__internal_404f0092d8169019ae7b7b84a48df2125605a94f429fe7d7f2d47e96c5f6ed48_prof);

        
        $__internal_2bb12d9b851a31a35a60d1de9eab31276947497dd0c5e5bc23b79c526a25bf04->leave($__internal_2bb12d9b851a31a35a60d1de9eab31276947497dd0c5e5bc23b79c526a25bf04_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c8fbfc03c458776e2d0db44325b3659842dc778edee0e476150e2b329969b10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c8fbfc03c458776e2d0db44325b3659842dc778edee0e476150e2b329969b10->enter($__internal_9c8fbfc03c458776e2d0db44325b3659842dc778edee0e476150e2b329969b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7bd7ec13ffdf198b15de1336d6ca91adf7c938a0dedcebe942211711234a2a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd7ec13ffdf198b15de1336d6ca91adf7c938a0dedcebe942211711234a2a47->enter($__internal_7bd7ec13ffdf198b15de1336d6ca91adf7c938a0dedcebe942211711234a2a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    Blog homepage
";
        
        $__internal_7bd7ec13ffdf198b15de1336d6ca91adf7c938a0dedcebe942211711234a2a47->leave($__internal_7bd7ec13ffdf198b15de1336d6ca91adf7c938a0dedcebe942211711234a2a47_prof);

        
        $__internal_9c8fbfc03c458776e2d0db44325b3659842dc778edee0e476150e2b329969b10->leave($__internal_9c8fbfc03c458776e2d0db44325b3659842dc778edee0e476150e2b329969b10_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/index.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block body %}
    Blog homepage
{% endblock %}", "BloggerBlogBundle:Page:index.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/index.html.twig");
    }
}
