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

/* banner.html.twig */
class __TwigTemplate_49f28a2659385e482ce9112ef3ff388ca2a9bb1a2b582f562395251e05614ab0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base.html.twig", "banner.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
    ";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 5) == "4-col")) {
            // line 6
            echo "        ";
            $context["class"] = " d-col--12--desktop";
            // line 7
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 7) == "3-col")) {
            // line 8
            echo "        ";
            $context["class"] = " d-col--9--desktop";
            // line 9
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 9) == "2-col")) {
            // line 10
            echo "        ";
            $context["class"] = " d-col--6--desktop";
            // line 11
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 11) == "1-col")) {
            // line 12
            echo "        ";
            $context["class"] = " d-col--3--desktop";
            // line 13
            echo "    ";
        }
        // line 14
        echo "    <div class=\"d-col d-col--12 ";
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"d-video js-dashboard-video\"
             style=\"background-image: url('";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 16), "cover", [], "any", false, false, false, 16), "html", null, true);
        echo "')\"
             data-video-id=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 17), "video_uuid", [], "any", false, false, false, 17), "html", null, true);
        echo "\" data-video-data-video-url=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 17), "video_id", [], "any", false, false, false, 17), "html", null, true);
        echo "\" data-video-type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 17), "video_type", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        </div>
    </div>
    ";
        // line 20
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 20), "video_id", [], "any", false, false, false, 20)) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 20), "video_type", [], "any", false, false, false, 20)))) {
            // line 21
            echo "        ";
            $this->loadTemplate("base/videomodal.html.twig", "banner.html.twig", 21)->display(twig_array_merge($context, ["videoref" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 21), "video_type", [], "any", false, false, false, 21) . "-") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 21), "video_id", [], "any", false, false, false, 21)), "videoUuid" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 21), "video_uuid", [], "any", false, false, false, 21)]));
            // line 22
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 22,  101 => 21,  99 => 20,  89 => 17,  85 => 16,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "banner.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/sherils_vision/layout/appLms/dashboard/banner/banner.html.twig");
    }
}
