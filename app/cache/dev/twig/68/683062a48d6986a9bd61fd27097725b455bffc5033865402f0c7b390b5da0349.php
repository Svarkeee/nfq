<?php

/* base.html.twig */
class __TwigTemplate_ff3f0b616eb5784431f8008b0bd6a7afe6ecc4a762ef608a0d9a32f7203532d8 extends Twig_Template
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
        $__internal_8f16224ae96fbcd84f9670524d134c3c2d12c806a9eca1f42b171f1587a2e336 = $this->env->getExtension("native_profiler");
        $__internal_8f16224ae96fbcd84f9670524d134c3c2d12c806a9eca1f42b171f1587a2e336->enter($__internal_8f16224ae96fbcd84f9670524d134c3c2d12c806a9eca1f42b171f1587a2e336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8f16224ae96fbcd84f9670524d134c3c2d12c806a9eca1f42b171f1587a2e336->leave($__internal_8f16224ae96fbcd84f9670524d134c3c2d12c806a9eca1f42b171f1587a2e336_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d9a12c761200a8f1ced00bdbcc684d90680c39117803c6939fe198ba2332728 = $this->env->getExtension("native_profiler");
        $__internal_9d9a12c761200a8f1ced00bdbcc684d90680c39117803c6939fe198ba2332728->enter($__internal_9d9a12c761200a8f1ced00bdbcc684d90680c39117803c6939fe198ba2332728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9d9a12c761200a8f1ced00bdbcc684d90680c39117803c6939fe198ba2332728->leave($__internal_9d9a12c761200a8f1ced00bdbcc684d90680c39117803c6939fe198ba2332728_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9636a429b7bc84cf380806cd52422ab82b218be4de4a52164f8d85a82fe49d3 = $this->env->getExtension("native_profiler");
        $__internal_e9636a429b7bc84cf380806cd52422ab82b218be4de4a52164f8d85a82fe49d3->enter($__internal_e9636a429b7bc84cf380806cd52422ab82b218be4de4a52164f8d85a82fe49d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e9636a429b7bc84cf380806cd52422ab82b218be4de4a52164f8d85a82fe49d3->leave($__internal_e9636a429b7bc84cf380806cd52422ab82b218be4de4a52164f8d85a82fe49d3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab31087ba7a47d6da7d8559d2cbe3505c1bc9cfb0b5922e4669d63ac4306edbc = $this->env->getExtension("native_profiler");
        $__internal_ab31087ba7a47d6da7d8559d2cbe3505c1bc9cfb0b5922e4669d63ac4306edbc->enter($__internal_ab31087ba7a47d6da7d8559d2cbe3505c1bc9cfb0b5922e4669d63ac4306edbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ab31087ba7a47d6da7d8559d2cbe3505c1bc9cfb0b5922e4669d63ac4306edbc->leave($__internal_ab31087ba7a47d6da7d8559d2cbe3505c1bc9cfb0b5922e4669d63ac4306edbc_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ec3cfec68a2981be107ae718062fa93d926f468de1b365ffd28c62dd09f20d22 = $this->env->getExtension("native_profiler");
        $__internal_ec3cfec68a2981be107ae718062fa93d926f468de1b365ffd28c62dd09f20d22->enter($__internal_ec3cfec68a2981be107ae718062fa93d926f468de1b365ffd28c62dd09f20d22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ec3cfec68a2981be107ae718062fa93d926f468de1b365ffd28c62dd09f20d22->leave($__internal_ec3cfec68a2981be107ae718062fa93d926f468de1b365ffd28c62dd09f20d22_prof);

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
