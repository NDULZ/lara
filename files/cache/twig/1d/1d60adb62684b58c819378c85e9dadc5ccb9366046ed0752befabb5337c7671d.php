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

/* formtype/form-select.html.twig */
class __TwigTemplate_97cb635ccadaf66432912da3539d6fd56a4034d425f702559537d50efb6bdd48 extends \Twig\Template
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
        echo "<div class=\"dashboard__infoBlock dashboard__infoBlock--select\">
    <label class=\"dashboard__label\"
           for=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 3), "block", [], "any", false, false, false, 3), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "-file\">";
        echo Lang::t(("_SELECT_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 3))), "dashboardsetting");
        echo "</label>

    <select name=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"dashboard__select form-control js-extra-setting\"
            data-block=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 6), "block", [], "any", false, false, false, 6), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">

        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "values", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 9
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 9), [], "any", false, false, false, 9) == $context["key"])) {
                echo " selected";
            }
            echo ">";
            echo Lang::t($context["value"], "dashboardsetting");
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </select>
</div>
";
    }

    public function getTemplateName()
    {
        return "formtype/form-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  65 => 9,  61 => 8,  54 => 6,  50 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "formtype/form-select.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/formtype/form-select.html.twig");
    }
}
