<?php

/* BloggerBlogBundle:Page:contact.html.twig */
class __TwigTemplate_57ac25907b56b06722ea355f002f87473a524b872f653d01650f5192c6e1fc3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Page:contact.html.twig", 2);
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
        $__internal_e19f80c3a4fdac656d1be4f142112209d158d2dc7af73a84c490c273c7b57374 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e19f80c3a4fdac656d1be4f142112209d158d2dc7af73a84c490c273c7b57374->enter($__internal_e19f80c3a4fdac656d1be4f142112209d158d2dc7af73a84c490c273c7b57374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $__internal_c816910b5e4c7243efb0f2c62f23a077432cc64e51b8fa2b733e0a9c2d611724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c816910b5e4c7243efb0f2c62f23a077432cc64e51b8fa2b733e0a9c2d611724->enter($__internal_c816910b5e4c7243efb0f2c62f23a077432cc64e51b8fa2b733e0a9c2d611724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Page:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e19f80c3a4fdac656d1be4f142112209d158d2dc7af73a84c490c273c7b57374->leave($__internal_e19f80c3a4fdac656d1be4f142112209d158d2dc7af73a84c490c273c7b57374_prof);

        
        $__internal_c816910b5e4c7243efb0f2c62f23a077432cc64e51b8fa2b733e0a9c2d611724->leave($__internal_c816910b5e4c7243efb0f2c62f23a077432cc64e51b8fa2b733e0a9c2d611724_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fca0f346a8e40caf2ebc958582e16d61357c3c773529133fd95117909e43932 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fca0f346a8e40caf2ebc958582e16d61357c3c773529133fd95117909e43932->enter($__internal_0fca0f346a8e40caf2ebc958582e16d61357c3c773529133fd95117909e43932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ff3584729a1f3319f439dfbd198ffc047b3d64cc92380d4571662e31f6398a5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff3584729a1f3319f439dfbd198ffc047b3d64cc92380d4571662e31f6398a5c->enter($__internal_ff3584729a1f3319f439dfbd198ffc047b3d64cc92380d4571662e31f6398a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_ff3584729a1f3319f439dfbd198ffc047b3d64cc92380d4571662e31f6398a5c->leave($__internal_ff3584729a1f3319f439dfbd198ffc047b3d64cc92380d4571662e31f6398a5c_prof);

        
        $__internal_0fca0f346a8e40caf2ebc958582e16d61357c3c773529133fd95117909e43932->leave($__internal_0fca0f346a8e40caf2ebc958582e16d61357c3c773529133fd95117909e43932_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e4cc9cb4dabb236605033200076927273040c6cb547ba6d402f2f1aef292c31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e4cc9cb4dabb236605033200076927273040c6cb547ba6d402f2f1aef292c31->enter($__internal_6e4cc9cb4dabb236605033200076927273040c6cb547ba6d402f2f1aef292c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3271d7febac06f2bbb39c6ff6f5601c5d35a4602a08a4bf7be354b442641599e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3271d7febac06f2bbb39c6ff6f5601c5d35a4602a08a4bf7be354b442641599e->enter($__internal_3271d7febac06f2bbb39c6ff6f5601c5d35a4602a08a4bf7be354b442641599e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contact ynovblog</h1>
    </header>

    <p>Want to contact ynovblog?</p>
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "blogger")));
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
      ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
      ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
      ";
        // line 16
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject", array()), 'row');
        echo "
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "body", array()), 'row');
        echo "
      ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'widget');
        echo "

      ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_3271d7febac06f2bbb39c6ff6f5601c5d35a4602a08a4bf7be354b442641599e->leave($__internal_3271d7febac06f2bbb39c6ff6f5601c5d35a4602a08a4bf7be354b442641599e_prof);

        
        $__internal_6e4cc9cb4dabb236605033200076927273040c6cb547ba6d402f2f1aef292c31->leave($__internal_6e4cc9cb4dabb236605033200076927273040c6cb547ba6d402f2f1aef292c31_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Page:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 21,  104 => 20,  99 => 18,  95 => 17,  91 => 16,  87 => 15,  83 => 14,  79 => 13,  75 => 12,  68 => 7,  59 => 6,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Page/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contact{% endblock%}

{% block body %}
    <header>
        <h1>Contact ynovblog</h1>
    </header>

    <p>Want to contact ynovblog?</p>
    {{ form_start(form, { 'attr': { 'class': 'blogger' }}) }}
      {{ form_errors(form) }}
      {{ form_row(form.name) }}
      {{ form_row(form.email) }}
      {{ form_row(form.subject) }}
      {{ form_row(form.body) }}
      {{ form_widget(form.submit) }}

      {{ form_rest(form) }}
    {{ form_end(form) }}
{% endblock %}
", "BloggerBlogBundle:Page:contact.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\src\\Blogger\\BlogBundle/Resources/views/Page/contact.html.twig");
    }
}
