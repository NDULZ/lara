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

/* partials/elearning-course-box.html.twig */
class __TwigTemplate_c90fef7c59c12bae630526d17efdde1d79c73f7f77da7e6cd46a55e46ea3fc14 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/course-box.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["courseBoxClasses"] = [];
        // line 3
        if ( !twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "courseBoxEnabled", [], "any", false, false, false, 3)) {
            // line 4
            $context["courseBoxClasses"] = twig_array_merge(($context["courseBoxClasses"] ?? null), [0 => "course-box--disabled"]);
        }
        // line 1
        $this->parent = $this->loadTemplate("partials/course-box.html.twig", "partials/elearning-course-box.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "partials/elearning-course-box.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 1,  45 => 4,  43 => 3,  41 => 2,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/elearning-course-box.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/elearning/partials/elearning-course-box.html.twig");
    }
}
