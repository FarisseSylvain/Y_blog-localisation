<?php

/* BloggerBlogBundle:Page:about.html.twig */
class __TwigTemplate_3a421fd16a74ce4ffd76bdc42bfce1b613c9042932ba36e0b205c43884a3d647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:about.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afac409d9cc6859aebde1b8d97e5976673de99163dd5756b906ba515e0eb491b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afac409d9cc6859aebde1b8d97e5976673de99163dd5756b906ba515e0eb491b->enter($__internal_afac409d9cc6859aebde1b8d97e5976673de99163dd5756b906ba515e0eb491b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $__internal_46771b69a88fcdb41069c6e22ab227bd28313f58d0b105b881b6bfad87bd8aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46771b69a88fcdb41069c6e22ab227bd28313f58d0b105b881b6bfad87bd8aea->enter($__internal_46771b69a88fcdb41069c6e22ab227bd28313f58d0b105b881b6bfad87bd8aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afac409d9cc6859aebde1b8d97e5976673de99163dd5756b906ba515e0eb491b->leave($__internal_afac409d9cc6859aebde1b8d97e5976673de99163dd5756b906ba515e0eb491b_prof);

        
        $__internal_46771b69a88fcdb41069c6e22ab227bd28313f58d0b105b881b6bfad87bd8aea->leave($__internal_46771b69a88fcdb41069c6e22ab227bd28313f58d0b105b881b6bfad87bd8aea_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ac230e21d6f95fddc787e54d1ec13010f8d7aabffedccd2ff06834f03850dbc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ac230e21d6f95fddc787e54d1ec13010f8d7aabffedccd2ff06834f03850dbc->enter($__internal_0ac230e21d6f95fddc787e54d1ec13010f8d7aabffedccd2ff06834f03850dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6026e3667f0089cbcda8999a5faae61027a0c59ef6e0518df7bb847a6f1bd1f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6026e3667f0089cbcda8999a5faae61027a0c59ef6e0518df7bb847a6f1bd1f0->enter($__internal_6026e3667f0089cbcda8999a5faae61027a0c59ef6e0518df7bb847a6f1bd1f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "About";
        
        $__internal_6026e3667f0089cbcda8999a5faae61027a0c59ef6e0518df7bb847a6f1bd1f0->leave($__internal_6026e3667f0089cbcda8999a5faae61027a0c59ef6e0518df7bb847a6f1bd1f0_prof);

        
        $__internal_0ac230e21d6f95fddc787e54d1ec13010f8d7aabffedccd2ff06834f03850dbc->leave($__internal_0ac230e21d6f95fddc787e54d1ec13010f8d7aabffedccd2ff06834f03850dbc_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_00c24b5d943f74d0c1b055dce30b10e34578be8b949994c5443841076ad41924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00c24b5d943f74d0c1b055dce30b10e34578be8b949994c5443841076ad41924->enter($__internal_00c24b5d943f74d0c1b055dce30b10e34578be8b949994c5443841076ad41924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_799e9e4d08c63b75c660b5a773ed53a6c6055e1e82cf4d636c09fbe970ee147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e9e4d08c63b75c660b5a773ed53a6c6055e1e82cf4d636c09fbe970ee147c->enter($__internal_799e9e4d08c63b75c660b5a773ed53a6c6055e1e82cf4d636c09fbe970ee147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
";
        
        $__internal_799e9e4d08c63b75c660b5a773ed53a6c6055e1e82cf4d636c09fbe970ee147c->leave($__internal_799e9e4d08c63b75c660b5a773ed53a6c6055e1e82cf4d636c09fbe970ee147c_prof);

        
        $__internal_00c24b5d943f74d0c1b055dce30b10e34578be8b949994c5443841076ad41924->leave($__internal_00c24b5d943f74d0c1b055dce30b10e34578be8b949994c5443841076ad41924_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/about.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}About{% endblock%}

{% block body %}
    <header>
        <h1>About symblog</h1>
    </header>
    <article>
        <p>Donec imperdiet ante sed diam consequat et dictum erat faucibus. Aliquam sit
        amet vehicula leo. Morbi urna dui, tempor ac posuere et, rutrum at dui.
        Curabitur neque quam, ultricies ut imperdiet id, ornare varius arcu. Ut congue
        urna sit amet tellus malesuada nec elementum risus molestie. Donec gravida
        tellus sed tortor adipiscing fringilla. Donec nulla mauris, mollis egestas
        condimentum laoreet, lacinia vel lorem. Morbi vitae justo sit amet felis
        vehicula commodo a placerat lacus. Mauris at est elit, nec vehicula urna. Duis a
        lacus nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
        posuere cubilia Curae.</p>
    </article>
{% endblock %}", "BloggerBlogBundle:Page:about.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/about.html.twig");
    }
}
