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
class __TwigTemplate_54f8970428728feb88a7c4451aaf3c652dddd359e6817a2cb998993a30edc782 extends \Twig\Template
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
        return new Source("", "logo.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/logo.html.twig");
    }
}
