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

/* logo.html.twig */
class __TwigTemplate_f2a1bffd024833d8d2dd78066d097cd5f7a2a6c0bbff5beca32a2a2a87519d48 extends \Twig\Template
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
        echo "<a class=\"navbar-brand\" href=\"";
        echo twig_escape_filter($this->env, ($context["homePage"] ?? null), "html", null, true);
        echo "\">
    <img class=\"left_logo\" src=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["logo"] ?? null), "html", null, true);
        echo "\" alt=\"";
        echo Lang::t("_COMPANY_LOGO");
        echo "\"/>
</a> ";
    }

    public function getTemplateName()
    {
        return "logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "logo.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/appLms/logo.html.twig");
    }
}
