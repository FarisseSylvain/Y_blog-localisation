<?php

/* ::base.html.twig */
class __TwigTemplate_f3ae93d649a041df6f1cca0d0c1b250b50fa8538ac0ed7553579070137b65974 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90118d3bab1dff5841f6190a6ba38fc00141ee121c8bfb5f7026768dfd1ea11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90118d3bab1dff5841f6190a6ba38fc00141ee121c8bfb5f7026768dfd1ea11b->enter($__internal_90118d3bab1dff5841f6190a6ba38fc00141ee121c8bfb5f7026768dfd1ea11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_6c407605b45d7072a038e6e998ff1179ed6612671c25c287f5e18b2b06fbdd9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c407605b45d7072a038e6e998ff1179ed6612671c25c287f5e18b2b06fbdd9a->enter($__internal_6c407605b45d7072a038e6e998ff1179ed6612671c25c287f5e18b2b06fbdd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - ynovblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>
";
        
        $__internal_90118d3bab1dff5841f6190a6ba38fc00141ee121c8bfb5f7026768dfd1ea11b->leave($__internal_90118d3bab1dff5841f6190a6ba38fc00141ee121c8bfb5f7026768dfd1ea11b_prof);

        
        $__internal_6c407605b45d7072a038e6e998ff1179ed6612671c25c287f5e18b2b06fbdd9a->leave($__internal_6c407605b45d7072a038e6e998ff1179ed6612671c25c287f5e18b2b06fbdd9a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_404ddca3ebc948a6fa3057e6516c99b3000cc00b564d045d430c20bb2eabf54e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_404ddca3ebc948a6fa3057e6516c99b3000cc00b564d045d430c20bb2eabf54e->enter($__internal_404ddca3ebc948a6fa3057e6516c99b3000cc00b564d045d430c20bb2eabf54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_eb62e31f71d098af449b05c2d7a7585e0d3154604cd08695bf3cfe3705cce226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb62e31f71d098af449b05c2d7a7585e0d3154604cd08695bf3cfe3705cce226->enter($__internal_eb62e31f71d098af449b05c2d7a7585e0d3154604cd08695bf3cfe3705cce226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ynovblog";
        
        $__internal_eb62e31f71d098af449b05c2d7a7585e0d3154604cd08695bf3cfe3705cce226->leave($__internal_eb62e31f71d098af449b05c2d7a7585e0d3154604cd08695bf3cfe3705cce226_prof);

        
        $__internal_404ddca3ebc948a6fa3057e6516c99b3000cc00b564d045d430c20bb2eabf54e->leave($__internal_404ddca3ebc948a6fa3057e6516c99b3000cc00b564d045d430c20bb2eabf54e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e226371e7fc9ce3faffd8d82cb8d11b224e868c06603c51ce245bdf2cfc0b36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e226371e7fc9ce3faffd8d82cb8d11b224e868c06603c51ce245bdf2cfc0b36->enter($__internal_0e226371e7fc9ce3faffd8d82cb8d11b224e868c06603c51ce245bdf2cfc0b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_121c0161f3f4ef2554361b4cde10118e7f0b2db9e367f04d4fe0fcb1637a71ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_121c0161f3f4ef2554361b4cde10118e7f0b2db9e367f04d4fe0fcb1637a71ba->enter($__internal_121c0161f3f4ef2554361b4cde10118e7f0b2db9e367f04d4fe0fcb1637a71ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_121c0161f3f4ef2554361b4cde10118e7f0b2db9e367f04d4fe0fcb1637a71ba->leave($__internal_121c0161f3f4ef2554361b4cde10118e7f0b2db9e367f04d4fe0fcb1637a71ba_prof);

        
        $__internal_0e226371e7fc9ce3faffd8d82cb8d11b224e868c06603c51ce245bdf2cfc0b36->leave($__internal_0e226371e7fc9ce3faffd8d82cb8d11b224e868c06603c51ce245bdf2cfc0b36_prof);

    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_c1dd8522dc3fc48a56cf0e0fa305d7a1acc99f619981a175753223da202fe0f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1dd8522dc3fc48a56cf0e0fa305d7a1acc99f619981a175753223da202fe0f9->enter($__internal_c1dd8522dc3fc48a56cf0e0fa305d7a1acc99f619981a175753223da202fe0f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        $__internal_bd7966bc765f00609270e0ac9d387275a7e3c55493894d1c5b6a491e4d9b839f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7966bc765f00609270e0ac9d387275a7e3c55493894d1c5b6a491e4d9b839f->enter($__internal_bd7966bc765f00609270e0ac9d387275a7e3c55493894d1c5b6a491e4d9b839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_bd7966bc765f00609270e0ac9d387275a7e3c55493894d1c5b6a491e4d9b839f->leave($__internal_bd7966bc765f00609270e0ac9d387275a7e3c55493894d1c5b6a491e4d9b839f_prof);

        
        $__internal_c1dd8522dc3fc48a56cf0e0fa305d7a1acc99f619981a175753223da202fe0f9->leave($__internal_c1dd8522dc3fc48a56cf0e0fa305d7a1acc99f619981a175753223da202fe0f9_prof);

    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_49506dd596f3c05dad2ab162c796679072f2e0d17402dbe32b96203421b0d11d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49506dd596f3c05dad2ab162c796679072f2e0d17402dbe32b96203421b0d11d->enter($__internal_49506dd596f3c05dad2ab162c796679072f2e0d17402dbe32b96203421b0d11d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        $__internal_1c39c2ff886b6e83f47c6565e2755d1d17170dedd08221abc7ce486c59d90910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c39c2ff886b6e83f47c6565e2755d1d17170dedd08221abc7ce486c59d90910->enter($__internal_1c39c2ff886b6e83f47c6565e2755d1d17170dedd08221abc7ce486c59d90910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">ynovblog</a>";
        
        $__internal_1c39c2ff886b6e83f47c6565e2755d1d17170dedd08221abc7ce486c59d90910->leave($__internal_1c39c2ff886b6e83f47c6565e2755d1d17170dedd08221abc7ce486c59d90910_prof);

        
        $__internal_49506dd596f3c05dad2ab162c796679072f2e0d17402dbe32b96203421b0d11d->leave($__internal_49506dd596f3c05dad2ab162c796679072f2e0d17402dbe32b96203421b0d11d_prof);

    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_ef9ca585df4f1710176a7c5af20361a2cb8129e3c9eca5d71bd67be7e3ebe7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef9ca585df4f1710176a7c5af20361a2cb8129e3c9eca5d71bd67be7e3ebe7fe->enter($__internal_ef9ca585df4f1710176a7c5af20361a2cb8129e3c9eca5d71bd67be7e3ebe7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        $__internal_1ad1d24f3d068d406d6852d83e04a6d436f033931e9e3d088f81a6c0a24780dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ad1d24f3d068d406d6852d83e04a6d436f033931e9e3d088f81a6c0a24780dd->enter($__internal_1ad1d24f3d068d406d6852d83e04a6d436f033931e9e3d088f81a6c0a24780dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_homepage");
        echo "\">creating a blog in Symfony</a>";
        
        $__internal_1ad1d24f3d068d406d6852d83e04a6d436f033931e9e3d088f81a6c0a24780dd->leave($__internal_1ad1d24f3d068d406d6852d83e04a6d436f033931e9e3d088f81a6c0a24780dd_prof);

        
        $__internal_ef9ca585df4f1710176a7c5af20361a2cb8129e3c9eca5d71bd67be7e3ebe7fe->leave($__internal_ef9ca585df4f1710176a7c5af20361a2cb8129e3c9eca5d71bd67be7e3ebe7fe_prof);

    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecc50d1391d3595460dda23c9ed0353606cc3c08a6b197413dd3ce30409677a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc50d1391d3595460dda23c9ed0353606cc3c08a6b197413dd3ce30409677a8->enter($__internal_ecc50d1391d3595460dda23c9ed0353606cc3c08a6b197413dd3ce30409677a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a76faee88c700347b8bf970743c3cdb1d3508b249c0e8e3b661c20fdde82899c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76faee88c700347b8bf970743c3cdb1d3508b249c0e8e3b661c20fdde82899c->enter($__internal_a76faee88c700347b8bf970743c3cdb1d3508b249c0e8e3b661c20fdde82899c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a76faee88c700347b8bf970743c3cdb1d3508b249c0e8e3b661c20fdde82899c->leave($__internal_a76faee88c700347b8bf970743c3cdb1d3508b249c0e8e3b661c20fdde82899c_prof);

        
        $__internal_ecc50d1391d3595460dda23c9ed0353606cc3c08a6b197413dd3ce30409677a8->leave($__internal_ecc50d1391d3595460dda23c9ed0353606cc3c08a6b197413dd3ce30409677a8_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2f1c573136a35ac25814be67f15f179cd4342e2191641f17a50e7a5d46409084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1c573136a35ac25814be67f15f179cd4342e2191641f17a50e7a5d46409084->enter($__internal_2f1c573136a35ac25814be67f15f179cd4342e2191641f17a50e7a5d46409084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_f0c412669ce2bba860373917e3021e2936a631b6929eadacaa52d9e274db7cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0c412669ce2bba860373917e3021e2936a631b6929eadacaa52d9e274db7cbe->enter($__internal_f0c412669ce2bba860373917e3021e2936a631b6929eadacaa52d9e274db7cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f0c412669ce2bba860373917e3021e2936a631b6929eadacaa52d9e274db7cbe->leave($__internal_f0c412669ce2bba860373917e3021e2936a631b6929eadacaa52d9e274db7cbe_prof);

        
        $__internal_2f1c573136a35ac25814be67f15f179cd4342e2191641f17a50e7a5d46409084->leave($__internal_2f1c573136a35ac25814be67f15f179cd4342e2191641f17a50e7a5d46409084_prof);

    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        $__internal_beb258824c3db91cc46043d9e251877c43f41c69388753755955532a19d8774a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_beb258824c3db91cc46043d9e251877c43f41c69388753755955532a19d8774a->enter($__internal_beb258824c3db91cc46043d9e251877c43f41c69388753755955532a19d8774a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_2921152654eb87cd00ecad586400a9b46795f6d3bffde2679e2b42aa23325fa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2921152654eb87cd00ecad586400a9b46795f6d3bffde2679e2b42aa23325fa4->enter($__internal_2921152654eb87cd00ecad586400a9b46795f6d3bffde2679e2b42aa23325fa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 48
        echo "                    Symfony blog - created by <a href=\"http://www.ynov.com\">ynov</a>
                ";
        
        $__internal_2921152654eb87cd00ecad586400a9b46795f6d3bffde2679e2b42aa23325fa4->leave($__internal_2921152654eb87cd00ecad586400a9b46795f6d3bffde2679e2b42aa23325fa4_prof);

        
        $__internal_beb258824c3db91cc46043d9e251877c43f41c69388753755955532a19d8774a->leave($__internal_beb258824c3db91cc46043d9e251877c43f41c69388753755955532a19d8774a_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b765da00ab8ca8a6d2fba67ea729ff2e8ce18e8a9da613ec8baf49f52c7a1812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b765da00ab8ca8a6d2fba67ea729ff2e8ce18e8a9da613ec8baf49f52c7a1812->enter($__internal_b765da00ab8ca8a6d2fba67ea729ff2e8ce18e8a9da613ec8baf49f52c7a1812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_355ffb50707e00006f780f6d05d5b6100d0a1a715cb8cdfc6c5d6bc019b17eed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_355ffb50707e00006f780f6d05d5b6100d0a1a715cb8cdfc6c5d6bc019b17eed->enter($__internal_355ffb50707e00006f780f6d05d5b6100d0a1a715cb8cdfc6c5d6bc019b17eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_355ffb50707e00006f780f6d05d5b6100d0a1a715cb8cdfc6c5d6bc019b17eed->leave($__internal_355ffb50707e00006f780f6d05d5b6100d0a1a715cb8cdfc6c5d6bc019b17eed_prof);

        
        $__internal_b765da00ab8ca8a6d2fba67ea729ff2e8ce18e8a9da613ec8baf49f52c7a1812->leave($__internal_b765da00ab8ca8a6d2fba67ea729ff2e8ce18e8a9da613ec8baf49f52c7a1812_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 53,  275 => 48,  266 => 47,  249 => 43,  232 => 40,  212 => 35,  192 => 34,  178 => 27,  174 => 26,  170 => 25,  166 => 23,  157 => 22,  145 => 13,  141 => 11,  132 => 10,  114 => 6,  102 => 54,  100 => 53,  95 => 50,  93 => 47,  88 => 44,  86 => 43,  82 => 41,  80 => 40,  72 => 35,  68 => 34,  63 => 31,  61 => 22,  50 => 15,  48 => 10,  41 => 6,  34 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>{% block title %}ynovblog{% endblock %} - ynovblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    {% block navigation %}
                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"{{ path('blogger_blog_homepage') }}\">Home</a></li>
                                <li><a href=\"{{ path('blogger_blog_about') }}\">About</a></li>
                                <li><a href=\"{{ path('blogger_blog_contact') }}\">Contact</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
                </div>

                <hgroup>
                    <h2>{% block blog_title %}<a href=\"{{ path('blogger_blog_homepage') }}\">ynovblog</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"{{ path('blogger_blog_homepage') }}\">creating a blog in Symfony</a>{% endblock %}</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Symfony blog - created by <a href=\"http://www.ynov.com\">ynov</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "D:\\wamp64\\www\\symfony\\Y_blog\\Y_blog\\app/Resources\\views/base.html.twig");
    }
}
