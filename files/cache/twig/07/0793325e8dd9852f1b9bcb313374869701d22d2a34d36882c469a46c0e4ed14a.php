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
class __TwigTemplate_8904cc3c950c4c09464dec74c1f8e18fee8f4f0d19b3b3282298c53636a44c92 extends \Twig\Template
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
        echo FormaLms\lib\Get::title(["index.php?r=alms/communication/show" => Lang::t("_COMMUNICATION", "communication"), "" => Lang::t("_COMMUNICATION", "communication")], false);
        // line 4
        echo "

";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "add", [], "any", false, false, false, 6) == true)) {
            // line 7
            echo "    ";
            if ((($context["categoryCount"] ?? null) > 0)) {
                // line 8
                echo "        <a id=\"addcategory_bottom\"   href=\"index.php?r=alms/communication/add\" class=\"ico-wt-sprite subs_add\" title=\"";
                echo Lang::t("_ADD", "standard");
                echo "\"><span>";
                echo Lang::t("_ADD", "standard");
                echo "</span></a>
    ";
            } else {
                // line 10
                echo "        ";
                echo Lang::t("_CATEGORY_MISSING", "communication");
                echo "
    ";
            }
        }
        // line 13
        echo "<table class=\"table table-bordered display\" style=\"width:100%\" id=\"communicationlist\"></table>
<br>

";
        // line 16
        $this->loadTemplate("partials/modal_confirm.html.twig", "show.html.twig", 16)->display($context);
        // line 17
        echo "

<script>

    let permissions = ";
        // line 21
        echo json_encode(($context["permissions"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
 
    let t = null;
    var delFunc = function(id, element) {

            var selector = \"#confirmModal\";
            var message = \"";
        // line 27
        echo Lang::t("_AREYOUSURE", "standard");
        echo "\";

            let \$element = \$(element);
            let url = \$element.attr('href');
            var deleteFunction = function() {
                    \$.ajax({
                        type: 'POST',
                        url: url,
                        data: { idCategory: id },
                        success: function(response) {
                            var result = JSON.parse(response);
                            if(result.success == true) {
                                t._datatable.row(\$element.parents('tr')).remove().draw();
                            } else {
                               alert(\"";
        // line 41
        echo Lang::t("_ERROR", "communication");
        echo "\");
                            }
                        }
                    });
            };
        
            confirmDialog(selector , message, deleteFunction);
        };

          var confirmDialog = function (modalSelector, message, onConfirm) {
            var fClose = function() {
                modal.modal(\"hide\");
            };
            var modal = \$(modalSelector);
            modal.modal(\"show\");
            modal.find(\"*[data-val=body]\").empty().append(message);
            if(onConfirm !== null) {
                modal.find(\"*[data-val=yes]\").show();
                modal.find(\"*[data-val=yes]\").unbind().one('click', onConfirm).one('click', fClose);
            } else {
                modal.find(\"*[data-val=yes]\").hide();
            }
            
            modal.find(\"*[data-val=no]\").unbind().one(\"click\", fClose);
        }
    \$(function () {
      
        var body = ";
        // line 68
        echo json_encode(($context["communicationList"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";

        var columns = [
            {data: 'content', title: '";
        // line 71
        echo Lang::t("_TITLE", "communication");
        echo "', sortable: true},
            {data: 'courseName', title: '";
        // line 72
        echo Lang::t("_COURSE", "course");
        echo "', sortable: false},
            {data: 'categoryTitle', title: '";
        // line 73
        echo Lang::t("_CATEGORY", "communication");
        echo "', sortable: false},
            {data: 'type_of', title: '";
        // line 74
        echo Lang::t("_TYPE", "communication");
        echo "', sortable: false}
        ];

        if(permissions['mod'] == true ) {
            columns.push({data: 'editUrl', title: '<span class=\"ico-sprite subs_mod\"><span>";
        // line 78
        echo Lang::t("_MOD", "admin_lang");
        echo "</span></span>', sortable: true});
            columns.push({data: 'usersUrl', title: '<span class=\"ico-sprite subs_user\"><span>";
        // line 79
        echo Lang::t("_ASSIGN_USERS", "admin_lang");
        echo "</span></span>', sortable: true});
        }
        if(permissions['del'] == true ) {
            columns.push({data: 'deleteUrl', title: '<span class=\"ico-sprite subs_del\"><span>";
        // line 82
        echo Lang::t("_DEL", "admin_lang");
        echo "</span></span>', sortable: true});
        }
        var rows = [];

        body.forEach(function (item, k) {
       
            content = '<b><a id=\"title' + item.id_comm + '\"  href=\"' + item.editUrl + '\">' + item.title + '</a></b><br /><br /><p>' + item.description + '</p>';
            var userIcon = ((parseInt(item.access_entity)) > 0 ) ? 'subs_user' : 'fd_notice';
            item.content = content;
            link = '<a id=\"edit'+item.id_comm+'\"  href=\"'+item.editUrl+'\" class=\"ico-sprite subs_mod\" title=\"";
        // line 91
        echo Lang::t("_MOD", "admin_lang");
        echo "\"><span></span></a>'
            item.editUrl = link;
            link = '<a id=\"assign'+item.id_comm+'\"  href=\"'+item.usersUrl+'\" class=\"ico-sprite ' + userIcon + '\" title=\"";
        // line 93
        echo Lang::t("_ASSIGN_USERS", "admin_lang");
        echo "\"><span></span></a>'
            item.usersUrl = link;
            link = '<a id=\"delete'+item.id_comm+'\" onclick=\"event.preventDefault();delFunc(' + item.id_comm + ', this )\" href=\"'+item.deleteUrl+'\" class=\"ico-sprite subs_del\" title=\"";
        // line 95
        echo Lang::t("_DEL", "admin_lang");
        echo "\"><span></span></a>'
            item.deleteUrl = link;

            rows.push(Object.assign({}, item));
        });

        t = \$('#communicationlist').FormaTable({
            rowId: function (row) {
                return row[0];
            },  // cambia
            scrollX: true,
            processing: true,
            serverSide: false,
            paging: true,
            searching: true,
            columns,
            data: rows,
            dom: 'Bfrtip',
            stateSave: true,
            deferRender: true,
        });
         console.log(t);
    });

   

 \$('input[name=save]').on('click', function(e) {
    e.preventDefault();
    e.stopPropagation();

    let \$form = \$(this).parents('form');
    var modalSelector = '#categoryModal';
    let modal = \$(modalSelector);
    
    \$.ajax({
        type:  \$form.attr(\"method\"),
        url:  \$form.attr(\"action\"),
        data: \$form.serialize() ,
        dataType : 'json', // changing data type to json
        success: function (data) { // here I'm adding data as a parameter which stores the response
            console.log(data); // instead of alert I'm changing this to console.log which logs all the response in console.
            if(data.success === true)  {
                modal.modal(\"hide\");
                t._datatable.row.add( {
                \"label\": data.node.label,
                \"parentLabel\": data.node.parentLabel,
                \"countCommunications\": data.node.countObjects,
                \"filterUrl\": '<a id=\"'+data.node.id+'\" href=\"'+data.node.filterUrl+'\" class=\"ico-sprite subs_download\" title=\"";
        // line 142
        echo Lang::t("_EXPORT_XML", "admin_lang");
        echo "\"><span></span></a>',
                \"editUrl\": '<a id=\"'+data.node.id+'\" href=\"'+data.node.editUrl+'\" class=\"ico-sprite subs_mod\" title=\"";
        // line 143
        echo Lang::t("_MOD", "admin_lang");
        echo "\"><span></span></a>',
                \"deleteUrl\": '<a id=\"'+data.node.id+'\" href=\"'+data.node.deleteUrl+'\" class=\"ico-sprite subs_del\" title=\"";
        // line 144
        echo Lang::t("_DEL", "admin_lang");
        echo "\"><span></span></a>'
                } ).draw();
            }
        }
    });


 
 })


    
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
        return array (  247 => 144,  243 => 143,  239 => 142,  189 => 95,  184 => 93,  179 => 91,  167 => 82,  161 => 79,  157 => 78,  150 => 74,  146 => 73,  142 => 72,  138 => 71,  132 => 68,  102 => 41,  85 => 27,  76 => 21,  70 => 17,  68 => 16,  63 => 13,  56 => 10,  48 => 8,  45 => 7,  43 => 6,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/admin/views/communication/show.html.twig");
    }
}
