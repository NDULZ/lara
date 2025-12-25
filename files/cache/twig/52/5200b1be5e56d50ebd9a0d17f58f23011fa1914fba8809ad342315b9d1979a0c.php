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

/* lostpwd.html.twig */
class __TwigTemplate_18d093c8275458b11c5f7022ddaff36290ef8a2f46ccd5c77362dc6ff76ef5bd extends \Twig\Template
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
        echo "<div class=\"homepage__row homepage__row--gray homepage__back\">
    <a href=\"";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["back"] ?? null), "link", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
        <span class=\"fa fa-chevron-left\"></span> ";
        // line 3
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, ($context["back"] ?? null), "title", [], "any", false, false, false, 3), ["<" => ""]), "html", null, true);
        echo "
    </a>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--centered homepage__text--title\">
        ";
        // line 8
        echo Lang::t("_LOG_LOSTPWD", "login");
        echo "
    </p>
</div>
<div class=\"homepage__row homepage__row--gray\">
    <p class=\"homepage__text homepage__text--left\">
        <strong>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lost_username"] ?? null), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "</strong><br>
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lost_username"] ?? null), "istruction", [], "any", false, false, false, 14), "html", null, true);
        echo "
    </p>
</div>
<div class=\"homepage__form homepage__form--lost-pwd\">
    <label for=\"lost_user_email\"><span class=\"screenreader\">";
        // line 18
        echo Lang::t("_INPUT_FORGOT_USERNAME", "screen_reader");
        echo "</span></label>
    ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["lost_username"] ?? null), "form", [], "any", false, false, false, 19);
        echo "
</div>
<div class=\"homepage__row homepage__row--gray\">
    <br>
    <p class=\"homepage__text homepage__text--left\">

        <strong>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lost_pwd"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "</strong><br>
        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["lost_pwd"] ?? null), "istruction", [], "any", false, false, false, 26), "html", null, true);
        echo "

    </p>
</div>
<div class=\"homepage__form homepage__form--lost-pwd\">
    <label for=\"lost_pwd_userid\"><span class=\"screenreader\">";
        // line 31
        echo Lang::t("_INPUT_FORGOT_PASSWORD", "screen_reader");
        echo "</span></label>
    ";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["lost_pwd"] ?? null), "form", [], "any", false, false, false, 32);
        echo "
</div>
<br>
<div class=\"homepage__row homepage__row--footer\">
    <nav class=\"homepage__links\">
        ";
        // line 37
        if (array_key_exists("externalPages", $context)) {
            // line 38
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["externalPages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["externalPage"]) {
                // line 39
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["externalPage"], "link", [], "any", false, false, false, 39), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["externalPage"], "title", [], "any", false, false, false, 39), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['externalPage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        ";
        }
        // line 42
        echo "    </nav>
</div>
";
    }

    public function getTemplateName()
    {
        return "lostpwd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 42,  126 => 41,  115 => 39,  110 => 38,  108 => 37,  100 => 32,  96 => 31,  88 => 26,  84 => 25,  75 => 19,  71 => 18,  64 => 14,  60 => 13,  52 => 8,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lostpwd.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appCore/homepage/lostpwd.html.twig");
    }
}
