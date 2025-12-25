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

/* edit.html.twig */
class __TwigTemplate_24e2e92172bad354d754f28ff6cb03829d622321b2e2b25e75b9b8f5dc254395 extends \Twig\Template
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
    <ul class=\"breadcrumb\">
        <li>";
        // line 4
        echo Lang::t("_DASHBOARD", "standard");
        echo "</li>
        <li><b>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dashboard"] ?? null), "name", [], "any", false, false, false, 5), "html", null, true);
        echo "<b></li>
    </ul>

    <div class=\"std_block\">
        <div class=\"container-back\">
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["showUrl"] ?? null), "html", null, true);
        echo "\">";
        echo Lang::t("_BACK", "standard");
        echo "</a>
        </div>
    </div>

    <div class=\"js-router--dashboard dashboard\">
        <div class=\"d-grid\">
            <div class=\"d-row\">
                <div id=\"dashboard-sortable\" class=\"dashboard__container\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["enabledBlocks"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 19
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, $context["block"], "enabled", [], "any", false, false, false, 19)) {
                // line 20
                echo "                            ";
                $context["index"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20);
                // line 21
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 21), "block", [], "any", false, false, false, 21), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\"
                                 class=\"dashboard__block dashboard__block--";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 22), "html", null, true);
                echo "\"
                                 data-block=\"";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 23), "block", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
                                 data-type=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "type", [], "any", false, false, false, 24), "html", null, true);
                echo "\"
                                 data-action=\"";
                // line 25
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["block"], "registeredActions", [], "any", false, false, false, 25), ","), "html", null, true);
                echo "\">
                                <div class=\"dashboard__content\">
                                    <button class=\"dashboard__remove js-remove-block\"
                                            data-block=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 28), "block", [], "any", false, false, false, 28), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, ($context["index"] ?? null), "html", null, true);
                echo "\"></button>
                                    <div class=\"dashboard__title\">";
                // line 29
                echo Lang::t(("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 29), "block", [], "any", false, false, false, 29))), "dashboardsetting");
                echo "</div>
                                    ";
                // line 35
                echo "
                                    <div class=\"dashboard__description\">";
                // line 36
                echo Lang::t((("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 36), "block", [], "any", false, false, false, 36))) . "_DESCRIPTION"), "dashboardsetting");
                echo "</div>

                                    <div class=\"dashboard__info\">
                                        ";
                // line 39
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["block"], "registeredActions", [], "any", false, false, false, 39)) > 0)) {
                    // line 40
                    echo "                                            <div class=\"dashboard__infoBlock dashboard__enabledActions\">
                                                <div class=\"dashboard__label\">";
                    // line 41
                    echo Lang::t("_ENABLED_ACTIONS", "dashboardsetting");
                    echo "</div>
                                                <div class=\"dashboard__infoContainer\">
                                                    <div class=\"dashboard__el\">
                                                        ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["block"], "registeredActions", [], "any", false, false, false, 44));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 45
                        echo "                                                            <label class=\"d-block\" style=\"display:block;\">
                                                                <input name=\"enabledActions[";
                        // line 46
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 46), "html", null, true);
                        echo "]\"
                                                                       type=\"checkbox\" value=\"";
                        // line 47
                        echo twig_escape_filter($this->env, $context["action"], "html", null, true);
                        echo "\"
                                                                       ";
                        // line 48
                        if (twig_in_filter($context["action"], twig_get_attribute($this->env, $this->source, $context["block"], "enabledActions", [], "any", false, false, false, 48))) {
                            echo "checked";
                        }
                        echo " />";
                        echo Lang::t(((("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 48), "block", [], "any", false, false, false, 48))) . "_") . twig_upper_filter($this->env, $context["action"])), "dashboardsetting");
                        echo "
                                                            </label>
                                                        ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "                                                    </div>
                                                </div>
                                            </div>
                                        ";
                }
                // line 55
                echo "
                                        ";
                // line 56
                $this->loadTemplate("block-form.html.twig", "edit.html.twig", 56)->display($context);
                // line 57
                echo "                                    </div>
                                </div>
                            </div>
                        ";
            }
            // line 61
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
                <div class=\"dashboard__actionsx\">
                    <div class=\"dashboard__add\">
                        <div class=\"dashboard__select dashboard__select--block\">
                            <select class=\"form-control js-select-block\">
                                <option value=\"\"
                                        selected>";
        // line 68
        echo Lang::t("_DASHBOARD_SETTING_SELECT_BLOCK", "dashboardsetting");
        echo "</option>
                                ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["installedBlocks"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 70
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 70), "block", [], "any", false, false, false, 70), "html", null, true);
            echo "\"
                                            data-type=\"";
            // line 71
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["block"], "availableTypes", [], "any", false, false, false, 71)), "html", null, true);
            echo "\"
                                            data-action=\"";
            // line 72
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["block"], "registeredActions", [], "any", false, false, false, 72)), "html", null, true);
            echo "\"
                                            data-form=\"";
            // line 73
            echo twig_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["block"], "form", [], "any", false, false, false, 73)), "html", null, true);
            echo "\">
                                        ";
            // line 74
            echo Lang::t(("_" . twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["block"], "postData", [], "any", false, false, false, 74), "block", [], "any", false, false, false, 74))), "dashboardsetting");
            echo "
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                            <div class=\"dashboard__error\">";
        // line 78
        echo Lang::t("_DASHBOARD_SETTING_BLOCK_REQUIRED", "dashboardsetting");
        echo "</div>
                        </div>
                        <div class=\"dashboard__select dashboard__select--type\">
                            <select class=\"form-control js-select-type\"></select>
                        </div>
                        <button class=\"btn btn-primary dahsboard__button--add js-add-block\">";
        // line 83
        echo Lang::t("_DASHBOARD_SETTING_ADD_NEW_BLOCK", "dashboardsetting");
        echo "</button>
                    </div>
                    <button class=\"button btn btn-danger dahsboard__button--save js-save-block btn-block\">";
        // line 85
        echo Lang::t("_DASHBOARD_SETTING_SAVE", "dashboardsetting");
        echo "
                    </button>
                    <div class=\"dashboard__message dashboard__ok\">";
        // line 87
        echo Lang::t("_DASHBOARD_SETTING_SAVE_MESSAGE_OK", "dashboardsetting");
        echo "</div>
                    <div class=\"dashboard__message dashboard__ko\">";
        // line 88
        echo Lang::t("_DASHBOARD_SETTING_SAVE_MESSAGE_KO", "dashboardsetting");
        echo "</div>
                </div>
            </div>
        </div>
    </div>

    <script type=\"application/javascript\">
        \$(function () {
            const dashboardId = \"";
        // line 96
        echo twig_escape_filter($this->env, ($context["dashboardId"] ?? null), "html", null, true);
        echo "\";
            const showUrl = \"";
        // line 97
        echo twig_escape_filter($this->env, ($context["showUrl"] ?? null), "html", null, true);
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
            const templatePath = \"";
        // line 107
        echo twig_escape_filter($this->env, ($context["templatePath"] ?? null), "html", null, true);
        echo "\";
            const btnNewLayout = \$('#btn-new-layout');
            const addLayoutBtn = \$('.js-add-layout');
            const layoutsTable = \$('#layouts');
            let openedLayoutForm = false;

            initSortable();
            uploadFileCheck();

            // SALVATAGGIO DATI BLOCK
            saveField.click(function () {
                let response = {};
                const blocks = \$('.dashboard__block');

                if (blocks) {
                    for (i = 0; i < blocks.length; i++) {
                        const block = blocks[i].getAttribute('data-block');
                        const type = blocks[i].getAttribute('data-type');
                        const inputActions = blocks[i].querySelector('.dashboard__enabledActions');

                        actions = [];
                        if (inputActions){
                            
                            var enabledActions = inputActions.querySelectorAll(\"input[type=checkbox]:checked\");
                            for (j = 0; j < enabledActions.length; j++) {
                                actions.push(enabledActions[j].value);
                            }
                        }

                        const firstInsert = blocks[i].getAttribute('data-first-insert');
                        const extraElement = blocks[i].querySelectorAll('.js-extra-setting');
                        let extraSettings = {};

                        response[i] = {
                            'block': block,
                            'settings': {
                                'position': i + 1,
                                'type': type,
                                'enabled': true,
                                'enabledActions': actions,
                                'firstInsert': firstInsert,
                                'data': {}
                            }
                        }

                        if (extraElement.length) {

                            for (let i = 0; i < extraElement.length; i++) {
                                const key = extraElement[i].getAttribute('name');
                                const value = extraElement[i].value;
                                const typeEl = extraElement[i].getAttribute('type');

                                switch (typeEl) {
                                    case 'checkbox':
                                        if (extraElement[i].checked) {
                                            if (extraSettings[key]) {
                                                extraSettings[key] += '|' + value;
                                            } else {
                                                extraSettings[key] = value;
                                            }
                                        }
                                        break;
                                    case 'radio':
                                        if (extraElement[i].checked) {
                                            extraSettings[key] = value;
                                        }
                                        break;
                                    case 'file':
                                    case 'image':
                                        const fileUrl = extraElement[i].getAttribute('data-url');
                                        if (fileUrl) {
                                            extraSettings[key] = fileUrl;
                                        }
                                        break;
                                    default:
                                        if (value) {
                                            extraSettings[key] = value;
                                        }
                                }

                            }

                            response[i]['settings']['data'] = {...response[i]['settings']['data'], ...extraSettings};
                        }

                    }
                }

               \$.ajax({
                   url: '";
        // line 196
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "save", [], "any", false, false, false, 196), "html", null, true);
        echo "&dashboard=' + dashboardId,
                   type: 'POST',
                   data: {
                       settings: response
                   },
                   beforeSend: () => {
                       saveField.attr('disabled', true);
                       \$('.dashboard__message').css('display', 'none');
                   },
                   success: () => {
                       saveField.removeAttr('disabled');
                       \$('.dashboard__ok').css('display', 'block')
                   },
                   error: err => {
                       console.log(err)
                       \$('.dashboard__ko').css('display', 'block');
                   }
               })

            });

            // MOSTRA TYPES IN BASE AL BLOCCO SCELTO
            selectBlock.change(function () {
                const types = \$(this).children('option:selected').attr('data-type');
                const actions = \$(this).children('option:selected').attr('data-action');
                selectType.find('option').remove();
                selectAction.find('label').remove();
                selectType.parent('.dashboard__select').fadeOut();
                selectAction.parent('.dashboard__select').fadeOut();

                if (JSON.parse(types).length) {
                    const typesJSON = JSON.parse(types);
                    selectBlock.parent('.dashboard__select').removeClass('is-required');
                    selectType.parent('.dashboard__select').fadeIn();

                    for (i = 0; i < typesJSON.length; i++) {
                        selectType.append('<option value=\"' + typesJSON[i] + '\">' + typesJSON[i] + '</option>')
                    }
                } else {
                    selectType.parent('.dashboard__select').fadeOut();
                }
            });

            // AGGIUNGE BLOCCO
            addBlock.click(function () {
                const selectBlockValue = selectBlock.children('option:selected').val();
                const selectBlockTitle = selectBlock.children('option:selected').text();
                const selectTypeValue = selectType.children('option:selected').val();
                const countBlocks = \$('.dashboard__block').length + 2;

                if (selectBlockValue.length > 0) {
                    selectBlock.parent('.dashboard__select').removeClass('is-required');

                    \$.ajax({
                        url: '";
        // line 250
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "getBlockType", [], "any", false, false, false, 250), "html", null, true);
        echo "&block=' + selectBlockValue + '&index=' + countBlocks + '&type=' + selectTypeValue,
                        type: 'GET',
                        success: (data) => {

                            dashboardSortable.append(data);
                            // initSortable(true);
                            \$('html, body').animate({
                                scrollTop: \$('#' + selectBlockValue + '-' + countBlocks).offset().top
                            }, 1000);

                            uploadFileCheck();
                        },
                        error: err => {
                            console.log(err)
                            \$('.dashboard__ko').css('display', 'block');
                        }
                    })
                } else {
                    selectBlock.parent('.dashboard__select').addClass('is-required');
                }
            });

            // RIMUOVE BLOCCO
            \$(document).on('click', '.js-remove-block', function () {
                const blockToRemove = \$(this).attr('data-block');
                \$('#' + blockToRemove).remove();
                // initSortable(true);
            });

            // MODIFICA DIMENSIONE BLOCCO
            \$(document).on('change', '.js-type-block', function () {
                const blockToChange = \$(this).attr('data-block');
                const newType = \$(this).val();
                \$('#' + blockToChange).removeAttr('class').addClass('dashboard__block').addClass('dashboard__block--' + newType).attr('data-type', newType);
                // initSortable(true);
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

            function uploadFileCheck() {
                const inputFile = document.querySelectorAll('.js-upload-file');

                for (let i = 0; i < inputFile.length; i++) {
                    const item = inputFile[i];
                    item.addEventListener('change', () => {
                        const formData = new FormData();
                        const error = item.parentNode.parentNode.querySelector('.dashboard__error');
                        formData.append('file', item.files[0], item.files[0].name);
                        error.style.display = 'none';

                        if (item.classList.contains('form-control-image')) {

                            if (isFileImage(item.files[0]) > 0) {
                                uploadFileAjax(formData, item)
                            } else {
                                error.style.display = 'block';
                            }
                        } else {
                            const acceptedExtensions = item.getAttribute('data-types');

                            if (isFileOther(item.files[0], acceptedExtensions) > 0) {
                                uploadFileAjax(formData, item);
                            } else {
                                error.style.display = 'block';
                            }
                        }

                    })
                }

            }

            function uploadFileAjax(formData, item) {
                const block = item.getAttribute('data-block');
                const field = item.getAttribute('id');
                \$.ajax({
                    url: '";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ajaxUrl"] ?? null), "uploadFile", [], "any", false, false, false, 334), "html", null, true);
        echo "&block=' + block + '&field=' + field,
                    data: formData,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    success: function (data) {
                        const response = JSON.parse(data);
                        let imageUrl = '';
                        if (response.status == 200) {
                            imageUrl = response.file;
                            \$(item).parents(\".dashboard__infoContainer\").find('img').attr(\"src\", imageUrl).fadeIn();
                        }
                        item.setAttribute('data-url', imageUrl);
                    }
                });
            }

            function isFileImage(file) {
                const acceptedImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
                return file && \$.inArray(file['type'], acceptedImageTypes)
            }

            function isFileOther(file, extensions) {
                const acceptedFileTypes = extensions;
                return file && \$.inArray(file['type'], acceptedFileTypes.split(','))
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

        .dashboard__infoContainer .dashboard__el .checkbox {
            display: inline-block;
        }

        .dashboard__el {

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

        .dashboard__content .dashboard__description {
            font-weight: 300;
            margin-bottom: 20px;
            text-align: center;
        }


    </style>
";
    }

    public function getTemplateName()
    {
        return "edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 334,  472 => 250,  415 => 196,  323 => 107,  310 => 97,  306 => 96,  295 => 88,  291 => 87,  286 => 85,  281 => 83,  273 => 78,  270 => 77,  261 => 74,  257 => 73,  253 => 72,  249 => 71,  244 => 70,  240 => 69,  236 => 68,  228 => 62,  214 => 61,  208 => 57,  206 => 56,  203 => 55,  197 => 51,  176 => 48,  172 => 47,  168 => 46,  165 => 45,  148 => 44,  142 => 41,  139 => 40,  137 => 39,  131 => 36,  128 => 35,  124 => 29,  118 => 28,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  93 => 21,  90 => 20,  87 => 19,  70 => 18,  57 => 10,  49 => 5,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "edit.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/edit.html.twig");
    }
}
