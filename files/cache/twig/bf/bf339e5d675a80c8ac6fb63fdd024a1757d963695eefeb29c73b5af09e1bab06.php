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

/* courses.html.twig */
class __TwigTemplate_41c4010c62dfd0990209c4c1ee31219792b2a6d6e17bc45248f31e492f7266c5 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base/base.html.twig", "courses.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 6) == "4-col")) {
            // line 7
            echo "        ";
            $context["class"] = " d-col--12--desktop";
            // line 8
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 8) == "3-col")) {
            // line 9
            echo "        ";
            $context["class"] = " d-col--9--desktop";
            // line 10
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 10) == "2-col")) {
            // line 11
            echo "        ";
            $context["class"] = " d-col--6--desktop";
            // line 12
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 12) == "1-col")) {
            // line 13
            echo "        ";
            $context["class"] = " d-col--3--desktop";
            // line 14
            echo "    ";
        }
        // line 15
        echo "
    <div class=\"d-col d-col--12 ";
        // line 16
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"d-courses d-widget\">
            <h3 class=\"d-title\">
                ";
        // line 19
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19))) {
            // line 20
            echo "                    ";
            echo Lang::t("_DASHBOARDBLOCKCOURSESLMS", "dashboard");
            echo "
                ";
        } else {
            // line 22
            echo "                    ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 22), "title", [], "any", false, false, false, 22);
            echo "
                ";
        }
        // line 24
        echo "            </h3>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "courses", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 26
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["course"], "courseStatus", [], "any", false, false, false, 26) > 0)) {
                // line 27
                echo "                    ";
                $context["status_class"] = "green";
                // line 28
                echo "                ";
            } else {
                // line 29
                echo "                    ";
                $context["status_class"] = "red";
                // line 30
                echo "                ";
            }
            // line 31
            echo "
                <a class=\"d-courses__item has-icon--";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "type", [], "any", false, false, false, 32), "html", null, true);
            echo "\" target=\"_self\"
                   href=\"index.php?modname=course&amp;op=aula&amp;idCourse=";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
                    <div class=\"d-courses__img-wrapper\">
                        <img class=\"d-courses__img\"
                             src=\"";
            // line 36
            if ((twig_get_attribute($this->env, $this->source, $context["course"], "img", [], "any", false, false, false, 36) != "")) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "img", [], "any", false, false, false, 36), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, ($context["templatePath"] ?? null), "html", null, true);
                echo "/images/course/course_nologo.png ";
            }
            echo "\"/>
                    </div>
                    <div class=\"d-courses__content-wrapper\">
                        <div class=\"d-course__title\">
                            ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "title", [], "any", false, false, false, 40), "html", null, true);
            echo "
                        </div>
                        ";
            // line 42
            if ((twig_get_attribute($this->env, $this->source, $context["course"], "showStartDate", [], "any", false, false, false, 42) || twig_get_attribute($this->env, $this->source, $context["course"], "showEndDate", [], "any", false, false, false, 42))) {
                // line 43
                echo "                            <div class=\"d-courses__date-wrapper status--";
                echo twig_escape_filter($this->env, ($context["status_class"] ?? null), "html", null, true);
                echo "\">
                                <div class=\"d-courses__date d-courses__date--arrow d-courses__date--start\">
                                    ";
                // line 45
                if ((twig_get_attribute($this->env, $this->source, $context["course"], "showStartDate", [], "any", false, false, false, 45) && twig_get_attribute($this->env, $this->source, $context["course"], "showEndDate", [], "any", false, false, false, 45))) {
                    // line 46
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "startDateString", [], "any", false, false, false, 46), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "endDateString", [], "any", false, false, false, 46), "html", null, true);
                    echo "
                                    ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 47
$context["course"], "showStartDate", [], "any", false, false, false, 47) &&  !twig_get_attribute($this->env, $this->source, $context["course"], "showEndDate", [], "any", false, false, false, 47))) {
                    // line 48
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "startDateString", [], "any", false, false, false, 48), "html", null, true);
                    echo "
                                    ";
                } else {
                    // line 50
                    echo "                                        ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "endDateString", [], "any", false, false, false, 50), "html", null, true);
                    echo "
                                    ";
                }
                // line 52
                echo "                                </div>
                                ";
                // line 53
                if ((twig_get_attribute($this->env, $this->source, $context["course"], "hours", [], "any", false, false, false, 53) != "")) {
                    // line 54
                    echo "                                    <div class=\"d-courses__date d-courses__date--arrow d-courses__date--hours\">
                                        ";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "hours", [], "any", false, false, false, 55), "html", null, true);
                    echo "
                                    </div>
                                ";
                }
                // line 58
                echo "                            </div>
                        ";
            }
            // line 60
            echo "                        ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["course"], "dates", [], "any", false, false, false, 60))) {
                // line 61
                echo "                            <div class=\"d-courses__next-course\">

                                ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["course"], "dates", [], "any", false, false, false, 63)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[0] ?? null) : null), "startDate", [], "any", false, false, false, 63), "html", null, true);
                echo "
                            </div>
                        ";
            }
            // line 66
            echo "                    </div>
                </a>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "
            ";
        // line 70
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 70), "show_button", [], "any", false, false, false, 70)) {
            // line 71
            echo "                <div class=\"d-courses__cta-wrapper\">
                    <a class=\"forma-button forma-button--primary forma-button--full d-button--cert\" title=\"\"
                       href=\"index.php?r=elearning/show&amp;sop=unregistercourse\">
                        <span class=\"forma-button__label\">";
            // line 74
            echo Lang::t("_ALL_COURSES", "standard");
            echo "</span>
                    </a>
                </div>
            ";
        }
        // line 78
        echo "        </div>
    </div>

    ";
    }

    public function getTemplateName()
    {
        return "courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 78,  238 => 74,  233 => 71,  231 => 70,  228 => 69,  220 => 66,  214 => 63,  210 => 61,  207 => 60,  203 => 58,  197 => 55,  194 => 54,  192 => 53,  189 => 52,  183 => 50,  177 => 48,  175 => 47,  168 => 46,  166 => 45,  160 => 43,  158 => 42,  153 => 40,  139 => 36,  133 => 33,  129 => 32,  126 => 31,  123 => 30,  120 => 29,  117 => 28,  114 => 27,  111 => 26,  107 => 25,  104 => 24,  98 => 22,  92 => 20,  90 => 19,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "courses.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/appLms/dashboard/courses/courses.html.twig");
    }
}
