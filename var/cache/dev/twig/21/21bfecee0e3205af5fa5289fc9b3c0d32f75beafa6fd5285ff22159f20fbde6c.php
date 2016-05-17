<?php

/* base.html.twig */
class __TwigTemplate_7e8055e73abf14b474cc1328609035efec268dae3dedf94d3e57810bfbc2766e extends Twig_Template
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
        $__internal_4442f167c4005d6b8334637cacbcbd26e135d571bea30dd1fa15eb3bf77275f8 = $this->env->getExtension("native_profiler");
        $__internal_4442f167c4005d6b8334637cacbcbd26e135d571bea30dd1fa15eb3bf77275f8->enter($__internal_4442f167c4005d6b8334637cacbcbd26e135d571bea30dd1fa15eb3bf77275f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
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
        
        $__internal_4442f167c4005d6b8334637cacbcbd26e135d571bea30dd1fa15eb3bf77275f8->leave($__internal_4442f167c4005d6b8334637cacbcbd26e135d571bea30dd1fa15eb3bf77275f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_87676eb67f72d0ffee1d3ede0b918954421224a6ccd3ecfcf6eedf217884930d = $this->env->getExtension("native_profiler");
        $__internal_87676eb67f72d0ffee1d3ede0b918954421224a6ccd3ecfcf6eedf217884930d->enter($__internal_87676eb67f72d0ffee1d3ede0b918954421224a6ccd3ecfcf6eedf217884930d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_87676eb67f72d0ffee1d3ede0b918954421224a6ccd3ecfcf6eedf217884930d->leave($__internal_87676eb67f72d0ffee1d3ede0b918954421224a6ccd3ecfcf6eedf217884930d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a626169889a0907f5c9113de6ee16bcf668dd27b1209dd0abf663015ffd9468d = $this->env->getExtension("native_profiler");
        $__internal_a626169889a0907f5c9113de6ee16bcf668dd27b1209dd0abf663015ffd9468d->enter($__internal_a626169889a0907f5c9113de6ee16bcf668dd27b1209dd0abf663015ffd9468d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a626169889a0907f5c9113de6ee16bcf668dd27b1209dd0abf663015ffd9468d->leave($__internal_a626169889a0907f5c9113de6ee16bcf668dd27b1209dd0abf663015ffd9468d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bee0f4ca86b2a99d15e91fa75305c96ad1f2d522d71e1cf7bc11d957c2c2df18 = $this->env->getExtension("native_profiler");
        $__internal_bee0f4ca86b2a99d15e91fa75305c96ad1f2d522d71e1cf7bc11d957c2c2df18->enter($__internal_bee0f4ca86b2a99d15e91fa75305c96ad1f2d522d71e1cf7bc11d957c2c2df18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bee0f4ca86b2a99d15e91fa75305c96ad1f2d522d71e1cf7bc11d957c2c2df18->leave($__internal_bee0f4ca86b2a99d15e91fa75305c96ad1f2d522d71e1cf7bc11d957c2c2df18_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0020add2bc55a46d86739d4195a638bcd16c2c77a9182e97fdd63dbba53019e9 = $this->env->getExtension("native_profiler");
        $__internal_0020add2bc55a46d86739d4195a638bcd16c2c77a9182e97fdd63dbba53019e9->enter($__internal_0020add2bc55a46d86739d4195a638bcd16c2c77a9182e97fdd63dbba53019e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0020add2bc55a46d86739d4195a638bcd16c2c77a9182e97fdd63dbba53019e9->leave($__internal_0020add2bc55a46d86739d4195a638bcd16c2c77a9182e97fdd63dbba53019e9_prof);

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
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
