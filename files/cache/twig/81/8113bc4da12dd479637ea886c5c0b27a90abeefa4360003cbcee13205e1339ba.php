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

/* show_categories.html.twig */
class __TwigTemplate_1e4e44a52321b8507f072256b3e52c158ed6e0bdd63e2c93e387e43976b311ac extends \Twig\Template
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
        echo FormaLms\lib\Get::title(["index.php?r=alms/communication/showCategories" => Lang::t("_CATEGORY", "communication"), "" => Lang::t("_CATEGORIES", "communication")], false);
        // line 4
        echo "

<table class=\"table table-bordered display\" style=\"width:100%\" id=\"categorieslist\"></table>
<br>
";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, ($context["permissions"] ?? null), "add_category", [], "any", false, false, false, 8) == true)) {
            // line 9
            echo "    <a id=\"addcategory_bottom\"  onclick=\"event.preventDefault();openModal();\" href=\"#\" class=\"ico-wt-sprite subs_add\" title=\"";
            echo Lang::t("_ADD", "standard");
            echo "\"><span>";
            echo Lang::t("_ADD", "standard");
            echo "</span></a>
";
        }
        // line 11
        $this->loadTemplate("partials/modal_confirm.html.twig", "show_categories.html.twig", 11)->display($context);
        // line 12
        $this->loadTemplate("partials/modal_category.html.twig", "show_categories.html.twig", 12)->display($context);
        // line 13
        echo "
<script>
    let permissions = ";
        // line 15
        echo json_encode(($context["permissions"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
    let t = null;
    var delFunc = function(id, count, element) {

            var selector = \"#confirmModal\";
            var message = \"";
        // line 20
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
                               alert(result.message);
                            }
                        }
                    });
            };
            if(count > 0) {
                message = '";
        // line 40
        echo Lang::t("_CATEGORY_WITH_POSTS", "communication");
        echo "';
                deleteFunction = null;
            }
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
        // line 64
        echo json_encode(($context["categoriesList"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";

        var columns = [
            {data: 'label', title: '";
        // line 67
        echo Lang::t("_LABEL", "communication");
        echo "', sortable: true},
            {data: 'parentLabel', title: '";
        // line 68
        echo Lang::t("_PARENT", "communication");
        echo "', sortable: false},
            {data: 'countCommunications', title: '";
        // line 69
        echo Lang::t("_COUNT", "communication");
        echo "', sortable: true},
            {data: 'filterUrl', title: '<span class=\"ico-sprite subs_download\"><span>";
        // line 70
        echo Lang::t("_FILTER", "communication");
        echo "', sortable: false}
        ];

          if(permissions['mod_category'] == true ) {
            columns.push({data: 'editUrl', title: '<span class=\"ico-sprite subs_mod\"><span>";
        // line 74
        echo Lang::t("_MOD", "admin_lang");
        echo "</span></span>', sortable: true});
        }
        if(permissions['del_category'] == true ) {
            columns.push({data: 'deleteUrl', title: '<span class=\"ico-sprite subs_del\"><span>";
        // line 77
        echo Lang::t("_DEL", "admin_lang");
        echo "</span></span>', sortable: true});
        }
        var rows = [];

        body.forEach(function (item, k) {
           link = '<a id=\"'+item.id+'\" href=\"'+item.filterUrl+'\" class=\"ico-sprite subs_download\" title=\"";
        // line 82
        echo Lang::t("_FILTER", "communication");
        echo "\"><span></span></a>'
            item.filterUrl = link;
            link = '<a id=\"'+item.id+'\"  href=\"'+item.editUrl+'\" class=\"ico-sprite subs_mod\" title=\"";
        // line 84
        echo Lang::t("_MOD", "admin_lang");
        echo "\"><span></span></a>'
            item.editUrl = link;
            link = '<a id=\"'+item.id+'\" onclick=\"event.preventDefault();delFunc(' + item.id + ',' + item.countCommunications + ', this )\" href=\"'+item.deleteUrl+'\" class=\"ico-sprite subs_del\" title=\"";
        // line 86
        echo Lang::t("_DEL", "admin_lang");
        echo "\"><span></span></a>'
            item.deleteUrl = link;

            rows.push(Object.assign({}, item));
        });

        t = \$('#categorieslist').FormaTable({
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
    });

    var openModal = function() {

\t\tvar modalSelector = '#categoryModal';
\t\tvar modal = \$(modalSelector);
\t\tvar fClose = function() {
\t\t\tmodal.modal(\"hide\");
\t\t};

\t\t modal.modal(\"show\");
\t};

      var editModal = function() {

\t\tvar modalSelector = '#categoryModal';
\t\tvar modal = \$(modalSelector);

        

\t\tvar fClose = function() {
\t\t\tmodal.modal(\"hide\");
\t\t};

\t\t modal.modal(\"show\");
\t};

    var data = ";
        // line 134
        echo json_encode(($context["categoriesDropdownData"] ?? null), twig_constant("JSON_HEX_APOS"));
        echo ";
    var dropPlaceholder = '";
        // line 135
        echo Lang::t("_OPTION", "communication");
        echo "';
  
    const categoryDropdown = new window.frontend.modules.Select2(\$(\"#category\"),{
 
    data: data,
    width:\"100%\",
    allowClear : true,
    dropdownParent: \$('#categoryModal'),
  //  minimumResultsForSearch: 3,
     formatSelection: function(item) {
      return item.text
    },
    formatResult: function(item) {
      return item.text
    },
    templateResult: function(item) {
         var \$result = \$('<span style=\"padding-left:' + (20 * item.level) + 'px;\">' + item.text + '</span>');
    return \$result;
    },
    placeholder: dropPlaceholder,

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
            if(data.success === true)  {
                modal.modal(\"hide\");
                t._datatable.row.add( {
                \"label\": data.node.label,
                \"parentLabel\": data.node.parentLabel,
                \"countCommunications\": data.node.countObjects,
                \"filterUrl\": '<a id=\"'+data.node.id+'\" href=\"'+data.node.filterUrl+'\" class=\"ico-sprite subs_download\" title=\"";
        // line 179
        echo Lang::t("_EXPORT_XML", "admin_lang");
        echo "\"><span></span></a>',
                \"editUrl\": '<a id=\"'+data.node.id+'\" href=\"'+data.node.editUrl+'\" class=\"ico-sprite subs_mod\" title=\"";
        // line 180
        echo Lang::t("_MOD", "admin_lang");
        echo "\"><span></span></a>',
                \"deleteUrl\": '<a id=\"'+data.node.id+'\" onclick=\"event.preventDefault();delFunc(' + data.node.id + ',' + data.node.countCommunications + ', this )\" href=\"'+data.node.deleteUrl+'\" class=\"ico-sprite subs_del\" title=\"";
        // line 181
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
        return "show_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 181,  276 => 180,  272 => 179,  225 => 135,  221 => 134,  170 => 86,  165 => 84,  160 => 82,  152 => 77,  146 => 74,  139 => 70,  135 => 69,  131 => 68,  127 => 67,  121 => 64,  94 => 40,  71 => 20,  63 => 15,  59 => 13,  57 => 12,  55 => 11,  47 => 9,  45 => 8,  39 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show_categories.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/admin/views/communication/show_categories.html.twig");
    }
}
