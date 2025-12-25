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

/* testquestion.html.twig */
class __TwigTemplate_856b0f632d68fe45d0d032e9c68f7fd82e9451bd7ede6c4bb611df2459280df8 extends \Twig\Template
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
        echo "<div class=\"page-header\">
  <h1>
    <a href=\"index.php?r=lms/coursereport/coursereport\">";
        // line 3
        echo Lang::t("_COURSEREPORT", "menu_course");
        echo "</a>
  </h1>
  <ul class=\"breadcrumb\">
    <li>";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "title", [], "any", false, false, false, 6), "html", null, true);
        echo "</li>
  </ul>
</div>

<div class=\"std_block\">
  ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["data"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["questions"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 12
            echo "    ";
            if (((twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 12) == "upload") || (twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 12) == "extended_text"))) {
                // line 13
                echo "      <div class=\"table-responsive\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading clearfix\">";
                // line 15
                echo twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 15);
                echo "</div>
          <table class=\"table table-bordered table-view \" summary=\"\" cellspacing=\"0\">
            <thead>
            <tr class=\"even intest\">
              <th>
                <span class=\"\">";
                // line 20
                echo (((twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 20) == "upload")) ? (Lang::t("_LOADED_FILE", "standard")) : (Lang::t("_VIEW_OPEN_QUEST", "stats")));
                echo "</span>
                <a href=\"javascript:void(0)\" class=\"test-question__show-more js-show-more\" data-idquest=\"";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "idQuest", [], "any", false, false, false, 21), "html", null, true);
                echo "\" data-idtest=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "idTest", [], "any", false, false, false, 21), "html", null, true);
                echo "\" data-type=\"";
                echo (((twig_get_attribute($this->env, $this->source, $context["question"], "type", [], "any", false, false, false, 21) == "upload")) ? ("upload") : ("extended-text"));
                echo "\"></a>
              </th>
            </tr>
            </thead>
            <tbody class=\"test-question__details-container\">
            </tbody>
          </table>
        </div>
      </div>
      <br />
    ";
            } else {
                // line 32
                echo "      <div class=\"table-responsive\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading clearfix\">";
                // line 34
                echo twig_get_attribute($this->env, $this->source, $context["question"], "title", [], "any", false, false, false, 34);
                echo "</div>
          <table class=\"table table-bordered table-view \" summary=\"\" cellspacing=\"0\">
            <thead>
              <tr class=\"even intest\">
                <th>
                  <div class=\"\">
                    <span class=\"\"></span>
                  </div>
                </th>
                <th class=\"image nowrap\" style=\"width: 40%\">
                  <div class=\"\"><span class=\"\">";
                // line 44
                echo Lang::t("_PERCENTAGE", "standard");
                echo "</span></div>
                </th>
              </tr>
            </thead>
            <tbody>
            ";
                // line 49
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["question"], "answers", [], "any", false, false, false, 49));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 50
                    echo "              <tr class=\"\">
                <td>
                  <div class=\"test-question__answer ";
                    // line 52
                    if (twig_get_attribute($this->env, $this->source, $context["answer"], "showIcon", [], "any", false, false, false, 52)) {
                        echo "test-question__answer--checked";
                    }
                    echo "\">
                      ";
                    // line 53
                    echo twig_get_attribute($this->env, $this->source, $context["answer"], "title", [], "any", false, false, false, 53);
                    echo "
                  </div>
                </td>
                <td class=\"image nowrap\">
                  <div class=\"\">
                    <div class=\"progress_bar\">
                      <div class=\"test-question__percent ";
                    // line 59
                    if ((twig_get_attribute($this->env, $this->source, $context["answer"], "percent", [], "any", false, false, false, 59) > 55)) {
                        echo "test-question__percent--white-text";
                    }
                    echo "\">
                        ";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "percent", [], "any", false, false, false, 60), "html", null, true);
                    echo "%
                      </div>
                      <div class=\"test-question__bar\" style=\"width: ";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["answer"], "percent", [], "any", false, false, false, 62), "html", null, true);
                    echo "%;\">&nbsp;
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "            </tbody>
          </table>
        </div>
      </div>
      <br />
    ";
            }
            // line 75
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "testquestion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 76,  176 => 75,  168 => 69,  155 => 62,  150 => 60,  144 => 59,  135 => 53,  129 => 52,  125 => 50,  121 => 49,  113 => 44,  100 => 34,  96 => 32,  78 => 21,  74 => 20,  66 => 15,  62 => 13,  59 => 12,  55 => 11,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "testquestion.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/coursereport/testquestion.html.twig");
    }
}
