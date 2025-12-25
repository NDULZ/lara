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

/* create_new_item.html.twig */
class __TwigTemplate_bca268386680e10a841e3b54dd8e89a162dddef71c80c3d13a9bbed0ecd2ea75 extends \Twig\Template
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
        echo "<div class=\"dropdown\" id=\"createitem_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <button class=\"btn btn-default dropdown-toggle create-object-button\" type=\"button\" id=\"dropdownMenuBtn_";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"true\">
        ";
        // line 3
        echo Lang::t("_CREATE_NEW", "standard");
        echo "
        <span class=\"caret\"></span>
    </button>
    <ul class=\"dropdown-menu\" id=\"dropdownMenu_";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        echo "\" aria-labelledby=\"dropdownMenu_";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "type", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["lo_types"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 8
            echo "            <li id=\"type_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "type", [], "any", false, false, false, 8), "html", null, true);
            echo "\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "type", [], "any", false, false, false, 8), "html", null, true);
            echo "\" class=\"folderView__li itemType\">
                <div class=\"folderView__el ";
            // line 9
            if (twig_get_attribute($this->env, $this->source, $context["el"], "type", [], "any", false, false, false, 9)) {
                echo "bg-fv-is-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "type", [], "any", false, false, false, 9), "html", null, true);
            } else {
                echo "bg-fv-is-folder";
            }
            echo "\">
                    <a href=\"#\" class=\"folderView__label\" title=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["el"], "title", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>

    <div class=\"row createFolderForm hidden\">
        <div class=\"col-lg-12 inputBtnContainer\">
            <div class=\"createFolder__link ft-is-folder\">
                <input type=\"text\" id=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "\" class=\"createFolder__input resizeInput\" placeholder=\"";
        echo Lang::t("_ORGFOLDERNAME", "storage");
        echo "\"/>
                <label class=\"screenreader\" for=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["tab"] ?? null), "title", [], "any", false, false, false, 20), "html", null, true);
        echo "\">";
        echo Lang::t("_ORGFOLDERNAME", "storage");
        echo "</label>
                <input type=\"hidden\" name=\"authentic_request\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getFunction('Util_getSignature')->getCallable()(), "html", null, true);
        echo "\" />
            </div>
            <div class=\"btnContainer\">
                <button class=\"btn cancelCreateFolder__btn noBorder\" type=\"reset\"><span class=\"screenreader\">";
        // line 24
        echo Lang::t("_CANCEL");
        echo "</span></button>
                <button class=\"btn createFolder__btn noBorder\" type=\"button\"><span class=\"screenreader\">";
        // line 25
        echo Lang::t("_CREATE_FOLDER", "screen_reader");
        echo "</span></button>
            </div>
            <div class=\"createFolder__input_err hidden\"></div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "create_new_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 25,  115 => 24,  109 => 21,  103 => 20,  97 => 19,  90 => 14,  78 => 10,  69 => 9,  62 => 8,  58 => 7,  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "create_new_item.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lomanager/create_new_item.html.twig");
    }
}
