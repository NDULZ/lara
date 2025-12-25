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

/* courseattendancegraph.html.twig */
class __TwigTemplate_bb4c579cd4f813573976ad3bb74e927dace582a2a8a8e684066ab0d9e697b7c9 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "courseattendancegraph.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
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
        echo "    <div class=\"d-col d-col--12 ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"d-courseattendancegraph d-widget\">
                    <h3 class=\"d-title\">
                        ";
        // line 17
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 17), "title", [], "any", false, false, false, 17))) {
            // line 18
            echo "                            ";
            echo Lang::t("_DASHBOARDBLOCKCOURSEATTENDANCEGRAPHLMS", "dashboard");
            echo "
                        ";
        } else {
            // line 20
            echo "                            ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 20), "title", [], "any", false, false, false, 20), "html", null, true);
            echo "
                        ";
        }
        // line 22
        echo "                    </h3>

                      <canvas id=\"course-pie\"></canvas>
        </div>
    </div>

           <script>
                    \$(document).ready(function () {


                       var chartDataSet = [
                           {
                               label: 'Course Attendance',
                               data: ";
        // line 35
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "coursesInfo", [], "any", false, false, false, 35), "data", [], "any", false, false, false, 35));
        echo ",
                               backgroundColor: ";
        // line 36
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "coursesInfo", [], "any", false, false, false, 36), "colors", [], "any", false, false, false, 36));
        echo ",
                               hoverOffset: 4,
                           }
                       ]
                       const chart = new window.frontend.modules.Chart(\$(\"#course-pie\"), {
                           type: 'doughnut',
                           data: {
                               labels: ";
        // line 43
        echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "coursesInfo", [], "any", false, false, false, 43), "labels", [], "any", false, false, false, 43));
        echo ",
                               datasets: chartDataSet
                           }
                       });
                    });
                </script>
 
";
    }

    public function getTemplateName()
    {
        return "courseattendancegraph.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  119 => 36,  115 => 35,  100 => 22,  94 => 20,  88 => 18,  86 => 17,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "courseattendancegraph.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/dashboard/courseattendancegraph/courseattendancegraph.html.twig");
    }
}
