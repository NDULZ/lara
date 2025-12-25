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

/* formtype/form-checkbox.html.twig */
class __TwigTemplate_ecdfff7c4ddd5078478d5e760536e44c4b2ad95f7203d58196aa2c1254d72f6d extends \Twig\Template
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
        echo "<div class=\"dashboard__infoBlock dashboard__infoBlock--checkbox\">
    <div class=\"form-group\">
        <label class=\"dashboard__label\" for=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 3), "block", [], "any", false, false, false, 3), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "-file\">";
        echo Lang::t(("_CHECKBOX_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 3))), "dashboardsetting");
        echo "</label>

        <div class=\"dashboard__infoContainer\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "values", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 7
            echo "
                <div class=\"dashboard__el\">
                    <input type=\"checkbox\" name=\"";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
            echo "\" class=\"js-extra-setting checkbox\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 9), "block", [], "any", false, false, false, 9), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\" ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 9), [], "any", false, false, false, 9) == ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 9), "block", [], "any", false, false, false, 9) . "_") . ($context["index"] ?? null)) . "_") . $context["key"]))) {
                echo "checked=\"checked\"";
            }
            echo " />";
            echo Lang::t(("_CHECKBOX_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 9))), "dashboardsetting");
            echo "
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "formtype/form-checkbox.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 13,  59 => 9,  55 => 7,  51 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "formtype/form-checkbox.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/formtype/form-checkbox.html.twig");
    }
}
