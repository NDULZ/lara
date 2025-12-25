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

/* modal-clone.html.twig */
class __TwigTemplate_25252504f20ac3090b2f1341ac981cf28b2d8d56389f80068e90314aa3f57483 extends \Twig\Template
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
        echo "<div class=\"modal\" id=\"cloneModal\" style=\"display: none; z-index: 9999;\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\" data-val=\"body\">
                <label>";
        // line 5
        echo Lang::t("_DASHBOARD_SETTING_CLONE_LAYOUT", "dashboardsetting");
        echo "</label>
                <form class=\"dashboard__add\" style=\"display: block;\">
                    <div class=\"form-group\">
                        <label>";
        // line 8
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_NAME", "dashboardsetting");
        echo "</label>
                        <input name=\"name\" placeholder=\"";
        // line 9
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_NAME", "dashboardsetting");
        echo "\" class=\"form-control\" type=\"text\" value=\"\">
                        <p class=\"text text-danger\" style=\"display: none;\"></p>
                    </div>

                    <input name=\"id\" type=\"hidden\">

                    <div class=\"form-group\">
                        <label>";
        // line 16
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_CAPTION", "dashboardsetting");
        echo "</label>
                        <textarea name=\"caption\" maxlength=\"255\" placeholder=\"";
        // line 17
        echo Lang::t("_DASHBOARD_SETTING_LAYOUT_CAPTION", "dashboardsetting");
        echo "\" class=\"form-control textarea\"></textarea>
                        <p class=\"text text-danger\" style=\"display: none;\"></p>
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
                        <p class=\"text text-danger\" style=\"display: none;\"></p>
                    </div>

                    <div class=\"dashboard__message dashboard_layout__ok\">";
        // line 34
        echo Lang::t("_DASHBOARD_LAYOUT_SAVE_MESSAGE_OK", "dashboardsetting");
        echo "</div>
                    <div class=\"dashboard__message dashboard_layout__ko\">";
        // line 35
        echo Lang::t("_DASHBOARD_LAYOUT_SAVE_MESSAGE_KO", "dashboardsetting");
        echo "</div>
                </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" id=\"yes\" class=\"btn btn-primary\" data-val=\"yes\">";
        // line 39
        echo Lang::t("_CLONE", "standard");
        echo "</button>
                <button type=\"button\" class=\"btn btn-default\" data-val=\"no\">";
        // line 40
        echo Lang::t("_CANCEL", "standard");
        echo "</button>
            </div>
        </div>
    </div>
</div>

<script type=\"application/javascript\">

  function cloneDialog(modalSelector, onConfirm) {
    var fClose = function() {
        modal.modal(\"hide\");
    };
    var modal = \$(modalSelector);
    modal.modal(\"show\");
    modal.find(\"*[data-val=yes]\").unbind().bind('click', onConfirm);
    modal.find(\"*[data-val=no]\").unbind().bind(\"click\", fClose);
  }

  function cloneFunc(id) {
    var form = \$(\"#cloneModal form\");
    form.find('.text-danger').slideUp().html('');

    \$.ajax({
        type: 'GET',
        url: 'ajax.adm_server.php?r=adm/dashboardsettings/clone',
        data: { dashboard: id },
        success: function(data) {
            data = JSON.parse(data).data;

            form.find('input[name=name]').val(data.dashboard.name);
            form.find('textarea[name=caption]').val(data.dashboard.caption);
            form.find('input[name=id]').val(data.dashboard.id);

            cloneDialog(\"#cloneModal\", function() {
                \$.ajax({
                    type: 'POST',
                    url: data.ajaxUrl.cloneLayout,
                    data: form.serialize(),
                    success: function(data) {
                        table.reload();
                        \$(\"#cloneModal\").modal(\"hide\");
                    },
                    error: function(err) {
                        \$.each(err.responseJSON, function(k, item) {
                            form.find('*[name=' + k + ']').parents('.form-group').find('p').html(item).slideDown();
                        });
                    },
                });
            });     
        }
    });
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "modal-clone.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 40,  107 => 39,  100 => 35,  96 => 34,  87 => 28,  81 => 25,  75 => 22,  67 => 17,  63 => 16,  53 => 9,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modal-clone.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/dashboardsettings/modal-clone.html.twig");
    }
}
