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
class __TwigTemplate_b226be9f0e82a2af35b927fac865faefde0c48938eb4b97466463bdaec79be7c extends \Twig\Template
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
    <h1 class=\"title\">";
        // line 2
        echo Lang::t("_DASHBOARD", "standard");
        echo "</h1>
</div>

<div class=\"d-grid\">
    <div class=\"d-row\">
        <div class=\"dashboard__actions is-block\">
            <button id=\"btn-new-layout\" class=\"btn btn-primary dahsboard__button--add js-add-layout\">";
        // line 8
        echo Lang::t("_DASHBOARD_SETTING_ADD_NEW_LAYOUT", "dashboardsetting");
        echo "</button>

            <form id=\"form-layout\" class=\"dashboard__add\">
                <div class=\"form-group\">
                    <label>";
        // line 12
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_NAME", "dashboardsetting");
        echo "</label>
                    <input name=\"name\" placeholder=\"";
        // line 13
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_NAME", "dashboardsetting");
        echo "\" class=\"form-control\" type=\"text\" value=\"\">
                </div>

                <div class=\"form-group\">
                    <label>";
        // line 17
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_CAPTION", "dashboardsetting");
        echo "</label>
                    <textarea name=\"caption\" maxlength=\"255\" placeholder=\"";
        // line 18
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_CAPTION", "dashboardsetting");
        echo "\" class=\"form-control textarea\"></textarea>
                </div>

                <div class=\"dashboard__select dashboard__select--layout\">
                    <label>";
        // line 22
        echo Lang::t("_DASHBOARD_SETTING_SELECT_STATUS", "dashboardsetting");
        echo "</label>
                    <select name=\"status\" class=\"form-control js-select-layout\">
                        <option value=\"draft\">
                            ";
        // line 25
        echo Lang::t("_DASHBOARD_SETTING_DRAFT_STATUS", "dashboardsetting");
        echo "
                        </option>
                        <option value=\"publish\">
                            ";
        // line 28
        echo Lang::t("_DASHBOARD_SETTING_PUBLISH_STATUS", "dashboardsetting");
        echo "
                        </option>
                    </select>
                </div>

                <button type=\"submit\" class=\"btn btn-primary dahsboard__button--add js-add-layout btn-block\">";
        // line 33
        echo Lang::t("_DASHBOARD_SETTING_CREATE_NEW_LAYOUT", "dashboardsetting");
        echo "</button>

                <div class=\"dashboard__message dashboard_layout__ok\">";
        // line 35
        echo Lang::t("_DASHBOARD_LAYOUT_SAVE_MESSAGE_OK", "dashboardsetting");
        echo "</div>
                <div class=\"dashboard__message dashboard_layout__ko\">";
        // line 36
        echo Lang::t("_DASHBOARD_LAYOUT_SAVE_MESSAGE_KO", "dashboardsetting");
        echo "</div>
            </form>
        </div>
    </div>
    <table class=\"table table-striped table-bordered display\" style=\"width:100%\" id=\"layouts\"></table>
</div>

";
        // line 43
        $this->loadTemplate("modal-clone.html.twig", "show.html.twig", 43)->display($context);
        // line 44
        echo "
<script type=\"application/javascript\">

    \$(function () {
        const showUrl = \"";
        // line 48
        echo twig_escape_filter($this->env, ($context["showUrl"] ?? null), "html", null, true);
        echo "\";
        const editUrl = \"";
        // line 49
        echo twig_escape_filter($this->env, ($context["editUrl"] ?? null), "html", null, true);
        echo "\";
        const permissionUrl = \"";
        // line 50
        echo twig_escape_filter($this->env, ($context["permissionUrl"] ?? null), "html", null, true);
        echo "\";
        const cloneUrl = \"";
        // line 51
        echo twig_escape_filter($this->env, ($context["cloneUrl"] ?? null), "html", null, true);
        echo "\";
        const dashboardSortable = \$(\"#dashboard-sortable\");
        const selectBlock = \$('.js-select-block');
        const selectType = \$('.js-select-type');
        const selectAction = \$('.js-select-action');
        const addBlock = \$('.js-add-block');
        const saveField = \$('.js-save-block');
        const blockAction = \$('.dashboard__actions');
        const blockActionWidth = blockAction.width();
        const windowWidth = \$(window).width();
        const elementOffset = blockAction.offset();
        const elementOffsetTop = 108;
        const elementOffsetLeft = elementOffset.left;
        const templatePath = \"";
        // line 64
        echo twig_escape_filter($this->env, ($context["templatePath"] ?? null), "html", null, true);
        echo "\";
        const btnNewLayout = \$('#btn-new-layout');
        const formLayout = \$('#form-layout');
        const addLayoutBtn = \$('.js-add-layout');
        const layoutsTable = \$('#layouts');
        let openedLayoutForm = false;

        if (windowWidth >= 1024) {
            \$(window).scroll(function () {
                anchorSidebar();
            });
        }

        initSortable();
        formLayout.slideUp();

        table = layoutsTable.FormaTable({
            rowId: \"id\",
            processing: true,
            serverSide: true,
            paging: false,
            columns: [  // definisco le colonne
                { data: 'name', title: '";
        // line 86
        echo Lang::t("_DASHBOARD_LAYOUT", "dashboardsetting");
        echo "', sortable: false, width: 'auto', edit: { type: 'text' } },
                { data: 'caption', title: '";
        // line 87
        echo Lang::t("_DASHBOARD_LAYOUT_CAPTION", "dashboardsetting");
        echo "', sortable: false, width: 'auto', edit: { type: 'textarea' } },
                { data: 'status', title: '";
        // line 88
        echo Lang::t("_DASHBOARD_LAYOUT_STATUS", "dashboardsetting");
        echo "', sortable: false, width: '25%',
                    edit: {
                        type: 'select',
                        options: {
                            'draft': \"";
        // line 92
        echo Lang::t("_DASHBOARD_STATUS_DRAFT", "dashboardsetting");
        echo "\",
                            'publish': \"";
        // line 93
        echo Lang::t("_DASHBOARD_STATUS_PUBLISH", "dashboardsetting");
        echo "\",
                        }
                    }, 
                    render: function(data, type, row, meta) {
                        return row.status;
                    }
                },
                { data: 'default', title: '";
        // line 100
        echo Lang::t("_DASHBOARD_LAYOUT_DEFAULT", "dashboardsetting");
        echo "', sortable: false, width: '10%',
                    render: function(data, type, row, meta) {
                        var checked = row.default ? 'disabled checked' : '';
                        return '<div class=\"text-center\"><input class=\"default_check\" type=\"checkbox\" value=\"1\" data-id=\"' + row.id + '\" ' + checked + '></div>';
                    }
                },
                { data: 'clone', title: '&nbsp;', sortable: false, width: '10%', 
                    render: function(data, type, row, meta) {
                        return '<div class=\"text-center\"><a onclick=\"cloneFunc(' + row.id + ')\" href=\"#\" class=\"btn btn-primary\"><i class=\"glyphicon glyphicon-duplicate\"></i> </a></div>';
                    }
                },
                { data: 'edit', title: '&nbsp;', sortable: false, width: '10%', 
                    render: function(data, type, row, meta) {
                        return '<div class=\"text-center\"><a href=\"' + editUrl + '&dashboard=' + row.id + '\" class=\"btn btn-warning\"><i class=\"glyphicon glyphicon-pencil\"></i> </a></div>';
                    }
                },

                { data: 'permission', title: '&nbsp;', sortable: false, width: '10%', 
                    render: function(data, type, row, meta) {
                        var disabled = row.default ? 'disabled' : '';
                        return '<div class=\"text-center\"><a href=\"' + permissionUrl + '&id=' + row.id + '&instance=dashboardsetting&load=1\" class=\"btn btn-success ' + disabled + '\"><i class=\"glyphicon glyphicon-user\"></i> </a></div>';
                    }
                }, 

                { data: 'delete', title: '&nbsp;', sortable: false, width: '10%', 
                    render: function(data, type, row, meta) {
                         var disabled = row.default ? 'disabled' : '';
                        return '<div class=\"text-center\"><button ' + disabled + ' type=\"button\" class=\"btn btn-danger btn-del\" data-id=\"' + row.id + '\"><i class=\"glyphicon glyphicon-trash\"></i> </button></div>';
                    }
                },
                
                
               
                
                
            ],
            ajax: {
                url: '";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "getLayouts", [], "any", false, false, false, 137), "html", null, true);
        echo "',
                type: \"GET\",
            },
            drawCallback: function() {
                \$('.btn-del').click(function(e) {
                    if (confirm(\"";
        // line 142
        echo Lang::t("_DASHBOARD_LAYOUT_SURE_DEL", "dashboardsetting");
        echo "\")) {
                        var delBtn = \$(this);
                        // DELETE A LAYOUT
                        \$.ajax({
                            url: '";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "delLayout", [], "any", false, false, false, 146), "html", null, true);
        echo "',
                            type: 'POST',
                            data: { id_layout: delBtn.data('id') },
                            beforeSend: () => {
                                delBtn.attr('disabled', true);
                            },
                            success: (response) => {
                                delBtn.attr('disabled', false);
                                table.reload();
                            },
                            error: err => {
                                console.log(err);
                                delBtn.attr('disabled', false);
                            }
                        });
                    }
                });

                \$(\".default_check\").change(function() {
                    // SET A LAYOUT AS DEFAULT
                    \$.ajax({
                        url: '";
        // line 167
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "defaultLayout", [], "any", false, false, false, 167), "html", null, true);
        echo "',
                        type: 'POST',
                        data: { id_layout: \$(this).data('id') },
                        success: (response) => {
                            \$(\".default_check\").attr('disabled', false).prop('checked', false);
                            \$(this).prop('checked', true).attr('disabled', true);
                            table.reload();
                        },
                        error: err => {
                            console.log(err)
                        }
                    });
                });
            },
            edit: {
                url: '";
        // line 182
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "editInlineLayout", [], "any", false, false, false, 182), "html", null, true);
        echo "',
                type: \"POST\",
                id: \"id\"
            },
        });

        btnNewLayout.click(function() {
            openedLayoutForm = !openedLayoutForm;
            if (openedLayoutForm) {
                formLayout.slideDown();
            } else {
                formLayout.slideUp();
            }
        });

        formLayout.submit(function(e) {
            e.preventDefault();
            var addForm = \$(this);

            // CREATE NEW LAYOUT
            \$.ajax({
                url: '";
        // line 203
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "saveLayout", [], "any", false, false, false, 203), "html", null, true);
        echo "',
                type: 'POST',
                data: addForm.serialize(),
                beforeSend: () => {
                    addLayoutBtn.attr('disabled', true);
                    \$('.dashboard__message').css('display', 'none');
                },
                success: (response) => {
                    addLayoutBtn.removeAttr('disabled');
                    \$('.dashboard_layout__ok').css('display', 'block');
                    table.reload();

                    // Per mostrare messaggio di Ok inserimento
                    setTimeout(function() {
                        \$(\"#form-layout\").trigger('reset');
                        openedLayoutForm = !openedLayoutForm;
                        formLayout.slideUp();
                    }, 1500);
                },
                error: err => {
                    console.log(err)
                    \$('.dashboard_layout__ko').css('display', 'block');
                    addLayoutBtn.removeAttr('disabled');
                }
            });
        });

        function initSortable(reinit) {
            if (reinit) {
                dashboardSortable.sortable('destroy');
                dashboardSortable.unbind();
            }
            dashboardSortable.sortable({
                connectWith: \"#dashboard-sortable\"
            });
        }

        function anchorSidebar() {
            const \$scrollTop = \$(window).scrollTop();
            const \$distance = (elementOffsetTop - \$scrollTop);

            if (\$distance <= 0) {
                blockAction.addClass('is-fixed');
                blockAction.css('width', blockActionWidth);
                blockAction.css('left', elementOffsetLeft);
                blockAction.css('top', 0);
            } else {
                blockAction.removeClass('is-fixed');
                blockAction.removeAttr('style');
            }
        }
    });
</script>

<style type=\"text/css\">
    .dashboard .d-row {
        align-items: flex-start;
        justify-content: space-between;
        flex-direction: column-reverse;
    }

    @media all and (min-width: 1024px) {
        .dashboard .d-row {
            flex-direction: row;
        }
    }

    .dashboard__select__title {
        margin-bottom: 5px;
    }

    .dashboard__info {
        width: calc(100% - 20px);
        position: relative;
        bottom: 10px;
        left: 10px;
    }

    .dashboard__title {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        word-break: break-all;
    }

    .dashboard__image {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 15px;
        word-break: break-all;
    }

    .dashboard__input {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        word-break: break-all;
    }

    .dashboard__select {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 15px;
        word-break: break-all;
    }

    .dashboard__infoBlock {
        padding: 15px 15px 0 15px;
        border: 1px solid #ccc;
        margin-bottom: 15px;
        background-color: #efefef;
    }

    .dashboard__infoBlock .dashboard__error {
        text-align: center;
        margin-top: 5px;
    }

    .dashboard__helper {
        font-size: 12px;
        margin-top: 10px;
        text-align: center;
        color: #666;
        font-style: italic;
    }

    .dashboard__checkbox {
        display: block;
        width: 100%;
        text-align: center;
        font-size: 12px;
        font-weight: bold;
        margin-bottom: 10px;
        word-break: break-all;
    }

    .dashboard__label {
        margin-bottom: 10px;
        text-transform: uppercase;
        display: block;
        text-align: center;
        font-weight: 800;
        word-break: break-all;
    }

    .dashboard__infoContainer {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .dashboard__el {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 10px;
        margin-left: 10px;
    }


    .dashboard__el input[type=checkbox],
    .dashboard__el input[type=radio] {
        margin: 0 5px 0 0;
    }

    .dashboard__title--sources {
        margin-top: 10px;
    }

    .dashboard__container {
        background: #e2e1e0;
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        padding: 10px;
    }

    @media all and (min-width: 1024px) {

        .dashboard__container {
            width: 74%;
        }
    }

    #form-layout {
        display: none;
    }
    #form-layout textarea {
        min-width: 100%;
        max-width: 100%;
        min-height: 100px;
        max-height: 200px;
    }

    .dashboard__block {
        padding: 5px;
        box-sizing: border-box;
        flex-basis: 100%;
    }

    .dashboard__content {
        background-color: #fff;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
        height: 100%;
        position: relative;
        padding: 25px 10px 125px 10px;
        cursor: grab;
    }

    .dashboard__message {
        padding: 10px;
        text-align: center;
        margin-top: 10px;
        display: none;
    }

    .dashboard_layout__ok, .dashboard__ok {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .dashboard_layout__ko, .dashboard__ko {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .dashboard__image {
        max-width: 100%;
        height: auto;
    }

    .dashboard__content:focus {
        cursor: grabbing;
    }

    .dashboard__content:hover {
        box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    }

    .dashboard__remove {
        position: absolute;
        top: 5px;
        right: 5px;
        font-size: 16px;
        background-color: transparent;
        border: 0;
        width: 15px;
        height: 15px;
        background-image: url('../templates/standard/static/images/icons/user-panel/icon--up-close.png');
        background-size: cover;
    }

    .dashboard__remove:hover {
        background-image: url('../templates/standard/static/images/icons/user-panel/icon--up-close-hover.png');
    }

    .dashboard__actions, .dashboard_layout__actions {
        width: 100%;
        display: flex;
        justify-content: flex-end;
        flex-direction: column;
    }

    .dashboard__actions.is-fixed {
        z-index: 10;
        margin-top: 10px;
    }

    @media all and (min-width: 1024px) {
        .dashboard__actions, .dashboard_layout__actions {
            width: 25%;
        }

        .dashboard__actions.is-fixed {
            position: fixed;
            margin-top: 10px;
            right: 0;
        }
    }

    .dashboard__select.is-required select {
        border: 1px solid #ff0000;
    }

    .dashboard__select.is-required .dashboard__error {
        display: block;
    }

    .dashboard__error {
        display: none;
        color: #ff0000;
    }

    .dashboard__add {
        display: flex;
        flex-direction: column;
        padding: 20px;
        background-color: #efefef;
        border: 1px solid #ccc;
        border-radius: 4px;
        margin-bottom: 40px;
    }

    .dashboard__add .dashboard__select {
        margin-bottom: 20px;
    }

    @media all and (min-width: 1024px) {

        .dashboard__block--4-col {
            flex-basis: 100%;
        }

        .dashboard__block--3-col {
            flex-basis: 75%;
        }

        .dashboard__block--2-col {
            flex-basis: 50%;
        }

        .dashboard__block--1-col {
            flex-basis: 25%;
        }

    }

    .dashboard__select--type,
    .dashboard__select--action {
        display: none;
    }

</style>
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
        return array (  328 => 203,  304 => 182,  286 => 167,  262 => 146,  255 => 142,  247 => 137,  207 => 100,  197 => 93,  193 => 92,  186 => 88,  182 => 87,  178 => 86,  153 => 64,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  119 => 44,  117 => 43,  107 => 36,  103 => 35,  98 => 33,  90 => 28,  84 => 25,  78 => 22,  71 => 18,  67 => 17,  60 => 13,  56 => 12,  49 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/show.html.twig");
    }
}
