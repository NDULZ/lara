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

/* container.html.twig */
class __TwigTemplate_69822d3c2244cc638320b57424881da4d2b2201d42fbe189befcabd95c4e58f1 extends \Twig\Template
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
        $context["data"] = twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "data", [], "any", false, false, false, 1);
        // line 2
        echo "
<div class=\"tab-pane ";
        // line 3
        echo ((twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "active", [], "any", false, false, false, 3)) ? ("active") : (""));
        echo "\" data-container=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 3), "html", null, true);
        echo "\">
    ";
        // line 4
        echo Form::openForm("orgshow", "index.php?modname=storage&op=display", false, "POST");
        echo "
    <input type=\"hidden\" id=\"treeview_selected_";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 5), "html", null, true);
        echo "\" name=\"treeview_selected_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 5), "html", null, true);
        echo "\" value=\"0\">
    <input type=\"hidden\" id=\"treeview_state_";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        echo "\" name=\"treeview_state_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "currentState", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
    <section class=\"folderTreeView js-folder-tree-view\">
        <aside class=\"folderTreeContent folderTreeContent--one-third\">
            <nav class=\"folderTree js-folder-tree\">
                <ul class=\"folderTree__ul js-folder-root\">
                    <li data-id=\"0\" class=\"folderTree__li ft-is-parent\">
                        <button data-id=\"0\"
                                type=\"button\"
                                class=\"folderTree__link ft-is-root ft-is-selected ft-is-folder ft-is-folderOpen is-dropzone\"><span>";
        // line 14
        echo Lang::t("_LEVEL", "standard");
        echo "</span></button>
                        <ul class=\"folderTree__ul js-sortable-tree\">
                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 17
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["el"], "is_folder", [], "any", false, false, false, 17)) {
                // line 18
                echo "                                    <li data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "id", [], "any", false, false, false, 18), "html", null, true);
                echo "\" class=\"folderTree__li ";
                if ((twig_get_attribute($this->env, $this->source, $context["el"], "childCount", [], "any", false, false, false, 18) > 0)) {
                    echo "ft-is-parent";
                }
                echo " is-droppable\" draggable=\"true\">
                                        ";
                // line 19
                if ((twig_get_attribute($this->env, $this->source, $context["el"], "childCount", [], "any", false, false, false, 19) > 0)) {
                    // line 20
                    echo "                                            <span class=\"arrow\"></span>
                                        ";
                }
                // line 22
                echo "                                        <button data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "\"
                                                type=\"button\"
                                                class=\"folderTree__link ft-is-folder ";
                // line 24
                if ((twig_get_attribute($this->env, $this->source, $context["el"], "childCount", [], "any", false, false, false, 24) > 0)) {
                    echo "ft-has-child";
                }
                echo " is-dropzone\"><span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "title", [], "any", false, false, false, 24), "html", null, true);
                echo "</span></button>
                                    </li>
                                ";
            }
            // line 27
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "                        </ul>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class=\"folderViewContent folderViewContent--two-third\">
            ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "edit", [], "any", false, false, false, 34)) {
            // line 35
            echo "                <div class=\"folderTree__actions\">
                    ";
            // line 36
            $this->loadTemplate("create_new_item.html.twig", "container.html.twig", 36)->display(twig_array_merge($context, ["tab" => ($context["tab"] ?? null), "lo_types" => ($context["lo_types"] ?? null)]));
            // line 37
            echo "                </div>
            ";
        }
        // line 39
        echo "            <div class=\"folderView\">
                <ul class=\"folderView__ul js-sortable-view\">

                </ul>
            </div>
        </main>
    </section>
    ";
        // line 46
        echo Form::closeForm();
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 46,  141 => 39,  137 => 37,  135 => 36,  132 => 35,  130 => 34,  122 => 28,  116 => 27,  106 => 24,  100 => 22,  96 => 20,  94 => 19,  85 => 18,  82 => 17,  78 => 16,  73 => 14,  58 => 6,  52 => 5,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lo/container.html.twig");
    }
}
