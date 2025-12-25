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

/* new-block-form.html.twig */
class __TwigTemplate_60345dc40f1652c3a19716ba99c2146786e013f88d06f077e9dbb30f99e66cb7 extends \Twig\Template
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
        $context["block"] = twig_array_merge(($context["block"] ?? null), ["type" => ($context["type"] ?? null)]);
        // line 2
        echo "
<div id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 3), "block", [], "any", false, false, false, 3), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\"
     class=\"dashboard__block dashboard__block--";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 4), "html", null, true);
        echo "\"
     data-block=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 5), "block", [], "any", false, false, false, 5), "html", null, true);
        echo "\"
     data-type=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        echo "\"
     data-action=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "registeredActions", [], "any", false, false, false, 7), ","), "html", null, true);
        echo "\" data-first-insert=\"true\">
    <div class=\"dashboard__content\">
        <button class=\"dashboard__remove js-remove-block\" data-block=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 9), "block", [], "any", false, false, false, 9), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\"></button>
        <div class=\"dashboard__title\">";
        // line 10
        echo Lang::t(("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 10), "block", [], "any", false, false, false, 10))), "dashboardsetting");
        echo "</div>
        ";
        // line 17
        echo "
        <div class=\"dashboard__description\">";
        // line 18
        echo Lang::t(("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 18), "block", [], "any", false, false, false, 18))), "dashboardsetting");
        echo "</div>

        <div class=\"dashboard__info\">
            ";
        // line 21
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "registeredActions", [], "any", false, false, false, 21)) > 0)) {
            // line 22
            echo "                <div class=\"dashboard__infoBlock\">
                    <div class=\"dashboard__label\">";
            // line 23
            echo Lang::t("_ENABLED_ACTIONS", "dashboardsetting");
            echo "</div>
                    <div class=\"dashboard__infoContainer dashboard__enabledActions\">
                        <div class=\"dashboard__elx\">
                            ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "registeredActions", [], "any", false, false, false, 26));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 27
                echo "                                <label class=\"d-block\" style=\"display:block;\">
                                    <input name=\"enabledActions[";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28), "html", null, true);
                echo "]\"
                                        type=\"checkbox\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                echo "\"
                                        ";
                // line 30
                if (twig_in_filter($context["action"], twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "enabledActions", [], "any", false, false, false, 30))) {
                    echo "checked";
                }
                echo " />";
                echo Lang::t(((("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 30), "block", [], "any", false, false, false, 30))) . "_") . twig_upper_filter($this->env, $context["action"])), "dashboardsetting");
                echo "
                                </label>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        // line 37
        echo "
            ";
        // line 38
        $this->loadTemplate("block-form.html.twig", "new-block-form.html.twig", 38)->display($context);
        // line 39
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "new-block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 39,  153 => 38,  150 => 37,  144 => 33,  123 => 30,  119 => 29,  115 => 28,  112 => 27,  95 => 26,  89 => 23,  86 => 22,  84 => 21,  78 => 18,  75 => 17,  71 => 10,  65 => 9,  60 => 7,  56 => 6,  52 => 5,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "new-block-form.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/new-block-form.html.twig");
    }
}
