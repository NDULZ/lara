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

/* lms.html.twig */
class __TwigTemplate_f76162e8e8bbcea2211c99ac03119278e9e3523d2bcb1f1bc483d7851201bdae extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "lms.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo Layout::path();
        echo "style/base-old-treeview.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo Layout::path();
        echo "style/lms.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo Layout::path();
        echo "style/lms-to-review.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo Layout::path();
        echo "style/lms-menu.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo Layout::path();
        echo "style/table-responsive.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>

";
    }

    // line 12
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 14
        echo FormaLms\lib\Get::rel_path("base");
        echo "/lib/js_utils.js?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"></script>

";
    }

    // line 18
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "
    ";
        // line 20
        echo Layout::zone("meta");
        echo "
    ";
        // line 21
        echo Layout::meta();
        echo "

    ";
        // line 23
        echo Layout::rtl();
        echo "
    <!-- blind nav -->
    ";
        // line 25
        echo Layout::zone("blind_navigation");
        echo "

    <!-- container -->
    <div id=\"container\">
        <!-- header -->

        <!-- menu_over -->
        <div id=\"menu_over\" class=\"layout_menu_over\">
        <!-- feedback -->
            ";
        // line 34
        echo Layout::zone("feedback");
        echo "
            ";
        // line 35
        echo Layout::cart();
        echo " <!-- ????? -->

            <!-- header -->
            <header class=\"header white-bg\">
                <nav>
                    <div class=\"row-fluid\" id=\"lms_menu_container\" >
                        <div class=\"navbar-header\">
                            ";
        // line 42
        echo Layout::zone("logo");
        echo "
                            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                                <span class=\"glyphicon glyphicon-align-justify\"><span class=\"screenreader\">";
        // line 44
        echo Lang::t("_MAN_MENU");
        echo "</span></span>
                            </button>
                        </div>
                        <div id=\"navbar\" class=\"navbar-collapse collapse\">
                            <ul class=\"nav navbar-nav\">
                                ";
        // line 49
        echo Layout::zone("main-menu");
        echo "
                                ";
        // line 50
        echo Layout::zone("cart");
        echo " <!-- ????? -->
                                ";
        // line 51
        echo Layout::zone("profile");
        echo "
                            </ul>
                        </div>
                        <div id=\"c-mask\" class=\"c-mask\"></div>
                    </div>
                </nav>
            </header>

            ";
        // line 60
        echo "            ";
        echo Layout::zone("helpdesk");
        echo "
            ";
        // line 62
        echo "
        </div>


        <!-- content -->
        <div id=\"lms_main_container\" class=\"row\">

                <!-- MENU LATERALE ON/OFF -->
                <div id=\"course-info-boot\" class=\"col-md-12\">

                    ";
        // line 72
        echo Layout::zone("menu");
        echo "
                    ";
        // line 73
        $this->loadTemplate("coursemenu_lat.html.twig", "lms.html.twig", 73)->display(twig_array_merge($context, ["dropdown" => ($context["dropdown"] ?? null), "course_name" => ($context["course_name"] ?? null), "course_img" => ($context["course_img"] ?? null)]));
        // line 74
        echo "                </div>

            <div id=\"yui-main-boot\" class='col-md-12'>

                ";
        // line 78
        echo ($context["direct_play"] ?? null);
        echo "

            </div>

            <div class=\"nofloat\"></div>
        </div>
        <!-- footer -->
        <div id=\"footer\" class=\"layout_footer\">
            ";
        // line 86
        echo Layout::zone("footer");
        echo "

            ";
        // line 88
        echo Layout::copyright();
        echo "


        </div>
    </div>

    <!-- scripts -->
    ";
        // line 95
        echo Layout::zone("scripts");
        echo "
    <!-- debug -->
    ";
        // line 97
        echo Layout::zone("debug");
        echo "
    <!-- def_lang -->
    ";
        // line 99
        echo Layout::zone("def_lang");
        echo "

";
    }

    public function getTemplateName()
    {
        return "lms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 99,  241 => 97,  236 => 95,  226 => 88,  221 => 86,  210 => 78,  204 => 74,  202 => 73,  198 => 72,  186 => 62,  181 => 60,  170 => 51,  166 => 50,  162 => 49,  154 => 44,  149 => 42,  139 => 35,  135 => 34,  123 => 25,  118 => 23,  113 => 21,  109 => 20,  106 => 19,  102 => 18,  93 => 14,  90 => 13,  86 => 12,  77 => 8,  71 => 7,  65 => 6,  59 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lms.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/lms.html.twig");
    }
}
