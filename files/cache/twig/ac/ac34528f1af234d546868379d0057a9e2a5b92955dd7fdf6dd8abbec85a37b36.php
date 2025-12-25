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

/* coursemenu_lat.html.twig */
class __TwigTemplate_2f12171c2d578d41181cd19ad07fc6cf141e68a6c5f6096b261b9bcf1a9b254e extends \Twig\Template
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
        echo "<!-- container -->
";
        // line 5
        echo "
";
        // line 6
        $context["selectedArea"] = "";
        // line 7
        $context["selectedAreaSlug"] = "";
        // line 8
        $context["columnWidth"] = "";
        // line 9
        echo "
";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 11
            echo "\t";
            if (twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "selected", [], "any", false, false, false, 11)) {
                // line 12
                echo "\t\t";
                $context["selectedArea"] = twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "name", [], "any", false, false, false, 12);
                // line 13
                echo "        ";
                $context["selectedAreaSlug"] = twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "slug", [], "any", false, false, false, 13);
                // line 14
                echo "\t";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<div class=\"row section-coourse\">
    <div class=\"section-coourse__header col-xs-12\">
\t\t<div class=\"row-fluid\">
            <div class=\"col-sm-3 text-center\">
                <div class=\"row\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["course_img"] ?? null), "html", null, true);
        echo "\" class=\"img-responsive section-coourse__img\" alt=\"";
        echo Lang::t("_COURSE_LOGO", "course");
        echo "\">
                </div>
            </div>
            <div class=\"col-sm-9\">
                <h1 class=\"section-coourse__title\">";
        // line 26
        echo twig_escape_filter($this->env, ($context["course_name"] ?? null), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t\t";
        // line 27
        if (($context["show_progress"] ?? null)) {
            // line 28
            echo "                <div class=\"section-coourse__progress-container\">
                    <div class=\"progress section-coourse__progress\">
                        <div class=\"progress-bar progress-bar-warning";
            // line 30
            if ((twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "perc_completed", [], "any", false, false, false, 30) < 25)) {
                echo " progress-bar-warning--black";
            }
            echo "\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "perc_completed", [], "any", false, false, false, 30), "html", null, true);
            echo "\"
                             aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "perc_completed", [], "any", false, false, false, 31), "html", null, true);
            echo "%;\">
                            <span>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["stats"] ?? null), "perc_completed", [], "any", false, false, false, 32), "html", null, true);
            echo "%</span>
                        </div>
                        <span class=\"glyphicon glyphicon-signal pull-right\" aria-hidden=\"true\" data-toggle=\"modal\" data-target=\"#formaModal\"></span>
                    </div>
                </div>
\t\t\t\t\t\t\t\t";
        }
        // line 38
        echo "            </div>
        </div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"section-coourse__menu col-xs-12\">
\t\t<div class=\"row-fluid\">
\t\t\t<div class=\"section-coourse__dropdown col-sm-3 text-center\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"forma-dropdown\" id=\"corse_menu_button\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"forma-dropdown__selected forma-button dropdown-toggle has-icon icon--coourse-menu icon--coourse-menu-";
        // line 48
        echo twig_escape_filter($this->env, ($context["selectedAreaSlug"] ?? null), "html", null, true);
        echo "\" data-toggle=\"dropdown\">";
        echo twig_escape_filter($this->env, ($context["selectedArea"] ?? null), "html", null, true);
        echo "</button>
\t\t\t\t\t\t\t<button type=\"button\" class=\"forma-dropdown__toggle forma-button dropdown-toggle\" data-toggle=\"dropdown\"
\t\t\t\t\t\t\t\t\taria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-chevron-down\"></span>
\t\t\t\t\t\t\t\t<span class=\"sr-only\">Toggle Dropdown</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu\">
\t\t\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 56
            echo "\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "link", [], "any", false, false, false, 57), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "id_menu", [], "any", false, false, false, 57), "html", null, true);
            echo "\" class=\"has-icon icon--coourse-menu icon--coourse-menu-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "slug", [], "any", false, false, false, 57), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "name", [], "any", false, false, false, 59), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-9 section-coourse__menu-horizontal\">
\t\t\t\t<ul class=\"slider-menu\">
\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dropdown"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["dropdown_menu"]) {
            // line 72
            echo "\t\t\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "selected", [], "any", false, false, false, 72)) {
                // line 73
                echo "\t\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dropdown_menu"], "slider_menu", [], "any", false, false, false, 73));
                foreach ($context['_seq'] as $context["_key"] => $context["slider_menu"]) {
                    // line 74
                    echo "\t\t\t\t\t\t\t\t<li class=\"slider-menu__item";
                    if (twig_get_attribute($this->env, $this->source, $context["slider_menu"], "selected", [], "any", false, false, false, 74)) {
                        echo " is-selected";
                    }
                    echo "\"><a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider_menu"], "link", [], "any", false, false, false, 74), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["slider_menu"], "name", [], "any", false, false, false, 74), "html", null, true);
                    echo "</a></li>
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 76
                echo "\t\t\t\t\t\t";
            }
            // line 77
            echo "\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dropdown_menu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
        <div class=\"clearfix\"></div>
    </div>
\t<div class=\"clearfix\"></div>

\t";
        // line 86
        echo "\t\t";
        // line 87
        echo "\t";
        // line 88
        echo "
\t<div id=\"formaModal\" class=\"modal fade section-coourse-modal\" role=\"dialog\">
\t\t<div class=\"modal-dialog\">
\t\t\t<!-- Modal content-->
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t\t<h4 class=\"modal-title\">
                        ";
        // line 96
        echo Lang::t("_OVERVIEW", "coursereport");
        echo "
\t\t\t\t\t</h4>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"row\">
                        ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "user_stats", [], "any", false, false, false, 101), "show_time", [], "any", false, false, false, 101) != null)) {
            // line 102
            echo "\t\t\t\t\t\t\t";
            $context["columnWidth"] = "4";
            // line 103
            echo "
\t\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-4\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">
                                    ";
            // line 106
            echo Lang::t("_PARTIAL_TIME", "course");
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"text\">
\t\t\t\t\t\t\t\t\t";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "user_stats", [], "any", false, false, false, 109), "show_time", [], "any", false, false, false, 109), "partial_time", [], "any", false, false, false, 109), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-4\">
\t\t\t\t\t\t\t\t<h3 class=\"title\">
                                    ";
            // line 114
            echo Lang::t("_TOTAL_TIME", "standard");
            echo "
\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t<p class=\"text\">
                                    ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "user_stats", [], "any", false, false, false, 117), "show_time", [], "any", false, false, false, 117), "total_time", [], "any", false, false, false, 117), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
                        ";
        } else {
            // line 121
            echo "\t\t\t\t\t\t\t";
            $context["columnWidth"] = "6";
            // line 122
            echo "\t\t\t\t\t\t";
        }
        // line 123
        echo "
\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 124
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 126
        echo Lang::t("_WHOIS_ONLINE", "course");
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "user_stats", [], "any", false, false, false, 129), "who_is_online", [], "any", false, false, false, 129), "user_online", [], "any", false, false, false, 129), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 134
        echo "
\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 135
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 137
        echo Lang::t("_PROGRESS_ALL", "course");
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "course_stats", [], "any", false, false, false, 140), "materials", [], "any", false, false, false, 140), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 144
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 146
        echo Lang::t("_COMPLETED", "standard");
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "course_stats", [], "any", false, false, false, 149), "materials_complete", [], "any", false, false, false, 149), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"modal__item col-sm-12 col-md-";
        // line 153
        echo twig_escape_filter($this->env, ($context["columnWidth"] ?? null), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<h3 class=\"title\">
                                ";
        // line 155
        echo Lang::t("_PROGRESS_FAILED", "standard");
        echo "
\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t<p class=\"text\">
                                ";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["modal_stats"] ?? null), "course_stats", [], "any", false, false, false, 158), "materials_incomplete", [], "any", false, false, false, 158), "html", null, true);
        echo "
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 181
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<div class=\"col-xs-6\"></div>
\t\t\t\t\t<div class=\"col-xs-6\">
\t\t\t\t\t\t<a href=\"javascript:void(0);\" class=\"forma-button forma-button--primary\" data-dismiss=\"modal\">";
        // line 187
        echo Lang::t("_CLOSE", "standard");
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t";
        // line 196
        echo "\t";
        // line 197
        echo "\t\t";
        // line 198
        echo "\t\t";
        // line 199
        echo "\t\t\t";
        // line 200
        echo "\t\t\t\t";
        // line 201
        echo "\t\t\t\t\t";
        // line 202
        echo "\t\t\t\t\t\t";
        // line 203
        echo "\t\t\t\t\t\t\t";
        // line 204
        echo "\t\t\t\t\t\t";
        // line 205
        echo "\t\t\t\t\t";
        // line 206
        echo "\t\t\t\t\t";
        // line 207
        echo "\t\t\t\t\t\t";
        // line 208
        echo "\t\t\t\t\t\t\t";
        // line 209
        echo "\t\t\t\t\t\t\t\t";
        // line 210
        echo "\t\t\t\t\t\t\t\t\t";
        // line 211
        echo "\t\t\t\t\t\t\t\t";
        // line 212
        echo "\t\t\t\t\t\t\t";
        // line 213
        echo "\t\t\t\t\t\t\t";
        // line 214
        echo "\t\t\t\t\t\t\t\t";
        // line 215
        echo "\t\t\t\t\t\t\t\t\t";
        // line 216
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 217
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 218
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 219
        echo "\t\t\t\t\t\t\t\t\t";
        // line 220
        echo "\t\t\t\t\t\t\t\t";
        // line 221
        echo "\t\t\t\t\t\t\t";
        // line 222
        echo "\t\t\t\t\t\t\t";
        // line 223
        echo "\t\t\t\t\t\t\t\t";
        // line 224
        echo "\t\t\t\t\t\t\t\t\t";
        // line 225
        echo "\t\t\t\t\t\t\t\t";
        // line 226
        echo "\t\t\t\t\t\t\t";
        // line 227
        echo "\t\t\t\t\t\t";
        // line 228
        echo "\t\t\t\t\t";
        // line 229
        echo "\t\t\t\t";
        // line 230
        echo "\t\t\t";
        // line 231
        echo "\t\t\t";
        // line 232
        echo "\t\t\t\t";
        // line 233
        echo "\t\t\t\t";
        // line 234
        echo "\t\t\t\t\t";
        // line 235
        echo "\t\t\t\t\t\t";
        // line 236
        echo "\t\t\t\t\t\t";
        // line 237
        echo "\t\t\t\t\t\t";
        // line 238
        echo "\t\t\t\t\t";
        // line 239
        echo "\t\t\t\t";
        // line 240
        echo "\t\t\t\t";
        // line 241
        echo "\t\t\t\t";
        // line 242
        echo "\t\t\t\t\t";
        // line 243
        echo "\t\t\t\t\t\t";
        // line 244
        echo "\t\t\t\t\t\t\t";
        // line 245
        echo "\t\t\t\t\t\t";
        // line 246
        echo "\t\t\t\t\t\t";
        // line 247
        echo "\t\t\t\t\t\t\t";
        // line 248
        echo "\t\t\t\t\t\t";
        // line 249
        echo "\t\t\t\t\t\t";
        // line 250
        echo "\t\t\t\t\t\t\t";
        // line 251
        echo "\t\t\t\t\t\t";
        // line 252
        echo "\t\t\t\t\t\t";
        // line 253
        echo "\t\t\t\t\t\t\t";
        // line 254
        echo "\t\t\t\t\t\t";
        // line 255
        echo "\t\t\t\t\t\t";
        // line 256
        echo "\t\t\t\t\t\t\t";
        // line 257
        echo "\t\t\t\t\t\t";
        // line 258
        echo "\t\t\t\t\t\t";
        // line 259
        echo "\t\t\t\t\t\t\t";
        // line 260
        echo "\t\t\t\t\t\t";
        // line 261
        echo "\t\t\t\t\t\t";
        // line 262
        echo "\t\t\t\t\t\t\t";
        // line 263
        echo "\t\t\t\t\t\t";
        // line 264
        echo "\t\t\t\t\t\t";
        // line 265
        echo "\t\t\t\t\t\t\t";
        // line 266
        echo "\t\t\t\t\t\t\t\t";
        // line 267
        echo "\t\t\t\t\t\t\t\t";
        // line 268
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 269
        echo "\t\t\t\t\t\t\t\t\t";
        // line 270
        echo "\t\t\t\t\t\t\t\t\t";
        // line 271
        echo "\t\t\t\t\t\t\t\t";
        // line 272
        echo "\t\t\t\t\t\t\t\t";
        // line 273
        echo "\t\t\t\t\t\t\t\t\t";
        // line 274
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 275
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 276
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 277
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 278
        echo "\t\t\t\t\t\t\t\t\t";
        // line 279
        echo "\t\t\t\t\t\t\t\t\t";
        // line 280
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 281
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 282
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 283
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 284
        echo "\t\t\t\t\t\t\t\t\t";
        // line 285
        echo "\t\t\t\t\t\t\t\t\t";
        // line 286
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 287
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 288
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 289
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 290
        echo "\t\t\t\t\t\t\t\t\t";
        // line 291
        echo "\t\t\t\t\t\t\t\t";
        // line 292
        echo "\t\t\t\t\t\t\t";
        // line 293
        echo "\t\t\t\t\t\t";
        // line 294
        echo "\t\t\t\t\t";
        // line 295
        echo "\t\t\t\t\t";
        // line 296
        echo "\t\t\t\t\t\t";
        // line 297
        echo "\t\t\t\t\t\t\t";
        // line 298
        echo "\t\t\t\t\t\t";
        // line 299
        echo "\t\t\t\t\t\t";
        // line 300
        echo "\t\t\t\t\t\t\t";
        // line 301
        echo "\t\t\t\t\t\t";
        // line 302
        echo "\t\t\t\t\t\t";
        // line 303
        echo "\t\t\t\t\t\t\t";
        // line 304
        echo "\t\t\t\t\t\t";
        // line 305
        echo "\t\t\t\t\t\t";
        // line 306
        echo "\t\t\t\t\t\t\t";
        // line 307
        echo "\t\t\t\t\t\t";
        // line 308
        echo "\t\t\t\t\t\t";
        // line 309
        echo "\t\t\t\t\t\t\t";
        // line 310
        echo "\t\t\t\t\t\t";
        // line 311
        echo "\t\t\t\t\t\t";
        // line 312
        echo "\t\t\t\t\t\t\t";
        // line 313
        echo "\t\t\t\t\t\t";
        // line 314
        echo "\t\t\t\t\t\t";
        // line 315
        echo "\t\t\t\t\t\t\t";
        // line 316
        echo "\t\t\t\t\t\t";
        // line 317
        echo "\t\t\t\t\t\t";
        // line 318
        echo "\t\t\t\t\t\t\t";
        // line 319
        echo "\t\t\t\t\t\t\t\t";
        // line 320
        echo "\t\t\t\t\t\t\t\t";
        // line 321
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 322
        echo "\t\t\t\t\t\t\t\t\t";
        // line 323
        echo "\t\t\t\t\t\t\t\t\t";
        // line 324
        echo "\t\t\t\t\t\t\t\t";
        // line 325
        echo "\t\t\t\t\t\t\t\t";
        // line 326
        echo "\t\t\t\t\t\t\t\t\t";
        // line 327
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 328
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 329
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 330
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 331
        echo "\t\t\t\t\t\t\t\t\t";
        // line 332
        echo "\t\t\t\t\t\t\t\t\t";
        // line 333
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 334
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 335
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 336
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 337
        echo "\t\t\t\t\t\t\t\t\t";
        // line 338
        echo "\t\t\t\t\t\t\t\t\t";
        // line 339
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 340
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 341
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 342
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 343
        echo "\t\t\t\t\t\t\t\t\t";
        // line 344
        echo "\t\t\t\t\t\t\t\t";
        // line 345
        echo "\t\t\t\t\t\t\t";
        // line 346
        echo "\t\t\t\t\t\t";
        // line 347
        echo "\t\t\t\t\t";
        // line 348
        echo "\t\t\t\t\t";
        // line 349
        echo "\t\t\t\t\t\t";
        // line 350
        echo "\t\t\t\t\t\t\t";
        // line 351
        echo "\t\t\t\t\t\t";
        // line 352
        echo "\t\t\t\t\t\t";
        // line 353
        echo "\t\t\t\t\t\t\t";
        // line 354
        echo "\t\t\t\t\t\t";
        // line 355
        echo "\t\t\t\t\t\t";
        // line 356
        echo "\t\t\t\t\t\t\t";
        // line 357
        echo "\t\t\t\t\t\t";
        // line 358
        echo "\t\t\t\t\t\t";
        // line 359
        echo "\t\t\t\t\t\t\t";
        // line 360
        echo "\t\t\t\t\t\t";
        // line 361
        echo "\t\t\t\t\t\t";
        // line 362
        echo "\t\t\t\t\t\t\t";
        // line 363
        echo "\t\t\t\t\t\t";
        // line 364
        echo "\t\t\t\t\t\t";
        // line 365
        echo "\t\t\t\t\t\t\t";
        // line 366
        echo "\t\t\t\t\t\t";
        // line 367
        echo "\t\t\t\t\t\t";
        // line 368
        echo "\t\t\t\t\t\t\t";
        // line 369
        echo "\t\t\t\t\t\t";
        // line 370
        echo "\t\t\t\t\t\t";
        // line 371
        echo "\t\t\t\t\t\t\t";
        // line 372
        echo "\t\t\t\t\t\t\t\t";
        // line 373
        echo "\t\t\t\t\t\t\t\t";
        // line 374
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 375
        echo "\t\t\t\t\t\t\t\t\t";
        // line 376
        echo "\t\t\t\t\t\t\t\t\t";
        // line 377
        echo "\t\t\t\t\t\t\t\t";
        // line 378
        echo "\t\t\t\t\t\t\t\t";
        // line 379
        echo "\t\t\t\t\t\t\t\t\t";
        // line 380
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 381
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 382
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 383
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 384
        echo "\t\t\t\t\t\t\t\t\t";
        // line 385
        echo "\t\t\t\t\t\t\t\t\t";
        // line 386
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 387
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 388
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 389
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 390
        echo "\t\t\t\t\t\t\t\t\t";
        // line 391
        echo "\t\t\t\t\t\t\t\t\t";
        // line 392
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 393
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 394
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        // line 395
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 396
        echo "\t\t\t\t\t\t\t\t\t";
        // line 397
        echo "\t\t\t\t\t\t\t\t";
        // line 398
        echo "\t\t\t\t\t\t\t";
        // line 399
        echo "\t\t\t\t\t\t";
        // line 400
        echo "\t\t\t\t\t";
        // line 401
        echo "\t\t\t\t";
        // line 402
        echo "\t\t\t";
        // line 403
        echo "\t\t";
        // line 404
        echo "\t";
        // line 405
        echo "

</div>
";
    }

    public function getTemplateName()
    {
        return "coursemenu_lat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  805 => 405,  803 => 404,  801 => 403,  799 => 402,  797 => 401,  795 => 400,  793 => 399,  791 => 398,  789 => 397,  787 => 396,  785 => 395,  783 => 394,  781 => 393,  779 => 392,  777 => 391,  775 => 390,  773 => 389,  771 => 388,  769 => 387,  767 => 386,  765 => 385,  763 => 384,  761 => 383,  759 => 382,  757 => 381,  755 => 380,  753 => 379,  751 => 378,  749 => 377,  747 => 376,  745 => 375,  743 => 374,  741 => 373,  739 => 372,  737 => 371,  735 => 370,  733 => 369,  731 => 368,  729 => 367,  727 => 366,  725 => 365,  723 => 364,  721 => 363,  719 => 362,  717 => 361,  715 => 360,  713 => 359,  711 => 358,  709 => 357,  707 => 356,  705 => 355,  703 => 354,  701 => 353,  699 => 352,  697 => 351,  695 => 350,  693 => 349,  691 => 348,  689 => 347,  687 => 346,  685 => 345,  683 => 344,  681 => 343,  679 => 342,  677 => 341,  675 => 340,  673 => 339,  671 => 338,  669 => 337,  667 => 336,  665 => 335,  663 => 334,  661 => 333,  659 => 332,  657 => 331,  655 => 330,  653 => 329,  651 => 328,  649 => 327,  647 => 326,  645 => 325,  643 => 324,  641 => 323,  639 => 322,  637 => 321,  635 => 320,  633 => 319,  631 => 318,  629 => 317,  627 => 316,  625 => 315,  623 => 314,  621 => 313,  619 => 312,  617 => 311,  615 => 310,  613 => 309,  611 => 308,  609 => 307,  607 => 306,  605 => 305,  603 => 304,  601 => 303,  599 => 302,  597 => 301,  595 => 300,  593 => 299,  591 => 298,  589 => 297,  587 => 296,  585 => 295,  583 => 294,  581 => 293,  579 => 292,  577 => 291,  575 => 290,  573 => 289,  571 => 288,  569 => 287,  567 => 286,  565 => 285,  563 => 284,  561 => 283,  559 => 282,  557 => 281,  555 => 280,  553 => 279,  551 => 278,  549 => 277,  547 => 276,  545 => 275,  543 => 274,  541 => 273,  539 => 272,  537 => 271,  535 => 270,  533 => 269,  531 => 268,  529 => 267,  527 => 266,  525 => 265,  523 => 264,  521 => 263,  519 => 262,  517 => 261,  515 => 260,  513 => 259,  511 => 258,  509 => 257,  507 => 256,  505 => 255,  503 => 254,  501 => 253,  499 => 252,  497 => 251,  495 => 250,  493 => 249,  491 => 248,  489 => 247,  487 => 246,  485 => 245,  483 => 244,  481 => 243,  479 => 242,  477 => 241,  475 => 240,  473 => 239,  471 => 238,  469 => 237,  467 => 236,  465 => 235,  463 => 234,  461 => 233,  459 => 232,  457 => 231,  455 => 230,  453 => 229,  451 => 228,  449 => 227,  447 => 226,  445 => 225,  443 => 224,  441 => 223,  439 => 222,  437 => 221,  435 => 220,  433 => 219,  431 => 218,  429 => 217,  427 => 216,  425 => 215,  423 => 214,  421 => 213,  419 => 212,  417 => 211,  415 => 210,  413 => 209,  411 => 208,  409 => 207,  407 => 206,  405 => 205,  403 => 204,  401 => 203,  399 => 202,  397 => 201,  395 => 200,  393 => 199,  391 => 198,  389 => 197,  387 => 196,  376 => 187,  368 => 181,  361 => 158,  355 => 155,  350 => 153,  343 => 149,  337 => 146,  332 => 144,  325 => 140,  319 => 137,  314 => 135,  311 => 134,  304 => 129,  298 => 126,  293 => 124,  290 => 123,  287 => 122,  284 => 121,  277 => 117,  271 => 114,  263 => 109,  257 => 106,  252 => 103,  249 => 102,  247 => 101,  239 => 96,  229 => 88,  227 => 87,  225 => 86,  216 => 78,  210 => 77,  207 => 76,  192 => 74,  187 => 73,  184 => 72,  180 => 71,  170 => 63,  160 => 59,  151 => 57,  148 => 56,  144 => 55,  132 => 48,  120 => 38,  111 => 32,  107 => 31,  99 => 30,  95 => 28,  93 => 27,  89 => 26,  80 => 22,  72 => 16,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  52 => 10,  49 => 9,  47 => 8,  45 => 7,  43 => 6,  40 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "coursemenu_lat.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/coursemenu_lat.html.twig");
    }
}
