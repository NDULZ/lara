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

/* lms_user.html.twig */
class __TwigTemplate_3523243be489b7a13dfa166f4beffea896c78d7bd20be42ee687fc52a185f183 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "lms_user.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo Layout::path();
        echo "style/lms.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo Layout::path();
        echo "style/lms-to-review.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo Layout::path();
        echo "style/lms-menu.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
";
    }

    // line 9
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 10
        echo "    <script type=\"text/javascript\" src=\"";
        echo FormaLms\lib\Get::rel_path("base");
        echo "/lib/js_utils.js?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"></script>
        <script>
            \$(function() {
                // feedback
                \$('#container-feedback').click(function(){
                   event.preventDefault();
                    \$( this ).fadeOut( 500 );
                });
            });
        </script>
";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <!-- blind nav -->
    ";
        // line 24
        echo Layout::zone("blind_navigation");
        echo "
    <!-- container -->
    <div id=\"container\">





        <!-- menu_over -->
        <div id=\"menu_over\" class=\"layout_menu_over\">
        <!-- feedback -->
            ";
        // line 35
        echo Layout::zone("feedback");
        echo "
            ";
        // line 36
        echo Layout::cart();
        echo " <!-- ????? -->

            <!-- header -->
            <header class=\"header white-bg\">
                <nav>
                    <div class=\"row-fluid\" id=\"lms_menu_container\" >
                        <div class=\"navbar-header\">
                            ";
        // line 43
        echo Layout::zone("logo");
        echo "
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <span class=\"glyphicon glyphicon-align-justify\"><span class=\"screenreader\">";
        // line 45
        echo Lang::t("_MAN_MENU");
        echo "</span></span>
                            </button>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                ";
        // line 50
        echo Layout::zone("main-menu");
        echo "
                                ";
        // line 51
        echo Layout::zone("cart");
        echo " <!-- ????? -->
                                ";
        // line 52
        echo Layout::zone("profile");
        echo "
                            </ul>
                        </div>
                        <div id=\"c-mask\" class=\"c-mask\"></div>
                    </div>
                </nav>
            </header>

            ";
        // line 61
        echo "            ";
        echo Layout::zone("helpdesk");
        echo "
            ";
        // line 63
        echo "
        </div>




        <!-- content  -->
        ";
        // line 71
        echo "        <div class=\"row lms-user-content-wrapper\">
            <div class=\"container-fluid\">
                ";
        // line 73
        echo Layout::zone("content");
        echo "

                <div class=\"nofloat\"></div>
            </div>
        </div>
    </div>
    <!-- footer  -->
    <div id=\"footer\" class=\"layout_footer\">
        ";
        // line 81
        echo Layout::zone("footer");
        echo "
            ";
        // line 82
        echo Layout::copyright();
        echo "
    </div>




    <!-- scripts -->
    ";
        // line 89
        echo Layout::zone("scripts");
        echo "
    <!-- debug -->
    ";
        // line 91
        echo Layout::zone("debug");
        echo "
    <!-- def_lang -->
    ";
        // line 93
        echo Layout::zone("def_lang");
        echo "
";
    }

    public function getTemplateName()
    {
        return "lms_user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 93,  210 => 91,  205 => 89,  195 => 82,  191 => 81,  180 => 73,  176 => 71,  167 => 63,  162 => 61,  151 => 52,  147 => 51,  143 => 50,  135 => 45,  130 => 43,  120 => 36,  116 => 35,  102 => 24,  99 => 23,  95 => 22,  77 => 10,  73 => 9,  65 => 6,  59 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lms_user.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/lms_user.html.twig");
    }
}
