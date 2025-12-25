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

/* details.html.twig */
class __TwigTemplate_b94245ff2a488277ab0e08c36bb86096ae7b51df49c3f212ecf2b0f5143c8b24 extends \Twig\Template
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
        echo "<div class=\"filter-container\">
    <select class=\"filter js-user-level-filter is-disabled\" style=\"position: relative\" disabled>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 7));
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
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 4
            echo "            ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 4)) {
                // line 5
                echo "                <option value=\"false\" selected>";
                echo Lang::t("_ALL");
                echo "</option>
            ";
            } else {
                // line 7
                echo "                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 7), "html", null, true);
                echo "\">";
                echo Lang::t(("_LEVEL_" . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 7)));
                echo "</option>
            ";
            }
            // line 9
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </select>
    <select class=\"filter js-editions-filter is-disabled\" style=\"position: relative; display: none;\" disabled></select>
    <div class=\"button--exportcsv\"><a href=\"index.php?r=lms/coursereport/export\">";
        // line 12
        echo Lang::t("_EXPORT_CSV", "standard");
        echo "</a></div>
</div>

<div class=\"table-responsive\">
    <table id=\"table-details\" class=\"table table-bordered table-striped\">
        <thead>
            <tr>
                <th colspan=\"2\" class=\"transparent\"></th>
                <th colspan=\"100\" class=\"text-center\">
                    ";
        // line 21
        echo Lang::t("_STUDENTS_VOTE", "coursereport");
        echo "
                </th>
            </tr>
            <tr class=\"js-table-course-headers\">
                <th>";
        // line 25
        echo Lang::t("_STUDENTS", "coursereport");
        echo "</th>
                <th>
                    <select class=\"filter js-user-detail-filter is-disabled\" disabled>
                    </select>
                </th>
                <th class=\"js-final-score text-center\">";
        // line 30
        echo Lang::t("_FINAL_SCORE", "standard");
        echo "
                    <div class=\"final-buttons-container\">
                        <a class=\"js-finals-filter round-report\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-calculator\" aria-hidden=\"true\"></i></a>
                        <a class=\"js-finals-filter redo-final\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-refresh\" aria-hidden=\"true\"></i></a>
                        <a class=\"edit-final\" href=\"#\" data-reportid=\"\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i></a>
                    </div>
                </th>
            </tr>
        </thead>
        <tbody class=\"js-details-table\">
        </tbody>
    </table>
</div>

<div class=\"pagination pagination__initial js-pagination\">

</div>

";
    }

    public function getTemplateName()
    {
        return "details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  112 => 25,  105 => 21,  93 => 12,  89 => 10,  75 => 9,  67 => 7,  61 => 5,  58 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "details.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/coursereport/details.html.twig");
    }
}
