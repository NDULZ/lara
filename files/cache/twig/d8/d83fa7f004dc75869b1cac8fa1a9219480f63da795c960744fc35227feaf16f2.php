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
class __TwigTemplate_7ac4bd51e98948f8612de02aa5866ae9cb4ae1fc3b73bffb8297873dbafd630f extends \Twig\Template
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
        echo "<h2>";
        echo Lang::t("_MULTIUSERSELECTOR_TITLE");
        echo "</h2>

";
        // line 3
        echo Form::openForm("form_tabs", "index.php?r=adm/userselector/associate", false, "post", "multipart/form-data");
        echo "

    ";
        // line 5
        echo Form::getHidden("instance", "instance", ($context["instanceValue"] ?? null));
        echo "
    ";
        // line 6
        echo Form::getHidden("id", "id", ($context["instanceId"] ?? null));
        echo "
  
    ";
        // line 8
        if (($context["showSelectAll"] ?? null)) {
            // line 9
            echo "        <div style=\"display: block; margin-top: 5%;\"/>
        ";
            // line 10
            echo Form::getOpenCombo(Lang::t("_SHOW_INSTANCE"));
            echo "
        ";
            // line 11
            echo Form::getRadio(Lang::t("_SHOW_INSTANCE_ALL"), "everyone", "all_idst", "1", (($context["selectAllValue"] ?? null) == 1));
            echo "
        ";
            // line 12
            echo Form::getRadio(Lang::t("_SHOW_INSTANCE_ONLY"), "not_everyone", "all_idst", "0", (($context["selectAllValue"] ?? null) == 0));
            echo "
        ";
            // line 13
            echo Form::getCloseCombo();
            echo "
        </div>
    ";
        }
        // line 16
        echo "<div id=\"multiuserselector_tab\" style='margin-top:5%;'>
    <ul class=\"nav nav-tabs\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["tabValue"] => $context["tab"]) {
            // line 19
            echo "            ";
            if ($context["tab"]) {
                // line 20
                echo "                ";
                $context["tabname"] = (("_" . twig_upper_filter($this->env, $context["tabValue"])) . "_TAB");
                // line 21
                echo "                ";
                $context["tabtrans"] = Lang::t(($context["tabname"] ?? null), "standard");
                // line 22
                echo "                <li ";
                if ((($context["selection"] ?? null) == $context["tabValue"])) {
                    echo " class='active' ";
                }
                echo ">
                    <a data-toggle=\"tab\" href=\"#multiuser_tab_";
                // line 23
                echo twig_escape_filter($this->env, $context["tabValue"], "html", null, true);
                echo "\"
                       rel=\"";
                // line 24
                echo twig_escape_filter($this->env, $context["tabValue"], "html", null, true);
                echo "\"><em>";
                echo twig_escape_filter($this->env, ($context["tabtrans"] ?? null), "html", null, true);
                echo "</em></a>
                </li>
            ";
            }
            // line 27
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabValue'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    </ul>
    <div class=\"tab-content\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tabs"] ?? null));
        foreach ($context['_seq'] as $context["tabValue"] => $context["tab"]) {
            // line 31
            echo "            ";
            if ($context["tab"]) {
                // line 32
                echo "                <div class=\"tab-pane ";
                if ((($context["selection"] ?? null) == $context["tabValue"])) {
                    echo " active ";
                }
                echo "\"
                     id=\"multiuser_tab_";
                // line 33
                echo twig_escape_filter($this->env, $context["tabValue"], "html", null, true);
                echo "\">
                    ";
                // line 34
                if (($context["tabValue"] != "org")) {
                    // line 35
                    echo "                        <table class=\"table multiuserselector table-bordered display\" rel=\"";
                    echo twig_escape_filter($this->env, $context["tabValue"], "html", null, true);
                    echo "\"
                               active_search=\"0\" style=\"width:100%\" id=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $context["tabValue"], "html", null, true);
                    echo "Content\">

                        </table>
                    ";
                } else {
                    // line 40
                    echo "
                        <div data-container='plugin' class='folder-tree'></div>
                    ";
                }
                // line 43
                echo "                </div>
            ";
            }
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tabValue'], $context['tab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>
    <div class=\"modal-footer\">
        ";
        // line 48
        echo Form::openButtonSpace();
        echo "
        ";
        // line 49
        if (($context["showUserAlert"] ?? null)) {
            // line 50
            echo "            ";
            echo Form::getInputCheckbox("send_alert", "send_alert", 0, 0, false);
            echo "
            <label for=\"send_alert\">";
            // line 51
            echo Lang::t("_SEND_ALERT", "subscribe");
            echo "</label>&nbsp;&nbsp;&nbsp;&nbsp;'
        ";
        }
        // line 53
        echo "        ";
        echo Form::getButton("save", "save", Lang::t("_SAVE", "admin_lang"));
        echo "
        ";
        // line 54
        echo Form::getButton("undo", "undo", Lang::t("_UNDO", "admin_lang"));
        echo "
        ";
        // line 55
        echo Form::closeButtonSpace();
        echo "
    </div>
    ";
        // line 57
        if (($context["debug"] ?? null)) {
            // line 58
            echo "        <button id=\"test-btn\" style='margin-top:3%;'
                class=\"button btn btn-primary dahsboard__button--save js-save-block\" type=\"submit\">
            TEST
        </button>
    ";
        }
        // line 63
        echo "    ";
        echo Form::closeForm();
        echo "


    <script>

        let DTable = [];
        let orgChartSelection = null;
        var FolderTreeMultiUser = window.frontend.modules.FolderTreeMultiUser;

        var columns = ";
        // line 72
        echo json_encode(($context["columns"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
        var data = ";
        // line 73
        echo json_encode(($context["selectedData"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
        var selection = ";
        // line 74
        echo json_encode(($context["accessSelection"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
        var ajax = ";
        // line 75
        echo twig_escape_filter($this->env, json_encode(($context["ajax"] ?? null)), "html", null, true);
        echo ";

        const ft = FolderTreeMultiUser.create({}, 'adm/userselector/getData', selection['org']);
        ft.getTree();


        var options = {
            rowId: 'id',
            scrollX: true,
            paging: true,
            pageLength: 25,
            searchDelay: 1000,
            searching: true,
            dom: 'Blfrtip',
            // stateSave: true,
            deferRender: true,
            'columnDefs': [
                {
                    'targets': 1,
                    'checkboxes': {
                        'selectRow': true,
                        orderable: false,
                        className: 'select-checkbox',
                        targets: 1
                    }
                }
            ],
            'select': {
                'all': true,
                'style': 'multi',
                selector: 'td:first-child',
                allPage: true
            },
            orderCellsTop: true,
            fixedHeader: true,
            //buttons: buttons
            order: [
                [1, 'asc']
            ]
        };

        \$(document).ready(function () {


            \$('table.multiuserselector').each(function (e) {

                var rel = \$(this).attr('rel');

                var domId = '#' + \$(this).attr('id');

                var buttons = [
                    {
                        text: '";
        // line 127
        echo Lang::t("_ADVANCED_SEARCH", "standard");
        echo "',
                        className: 'btn btn-default',
                        action: function (e, dt, node, config) {
                            //DTable[rel].searchBar.init().show()

                            if (\$('.searchbar').length > 0) {
                                \$('.searchbar').each(function (e) {
                                    if (\$(this).hasClass('hidden')) {
                                        \$(this).removeClass('hidden');
                                    } else {
                                        \$(this).addClass('hidden');
                                    }
                                });
                            }

                        }
                    },
                    {
                        extend: 'colvis',
                        text: '";
        // line 146
        echo Lang::t("_CHANGEPOLICY", "profile");
        echo "',
                        className: 'btn btn-default',
                        collectionLayout: 'dropdown-menu',
                        columns: ':not(\":first\")'
                    }
                ];

                options.buttons = buttons;
                options.columns = columns[rel];
                options.preselection = selection[rel];


                if (!ajax) {
                    options.processing = true;
                    options.serverSide = true;
                    options.ajax = {

                        type: 'GET',
                        data: function (d) {
                            d.dataType = rel;
                            d.learning_filter = '";
        // line 166
        echo twig_escape_filter($this->env, ($context["learningFilter"] ?? null), "html", null, true);
        echo "'
                            d.id_org = '";
        // line 167
        echo twig_escape_filter($this->env, ($context["idOrg"] ?? null), "html", null, true);
        echo "'
                            d.resource = '";
        // line 168
        echo twig_escape_filter($this->env, ($context["instanceValue"] ?? null), "html", null, true);
        echo "'
                            d.active_search = \$('#' + rel + 'Content_wrapper .dataTables_scrollHeadInner .dataTable').attr('active_search');

                            if (parseInt(d.active_search) === 0 && DTable[rel] !== undefined) {

                                d.length = DTable[rel].pageLength;
                            }
                        },
                        complete: function (json) {

                            return json;
                        },
                        url: 'ajax.adm_server.php?r=adm/userselector/getData',
                    };
                } else {
                    options.data = data[rel];
                }


                DTable[rel] = new window.frontend.modules.FormaTable(domId, options);

                // Setup - add a text input to each header cell
                columns[rel].forEach(function (item, i) {
                    if (item.searchable === true) {

                        var title = item.data;

                        var table = DTable[rel].DataTable;

                        var formatable = DTable[rel];

                        var cell = \$('#' + rel + 'Content_wrapper .dataTables_scrollHeadInner .dataTable thead tr th:nth-child(' + (i + 2) + ')')

                        var searchInput = \$('#' + rel + 'Content_filter');

                        var search = \$.fn.dataTable.util.throttle(
                            function (val) {
                                table.column(i + 1).search(val).draw();
                            },
                            1000
                        );

                        cell.append(getInputSearchField(item.search_field));

                        cell.find('input').on('keyup clear', function (e) {

                            if (table.column(i + 1).search() !== this.value) {

                                if (this.value == '') {
                                    \$('#' + rel + 'Content_wrapper .dataTables_scrollHeadInner .dataTable').attr('active_search', 0);
                                    formatable.activeSearch = false;
                                    \$('#' + rel + 'Content_length select').val(formatable.pageLength);
                                    \$('#' + rel + 'Content_length').show();

                                } else {
                                    formatable.activeSearch = true;
                                    \$('#' + rel + 'Content_wrapper .dataTables_scrollHeadInner .dataTable').attr('active_search', 1);

                                    \$('#' + rel + 'Content_length').hide();
                                    if (formatable._selection.all) {
                                        \$('.buttons-select-none').trigger('click');
                                    }
                                }
                                table.settings()[0].jqXHR.abort();
                                search(this.value);
                                //table
                                //    .column(i+1)
                                //    .search(this.value)
                                //    .draw();
                            }

                            table.columns.adjust();
                        });
                    }
                });

                \$('#' + rel + 'Content_length select').on('change', function (e) {

                    DTable[rel].pageLength = \$(this).val();
                });

            });

            \$('.sorting .searchbar').on('click focus', function (e) {
                e.preventDefault();
                e.stopPropagation();
            });

            \$('a[data-toggle=\"tab\"]').on('shown.bs.tab', function (e) {
                var rel = \$(this).attr('rel');
                if (rel != 'org') {
                    DTable[rel].DataTable.columns.adjust();
                }

            });

        })

        \$('body').on('click', '.ygtvhtml', function () {
            orgChartSelection = \$(this).attr('id');
        });


        \$('#test-btn').on('click', function (e) {
            e.preventDefault();

            if (!\$(\"table tr.selected\").length) {
                return;
            }
            var selectedIds = [];
            var alertMsg = 'Hai selezionato \\n';

            \$('table[id\$=\"Content\"]').each(function (e) {
                alertMsg = alertMsg + 'del tab ' + \$(this).attr('rel') + ' i seguenti id: ' + DTable[\$(this).attr('rel')]._selection.rows.join(',') + '\\n';
            });

            if (orgChartSelection) {
                alertMsg = alertMsg + 'del tab org ' + orgChartSelection;
            }

            alert(alertMsg);

        });

        \$('#undo').on('click', function (e) {
            e.preventDefault();
            window.history.go(-1);
        });

        \$('#form_tabs').on('submit', function (e) {
            e.preventDefault();

            var allSelection = [];
            var selectedIds = [];
            var excludedIds = [];

            \$('table[id\$=\"Content\"]').each(function (e) {

                if (DTable[\$(this).attr('rel')]._selection.rows.length > 0) {
                    selectedIds = selectedIds.concat(DTable[\$(this).attr('rel')]._selection.rows);
                }

                if (DTable[\$(this).attr('rel')]._selection.all === true && DTable[\$(this).attr('rel')].activeSearch === true) {
                    allSelection = allSelection.concat(\$(this).attr('rel'));
                    excludedIds = excludedIds.concat(DTable[\$(this).attr('rel')]._selection.exclusions);
                }

            });


            selectedIds = selectedIds.concat(ft.getFormData());

            \$(this).append(\$('<input>', {
                type: 'hidden',
                name: 'selected',
                value: selectedIds
            }));

            \$(this).append(\$('<input>', {
                type: 'hidden',
                name: 'allselection',
                value: allSelection
            }));

            \$(this).append(\$('<input>', {
                type: 'hidden',
                name: 'excluded',
                value: excludedIds
            }));

            this.submit();

        });


        function getInputSearchField(type, value = '') {
            var returnString = '<br />';
            var searchPlaceholder = \"";
        // line 345
        echo Lang::t("_SEARCH", "standard");
        echo "\";

            switch (type) {
                case 'date':

                    break;

                default:
                    returnString = returnString + '<input type=\"text\" class=\"form-control input-sm searchbar hidden\" placeholder=\"' + searchPlaceholder + '\" value=\"' + value + '\" />';
                    break;
            }
            return returnString;
        }

    </script>";
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
        return array (  529 => 345,  349 => 168,  345 => 167,  341 => 166,  318 => 146,  296 => 127,  241 => 75,  237 => 74,  233 => 73,  229 => 72,  216 => 63,  209 => 58,  207 => 57,  202 => 55,  198 => 54,  193 => 53,  188 => 51,  183 => 50,  181 => 49,  177 => 48,  173 => 46,  167 => 45,  163 => 43,  158 => 40,  151 => 36,  146 => 35,  144 => 34,  140 => 33,  133 => 32,  130 => 31,  126 => 30,  122 => 28,  116 => 27,  108 => 24,  104 => 23,  97 => 22,  94 => 21,  91 => 20,  88 => 19,  84 => 18,  80 => 16,  74 => 13,  70 => 12,  66 => 11,  62 => 10,  59 => 9,  57 => 8,  52 => 6,  48 => 5,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/multiuserselector/show.html.twig");
    }
}
