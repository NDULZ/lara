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

/* block-form.html.twig */
class __TwigTemplate_f544c8fd29733469546f77ede5dff071484bc50ff745a25b944fd8342c83a784 extends \Twig\Template
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
        echo "<div class=\"dashboard__infoBlock\">
    <label class=\"dashboard__label\">";
        // line 2
        echo Lang::t("_TYPE", "dashboardsetting");
        echo "</label>
    <div class=\"dashboard__select\">
        <select class=\"form-control js-type-block\"
                data-block=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "postData", [], "any", false, false, false, 5), "block", [], "any", false, false, false, 5), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "availableTypes", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 7
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 7) == $context["type"])) {
                echo " selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        </select>
    </div>
</div>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "form", [], "any", false, false, false, 12));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 13
            echo "    ";
            $this->loadTemplate((("formtype/form-" . twig_get_attribute($this->env, $this->source, $context["form"], "type", [], "any", false, false, false, 13)) . ".html.twig"), "block-form.html.twig", 13)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "block-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  76 => 12,  71 => 9,  56 => 7,  52 => 6,  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "block-form.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/block-form.html.twig");
    }
}
