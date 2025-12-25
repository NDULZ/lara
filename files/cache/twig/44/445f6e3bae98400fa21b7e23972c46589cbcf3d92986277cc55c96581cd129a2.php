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

/* list.html.twig */
class __TwigTemplate_0fa69e417e10ff10385730336532994f6b115b69482427c14fe62bbf9851f861 extends \Twig\Template
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
        echo FormaLms\lib\Get::title(["index.php?r=adm/lang/show" => Lang::t("_LANGUAGE", "admin_lang"), "" => Lang::t("_TRANSLATELANG", "admin_lang")], false);
        // line 4
        echo "

<div class=\"std_blockx\">
    <div class=\"container-back\">
        <a href=\"index.php?r=adm/lang/show\"><span>";
        // line 8
        echo Lang::t("_BACK", "standard");
        echo "</span></a>
    </div>

    <a id=\"addlang_top\" href=\"#\" class=\"ico-wt-sprite subs_add\" title=\"";
        // line 11
        echo Lang::t("_ADD", "standard");
        echo "\"><span>";
        echo Lang::t("_ADD", "standard");
        echo "</span></a>
    <br><br>
    <div class=\"search_form\">
        ";
        // line 14
        echo Form::openForm("lang_filters", "index.php?r=adm/lang/list", false, false, "", "", "row");
        echo "
        <div class=\"lang-filter col-xs-12 col-sm-4\">
            <label for=\"lang_code\">";
        // line 16
        echo Lang::t("_LANGUAGE", "admin_lang");
        echo "</label>:
            ";
        // line 17
        echo Form::getInputDropdown("search_d", "lang_code", "lang_code", ($context["language_list"] ?? null), ($context["selected_language"] ?? null), " onchange=\"DataTable_lang_table.reload();\"");
        echo "
        </div>
        <div class=\"lang-confr-filter  col-xs-12 col-sm-4\">
            <label for=\"lang_code_diff\">";
        // line 20
        echo Lang::t("_LANG_COMPARE", "admin_lang");
        echo "</label>:
            ";
        // line 21
        echo Form::getInputDropdown("search_d", "lang_code_diff", "lang_code_diff", ($context["language_list"] ?? null), ($context["selected_language_diff"] ?? null), " onchange=\"DataTable_lang_table.reload();\"");
        echo "
        </div>
        <div class=\"lang-confr-filter  col-xs-12 col-sm-4\">
            <label for=\"only_empty\">";
        // line 24
        echo Lang::t("_ONLY_EMPTY", "admin_lang");
        echo "</label>:<br>
            ";
        // line 25
        echo Form::getInputCheckbox("only_empty", "only_empty", "true", ($context["only_empty"] ?? null), " onchange=\"DataTable_lang_table.reload();\"");
        echo "
        </div>
        ";
        // line 27
        echo Form::closeForm();
        echo "
    </div>
</div>

<form id=\"form_langs\">
    <table class=\"table table-bordered display\" style=\"width:100%\" id=\"lang_table\"></table>
    <button id=\"export-btn\" class=\"button btn btn-primary dahsboard__button--save js-save-block\" type=\"submit\" disabled=\"disabled\">
        <i class=\"fa fa-spinner fa-spin\" style=\"display:none;\"></i>
        ";
        // line 35
        echo Lang::t("_EXPORT_XML", "admin_lang");
        echo "
    </button>
</form>

<!-- Modal confirm -->
<div class=\"modal\" id=\"confirmModal\" style=\"display: none; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\" data-val=\"body\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"yes\" class=\"btn btn-primary\" data-val=\"yes\">";
        // line 46
        echo Lang::t("_YES", "standard");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-val=\"no\">";
        // line 47
        echo Lang::t("_NO", "standard");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Add -->
<div class=\"modal\" id=\"addModal\" style=\"display: none; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-primary\" onclick=\"translateKey()\">";
        // line 60
        echo Lang::t("_CONFIRM", "standard");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" onclick=\"\$('#addModal').modal('hide');\">";
        // line 61
        echo Lang::t("_CANCEL", "standard");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    var confirmDialog = function (modalSelector, message, onConfirm) {
        var fClose = function() {
            modal.modal(\"hide\");
        };
        var modal = \$(modalSelector);
        modal.modal(\"show\");
        modal.find(\"*[data-val=body]\").empty().append(message);
        modal.find(\"*[data-val=yes]\").unbind().one('click', onConfirm).one('click', fClose);
        modal.find(\"*[data-val=no]\").unbind().one(\"click\", fClose);
    }

    var delFunc = function(id) {
        confirmDialog(\"#confirmModal\", \"";
        // line 80
        echo Lang::t("_AREYOUSURE", "standard");
        echo "\", function() {
            \$.ajax({
                type: 'POST',
                url: 'ajax.adm_server.php?r=adm/lang/deleteKey',
                data: { id_text: id },
                success: function(data) {
                    DataTable_lang_table.reload();
                }
            });
        });
    };

    var translateKey = function() {
        \$.ajax({
            type: 'POST',
            url: 'ajax.adm_server.php?r=adm/lang/insertkey',
            data: \$(\"#addModal form\").serialize(),
            dataType: \"json\",
            success: function(data) {
                if (data.success) {
                    DataTable_lang_table.reload();
                    \$(\"#addModal\").modal('hide');
                }
            }
        });
    };
    
    var requestBuilder = function (oState, oSelf) {
        var sort, dir, startIndex, results;
        oState = oState || {
            pagination: null,
            sortedBy: null
        };

        startIndex = (oState.pagination) ? oState.pagination.recordOffset : 0;
        results = (oState.pagination) ? oState.pagination.rowsPerPage : null;
        sort = (oState.sortedBy) ? oState.sortedBy.key : oSelf.getColumnSet().keys[0].getKey();
        dir = (oState.sortedBy && oState.sortedBy.dir === YAHOO.widget.DataTable.CLASS_DESC) ? \"desc\" : \"asc\";

        return \"&results=\" + results +
            \"&startIndex=\" + startIndex +
            \"&sort=\" + sort +
            \"&dir=\" + dir +
            \"&la_module=\" + YAHOO.util.Dom.get('la_module').value +
            \"&la_text=\" + YAHOO.util.Dom.get('la_text').value +
            \"&lang_code=\" + YAHOO.util.Dom.get('lang_code').value +
            \"&lang_code_diff=\" + YAHOO.util.Dom.get('lang_code_diff').value +
            \"&only_empty=\" + YAHOO.util.Dom.get('only_empty').checked +
            \"&plugin_id=\" + YAHOO.util.Dom.get('plugin_id').value;
    }

    var saveTranslation = function (callback, newData) {
        var new_value = newData;
        var old_value = this.value;
        var datatable = this.getDataTable();
        var id_text = this.getRecord().getData(\"id\");
        var id_translation = this.getRecord().getData(\"id_translation\");

        var myCallback = {
            success: function (o) {
                var r = YAHOO.lang.JSON.parse(o.responseText);
                if (r.success) {
                    callback(true, stripSlashes(r.new_value));
                } else {
                    callback(true, stripSlashes(r.old_value));
                }
            },
            failure: {}
        }

        var post = \"id_text=\" + encodeURIComponent(id_text) +
            \"&lang_code=\" + encodeURIComponent(YAHOO.util.Dom.get('lang_code').value) +
            \"&new_value=\" + encodeURIComponent(new_value) +
            \"&old_value=\" + encodeURIComponent(old_value);

        var url = \"ajax.adm_server.php?r=adm/lang/saveData&\";

        YAHOO.util.Connect.asyncRequest(\"POST\", url, myCallback, post);
    }
    var saveComparisonTranslation = function (callback, newData) {
        var new_value = newData;
        var old_value = this.value;
        var datatable = this.getDataTable();
        var id_text = this.getRecord().getData(\"id\");
        var id_translation = this.getRecord().getData(\"id_translation\");

        var myCallback = {
            success: function (o) {
                var r = YAHOO.lang.JSON.parse(o.responseText);
                if (r.success) {
                    callback(true, stripSlashes(r.new_value));
                } else {
                    callback(true, stripSlashes(r.old_value));
                }
            },
            failure: {}
        }

        var post = \"id_text=\" + encodeURIComponent(id_text) +
            \"&lang_code=\" + encodeURIComponent(YAHOO.util.Dom.get('lang_code_diff').value) +
            \"&new_value=\" + encodeURIComponent(new_value) +
            \"&old_value=\" + encodeURIComponent(old_value);

        var url = \"ajax.adm_server.php?r=adm/lang/saveData&\";

        YAHOO.util.Connect.asyncRequest(\"POST\", url, myCallback, post);
    }
    var TranslationFormatter = function (elLiner, oRecord, oColumn, oData) {
        var searched = YAHOO.util.Dom.get('la_text').value;
        if (searched) {
            var regexp = new RegExp(searched, 'gi');
            var string_to_replace = regexp.exec(oData)
            elLiner.innerHTML = oData.replace(regexp, '<span class=\"highlight\">' + string_to_replace + '</span>');

        } else elLiner.innerHTML = oData;
    }
    YAHOO.util.Event.addListener(\"lang_filters\", \"submit\", function (e) {
        YAHOO.util.Event.preventDefault(e);
        DataTable_lang_table.reload();
    });
    YAHOO.util.Event.addListener(\"filter_reset\", \"click\", function (e) {
        YAHOO.util.Event.preventDefault(e);
        YAHOO.util.Dom.get('la_module').value = '0';
        YAHOO.util.Dom.get('la_text').value = '';
        DataTable_lang_table.reload();
    });

    var body = ";
        // line 207
        echo json_encode(($context["data"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
    var rows = [];

    body.forEach(function (item, k) {
        link = '<a id=\"' + item.id + '\" onclick=\"delFunc(' + item.id + ')\" href=\"#\" class=\"ico-sprite subs_del\" title=\"";
        // line 211
        echo Lang::t("_DEL", "admin_lang");
        echo "\"><span></span></a>'
        item.delete = link;
        rows.push(Object.assign({}, item));
    });

    var columns = [
        {
            data: 'text_module',
            title: \"";
        // line 219
        echo Lang::t("_LANG_MODULE", "admin_lang");
        echo "\",
            sortable: true,
            searchable: true
        },
        {
            data: 'text_key',
            title: \"";
        // line 225
        echo Lang::t("_LANG_KEY", "admin_lang");
        echo "\",
            sortable: true,
            searchable: false
        },
        {
            data: 'plugin_name',
            title: \"";
        // line 231
        echo Lang::t("_PLUGIN_NAME", "admin_lang");
        echo "\",
            sortable: false,
            searchable: true
        },
        {
            data: 'translation_text',
            title: \"";
        // line 237
        echo Lang::t("_LANG_TRANSLATION", "admin_lang");
        echo "\",
            sortable: true,
            searchable: false,
            edit: {
                type: 'textarea',
            },
        },
        {
            data: 'translation_text_diff',
            title: \"";
        // line 246
        echo Lang::t("_LANG_COMPARE", "admin_lang");
        echo "\",
            sortable: true,
            searchable: false
        },
        {
            data: 'save_date',
            title: \"";
        // line 252
        echo Lang::t("_DATE", "admin_lang");
        echo "\",
            sortable: true,
            searchable: false
        },
        {
            data: 'delete',
            title: \"";
        // line 258
        echo Lang::t("_DEL", "standard");
        echo "\",
            sortable: false,
            searchable: false
        }
    ];

    \$(function () {
        DataTable_lang_table = \$('#lang_table').on('xhr.dt', function (e, settings, json, xhr) {
            if (json.data.length > 0) {
                json.data.forEach(function (item, index) {
                    link = '<a id=\"' + item.id + '\" href=\"#\" onclick=\"delFunc(' + item.id + ')\" class=\"ico-sprite subs_del\" title=\"";
        // line 268
        echo Lang::t("_DEL", "admin_lang");
        echo "\"><span></span></a>'
                    item.delete = link;
                });
                \$(\$.fn.dataTable.tables(true)).DataTable().columns.adjust();
            }
            // Note no return - manipulate the data directly in the JSON object.
        }).FormaTable({
            rowId: \"id\",
            scrollX: true,
            processing: true,
            serverSide: true,
            'ajax': {
                type: 'GET',
                data: function (d) {
                    d.lang_code = \$(\"#lang_code\").val();
                    d.lang_code_diff = \$(\"#lang_code_diff\").val();
                    d.only_empty = \$(\"#only_empty\").is(\":checked\");
                },
                complete: function(json) {
                    \$(\"#lang_table .select-checkbox, .buttons-select-all, .buttons-select-none\").click(function(e) {
                        setTimeout(function() {
                            if (\$(\"#lang_table tr.selected\").length > 0) {
                                \$(\"#export-btn\").attr(\"disabled\", false);
                            } else {
                                \$(\"#export-btn\").attr(\"disabled\", true);
                            }
                        }, 100);
                    });
                    
                    return json;
                },
                url: 'ajax.adm_server.php?r=adm/lang/get',
            },
            paging: true,
            pageLength: 25,
            searching: true,
            columns,
            dom: 'Blfrtip',
            stateSave: true,
            deferRender: true,
            edit: {
                url: \"ajax.adm_server.php?r=adm/lang/inline_edit\",
                type: \"POST\",
                data: {
                    language: \$(\"#lang_code\").val(),
                },
                id: 'id_text'
            },
            'columnDefs': [
                {
                    'targets': 0,
                    'checkboxes': {
                    'selectRow': true
                    }
                }
            ],
            'select': {
                'all': true,
                'style': 'multi',
            },
            orderCellsTop: true,
            fixedHeader: true,
        });

        // Setup - add a text input to each header cell
        columns.forEach(function(item, i) {
            if (i > 0 && i < 6) {
                var title = item.data;
                var searchPlaceholder = \"";
        // line 336
        echo Lang::t("_SEARCH", "standard");
        echo "\";
                var cell = \$('.dataTables_scrollHeadInner .dataTable thead tr th:nth-child(' + (i + 1) +')')
                if (i == 3) {
                    var plugins = ";
        // line 339
        echo json_encode(($context["plugins_ids"] ?? null));
        echo ";
                    var selectPlugins = '<select class=\"form-control input-sm\">';

                    for (const [key, value] of Object.entries(plugins)) {
                        selectPlugins += '<option value=\"' + key + '\">' + value + '</option>';
                    }
                    selectPlugins += '</select>';
                    cell.append('<br>' + selectPlugins);
                } else if (i == 1) {
                    var modules = ";
        // line 348
        echo json_encode(($context["module_list"] ?? null));
        echo ";
                    var selectModules = '<select class=\"form-control input-sm\">';

                    for (const [key, value] of Object.entries(modules)) {
                        selectModules += '<option value=\"' + key + '\">' + value + '</option>';
                    }
                    selectModules += '</select>';
                    cell.append('<br>' + selectModules);
                } else {
                    cell.append('<br><input type=\"text\" class=\"form-control input-sm\" placeholder=\"' + searchPlaceholder + '\" />');
                }
                var table = \$(\$.fn.dataTable.tables(true)).DataTable();
                table.columns.adjust();
        
                cell.find('input').on('keyup', function () {
                    if (table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
                cell.find('select').on('change', function () {
                    if (table.column(i).search() !== this.value ) {
                        table
                            .column(i)
                            .search(this.value)
                            .draw();
                    }
                });
            }
        });
        // DataTable_lang_table.searchBar.init('#lang_table');
        // DataTable_lang_table.searchBar.redraw()
        // DataTable_lang_table.searchBar.show();
    });

    \$('#form_langs').on('submit', function(e) {
        e.preventDefault();

        if (!\$(\"#lang_table tr.selected\").length) {
            return;
        }

        var selectedIds = DataTable_lang_table._selection.rows;

        params = {
            text_items: selectedIds, 
            lang_code: \$(\"#lang_code\").val()
        };


        \$(\"#export-btn .fa-spin\").show();
        \$(\"#export-btn\").attr(\"disabled\", true);

        \$.ajax({
            type: 'POST',
            url: 'ajax.adm_server.php?r=adm/lang/export',
            data: params,
            success: function(data) {
                \$(\"#export-btn .fa-spin\").hide();
                \$(\"#export-btn\").attr(\"disabled\", false);

                downloadString(data, \"application/xml\", \"lang[\" + params.lang_code + \"].xml\");
            }
        });
    });

    \$(\"#addlang_top\").click(function(e) {
        \$.ajax({
            type: 'POST',
            url: 'ajax.adm_server.php?r=adm/lang/translatemask',
            dataType: \"json\",
            success: function(data) {
                if (data.success) {
                    \$(\"#addModal\").find('.modal-body').html(data.body)
                    \$(\"#addModal\").modal('show');
                }
            }
        });
    });

    function downloadString(text, fileType, fileName) {
        var blob = new Blob([text], { type: fileType });

        var a = document.createElement('a');
        a.download = fileName;
        a.href = URL.createObjectURL(blob);
        a.dataset.downloadurl = [fileType, a.download, a.href].join(':');
        a.style.display = \"none\";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
        setTimeout(function() { URL.revokeObjectURL(a.href); }, 1500);
    }
</script>
</div>
";
    }

    public function getTemplateName()
    {
        return "list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  471 => 348,  459 => 339,  453 => 336,  382 => 268,  369 => 258,  360 => 252,  351 => 246,  339 => 237,  330 => 231,  321 => 225,  312 => 219,  301 => 211,  294 => 207,  164 => 80,  142 => 61,  138 => 60,  122 => 47,  118 => 46,  104 => 35,  93 => 27,  88 => 25,  84 => 24,  78 => 21,  74 => 20,  68 => 17,  64 => 16,  59 => 14,  51 => 11,  45 => 8,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "list.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/lang/list.html.twig");
    }
}
