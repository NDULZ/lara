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

/* calendar.html.twig */
class __TwigTemplate_9c91049da55898511c1a1e2c2c8d745222ae4e1f1870ad3ca856a5e00da10a1a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base.html.twig", "calendar.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 5) == "4-col")) {
            // line 6
            echo "        ";
            $context["class"] = " d-col--12--desktop";
            // line 7
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 7) == "3-col")) {
            // line 8
            echo "        ";
            $context["class"] = " d-col--9--desktop";
            // line 9
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 9) == "2-col")) {
            // line 10
            echo "        ";
            $context["class"] = " d-col--6--desktop";
            // line 11
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 11) == "1-col")) {
            // line 12
            echo "        ";
            $context["class"] = " d-col--3--desktop";
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    <div class=\"d-col d-col--12 ";
        // line 15
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"d-calendar d-widget\">
            <h3 class=\"d-title\">
                ";
        // line 18
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 18), "title", [], "any", false, false, false, 18))) {
            // line 19
            echo "                    ";
            echo Lang::t("_DASHBOARDBLOCKCALENDARLMS", "dashboard");
            echo "
                ";
        } else {
            // line 21
            echo "                    ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 21), "title", [], "any", false, false, false, 21), "html", null, true);
            echo "
                ";
        }
        // line 23
        echo "            </h3>
            <div class=\"d-calendar__item js-dashboard-calendar\"
                 data-action=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "enabledActions", [], "any", false, false, false, 25), ","), "html", null, true);
        echo "\"></div>
        </div>
    </div>
    <script>
        window.dashboardCalendarAjaxUrl = '";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "ajaxUrl", [], "any", false, false, false, 29), "html", null, true);
        echo "';
        window.dashboardCalendarAjaxSignature = '";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 30), "signature", [], "any", false, false, false, 30), "html", null, true);
        echo "';
        window.dashboardCalendarAjaxPostData = '";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 31), "block", [], "any", false, false, false, 31), "html", null, true);
        echo "';
    </script>

";
    }

    public function getTemplateName()
    {
        return "calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  115 => 30,  111 => 29,  104 => 25,  100 => 23,  94 => 21,  88 => 19,  86 => 18,  80 => 15,  77 => 14,  74 => 13,  71 => 12,  68 => 11,  65 => 10,  62 => 9,  59 => 8,  56 => 7,  53 => 6,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "calendar.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/appLms/dashboard/calendar/calendar.html.twig");
    }
}
