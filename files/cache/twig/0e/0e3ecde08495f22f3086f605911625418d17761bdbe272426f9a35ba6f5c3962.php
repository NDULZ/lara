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

/* formtype/form-image.html.twig */
class __TwigTemplate_6b69c8e744eb93aaa5764c1cf76f22297fd4bf2c477a9c4e0508b4ed73e1bc22 extends \Twig\Template
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
        echo "<div class=\"dashboard__infoBlock dashboard__infoBlock--image\">
    <div class=\"form-group\">
        <label class=\"dashboard__label\"
               for=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 4), "block", [], "any", false, false, false, 4), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "-image\">";
        echo Lang::t(("_IMAGE_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 4))), "dashboardsetting");
        echo "</label>

        <div class=\"dashboard__infoContainer\">
            <input type=\"file\" name=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "\" class=\"form-control-image js-extra-setting js-upload-file\"
                   id=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "field", [], "any", false, false, false, 8), "html", null, true);
        echo "\" data-block=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 8), "block", [], "any", false, false, false, 8), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 8), [], "any", false, false, false, 8), "html", null, true);
        echo "\">
            <input type=\"hidden\" class=\"form-control-image\" id=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 9), "block", [], "any", false, false, false, 9), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "-image-string\"
                   data-block=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 10), "block", [], "any", false, false, false, 10), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">

                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 12), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 12), [], "any", false, false, false, 12), "html", null, true);
        echo "\" style=\"width: 100px; ";
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, true, false, 12), twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 12), [], "any", true, true, false, 12)) {
            echo "display:none;";
        }
        echo "\">
        </div>

        <div class=\"dashboard__helper\">";
        // line 15
        echo Lang::t("_DASHBOARD_SETTING_IMAGE_ALLOWED_TYPES", "dashboardsetting");
        echo " .jpg, .png, .gif</div>
        <div class=\"dashboard__error\">";
        // line 16
        echo Lang::t("_DASHBOARD_SETTING_IMAGE_TYPE_ERROR", "dashboardsetting");
        echo "<br> .jpg, .png, .gif
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "formtype/form-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 16,  87 => 15,  77 => 12,  70 => 10,  64 => 9,  56 => 8,  52 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "formtype/form-image.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/formtype/form-image.html.twig");
    }
}
