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

/* add.html.twig */
class __TwigTemplate_50328b04b044d4825bfeba4f221f53d2da413f9f3f125c63b6453761494f0069 extends \Twig\Template
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
        echo FormaLms\lib\Get::title(["index.php?r=alms/communication/show" => Lang::t("_COMMUNICATION", "communication"), "" => Lang::t("_ADD", "communication")], false);
        // line 4
        echo "

";
        // line 6
        echo Form::openForm("add_comm", "index.php?r=alms/communication/insert", false, "post", "multipart/form-data");
        echo "
    ";
        // line 7
        echo Form::getDropdown(Lang::t("_CATEGORY", "communication"), "category", "id_category", []);
        echo "
    ";
        // line 8
        echo Form::getRadioSet(Lang::t("_TYPE", "communication"), "type_of", "type_of", ($context["types"] ?? null), "none");
        echo "


<div id=\"translation_tab\" style='margin-top:5%;'>
    <ul class=\"nav nav-tabs\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 14
            echo "            <li ";
            if ((($context["langCode"] ?? null) == $context["lang"])) {
                echo " class='active' ";
            }
            echo ">
                <a data-toggle=\"tab\" href=\"#langs_tab_";
            // line 15
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\"><em>";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "</em></a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </ul>
    <div class=\"tab-content\">
        ";
        // line 20
        $context["textareaName"] = "translation_";
        // line 21
        echo "        ";
        $context["labelName"] = "title_";
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["langs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["lang"]) {
            // line 23
            echo "            ";
            $context["name"] = (("title[" . $context["lang"]) . "]");
            // line 24
            echo "            ";
            $context["description"] = (("description[" . $context["lang"]) . "]");
            // line 25
            echo "            <div class=\"tab-pane ";
            if ((($context["langCode"] ?? null) == $context["lang"])) {
                echo " active ";
            }
            echo "\" id=\"langs_tab_";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\">
                ";
            // line 26
            echo Form::getTextfield(Lang::t("_TITLE", "communication"), (($context["labelName"] ?? null) . $context["lang"]), ($context["name"] ?? null), 255);
            echo "

                ";
            // line 28
            echo Form::getTextarea(Lang::t("_DESCRIPTION", "standard"), (($context["textareaName"] ?? null) . $context["lang"]), ($context["description"] ?? null));
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lang'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>
</div>
    <br>
    ";
        // line 34
        echo Form::getDatefield(Lang::t("_DATE", "communication"), "publish_date", "publish_date", twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "publish_date", [], "any", false, false, false, 34));
        echo "
    ";
        // line 35
        echo Form::getDropdown(Lang::t("_COURSE", "course"), "idCourse", "idCourse", []);
        echo "
    ";
        // line 36
        echo Form::openButtonSpace();
        echo "
    ";
        // line 37
        echo Form::getButton("undo", "undo", Lang::t("_UNDO", "admin_lang"));
        echo "
    ";
        // line 38
        echo Form::getButton("save", "save", Lang::t("_SAVE", "admin_lang"));
        echo "
    ";
        // line 39
        echo Form::closeButtonSpace();
        echo "
";
        // line 40
        echo Form::closeForm();
        echo "
<script>
    var data = ";
        // line 42
        echo json_encode(($context["categoriesDropdownData"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
    var dropPlaceholder = '";
        // line 43
        echo Lang::t("_OPTION", "communication");
        echo "';

    const categoryDropdown = new window.frontend.modules.Select2(\$(\"#category\"), {

        data: data,
        width: \"100%\",
        //  minimumResultsForSearch: 3,
        formatSelection: function (item) {
            return item.id
        },
        formatResult: function (item) {
            return item.text
        },
        templateResult: function (item) {
            var \$result = \$('<span style=\"padding-left:' + (20 * item.level) + 'px;\">' + item.text + '</span>');
            return \$result;
        },
        placeholder: dropPlaceholder,

    });

    const courseDropdown = new window.frontend.modules.Select2(\$(\"#idCourse\"), {

        width: \"100%\",
        ajax: {
            url: 'ajax.adm_server.php?mn=course&plf=lms&op=course_autocomplete',
            dataType: 'json',
            formatSelection: function (item) {
                return item.id
            },
            data: function (params) {
                var result = {
                    query: params.term,
                    authentic_request: '";
        // line 76
        echo twig_escape_filter($this->env, ($context["authentic_request"] ?? null), "html", null, true);
        echo "'
                }

                return result;
            },
            processResults: function (data) {

                return {
                    results: \$.map(data.courses, function (obj, index) {
                        return {id: obj.id_course, text: obj.name};
                    })
                };
            }
        },
        placeholder: dropPlaceholder,

    });
</script>";
    }

    public function getTemplateName()
    {
        return "add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 76,  162 => 43,  158 => 42,  153 => 40,  149 => 39,  145 => 38,  141 => 37,  137 => 36,  133 => 35,  129 => 34,  124 => 31,  115 => 28,  110 => 26,  101 => 25,  98 => 24,  95 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 18,  70 => 15,  63 => 14,  59 => 13,  51 => 8,  47 => 7,  43 => 6,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "add.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/admin/views/communication/add.html.twig");
    }
}
