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

/* partials/modal_category.html.twig */
class __TwigTemplate_73294df0dee02d4c7907f4e0173adbf47dca82812b87f6fd27e13c665c86345e extends \Twig\Template
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
        echo "<!-- Modal add -->
<div class=\"modal\" id=\"categoryModal\" style=\"display: none; z-index: 9999;\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-body\" data-val=\"body\">
\t\t\t    ";
        // line 6
        echo Form::openForm("add_category", "ajax.adm_server.php?r=alms/communication/addCategoryAction", false, "post", "multipart/form-data");
        echo "

\t\t
\t\t\t\t";
        // line 9
        echo Form::getDropdown(Lang::t("_CATEGORY", "communication"), "category", "id_category", []);
        echo "
\t\t
\t\t\t\t<div id=\"translation_tab\" style='margin-top:5%;'>
\t\t\t\t\t<ul class=\"nav nav-tabs\">
\t\t\t\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 14
            echo "\t\t\t\t\t\t\t\t<li ";
            if ((($context["langCode"] ?? null) == $context["lang"])) {
                echo " class='active' ";
            }
            echo ">
\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#langs_tab_";
            // line 15
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\"><em>";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "</em></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t\t</ul>
\t\t\t\t\t<div class=\"tab-content\">
\t\t\t\t\t";
        // line 20
        $context["textareaName"] = "translation_";
        // line 21
        echo "\t\t\t\t\t";
        $context["labelName"] = "name_";
        // line 22
        echo "\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 23
            echo "\t\t\t\t\t\t\t";
            $context["name"] = (("name[" . $context["lang"]) . "]");
            // line 24
            echo "\t\t\t\t\t\t\t";
            $context["description"] = (("description[" . $context["lang"]) . "]");
            // line 25
            echo "\t\t\t\t\t\t\t<div class=\"tab-pane ";
            if ((($context["langCode"] ?? null) == $context["lang"])) {
                echo " active ";
            }
            echo "\" id=\"langs_tab_";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t";
            // line 26
            echo Form::getTextfield(Lang::t("_LABEL", "communication"), (($context["labelName"] ?? null) . $context["lang"]), ($context["name"] ?? null), 255);
            echo "

\t\t\t\t\t\t\t\t";
            // line 28
            echo Form::getTextarea(Lang::t("_DESCRIPTION", "standard"), (($context["textareaName"] ?? null) . $context["lang"]), ($context["description"] ?? null), "");
            echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t";
        // line 35
        echo Form::openButtonSpace();
        echo "
\t\t\t\t";
        // line 36
        echo Form::getButton("save", "save", Lang::t("_SAVE", "admin_lang"));
        echo "
\t\t\t\t";
        // line 37
        echo Form::getButton("undo", "undo", Lang::t("_UNDO", "admin_lang"));
        echo "
\t\t\t\t";
        // line 38
        echo Form::closeButtonSpace();
        echo "
\t\t\t</div>
\t\t\t";
        // line 40
        echo Form::closeForm();
        echo "
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "partials/modal_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 40,  140 => 38,  136 => 37,  132 => 36,  128 => 35,  122 => 31,  113 => 28,  108 => 26,  99 => 25,  96 => 24,  93 => 23,  88 => 22,  85 => 21,  83 => 20,  79 => 18,  68 => 15,  61 => 14,  57 => 13,  50 => 9,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partials/modal_category.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/admin/views/communication/partials/modal_category.html.twig");
    }
}
