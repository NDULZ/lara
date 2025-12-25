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
class __TwigTemplate_c5ebd8aab46352731cc98d4e625f50db1a4f42135feafb11e54d3aabfe59c7cd extends \Twig\Template
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
                                class=\"folderTree__link ft-is-root ft-is-selected ft-is-folder ft-is-folderOpen is-dropzone\">
                            <span>";
        // line 15
        echo Lang::t("_LEVEL", "standard");
        echo "</span>
                        </button>
                        <ul class=\"folderTree__ul js-sortable-tree\"></ul>
                    </li>
                </ul>
            </nav>
        </aside>
        <main class=\"folderViewContent folderViewContent--two-third\">
            ";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "edit", [], "any", false, false, false, 23)) {
            // line 24
            echo "                <div class=\"folderTree__actions\">
                    ";
            // line 25
            $this->loadTemplate("create_new_item.html.twig", "container.html.twig", 25)->display(twig_array_merge($context, ["tab" => ($context["tab"] ?? null), "lo_types" => ($context["lo_types"] ?? null)]));
            // line 26
            echo "                </div>
            ";
        }
        // line 28
        echo "            <div class=\"folderView\"></div>
        </main>
    </section>
    ";
        // line 31
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
        return array (  101 => 31,  96 => 28,  92 => 26,  90 => 25,  87 => 24,  85 => 23,  74 => 15,  58 => 6,  52 => 5,  48 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "container.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lomanager/container.html.twig");
    }
}
