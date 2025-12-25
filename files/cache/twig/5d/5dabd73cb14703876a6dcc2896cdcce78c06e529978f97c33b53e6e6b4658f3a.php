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

/* show.html.twig */
class __TwigTemplate_0ec2486a1aae60f57384f3a6f2c8c81618e6ac07d833716b7993320fdf7c1ac9 extends \Twig\Template
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
        echo "<div class=\"homepage__row homepage__row--login homepage__row--gray no-padding\">

    <div class=\"visible-xs\">
        ";
        // line 4
        echo Layout::get_catalogue();
        echo "
    </div>
    ";
        // line 6
        if ( !($context["under_maintenence"] ?? null)) {
            // line 7
            echo "        ";
            if (array_key_exists("baseLogin", $context)) {
                // line 8
                echo "            <div class=\"col-xs-12 col-sm-6";
                if ( !array_key_exists("socialLogin", $context)) {
                    echo " col-sm-offset-3";
                }
                echo "\">
                ";
                // line 9
                if ((($context["block_attempts"] ?? null) == false)) {
                    // line 10
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["baseLogin"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                        // line 11
                        echo "                        ";
                        echo twig_get_attribute($this->env, $this->source, $context["login"], "form", [], "any", false, false, false, 11);
                        echo "
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 13
                    echo "                    ";
                    if ((($context["done"] ?? null) != false)) {
                        // line 14
                        echo "                        <div>
                            <b class=\"logout\">";
                        // line 15
                        echo twig_escape_filter($this->env, ($context["done"] ?? null), "html", null, true);
                        echo "</b>
                        </div>
                    ";
                    }
                    // line 18
                    echo "                    ";
                    if ((($context["msg"] ?? null) != false)) {
                        // line 19
                        echo "                        <div id=\"service_msg\">
                            <b class=\"login_failed\">";
                        // line 20
                        echo twig_escape_filter($this->env, ($context["msg"] ?? null), "html", null, true);
                        echo "</b>
                        </div>
                    ";
                    }
                    // line 23
                    echo "                ";
                } else {
                    // line 24
                    echo "                    <h3>";
                    echo Lang::t("_ACCESS_LOCK", "login");
                    echo "</h3>
                    <p>";
                    // line 25
                    echo twig_escape_filter($this->env, ($context["block_attempts"] ?? null), "html", null, true);
                    echo "</p>
                ";
                }
                // line 27
                echo "                ";
                if ( !array_key_exists("socialLogin", $context)) {
                    // line 28
                    echo "                    <div class=\"homepage__links\">
                        ";
                    // line 29
                    if ((($context["isSelfRegistrationActive"] ?? null) != false)) {
                        // line 30
                        echo "                            <a href=\"";
                        echo FormaLms\lib\Get::rel_path("base");
                        echo "/index.php?r=";
                        echo twig_escape_filter($this->env, twig_constant("_register_"), "html", null, true);
                        echo "\">";
                        echo Lang::t("_REGISTER", "login");
                        echo "</a>
                        ";
                    }
                    // line 32
                    echo "                        <a href=\"";
                    echo FormaLms\lib\Get::rel_path("base");
                    echo "/index.php?r=";
                    echo twig_escape_filter($this->env, twig_constant("_lostpwd_"), "html", null, true);
                    echo "\">";
                    echo Lang::t("_LOG_LOSTPWD", "login");
                    echo "</a>
                    </div>
                ";
                }
                // line 35
                echo "            </div>
        ";
            }
            // line 37
            echo "        ";
            if (array_key_exists("socialLogin", $context)) {
                // line 38
                echo "            <div class=\"col-xs-12 col-sm-6\">
                <div class=\"social-login\">
                    <p class=\"social-login__title\">
                        <span>";
                // line 41
                echo Lang::t("_SOCIAL_LOGIN", "login");
                echo "</span>
                    </p>
                    <div class=\"social-login__list\">
                        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["socialLogin"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["login"]) {
                    // line 45
                    echo "                            ";
                    echo twig_get_attribute($this->env, $this->source, $context["login"], "form", [], "any", false, false, false, 45);
                    echo "
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['login'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                    </div>
                </div>
                <nav class=\"homepage__links\">
                    ";
                // line 50
                if ((($context["isSelfRegistrationActive"] ?? null) != false)) {
                    // line 51
                    echo "                        <a href=\"";
                    echo FormaLms\lib\Get::rel_path("base");
                    echo "/index.php?r=";
                    echo twig_escape_filter($this->env, twig_constant("_register_"), "html", null, true);
                    echo "\">";
                    echo Lang::t("_REGISTER", "login");
                    echo "</a>
                    ";
                }
                // line 53
                echo "                    <a href=\"";
                echo FormaLms\lib\Get::rel_path("base");
                echo "/index.php?r=";
                echo twig_escape_filter($this->env, twig_constant("_lostpwd_"), "html", null, true);
                echo "\">";
                echo Lang::t("_LOG_LOSTPWD", "login");
                echo " </a>
                </nav>
            </div>
        ";
            }
            // line 57
            echo "    ";
        } else {
            // line 58
            echo "        <div class=\"box\">
            <h3>";
            // line 59
            echo Lang::t("_MAINTENANCE", "configuration");
            echo "</h3>
            <div class=\"text\">
                ";
            // line 61
            echo Lang::t("_MAINTENANCE_TEXT", "login");
            echo "
            </div>
        </div>
    ";
        }
        // line 65
        echo "</div>
<div class=\"homepage__row\">
    <br/>
    <strong>";
        // line 68
        echo ($context["intro_text_header"] ?? null);
        echo "</strong>
</div>
<div class=\"homepage__row\">
    <br/>
    <div class=\"collapse homepage__collapsed-text js-collapsed-text\" id=\"description\">
        <div style=\"line-height: 26px;\">";
        // line 73
        echo ($context["intro_text_body"] ?? null);
        echo "</div>
    </div>
    <div class=\"collapse-wrapper\" data-toggle=\"collapse\" data-target=\"#description\">
        <a class=\"forma-button forma-button--primary is-hidden js-show-collapsed-text btn-margin\" href=\"#\">
            ";
        // line 77
        echo ($context["read_all"] ?? null);
        echo "
        </a>
        <span class=\"glyphicon glyphicon-remove icon icon--close\">";
        // line 79
        echo ($context["close"] ?? null);
        echo "</span>
        <br/><br/>
    </div>
</div>
<div class=\"homepage__row homepage__row--footer\">
    <div class=\"homepage__links\">
        ";
        // line 85
        if (array_key_exists("externalPages", $context)) {
            // line 86
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["externalPage"]) {
                // line 87
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["externalPage"], "link", [], "any", false, false, false, 87), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["externalPage"], "title", [], "any", false, false, false, 87), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['externalPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "        ";
        }
        // line 90
        echo "    </div>
    <footer class=\"homepage__footer\">
        ";
        // line 92
        echo Layout::zone("footer");
        echo "
        ";
        // line 93
        echo Layout::copyright();
        echo "
    </footer>
</div>

<script>
    \$(document).ready(function () {
        var \$elem = \$('.js-collapsed-text');
        var _textHeight = \$elem.children('div').height();
        var _containerHeight = \$elem.height();
        var \$btn = \$('.js-show-collapsed-text');

        if (_textHeight > _containerHeight) {
            \$btn.removeClass('is-hidden');
        }
    });
</script>";
    }

    public function getTemplateName()
    {
        return "show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 93,  278 => 92,  274 => 90,  271 => 89,  260 => 87,  255 => 86,  253 => 85,  244 => 79,  239 => 77,  232 => 73,  224 => 68,  219 => 65,  212 => 61,  207 => 59,  204 => 58,  201 => 57,  189 => 53,  179 => 51,  177 => 50,  172 => 47,  163 => 45,  159 => 44,  153 => 41,  148 => 38,  145 => 37,  141 => 35,  130 => 32,  120 => 30,  118 => 29,  115 => 28,  112 => 27,  107 => 25,  102 => 24,  99 => 23,  93 => 20,  90 => 19,  87 => 18,  81 => 15,  78 => 14,  75 => 13,  66 => 11,  61 => 10,  59 => 9,  52 => 8,  49 => 7,  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appCore/homepage/show.html.twig");
    }
}
