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

/* rename.html.twig */
class __TwigTemplate_62ff65701b0cbf480c9026451fe092ae6683464befa6f9e475a12694842c730c extends \Twig\Template
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
        echo "<div class=\"folderTree__rename\">
    <input type=\"text\" id=\"folder_rename_input\" value=\"\" class=\"folderTree__rename__input\"
            onfocus=\"this.value = null; this.value = value\"
            onkeypress=\"return !(window.event && window.event.keyCode == 13);\"/>
    <label class=\"screenreader\" for=\"folder_rename_input\">";
        // line 5
        echo Lang::t("_RENAME_FOLDER_LABEL", "screen_reader");
        echo "</label>
    <button class=\"folderTree__rename__btn js-ft-rename-el\" type=\"button\">
        <span class=\"screenreader\">";
        // line 7
        echo Lang::t("_RENAME_FOLDER_BUTTON", "screen_reader");
        echo "</span>
    </button>
</div>";
    }

    public function getTemplateName()
    {
        return "rename.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "rename.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lomanager/rename.html.twig");
    }
}
