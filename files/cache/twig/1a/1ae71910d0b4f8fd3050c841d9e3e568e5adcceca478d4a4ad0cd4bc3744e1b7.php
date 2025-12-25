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

/* partials/course-box.html.twig */
class __TwigTemplate_6d8a9832d1afec2d1095af040d63c5b8225e09853b6230d31df93993ae78fe7b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'courseBox' => [$this, 'block_courseBox'],
            'courseBoxCover' => [$this, 'block_courseBoxCover'],
            'courseBoxHeader' => [$this, 'block_courseBoxHeader'],
            'icon' => [$this, 'block_icon'],
            'role' => [$this, 'block_role'],
            'courseBoxCategory' => [$this, 'block_courseBoxCategory'],
            'showOptions' => [$this, 'block_showOptions'],
            'unsubscribe' => [$this, 'block_unsubscribe'],
            'demo' => [$this, 'block_demo'],
            'courseBoxTitle' => [$this, 'block_courseBoxTitle'],
            'courseBoxDescription' => [$this, 'block_courseBoxDescription'],
            'courseBoxCta' => [$this, 'block_courseBoxCta'],
            'courseBoxMyCoursesNextLesson' => [$this, 'block_courseBoxMyCoursesNextLesson'],
            'closingdate' => [$this, 'block_closingdate'],
            'entercourse' => [$this, 'block_entercourse'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('courseBox', $context, $blocks);
    }

    public function block_courseBox($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <article class=\"course-box ";
        echo twig_escape_filter($this->env, twig_join_filter(($context["courseBoxClasses"] ?? null), " "), "html", null, true);
        echo "\" data-course-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 2), "html", null, true);
        echo "\">

        ";
        // line 4
        $this->displayBlock('courseBoxCover', $context, $blocks);
        // line 7
        echo "
        ";
        // line 8
        $this->displayBlock('courseBoxHeader', $context, $blocks);
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('courseBoxCategory', $context, $blocks);
        // line 29
        echo "        ";
        $this->displayBlock('showOptions', $context, $blocks);
        // line 58
        echo "


        ";
        // line 61
        $this->displayBlock('courseBoxTitle', $context, $blocks);
        // line 66
        echo "
        ";
        // line 67
        $this->displayBlock('courseBoxDescription', $context, $blocks);
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('courseBoxCta', $context, $blocks);
        // line 171
        echo "    </article>
";
    }

    // line 4
    public function block_courseBoxCover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "            <div class=\"course-box__cover\" ";
        if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "use_logo_in_courselist", [], "any", false, false, false, 5)) {
            echo " style=\"background-image: url( ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "img_course", [], "any", false, false, false, 5), "html", null, true);
            echo ")\"";
        }
        echo "></div>
        ";
    }

    // line 8
    public function block_courseBoxHeader($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "            <header class=\"course-box__header\">
                ";
        // line 10
        $this->displayBlock('icon', $context, $blocks);
        // line 14
        echo "
                ";
        // line 15
        $this->displayBlock('role', $context, $blocks);
        // line 19
        echo "            </header>
        ";
    }

    // line 10
    public function block_icon($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "                    <div class=\"course-box__icon icon--filter-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "user_status", [], "any", false, false, false, 11), "html", null, true);
        echo "\"></div>
                    ";
        // line 13
        echo "                ";
    }

    // line 15
    public function block_role($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "                    <div class=\"course-box__icon course-box__owner--";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "level_icon", [], "any", false, false, false, 16), "html", null, true);
        echo "\"
                         aria-label=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "level_text", [], "any", false, false, false, 17), "html", null, true);
        echo "\"></div>
                ";
    }

    // line 22
    public function block_courseBoxCategory($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "nameCategory", [], "any", false, false, false, 23)) {
            // line 24
            echo "                <div class=\"course-box__category\">
                    ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "nameCategory", [], "any", false, false, false, 25), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 28
        echo "        ";
    }

    // line 29
    public function block_showOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "show_options", [], "any", false, false, false, 30)) {
            // line 31
            echo "                <nav class=\"course-box__nav\">
                    <div class=\"course-box__options dropdown pull-right\">
                        <div class=\"dropdown-toggle\" id=\"courseBoxOptions\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                             aria-expanded=\"true\">
                            <i class=\"glyphicon glyphicon-option-horizontal\"></i>
                        </div>

                        <ul class=\"dropdown-menu\" aria-labelledby=\"courseBoxOptions\">
                            ";
            // line 39
            if ((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "userCanUnsubscribe", [], "any", false, false, false, 39) && twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "is_enrolled", [], "any", false, false, false, 39))) {
                // line 40
                echo "                                ";
                $this->displayBlock('unsubscribe', $context, $blocks);
                // line 45
                echo "                            ";
            }
            // line 46
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "course_demo", [], "any", false, false, false, 46)) {
                // line 47
                echo "                                ";
                $this->displayBlock('demo', $context, $blocks);
                // line 52
                echo "                            ";
            }
            // line 53
            echo "                        </ul>
                    </div>
                </nav>
            ";
        }
        // line 57
        echo "        ";
    }

    // line 40
    public function block_unsubscribe($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 41
        echo "                                    <li>
                                        <a href=\"javascript:confirmDialog('";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "name", [], "any", false, false, false, 42), "html", null, true);
        echo "', ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 42), "html", null, true);
        echo ")\">";
        echo Lang::t("_SELF_UNSUBSCRIBE", "course");
        echo "</a>
                                    </li>
                                ";
    }

    // line 47
    public function block_demo($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 48
        echo "                                    <li>
                                        <a href=\"index.php?r=catalog/downloadDemoMaterial&amp;course_id=";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 49), "html", null, true);
        echo "\"> ";
        echo Lang::t("_COURSE_DEMO", "course");
        echo "</a>
                                    </li>
                                ";
    }

    // line 61
    public function block_courseBoxTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 62
        echo "            ";
        // line 63
        echo "            <div class=\"course-box__title ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "tooltipClass", [], "any", false, false, false, 63), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "name", [], "any", false, false, false, 63), "html", null, true);
        echo "</div>
                        <span class=\"twig-course-tooltipElement_raw\">";
        // line 64
        echo twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "tooltipElement", [], "any", false, false, false, 64);
        echo "</span>
        ";
    }

    // line 67
    public function block_courseBoxDescription($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 68
        echo "            <div class=\"course-box__description\"> ";
        echo twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "box_description", [], "any", false, false, false, 68);
        echo " </div>
        ";
    }

    // line 71
    public function block_courseBoxCta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 72
        echo "            <div class=\"course-box__cta\">
                ";
        // line 73
        if (((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "course_type", [], "any", false, false, false, 73) == "classroom") && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "editions", [], "any", false, false, false, 73)) > 0))) {
            // line 74
            echo "                    ";
            if (!twig_in_filter("course-box--disabled", ($context["courseBoxClasses"] ?? null))) {
                // line 75
                echo "                        <div class=\"course-box__extrainformation\">
                            ";
                // line 76
                $this->displayBlock('courseBoxMyCoursesNextLesson', $context, $blocks);
                // line 138
                echo "                        </div>
                    ";
            }
            // line 140
            echo "                ";
        } else {
            // line 141
            echo "                    ";
            $this->displayBlock('closingdate', $context, $blocks);
            // line 149
            echo "                ";
        }
        // line 150
        echo "
                ";
        // line 151
        $this->displayBlock('entercourse', $context, $blocks);
        // line 169
        echo "            </div>
        ";
    }

    // line 76
    public function block_courseBoxMyCoursesNextLesson($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 77
        echo "                                <div class=\"course-box__next\">
                                    <span class=\"course-box__next__text\">";
        // line 78
        echo Lang::t("_NEXT_LESSON", "course");
        echo "</span>
                                    <span class=\"course-box__next__value\">";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "next_lesson", [], "any", false, false, false, 79), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"course-box__allDates\">
                                    <a href=\"javascript:;\"
                                       onclick=\"openAllDatesPopup(";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 83), "html", null, true);
        echo ")\">";
        echo Lang::t("_SHOW_ALL_DATES", "course");
        echo "</a>
                                    <div class=\"show-all-dates-popup\" data-overlay=\"course-";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 84), "html", null, true);
        echo "\">
                                        <div id=\"pop_up_container\" class=\"yui-module yui-overlay yui-panel\">
                                            <a class=\"container-close\" href=\"javascript:;\"
                                               title=\"";
        // line 87
        echo Lang::t("_CLOSE", "standard");
        echo "\" onclick=\"closeAllDatesPopup(";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 87), "html", null, true);
        echo ")\"></a>
                                            <div class=\"hd\" id=\"pop_up_container_h\">";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "name", [], "any", false, false, false, 88), "html", null, true);
        echo "</div>
                                            <div class=\"bd\">
                                                <div class=\"edition_container\">
                                                    <table class=\"edition_table\">
                                                        <thead>
                                                        <tr>
                                                            <th>";
        // line 94
        echo Lang::t("_DAY", "course");
        echo "</th>
                                                            <th>";
        // line 95
        echo Lang::t("_HOUR_BEGIN", "course");
        echo "</th>
                                                            <th>";
        // line 96
        echo Lang::t("_HOUR_END", "course");
        echo "</th>
                                                            <th>";
        // line 97
        echo Lang::t("_LOCATION_INFO", "classroom");
        echo "</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "editions", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["id_edition"] => $context["days"]) {
            // line 102
            echo "                                                            <tr>
                                                                <td colspan=4>";
            // line 103
            echo Lang::t("_EDITION");
            echo "
                                                                    :&nbsp; ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["days"], "name", [], "any", false, false, false, 104), "html", null, true);
            echo "
                                                                <td>
                                                            </tr>
                                                            ";
            // line 107
            if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "userCanUnsubscribe", [], "any", false, false, false, 107)) {
                // line 108
                echo "                                                                <tr>
                                                                    <td colspan=4><a
                                                                                href=\"javascript:confirmDialog('";
                // line 110
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "name", [], "any", false, false, false, 110), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 110), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, $context["id_edition"], "html", null, true);
                echo "')\">";
                echo Lang::t("_SELF_UNSUBSCRIBE", "course");
                echo "</a>
                                                                    <td>
                                                                </tr>
                                                            ";
            }
            // line 114
            echo "                                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["days"], "days", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
                // line 115
                echo "                                                                <tr>
                                                                    ";
                // line 116
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 116), twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "next_lesson", [], "any", false, false, false, 116))) {
                    // line 117
                    echo "                                                                        <td><b>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 117), "html", null, true);
                    echo "</b></td>
                                                                        <td><b>";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "begin", [], "any", false, false, false, 118), "html", null, true);
                    echo "</b></td>
                                                                        <td><b>";
                    // line 119
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "end", [], "any", false, false, false, 119), "html", null, true);
                    echo "</b></td>
                                                                        <td><b>";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "classroom", [], "any", false, false, false, 120), "html", null, true);
                    echo "</b></td>
                                                                    ";
                } else {
                    // line 122
                    echo "                                                                        <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "day", [], "any", false, false, false, 122), "html", null, true);
                    echo "</td>
                                                                        <td>";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "begin", [], "any", false, false, false, 123), "html", null, true);
                    echo "</td>
                                                                        <td>";
                    // line 124
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "end", [], "any", false, false, false, 124), "html", null, true);
                    echo "</td>
                                                                        <td>";
                    // line 125
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["day"], "classroom", [], "any", false, false, false, 125), "html", null, true);
                    echo "</td>
                                                                    ";
                }
                // line 127
                echo "                                                                </tr>
                                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            echo "                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id_edition'], $context['days'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ";
    }

    // line 141
    public function block_closingdate($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        echo "                        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "dateClosing_year", [], "any", false, false, false, 142) > 0)) {
            // line 143
            echo "                            <div class=\"course-box__closingdate\">
                                <span class=\"course-box__closingdate__text\">";
            // line 144
            echo Lang::t("_CLOSING_DATA", "course");
            echo "</span>
                                <span class=\"course-box__closingdate__value\">";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "dateClosing_day", [], "any", false, false, false, 145), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "dateClosing_month", [], "any", false, false, false, 145), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "dateClosing_year", [], "any", false, false, false, 145), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 148
        echo "                    ";
    }

    // line 151
    public function block_entercourse($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 152
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "canEnter", [], "any", false, false, false, 152)) {
            // line 153
            echo "
                        <a class=\"forma-button course-box__cta__button no-border\" title=\"";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "name", [], "any", false, false, false, 154), "html", null, true);
            echo "\"
                           href=\"index.php?modname=course&amp;op=aula&amp;idCourse=";
            // line 155
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "idCourse", [], "any", false, false, false, 155), "html", null, true);
            echo " \"
                           rel= ";
            // line 156
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "rel", [], "any", false, false, false, 156), "html", null, true);
            echo ">
                            <span class=\"forma-button__label\"> ";
            // line 157
            echo Lang::t("_USER_STATUS_ENTER", "catalogue");
            echo "</span>
                        </a>

                    ";
        } else {
            // line 161
            echo "                        <a class=\"forma-button forma-button--disabled\" href=\"javascript:void(0);\">
                                <span class=\"forma-button__label\">
                                    ";
            // line 163
            echo Lang::t("_DISABLED", "course");
            echo "
                                </span>
                        </a>

                    ";
        }
        // line 168
        echo "                ";
    }

    public function getTemplateName()
    {
        return "partials/course-box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  573 => 168,  565 => 163,  561 => 161,  554 => 157,  550 => 156,  546 => 155,  542 => 154,  539 => 153,  536 => 152,  532 => 151,  528 => 148,  518 => 145,  514 => 144,  511 => 143,  508 => 142,  504 => 141,  493 => 130,  487 => 129,  480 => 127,  475 => 125,  471 => 124,  467 => 123,  462 => 122,  457 => 120,  453 => 119,  449 => 118,  444 => 117,  442 => 116,  439 => 115,  434 => 114,  421 => 110,  417 => 108,  415 => 107,  409 => 104,  405 => 103,  402 => 102,  398 => 101,  391 => 97,  387 => 96,  383 => 95,  379 => 94,  370 => 88,  364 => 87,  358 => 84,  352 => 83,  345 => 79,  341 => 78,  338 => 77,  334 => 76,  329 => 169,  327 => 151,  324 => 150,  321 => 149,  318 => 141,  315 => 140,  311 => 138,  309 => 76,  306 => 75,  303 => 74,  301 => 73,  298 => 72,  294 => 71,  287 => 68,  283 => 67,  277 => 64,  270 => 63,  268 => 62,  264 => 61,  255 => 49,  252 => 48,  248 => 47,  237 => 42,  234 => 41,  230 => 40,  226 => 57,  220 => 53,  217 => 52,  214 => 47,  211 => 46,  208 => 45,  205 => 40,  203 => 39,  193 => 31,  190 => 30,  186 => 29,  182 => 28,  176 => 25,  173 => 24,  170 => 23,  166 => 22,  160 => 17,  155 => 16,  151 => 15,  147 => 13,  142 => 11,  138 => 10,  133 => 19,  131 => 15,  128 => 14,  126 => 10,  123 => 9,  119 => 8,  108 => 5,  104 => 4,  99 => 171,  97 => 71,  94 => 70,  92 => 67,  89 => 66,  87 => 61,  82 => 58,  79 => 29,  77 => 22,  74 => 21,  72 => 8,  69 => 7,  67 => 4,  59 => 2,  52 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/course-box.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/partials/course-box.html.twig");
    }
}
