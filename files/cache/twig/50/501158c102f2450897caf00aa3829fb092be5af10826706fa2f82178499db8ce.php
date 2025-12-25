<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_090c2f676ac301e6567ff0832365c46c3b85ffe32108969e8d40a631c60c5fd4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'compatibility' => [$this, 'block_compatibility'],
            'jquery_core' => [$this, 'block_jquery_core'],
            'bootstrap' => [$this, 'block_bootstrap'],
            'jsAddons' => [$this, 'block_jsAddons'],
            'css_addons' => [$this, 'block_css_addons'],
            'locale_calendar' => [$this, 'block_locale_calendar'],
            'pagehead' => [$this, 'block_pagehead'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo Layout::lang_code();
        echo "\">

<head>
     ";
        // line 5
        $this->displayBlock('compatibility', $context, $blocks);
        // line 8
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 11
        echo Layout::title();
        echo "</title>
    <!-- zone  -->
    ";
        // line 13
        echo Layout::zone("meta");
        echo "
    <!-- meta  -->
    ";
        // line 15
        echo Layout::meta();
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 16
        echo Layout::path();
        echo "images/favicon.png\" type=\"image/png\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 17
        echo Layout::path();
        echo "images/favicon.ico\"/>

    <!-- reset and font stylesheet -->
    ";
        // line 20
        echo Layout::resetter();
        echo "

    <!-- JQuery, Bootstrap  -->
    ";
        // line 23
        $this->displayBlock('jquery_core', $context, $blocks);
        // line 26
        echo "
    <script type=\"text/javascript\">
        window.frontend = {};
        window.frontend.config = JSON.parse('";
        // line 29
        echo ($context["clientConfig"] ?? null);
        echo "');

    </script>

    ";
        // line 33
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 38
        echo "

    ";
        // line 40
        $this->displayBlock('jsAddons', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('css_addons', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('locale_calendar', $context, $blocks);
        // line 54
        echo "


    <!-- specific stylesheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 58
        echo Layout::path();
        echo "style/base.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 59
        echo Layout::path();
        echo "style/responsive.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>

    <!-- to be eliminated -->
    ";
        // line 62
        echo YuiLib::load();
        echo "
    <!-- printer stylesheet-->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 64
        echo Layout::path();
        echo "style/print.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\" media=\"print\"/>
    <!-- Page Head area -->
    ";
        // line 66
        echo Layout::zone("page_head");
        echo "
    ";
        // line 67
        echo Layout::rtl();
        echo "
    ";
        // line 68
        $this->displayBlock('pagehead', $context, $blocks);
        // line 70
        echo "

    <!-- Custom css area -->
    ";
        // line 73
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 75
        echo "
    <!-- Custom Javascripts area -->

    <script type=\"text/javascript\" src=\"";
        // line 78
        echo Layout::path();
        echo "script/tabnav.js?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 79
        echo Layout::path();
        echo "static/main.js?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"></script>

    ";
        // line 81
        $this->displayBlock('javascript', $context, $blocks);
        // line 83
        echo "

    <!-- Restyling -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo Layout::path();
        echo "static/main.";
        echo Layout::highContrastCss();
        echo "min.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\">
    <!--
    To use or edit the not minified css uncomment this portion of code
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo Layout::path();
        echo "static/main.css\">
    -->
    ";
        // line 91
        if (array_key_exists("custom_css_path", $context)) {
            // line 92
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_css_path"] ?? null), "html", null, true);
            echo "?v=";
            echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
            echo "\" />
    ";
        }
        // line 94
        echo "</head>
<body class=\"yui-skin-docebo yui-skin-sam\">

    ";
        // line 98
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "        ";
        echo Layout::analytics();
        echo "
    ";
        // line 102
        echo "</body>
</html>";
    }

    // line 5
    public function block_compatibility($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    \t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
     ";
    }

    // line 23
    public function block_jquery_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        echo "        ";
        echo ($context["jqueryLib"] ?? null);
        echo "
    ";
    }

    // line 33
    public function block_bootstrap($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 34
        echo "    ";
        echo ($context["boostrap"] ?? null);
        echo "

    <script>\$.fn.bootstrapBtn = \$.fn.button.noConflict();</script>
    ";
    }

    // line 40
    public function block_jsAddons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "    <!-- addons: js -->
    ";
        // line 42
        echo ($context["jsAddons"] ?? null);
        echo "
    ";
    }

    // line 45
    public function block_css_addons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "    <!-- addons: css -->
    ";
        // line 47
        echo ($context["cssAddons"] ?? null);
        echo "
    ";
    }

    // line 50
    public function block_locale_calendar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <!-- locale data format -->
    ";
        // line 52
        echo ($context["locale_calendar"] ?? null);
        echo "
    ";
    }

    // line 68
    public function block_pagehead($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    ";
    }

    // line 73
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "    ";
    }

    // line 81
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 82
        echo "    ";
    }

    // line 98
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 99
        echo "    ";
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
        return array (  342 => 99,  338 => 98,  334 => 82,  330 => 81,  326 => 74,  322 => 73,  318 => 69,  314 => 68,  308 => 52,  305 => 51,  301 => 50,  295 => 47,  292 => 46,  288 => 45,  282 => 42,  279 => 41,  275 => 40,  266 => 34,  262 => 33,  255 => 24,  251 => 23,  246 => 6,  242 => 5,  237 => 102,  232 => 100,  229 => 98,  224 => 94,  216 => 92,  214 => 91,  209 => 89,  199 => 86,  194 => 83,  192 => 81,  185 => 79,  179 => 78,  174 => 75,  172 => 73,  167 => 70,  165 => 68,  161 => 67,  157 => 66,  150 => 64,  145 => 62,  137 => 59,  131 => 58,  125 => 54,  123 => 50,  120 => 49,  118 => 45,  115 => 44,  113 => 40,  109 => 38,  107 => 33,  100 => 29,  95 => 26,  93 => 23,  87 => 20,  81 => 17,  77 => 16,  73 => 15,  68 => 13,  63 => 11,  58 => 8,  56 => 5,  50 => 2,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/base.html.twig");
    }
}
