<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aa62819f362d0a76116020e6e3d91cf6a21d67ad0293ab7b64b00c53f9583a21 extends Twig_Template
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
        $__internal_4b9587dc176913dca9f2c4951bcc1e880ecf83b14c4468c5d60e90cb26260258 = $this->env->getExtension("native_profiler");
        $__internal_4b9587dc176913dca9f2c4951bcc1e880ecf83b14c4468c5d60e90cb26260258->enter($__internal_4b9587dc176913dca9f2c4951bcc1e880ecf83b14c4468c5d60e90cb26260258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b9587dc176913dca9f2c4951bcc1e880ecf83b14c4468c5d60e90cb26260258->leave($__internal_4b9587dc176913dca9f2c4951bcc1e880ecf83b14c4468c5d60e90cb26260258_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c5465e5e41ebbbc8300047b78538fdf1ee874b6bf214596124aa64573009dbe = $this->env->getExtension("native_profiler");
        $__internal_5c5465e5e41ebbbc8300047b78538fdf1ee874b6bf214596124aa64573009dbe->enter($__internal_5c5465e5e41ebbbc8300047b78538fdf1ee874b6bf214596124aa64573009dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c5465e5e41ebbbc8300047b78538fdf1ee874b6bf214596124aa64573009dbe->leave($__internal_5c5465e5e41ebbbc8300047b78538fdf1ee874b6bf214596124aa64573009dbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ddb572f8dc466cbc6c48f2083ab7e6ccc693dcb43a7f5a45b16037fd2ea6ef6e = $this->env->getExtension("native_profiler");
        $__internal_ddb572f8dc466cbc6c48f2083ab7e6ccc693dcb43a7f5a45b16037fd2ea6ef6e->enter($__internal_ddb572f8dc466cbc6c48f2083ab7e6ccc693dcb43a7f5a45b16037fd2ea6ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ddb572f8dc466cbc6c48f2083ab7e6ccc693dcb43a7f5a45b16037fd2ea6ef6e->leave($__internal_ddb572f8dc466cbc6c48f2083ab7e6ccc693dcb43a7f5a45b16037fd2ea6ef6e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e88d236320009ac38c907c8cbdc9e38d56cdcbac66454dd8440e0455d456b97b = $this->env->getExtension("native_profiler");
        $__internal_e88d236320009ac38c907c8cbdc9e38d56cdcbac66454dd8440e0455d456b97b->enter($__internal_e88d236320009ac38c907c8cbdc9e38d56cdcbac66454dd8440e0455d456b97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e88d236320009ac38c907c8cbdc9e38d56cdcbac66454dd8440e0455d456b97b->leave($__internal_e88d236320009ac38c907c8cbdc9e38d56cdcbac66454dd8440e0455d456b97b_prof);

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
