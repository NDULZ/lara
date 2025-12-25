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

/* courselist.html.twig */
class __TwigTemplate_74146b26f1f9f5f204d138c81304bda760f3eab90f23a5d6ee9595655a19007f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'emptycourselist' => [$this, 'block_emptycourselist'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<script language=\"javascript\">
    function confirmDialog(title, id_course, id_date) {
        closeAllDatesPopup(id_course);
        \$('<div></div>').appendTo('body')
            .html(\"<div><h6>";
        // line 5
        echo Lang::t("_SELF_UNSUBSCRIBE", "course");
        echo "</h6></div>\")
            .dialog({
                modal: true,
                title: title,
                autoOpen: true,
                width: '200',
                height: '150',
                resizable: false,
                buttons: {
                    ";
        // line 14
        echo Lang::t("_CONFIRM", "standard");
        echo ":

                        function() {
                            var posting = \$.get(
                                'ajax.server.php', {
                                    r: 'elearning/self_unsubscribe',
                                    id_course: id_course,
                                    id_date: id_date
                                }
                            );
                            posting.done(function(responseText) {
                                var ft = \$(\"#course_search_filter_text\").val();
                                var ctype = \$(\"#course_search_filter_type\").selectpicker().val();
                                var category = \$('#course_search_filter_cat').selectpicker().val();
                                var cyear = \$(\"#course_search_filter_year\").selectpicker().val();
                                var json_status = \$('.js-label-menu-filter.selected').attr('data-value');
                                \$(\"#div_course\").html(\"<br><p alt='loading' role='alert' align='center'><img src='";
        // line 30
        echo Layout::path();
        echo "images/standard/loadbar.gif'></p>\");
                               var posting = \$.get('ajax.server.php?r=elearning/all&rnd=";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "timestamp", [], "any", false, false, false, 31), "html", null, true);
        echo "&filter_text=' + ft + '&filter_type=' + ctype + '&filter_cat=' + category + '&filter_status=' + json_status + '&filter_year=' + cyear, {});
                                posting.done(function(responseText) {
                                    \$(\"#div_course\").html(responseText);
                                });
                            });
                            posting.fail(function() {
                                alert('unsubscribe failed')
                            })
                            \$(this).dialog(\"close\");
                        }

                        ,
                    ";
        // line 43
        echo Lang::t("_UNDO", "standard");
        echo ":

                        function() {
                            \$(this).dialog(\"close\");
                        }
                },
                open: function(event, ui) {
                    \$(\".ui-dialog-titlebar-close\", ui.dialog | ui).hide();
                },
                close: function(event, ui) {
                    \$(this).remove();
                }
            });
    }


    function openAllDatesPopup(\$id) {
        \$('*[data-overlay=\"course-' + \$id + '\"]').fadeIn();
    }

    function closeAllDatesPopup(\$id) {
        \$('*[data-overlay=\"course-' + \$id + '\"]').fadeOut();
    }

</script>


<link rel=\"shortcut icon\" href=\"../favicon.ico\">


<div id='container'>
    <h1 class=\"page-header col-xs-12\"><strong> ";
        // line 74
        echo twig_escape_filter($this->env, ($context["filter_type"] ?? null), "html", null, true);
        echo " </strong></h1>
    <div class=\"clearfix row\" id='mia_area_";
        // line 75
        echo twig_escape_filter($this->env, ($context["stato_corso"] ?? null), "html", null, true);
        echo "'>
        ";
        // line 76
        if (twig_test_empty(($context["courselist"] ?? null))) {
            // line 77
            echo "            <div class=\"col-xs-12\">
        ";
            // line 78
            $this->displayBlock('emptycourselist', $context, $blocks);
            // line 79
            echo "            </div>
       ";
        }
        // line 81
        echo "
        ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courselist"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 83
            echo "            <div class=\"col-xs-12 col-md-4 col-lg-3 mycourses-list\">
                ";
            // line 84
            $this->loadTemplate("partials/elearning-course-box.html.twig", "courselist.html.twig", 84)->display(twig_array_merge($context, ["course" => $context["course"]]));
            // line 85
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "    </div>
</div>

";
    }

    // line 78
    public function block_emptycourselist($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " <p>";
        echo Lang::t("_NO_CONTENT", "standard");
        echo "</p> ";
    }

    public function getTemplateName()
    {
        return "courselist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 78,  187 => 87,  172 => 85,  170 => 84,  167 => 83,  150 => 82,  147 => 81,  143 => 79,  141 => 78,  138 => 77,  136 => 76,  132 => 75,  128 => 74,  94 => 43,  79 => 31,  75 => 30,  56 => 14,  44 => 5,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "courselist.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/elearning/courselist.html.twig");
    }
}
