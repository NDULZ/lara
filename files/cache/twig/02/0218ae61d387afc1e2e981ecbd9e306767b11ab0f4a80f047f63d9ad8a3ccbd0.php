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

/* partials/modal_confirm.html.twig */
class __TwigTemplate_1475a65aeb517bb3bc1d2ca8eb38d6cb8d7709b5935c35a452033029069bb6e7 extends \Twig\Template
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
        echo "<!-- Modal confirm -->
<div class=\"modal\" id=\"confirmModal\" style=\"display: none; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\" data-val=\"body\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"yes\" class=\"btn btn-primary\" data-val=\"yes\">";
        // line 8
        echo Lang::t("_YES", "standard");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-val=\"no\">";
        // line 9
        echo Lang::t("_NO", "standard");
        echo "</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/modal_confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/modal_confirm.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/admin/views/communication/partials/modal_confirm.html.twig");
    }
}
