<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_73e300d7a510315298b1348309ab0f265180ff04455c68840d5259cec564dbfc extends Twig_Template
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
        $__internal_b82545436327975be1f8d6cad25b744aa258411bf8ee120d278cf4264f602241 = $this->env->getExtension("native_profiler");
        $__internal_b82545436327975be1f8d6cad25b744aa258411bf8ee120d278cf4264f602241->enter($__internal_b82545436327975be1f8d6cad25b744aa258411bf8ee120d278cf4264f602241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b82545436327975be1f8d6cad25b744aa258411bf8ee120d278cf4264f602241->leave($__internal_b82545436327975be1f8d6cad25b744aa258411bf8ee120d278cf4264f602241_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ad63a0073167310c787692459d47adaf028b474243b9efdcc94ab993b2c91a09 = $this->env->getExtension("native_profiler");
        $__internal_ad63a0073167310c787692459d47adaf028b474243b9efdcc94ab993b2c91a09->enter($__internal_ad63a0073167310c787692459d47adaf028b474243b9efdcc94ab993b2c91a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ad63a0073167310c787692459d47adaf028b474243b9efdcc94ab993b2c91a09->leave($__internal_ad63a0073167310c787692459d47adaf028b474243b9efdcc94ab993b2c91a09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_edcc7c62d9c8a2cf7589d9b03d19a56e01a4c49e81200ca2b0086412c356b673 = $this->env->getExtension("native_profiler");
        $__internal_edcc7c62d9c8a2cf7589d9b03d19a56e01a4c49e81200ca2b0086412c356b673->enter($__internal_edcc7c62d9c8a2cf7589d9b03d19a56e01a4c49e81200ca2b0086412c356b673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_edcc7c62d9c8a2cf7589d9b03d19a56e01a4c49e81200ca2b0086412c356b673->leave($__internal_edcc7c62d9c8a2cf7589d9b03d19a56e01a4c49e81200ca2b0086412c356b673_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4603bcacb5c4b1b457fb715b1cb12e8ce96dcbebe923e922afac875bf9e7f773 = $this->env->getExtension("native_profiler");
        $__internal_4603bcacb5c4b1b457fb715b1cb12e8ce96dcbebe923e922afac875bf9e7f773->enter($__internal_4603bcacb5c4b1b457fb715b1cb12e8ce96dcbebe923e922afac875bf9e7f773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4603bcacb5c4b1b457fb715b1cb12e8ce96dcbebe923e922afac875bf9e7f773->leave($__internal_4603bcacb5c4b1b457fb715b1cb12e8ce96dcbebe923e922afac875bf9e7f773_prof);

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
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
