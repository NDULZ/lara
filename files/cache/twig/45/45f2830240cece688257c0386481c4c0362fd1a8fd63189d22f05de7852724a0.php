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

/* formtype/form-text.html.twig */
class __TwigTemplate_c6a5291607b2dbaf877377455765f8f88fcf3cffa0225a6dd9fbea599ae76001 extends \Twig\Template
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
        echo "<div class=\"dashboard__infoBlock dashboard__infoBlock--input\">
    <div class=\"form-group\">
        <label class=\"dashboard__label\" for=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 3), "block", [], "any", false, false, false, 3), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "-file\">";
        echo Lang::t(("_INPUT_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 3))), "dashboardsetting");
        echo "</label>
        <div class=\"dashboard__infoContainer\">
            <input name=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "\" class=\"form-control js-extra-setting\" type=\"text\" placeholder=\"";
        echo Lang::t(("_INPUT_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 5))), "dashboardsetting");
        echo "\" data-block=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 5), "block", [], "any", false, false, false, 5), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["loop"] ?? null), "index0", [], "any", false, false, false, 5), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 5), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 5), [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "formtype/form-text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "formtype/form-text.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/formtype/form-text.html.twig");
    }
}
