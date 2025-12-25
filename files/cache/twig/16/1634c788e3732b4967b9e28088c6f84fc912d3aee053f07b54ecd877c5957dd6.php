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

/* select_target_tab.html.twig */
class __TwigTemplate_44bc717d834808b51abac38bb4ec583c6c5d9c1ad7ad838448559c377eef6ba9 extends \Twig\Template
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
        echo "<div class=\"folderView__copyOverlay\">
    <div class=\"folderView__copyOverlay__content\">
        <button class=\"folderView__copyOverlay__close js-fv-close-overlay\">
            <span class=\"folderView__copyOverlay__title\">";
        // line 4
        echo Lang::t("_Copy element in", "standard");
        echo "</span>
        </button>
        <ul class=\"dropdown-menu show\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 8
            echo "                <li class=\"folderView__li js-fv-copy-target\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-controller=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                    <div class=\"folderView__el\">
                        <span class=\"folderView__label\">";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</span>
                    </div>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        </ul>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "select_target_tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  60 => 10,  52 => 8,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "select_target_tab.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lomanager/select_target_tab.html.twig");
    }
}
