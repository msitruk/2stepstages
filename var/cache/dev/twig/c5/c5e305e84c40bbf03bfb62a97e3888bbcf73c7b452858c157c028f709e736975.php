<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f926f72210733df9aac45ad33675bf71a73e155f91ef940dce3ccd2538f50250 extends Twig_Template
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
        $__internal_f109366a7cec4e5727134581bd6112f6899b743d9a23057b3f6c3b22b245332d = $this->env->getExtension("native_profiler");
        $__internal_f109366a7cec4e5727134581bd6112f6899b743d9a23057b3f6c3b22b245332d->enter($__internal_f109366a7cec4e5727134581bd6112f6899b743d9a23057b3f6c3b22b245332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f109366a7cec4e5727134581bd6112f6899b743d9a23057b3f6c3b22b245332d->leave($__internal_f109366a7cec4e5727134581bd6112f6899b743d9a23057b3f6c3b22b245332d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ec94f18b46126e5d2bb413130866f97d78710b1aa599b1b83a2cba212ec00f9f = $this->env->getExtension("native_profiler");
        $__internal_ec94f18b46126e5d2bb413130866f97d78710b1aa599b1b83a2cba212ec00f9f->enter($__internal_ec94f18b46126e5d2bb413130866f97d78710b1aa599b1b83a2cba212ec00f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ec94f18b46126e5d2bb413130866f97d78710b1aa599b1b83a2cba212ec00f9f->leave($__internal_ec94f18b46126e5d2bb413130866f97d78710b1aa599b1b83a2cba212ec00f9f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e804c787e73346199a31a6fa81089759c0b965d90f87d3eeb661f38e51ce09f4 = $this->env->getExtension("native_profiler");
        $__internal_e804c787e73346199a31a6fa81089759c0b965d90f87d3eeb661f38e51ce09f4->enter($__internal_e804c787e73346199a31a6fa81089759c0b965d90f87d3eeb661f38e51ce09f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e804c787e73346199a31a6fa81089759c0b965d90f87d3eeb661f38e51ce09f4->leave($__internal_e804c787e73346199a31a6fa81089759c0b965d90f87d3eeb661f38e51ce09f4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e6ec66d19ede0a491d6dfd247003b7d8812b4bfa8983c9600619f6637b4711e5 = $this->env->getExtension("native_profiler");
        $__internal_e6ec66d19ede0a491d6dfd247003b7d8812b4bfa8983c9600619f6637b4711e5->enter($__internal_e6ec66d19ede0a491d6dfd247003b7d8812b4bfa8983c9600619f6637b4711e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e6ec66d19ede0a491d6dfd247003b7d8812b4bfa8983c9600619f6637b4711e5->leave($__internal_e6ec66d19ede0a491d6dfd247003b7d8812b4bfa8983c9600619f6637b4711e5_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
