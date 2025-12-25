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

/* adm.html.twig */
class __TwigTemplate_496aa8069177a4dd56b085578c1bca91add52fc88a7db63e3a0819be8479d56f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "adm.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo Layout::path();
        echo "style/adm.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo Layout::path();
        echo "style/lms-to-review.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo Layout::path();
        echo "style/reset-fonts-grids.css?v=";
        echo twig_escape_filter($this->env, $this->env->getFunction('Template_getVersion')->getCallable()(), "html", null, true);
        echo "\" />

";
    }

    // line 10
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <script type=\"text/javascript\" src=\"";
        echo Layout::path();
        echo "script/jquery.smartmenus.js\"></script>
    <script type=\"text/javascript\">
        YAHOO.util.Event.onDOMReady(function () {
            checkSelect(document.getElementById('course_type').value);

            YAHOO.util.Event.on(
                YAHOO.util.Selector.query('select#course_type'), 'change', function (e) {
                    checkSelect(this.value);
                });

        });

        function checkSelect(val) {
            if (val == 'elearning') {
                document.getElementById(\"auto_subscription\").removeAttribute(\"disabled\");
            }
            else {
                document.getElementById(\"auto_subscription\").disabled = \"disabled\";
                document.getElementById(\"auto_subscription\").checked = false;
            }
        }
         \$(function() {
          // Forma SmartMenu init
          \$('#main-menu').smartmenus({   
            subMenusSubOffsetX: 1,
            subMenusSubOffsetY: -8
          });
          // feedback
          \$('#container-feedback').click(function(){
              \$( this ).fadeOut( 500 );
          });
        });        
        
        
    </script>
";
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "
<!-- menu_over -->
";
        // line 51
        echo Layout::zone("menu_over");
        echo "

<!-- blind nav -->
";
        // line 54
        echo Layout::zone("blind_navigation");
        echo "
<!-- container -->

<div id=\"admcontainer\">

    <!-- feedback -->
    ";
        // line 60
        echo Layout::zone("feedback");
        echo "

    <!-- content -->
    <div class=\"layout_colum_container\">
        ";
        // line 64
        echo Layout::zone("content");
        echo "
        <div class=\"nofloat\"></div>
    </div>
</div>
<!-- footer -->
<div id=\"footer\" class=\"layout_footer\">
    ";
        // line 70
        echo Layout::zone("footer");
        echo "
        ";
        // line 71
        echo Layout::copyright();
        echo "
</div>

<!-- scripts -->
";
        // line 75
        echo Layout::zone("scripts");
        echo "
<!-- debug -->
";
        // line 77
        echo Layout::zone("debug");
        echo "
<!-- def_lang -->
";
        // line 79
        echo Layout::zone("def_lang");
        echo "
";
    }

    public function getTemplateName()
    {
        return "adm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 79,  174 => 77,  169 => 75,  162 => 71,  158 => 70,  149 => 64,  142 => 60,  133 => 54,  127 => 51,  123 => 49,  119 => 48,  78 => 11,  74 => 10,  65 => 6,  59 => 5,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "adm.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/adm.html.twig");
    }
}
