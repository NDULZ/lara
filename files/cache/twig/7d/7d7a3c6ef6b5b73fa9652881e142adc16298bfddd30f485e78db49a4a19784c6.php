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

/* show.html.twig */
class __TwigTemplate_b97395b17405dc1ed40727943609d71b9b113e989c7767e56a2d2d7b1992680b extends \Twig\Template
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
    <h1>";
        // line 2
        echo Lang::t("_MENU_COURSE", "storage");
        echo "</h1>
</div>

<div class=\"std_block\">
    <div class=\"tabs-wrapper\">
        <ul class=\"nav nav-tabs\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 9
            echo "                <li role=\"presentation\" class=\"tab-link ";
            echo ((twig_get_attribute($this->env, $this->source, $context["tab"], "active", [], "any", false, false, false, 9)) ? ("active") : (""));
            echo "\" data-type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 9), "html", null, true);
            echo "\" data-controller=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", false, false, false, 9), "html", null, true);
            echo "\" data-scorm_player_enabled=\"";
            echo twig_get_attribute($this->env, $this->source, $context["tab"], "scormPlayerEnabled", [], "any", false, false, false, 9);
            echo "\">
                    <a href=\"#";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "type", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "        </ul>

        <div class=\"tab-content fv-is-teacher-area\">
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
            // line 17
            echo "                ";
            $this->loadTemplate("container.html.twig", "show.html.twig", 17)->display(twig_array_merge($context, ["tab" => $context["tab"], "lo_types" => ($context["lo_types"] ?? null)]));
            // line 18
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        </div>

        ";
        // line 21
        $this->loadTemplate("rename.html.twig", "show.html.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->loadTemplate("select_target_tab.html.twig", "show.html.twig", 22)->display(twig_array_merge($context, ["tabs" => ($context["tabs"] ?? null)]));
        // line 23
        echo "    </div>
</div>

<script>
const tabs = document.querySelectorAll('.tab-link');
const activeTab = document.querySelector('.tab-link.active');
window.type = document.querySelector('.tab-content > .active').getAttribute('data-container');

if (tabs) {
    let controllers = [];
    tabs.forEach((tab) => {
        controllers.push({
            tab: tab,
            controller: tab.getAttribute('data-controller'),
            selector: tab.getAttribute('data-type'),
            scormPlayerEnabled: tab.getAttribute('data-scorm_player_enabled'),
        });
    });
    
    new window.frontend.modules.TeacherLearningObject(controllers);
}
</script>
";
    }

    public function getTemplateName()
    {
        return "show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 23,  120 => 22,  118 => 21,  114 => 19,  100 => 18,  97 => 17,  80 => 16,  75 => 13,  64 => 10,  53 => 9,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lomanager/show.html.twig");
    }
}
