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

/* profile.html.twig */
class __TwigTemplate_80f9dfb06d21305ff5fde393ee1ebf45d36a2e939b04e4ce59bd2f52d4cc141f extends \Twig\Template
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
        echo "<!-- # Codice originale -->
";
        // line 30
        echo "
<!-- # Codice nuovo: -->
<li class=\"green_menu\">
    <div id=\"o-wrapper\" class=\"o-wrapper\">
        <button id=\"c-button--slide-right\" class=\"c-button header__profile__button\">
                <span class=\"header__profile__name\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserName", [], "method", false, false, false, 35), "html", null, true);
        echo "</span>
                <picture class=\"header__profile__picture\">

                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hasAvatar", [], "method", false, false, false, 38)) {
            // line 39
            echo "                        <img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getAvatar", [], "method", false, false, false, 39), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserName", [], "method", false, false, false, 39), "html", null, true);
            echo "\">
                    ";
        } else {
            // line 41
            echo "                        <img src=\"";
            echo FormaLms\lib\Get::tmpl_path();
            echo "static/images/icons/top-menu/icon--profile.svg\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserName", [], "method", false, false, false, 41), "html", null, true);
            echo "\">
                    ";
        }
        // line 43
        echo "                </picture>
        </button>
    </div>
</li>







<div id=\"c-menu--slide-right\" class=\"c-menu c-menu--slide-right user-panel\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xs-6\">
                <a title=\"";
        // line 58
        echo Lang::t("_PROFILE", "profile");
        echo "\" href=\"javascript:void(0)\" id=\"open_profile\" role=\"button\" aria-label=\"";
        echo Lang::t("_PROFILE", "screen_reader");
        echo "\" class=\"c-menu__close\" aria-hidden=\"true\">
                    <span class=\"glyphicon glyphicon-remove\">";
        // line 59
        echo Lang::t("_PROFILE", "profile");
        echo "</span>
                </a>
            </div>
            <div class=\"col-xs-6\">
                <a title=\"";
        // line 63
        echo Lang::t("_LOGOUT", "standard");
        echo "\" href=\"";
        echo FormaLms\lib\Get::rel_path("base");
        echo "/index.php?r=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Util_getConstant')->getCallable()("_logout_"), "html", null, true);
        echo "\">
                    <span class=\"glyphicon glyphicon-off\">";
        // line 64
        echo Lang::t("_LOGOUT", "standard");
        echo "</span>
                </a>
            </div>
        </div>
        <div class=\"tabnav js-tabnav\">
            ";
        // line 69
        if ((($context["profile"] ?? null) || ($context["credits"] ?? null))) {
            // line 70
            echo "                <div class=\"tabnav__label-wrapper\">
                ";
            // line 71
            if (($context["profile"] ?? null)) {
                // line 72
                echo "                    <div class=\"tabnav__label selected\" data-tab=\"profile\">";
                echo Lang::t("_PROFILE", "profile");
                echo "</div>
                ";
            }
            // line 74
            echo "                ";
            if (($context["credits"] ?? null)) {
                // line 75
                echo "                    <div class=\"tabnav__label";
                if ( !($context["profile"] ?? null)) {
                    echo " selected";
                }
                echo "\" data-tab=\"credits\">";
                echo Lang::t("_TIME_PERIODS", "standard");
                echo "</div>
                ";
            }
            // line 77
            echo "                </div>
            ";
        }
        // line 79
        echo "        </div>
        <div class=\"tabnav__content-wrapper\">
        ";
        // line 81
        if (($context["profile"] ?? null)) {
            // line 82
            echo "            <div class=\"tabnav__content tabnav__content--profile is-visible\">";
            echo twig_get_attribute($this->env, $this->source, ($context["profile"] ?? null), "homeUserProfile", [0 => "normal", 1 => false, 2 => false], "method", false, false, false, 82);
            echo "</div>
        ";
        }
        // line 84
        echo "        ";
        if (($context["credits"] ?? null)) {
            // line 85
            echo "            <div class=\"tabnav__content tabnav__content--credits";
            if ( !($context["profile"] ?? null)) {
                echo " is-visible";
            }
            echo "\">
                <div class=\"row credits\">
                    <div class=\"col-xs-12\">
                        <div class=\"js-credits-ajax-container\">";
            // line 88
            echo ($context["credits"] ?? null);
            echo "</div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 93
        echo "        </div>
        <div class=\"row course-subscription\">
            <div class=\"col-xs-12\">
                ";
        // line 96
        echo ($context["subscribeCourse"] ?? null);
        echo "
            </div>
        </div>
        <div class=\"row news\">
            <div class=\"col-xs-12\">
                ";
        // line 101
        echo ($context["news"] ?? null);
        echo "
            </div>
        </div>
        ";
        // line 104
        if ((twig_length_filter($this->env, ($context["languages"] ?? null)) > 1)) {
            // line 105
            echo "        <div class=\"row lang\">
            <div class=\"col-xs-6\">
                <p>";
            // line 107
            echo Lang::t("_CHANGELANG", "register");
            echo "</p>
            </div>
            <div class=\"col-xs-6\">
                ";
            // line 110
            echo Layout::buildLanguages();
            echo "
            </div>
        </div>
        ";
        }
        // line 114
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 114,  210 => 110,  204 => 107,  200 => 105,  198 => 104,  192 => 101,  184 => 96,  179 => 93,  171 => 88,  162 => 85,  159 => 84,  153 => 82,  151 => 81,  147 => 79,  143 => 77,  133 => 75,  130 => 74,  124 => 72,  122 => 71,  119 => 70,  117 => 69,  109 => 64,  101 => 63,  94 => 59,  88 => 58,  71 => 43,  63 => 41,  55 => 39,  53 => 38,  47 => 35,  40 => 30,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "profile.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/appLms/profile.html.twig");
    }
}
