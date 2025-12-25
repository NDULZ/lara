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

/* overview.html.twig */
class __TwigTemplate_86061da8ddee355ad80628556be28629d3f214d2c429d5a4841844028b689aa3 extends \Twig\Template
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
        echo "<div class=\"table-responsive\">
    <table id=\"table-overview\" class=\"table table-bordered\">
        <colgroup>
            <col style=\"width: 30px\">
            <col style=\"width: 30px\">
            <col style=\"width: 330px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 55px\">
            <col style=\"width: 100px\">
            <col style=\"width: 55px\">
        </colgroup>
        <thead>
        <tr>
            <th colspan=\"2\" class=\"transparent\"></th>
            <th colspan=\"7\">";
        // line 25
        echo Lang::t("_INFO", "coursereport");
        echo "</th>
            <th colspan=\"7\">";
        // line 26
        echo Lang::t("_DETAILS", "standard");
        echo "</th>
            <th class=\"transparent\"></th>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>";
        // line 33
        echo Lang::t("_TYPE", "standard");
        echo "</td>
            <td>";
        // line 34
        echo Lang::t("_TEST_QUEST_MAXTESTSCORE", "test");
        echo "</td>
            <td>";
        // line 35
        echo Lang::t("_REQUIRED_SCORE", "standard");
        echo "</td>
            <td>";
        // line 36
        echo Lang::t("_WEIGHT", "coursereport");
        echo "</td>
            <td>";
        // line 37
        echo Lang::t("_SHOW_TO_USER", "coursereport");
        echo "</td>
            <td>";
        // line 38
        echo Lang::t("_USE_FOR_FINAL", "coursereport");
        echo "</td>
            <td>";
        // line 39
        echo Lang::t("_PASSED", "coursereport");
        echo "</td>
            <td>";
        // line 40
        echo Lang::t("_NOT_PASSED", "coursereport");
        echo "</td>
            <td>";
        // line 41
        echo Lang::t("_NOT_CHECKED", "coursereport");
        echo "</td>
            <td>";
        // line 42
        echo Lang::t("_AVERANGE", "standard");
        echo "</td>
            <td>";
        // line 43
        echo Lang::t("_MAX_SCORE", "standard");
        echo "</td>
            <td>";
        // line 44
        echo Lang::t("_MIN_SCORE", "standard");
        echo "</td>
            <td>";
        // line 45
        echo Lang::t("_SHOW_IN_DETAIL", "test");
        echo "</td>
            <td></td>
        </tr>
        </thead>
        <tbody class=\"course-sortable\">
        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_0 = ($context["overview"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["tests"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["test"]) {
            // line 51
            echo "            <tr>
                <td class=\"handle\"><i class=\"fa fa-sort\"></i></td>
                <td></td>
                <td class=\"name\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "name", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "typeString", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "max", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "required", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "weight", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["test"], "show", [], "any", false, false, false, 59)) {
                // line 60
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 62
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 64
            echo "                ";
            if (twig_get_attribute($this->env, $this->source, $context["test"], "final", [], "any", false, false, false, 64)) {
                // line 65
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-check\"></i></td>
                ";
            } else {
                // line 67
                echo "                    <td class=\"text-center table-cell\"><i class=\"fa fa-close\"></i></td>
                ";
            }
            // line 69
            echo "                <td class=\"table-cell\">
                    ";
            // line 70
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "passed", [], "any", false, false, false, 70), "active", [], "any", false, false, false, 70)) {
                // line 71
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "passed", [], "any", false, false, false, 71), "link", [], "any", false, false, false, 71), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "passed", [], "any", false, false, false, 71), "value", [], "any", false, false, false, 71), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 73
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "passed", [], "any", false, false, false, 73), "value", [], "any", false, false, false, 73), "html", null, true);
                echo "
                    ";
            }
            // line 75
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_passed", [], "any", false, false, false, 77), "active", [], "any", false, false, false, 77)) {
                // line 78
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_passed", [], "any", false, false, false, 78), "link", [], "any", false, false, false, 78), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_passed", [], "any", false, false, false, 78), "value", [], "any", false, false, false, 78), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 80
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_passed", [], "any", false, false, false, 80), "value", [], "any", false, false, false, 80), "html", null, true);
                echo "
                    ";
            }
            // line 82
            echo "                </td>
                <td class=\"table-cell\">
                    ";
            // line 84
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_checked", [], "any", false, false, false, 84), "active", [], "any", false, false, false, 84)) {
                // line 85
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_checked", [], "any", false, false, false, 85), "link", [], "any", false, false, false, 85), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_checked", [], "any", false, false, false, 85), "value", [], "any", false, false, false, 85), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 87
                echo "                        ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["test"], "not_checked", [], "any", false, false, false, 87), "value", [], "any", false, false, false, 87), "html", null, true);
                echo "
                    ";
            }
            // line 89
            echo "                </td>
                <td class=\"table-cell\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "average", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "max_score", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "min_score", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                <td class=\"table-cell\">
                    <input class=\"js-set-detail-visibility\" type=\"checkbox\" data-value=\"";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["test"], "idReport", [], "any", false, false, false, 94), "html", null, true);
            echo "\" ";
            if (twig_get_attribute($this->env, $this->source, $context["test"], "showInDetail", [], "any", false, false, false, 94)) {
                echo "checked";
            }
            echo ">
                </td>
                <td class=\"actions\">
                    ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["test"], "actions", [], "any", false, false, false, 97));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 98
                echo "                        ";
                if (twig_get_attribute($this->env, $this->source, $context["action"], "visible", [], "any", false, false, false, 98)) {
                    // line 99
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "link", [], "any", false, false, false, 99), "html", null, true);
                    echo "\"><i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["action"], "icon", [], "any", false, false, false, 99), "html", null, true);
                    echo "\"></i></a>
                        ";
                }
                // line 101
                echo "                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['test'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "        </tbody>
        <tfoot class=\"empty\">
        <th colspan=\"17\"></th>
        </tfoot>
    </table>

</div>

<div class=\"button--add\">
    <span>";
        // line 114
        echo Lang::t("_ADD_ACTIVITY", "coursereport");
        echo "</span>
    <ul class=\"dropdown\">
        <li><a href=\"index.php?r=lms/coursereport/addactivity\">";
        // line 116
        echo Lang::t("_ADD_ACTIVITY_TITLE", "coursereport");
        echo "</a>
        </li>
        <li><a href=\"index.php?r=lms/coursereport/addscorm\">";
        // line 118
        echo Lang::t("_ADD_SCORM_RESULTS", "coursereport");
        echo "</a>
        </li>
    </ul>
</div>


<div class=\"activities-container\">
    ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($__internal_compile_1 = ($context["details"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["activities"] ?? null) : null));
        foreach ($context['_seq'] as $context["_key"] => $context["activity"]) {
            // line 126
            echo "        <div data-activityId=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "id", [], "any", false, false, false, 126), "html", null, true);
            echo "\" data-activityName=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["activity"], "name", [], "any", false, false, false, 126), "html", null, true);
            echo "\"></div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['activity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        echo "</div>


<script type=\"text/javascript\">

    activities = ";
        // line 133
        echo json_encode(($context["details"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";

    \$(document).ready(function() {
        var table = \$('#table-overview').DataTable({
            paging: true,
            pagingType: 'numbers',
            \"columns\": [
                { \"orderable\": false, \"searchable\": false },
                {
                    \"className\":      'details-control',
                    \"orderable\":      false,
                    \"data\":           null,
                    \"defaultContent\": ''
                },
                null,
                null,
                null,
                null,
                null,
                { \"orderable\": false, \"searchable\": false },
                { \"orderable\": false, \"searchable\": false },
                null,
                null,
                null,
                null,
                null,
                null,
                { \"orderable\": false, \"searchable\": false },
                { \"orderable\": false, \"searchable\": false }
            ],
            \"columnDefs\": [
                {
                    \"targets\": [ 4 ],
                    \"visible\": false,
                },
                {
                    \"targets\": [ 5 ],
                    \"visible\": false
                },
                {
                    \"targets\": [ 6 ],
                    \"visible\": false
                }
            ],
            \"language\": {
                \"info\": \"\",
            }
        });

        function format ( d ) {
            const label4 = '";
        // line 183
        echo Lang::t("_TEST_QUEST_MAXTESTSCORE", "test");
        echo "';
            const label5 = '";
        // line 184
        echo Lang::t("_REQUIRED_SCORE", "standard");
        echo "';
            const label6 = '";
        // line 185
        echo Lang::t("_WEIGHT", "coursereport");
        echo "';

            // `d` is the original data object for the row
            return '<table cellpadding=\"5\" cellspacing=\"0\" border=\"0\" class=\"extra-info\">'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label4+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[4]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label5+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[5]+'</td>'+
                    '</tr>'+
                    '<tr>'+
                        '<td style=\"text-align: left; width: 200px\">'+label6+'</td>'+
                        '<td style=\"text-align: center; width: 30px\">'+d[6]+'</td>'+
                    '</tr>'+
                '</table>';
        }

        // Add event listener for opening and closing details
        \$('#table-overview tbody').on('click', 'td.details-control', function () {
            const tr = \$(this).closest('tr');
            const row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
        } );
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 185,  407 => 184,  403 => 183,  350 => 133,  343 => 128,  332 => 126,  328 => 125,  318 => 118,  313 => 116,  308 => 114,  297 => 105,  289 => 102,  283 => 101,  275 => 99,  272 => 98,  268 => 97,  258 => 94,  253 => 92,  249 => 91,  245 => 90,  242 => 89,  236 => 87,  228 => 85,  226 => 84,  222 => 82,  216 => 80,  208 => 78,  206 => 77,  202 => 75,  196 => 73,  188 => 71,  186 => 70,  183 => 69,  179 => 67,  175 => 65,  172 => 64,  168 => 62,  164 => 60,  162 => 59,  158 => 58,  154 => 57,  150 => 56,  146 => 55,  142 => 54,  137 => 51,  133 => 50,  125 => 45,  121 => 44,  117 => 43,  113 => 42,  109 => 41,  105 => 40,  101 => 39,  97 => 38,  93 => 37,  89 => 36,  85 => 35,  81 => 34,  77 => 33,  67 => 26,  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "overview.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/coursereport/overview.html.twig");
    }
}
