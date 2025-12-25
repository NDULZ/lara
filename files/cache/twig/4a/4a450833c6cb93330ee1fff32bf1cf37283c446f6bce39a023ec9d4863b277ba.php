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

/* dashboard.html.twig */
class __TwigTemplate_95430b482922b3814508d0354760bf50e378c666886c1661529bf6a295c0888d extends \Twig\Template
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
        echo "<div class=\"js-router--dashboard dashboard\">
    <script>
        window.dashboardLayoutId = '";
        // line 3
        echo twig_escape_filter($this->env, ($context["dashboardLayoutId"] ?? null), "html", null, true);
        echo "';
    </script>
    <div class=\"d-grid\">
        <div class=\"d-row\">
            ";
        // line 7
        if (twig_length_filter($this->env, ($context["blocks"] ?? null))) {
            // line 8
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["blocks"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 9
                echo "                    ";
                $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["block"], "view", [], "any", false, false, false, 9), "dashboard.html.twig", 9)->display(twig_array_merge($context, ["block" => $context["block"]]));
                // line 10
                echo "                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "            ";
        } else {
            // line 12
            echo "                <div class=\"middlearea_container col-md-12\">
                    <div class=\"alert alert-danger text-center\">";
            // line 13
            echo Lang::t("_DASHBOARD_NO_LAYOUTS", "dashboardsetting");
            echo "</div>
                </div>
            ";
        }
        // line 16
        echo "        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 16,  91 => 13,  88 => 12,  85 => 11,  71 => 10,  68 => 9,  50 => 8,  48 => 7,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/dashboard/dashboard.html.twig");
    }
}
