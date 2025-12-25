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

/* coursereport.html.twig */
class __TwigTemplate_db49b8f9397305cf5ccbe1fd1b90ad51e1bf465c7de844076cbfef7b6ee37571 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"page-header\">
    <h1>";
        // line 2
        echo Lang::t("_COURSEREPORT", "menu_course");
        echo "</h1>
</div>

<ul class=\"nav nav-tabs navbar--coursereport\">
    <li class=\"active\"><a data-toggle=\"tab\" href=\"#overview\">";
        // line 6
        echo Lang::t("_OVERVIEW", "coursereport");
        echo "</a></li>
    <li><a data-toggle=\"tab\" href=\"#details\" class=\"js-details\">";
        // line 7
        echo Lang::t("_DETAILS", "coursereport");
        echo "</a></li>
</ul>

<div class=\"tab-content\">
    <div id=\"overview\" class=\"tab-pane active\">
        ";
        // line 12
        $this->loadTemplate("overview.html.twig", "coursereport.html.twig", 12)->display($context);
        // line 13
        echo "    </div>
    <div id=\"details\" class=\"tab-pane\">
        ";
        // line 15
        $this->loadTemplate("details.html.twig", "coursereport.html.twig", 15)->display($context);
        // line 16
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "coursereport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  65 => 15,  61 => 13,  59 => 12,  51 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coursereport.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/coursereport/coursereport.html.twig");
    }
}
