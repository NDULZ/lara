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
class __TwigTemplate_891e84a65b7237e5d8ea31777d383b74b067f89b25649cd319b515076516d642 extends \Twig\Template
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
    <h1>";
        // line 2
        echo Lang::t("_MENU_COURSE", "storage");
        echo "</h1>
</div>

<div class=\"std_block fv-is-student-area js-disable-context-menu js-disable-sortable js-disable-drag-and-drop\">
    ";
        // line 6
        $this->loadTemplate("container.html.twig", "show.html.twig", 6)->display(twig_array_merge($context, ["tab" => ($context["data"] ?? null), "isStudent" => true]));
        // line 7
        echo "</div>

<script>
    new window.frontend.modules.StudentLearningObject({
        controller: 'lomanagerorganization',
        selector: 'organization',
    });
</script>
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
        return array (  49 => 7,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lo/show.html.twig");
    }
}
