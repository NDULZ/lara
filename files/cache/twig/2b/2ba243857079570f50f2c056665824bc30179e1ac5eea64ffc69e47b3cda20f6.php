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

/* home.html.twig */
class __TwigTemplate_bc205e70e84ef1327a4ef8a46a8f39a9d7f603f583483c7f9fd45b015889bd99 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'jquery_core' => [$this, 'block_jquery_core'],
            'bootstrap' => [$this, 'block_bootstrap'],
            'jquery_addons' => [$this, 'block_jquery_addons'],
            'css_addons' => [$this, 'block_css_addons'],
            'locale_calendar' => [$this, 'block_locale_calendar'],
            'homeContent' => [$this, 'block_homeContent'],
            'homeFooter' => [$this, 'block_homeFooter'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"";
        // line 2
        echo Layout::lang_code();
        echo "\" lang=\"";
        echo Layout::lang_code();
        echo "\" >
<head>
    <!--Fix funzionamento scorm su IE9-->
    <meta http-equiv=\"x-ua-compatible\" content=\"IE=11\"/>
    <!--END -->

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <title>";
        // line 10
        echo Layout::title();
        echo "</title>
    ";
        // line 11
        echo Layout::zone("meta");
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo Layout::path();
        echo "images/favicon.png\" type=\"image/png\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo Layout::path();
        echo "images/favicon.ico\"/>
    <!-- reset and font stylesheet -->
    ";
        // line 15
        echo Layout::resetter();
        echo "
    <!-- common stylesheet -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo Layout::path();
        echo "style/base.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"";
        // line 19
        echo Layout::path();
        echo "style/lms-home.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>

    ";
        // line 21
        if (array_key_exists("custom_css_path", $context)) {
            // line 22
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, ($context["custom_css_path"] ?? null), "html", null, true);
            echo "?v=";
            echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
            echo "\"/>
    ";
        }
        // line 24
        echo "    ";
        echo Layout::rtl();
        echo "
    <!-- specific stylesheet -->
    ";
        // line 26
        echo YuiLib::load("base");
        echo "
    <!-- Page Head area -->
    ";
        // line 28
        echo Layout::zone("page_head");
        echo "

    <!-- JQuery, Bootstrap  -->
    ";
        // line 31
        $this->displayBlock('jquery_core', $context, $blocks);
        // line 34
        echo "
    <script type=\"text/javascript\">

        window.frontend = {};
        window.frontend.config = JSON.parse('";
        // line 38
        echo ($context["clientConfig"] ?? null);
        echo "');

    </script>

    ";
        // line 42
        $this->displayBlock('bootstrap', $context, $blocks);
        // line 45
        echo "
    ";
        // line 46
        $this->displayBlock('jquery_addons', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('css_addons', $context, $blocks);
        // line 55
        echo "
    ";
        // line 56
        $this->displayBlock('locale_calendar', $context, $blocks);
        // line 60
        echo "
    <!-- Restyling -->
    <link rel=\"stylesheet\" type=\"text/css\"
          href=\"";
        // line 63
        echo Layout::path();
        echo "static/main.";
        echo Layout::highContrastCss();
        echo "min.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\">
    <!--
    To use or edit the not minified css uncomment this portion of code
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 66
        echo Layout::path();
        echo "static/main.css\">
    -->
    <script type=\"text/javascript\" src=\"";
        // line 68
        echo Layout::path();
        echo "static/main.js?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"></script>
</head>

<body class=\"homepage js-router--homepage\">
";
        // line 72
        $this->displayBlock('homeContent', $context, $blocks);
        // line 97
        $this->displayBlock('homeFooter', $context, $blocks);
        // line 104
        echo "<!-- def lang -->
";
        // line 105
        echo Layout::zone("def_lang");
        echo "
<!-- scripts -->
";
        // line 107
        echo Layout::zone("scripts");
        echo "
<!-- end scripts -->
";
        // line 109
        echo Layout::zone("debug");
        echo "
";
        // line 110
        echo Layout::analytics();
        echo "

</body>
</html>";
    }

    // line 31
    public function block_jquery_core($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 32
        echo "        ";
        echo ($context["jqueryLib"] ?? null);
        echo "
    ";
    }

    // line 42
    public function block_bootstrap($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 43
        echo "        ";
        echo ($context["boostrap"] ?? null);
        echo "
    ";
    }

    // line 46
    public function block_jquery_addons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "        <!-- addons: js -->
        ";
        // line 48
        echo ($context["jsAddons"] ?? null);
        echo "
    ";
    }

    // line 51
    public function block_css_addons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "        <!-- addons: css -->
        ";
        // line 53
        echo ($context["cssAddons"] ?? null);
        echo "
    ";
    }

    // line 56
    public function block_locale_calendar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "        <!-- locale data format -->
        ";
        // line 58
        echo ($context["locale_calendar"] ?? null);
        echo "
    ";
    }

    // line 72
    public function block_homeContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 73
        echo "    <!-- content -->
    <main class=\"homepage__content content-margin\">
        ";
        // line 75
        echo Layout::highContrast();
        echo "
        <div class=\"homepage__row homepage__row--header\">
            <div class=\"pull-left\">
                <h1 class=\"no_margin_padding\"><span class=\"screenreader\">";
        // line 78
        echo Lang::t("_LOGIN_LEGEND", "login");
        echo "</span></h1>
                <a href=\"index.php\" class=\"image-link\">
                    <img class=\"left_logo\" src=\"";
        // line 80
        echo Layout::path();
        echo "images/company_logo.png\" alt=\"";
        echo Lang::t("_COMPANY_LOGO", "standard");
        echo "\"/>
                </a>
            </div>
            <div class=\"pull-right pull-right-size\">
                <div class=\"hidden-xs\" style=\"margin: 0 1.5rem;\">
                    ";
        // line 85
        echo Layout::get_catalogue();
        echo "
                </div>
                ";
        // line 87
        if ((($context["lang_number"] ?? null) > 1)) {
            // line 88
            echo "                    <div class=\"select-language\" style=\"padding: 0 0.5rem\">
                        <span class=\"hidden-xs\">";
            // line 89
            echo Lang::t("_CHANGELANG", "register");
            echo ": </span>";
            echo Layout::change_lang();
            echo "
                    </div>
                ";
        }
        // line 92
        echo "            </div>
        </div>
        ";
        // line 94
        echo Layout::zone("content");
        echo "
    </main>
";
    }

    // line 97
    public function block_homeFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 98
        echo "    <!--
    <footer class=\"homepage__footer\">
        ";
        // line 100
        echo Layout::zone("footer");
        echo "
        ";
        // line 101
        echo Layout::copyright();
        echo "
    </footer> footer -->
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  344 => 101,  340 => 100,  336 => 98,  332 => 97,  325 => 94,  321 => 92,  313 => 89,  310 => 88,  308 => 87,  303 => 85,  293 => 80,  288 => 78,  282 => 75,  278 => 73,  274 => 72,  268 => 58,  265 => 57,  261 => 56,  255 => 53,  252 => 52,  248 => 51,  242 => 48,  239 => 47,  235 => 46,  228 => 43,  224 => 42,  217 => 32,  213 => 31,  205 => 110,  201 => 109,  196 => 107,  191 => 105,  188 => 104,  186 => 97,  184 => 72,  175 => 68,  170 => 66,  160 => 63,  155 => 60,  153 => 56,  150 => 55,  148 => 51,  145 => 50,  143 => 46,  140 => 45,  138 => 42,  131 => 38,  125 => 34,  123 => 31,  117 => 28,  112 => 26,  106 => 24,  98 => 22,  96 => 21,  89 => 19,  82 => 17,  77 => 15,  72 => 13,  68 => 12,  64 => 11,  60 => 10,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/home.html.twig");
    }
}
