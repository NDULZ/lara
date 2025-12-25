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

/* cart.html.twig */
class __TwigTemplate_47baf455628b75caec3d210a188e0997be353537e6f46aacb843110a44416ee9 extends \Twig\Template
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
        echo "<li class=\"green_menu ";
        echo ((($context["cart"] ?? null)) ? ("") : ("hidden"));
        echo "\">
 <span id=\"cart_element\" class=\"badge badge-danger\">";
        // line 2
        echo twig_escape_filter($this->env, ($context["cart"] ?? null), "html", null, true);
        echo "</span>
    <a href=\"index.php?r=cart/show\" class=\"no-border-right no-before\" id=\"cart_action\" title=\"";
        // line 3
        echo Lang::t("_CART", "cart");
        echo "\" >
        <div class=\"has-forma-tooltip\">
            <span class=\"glyphicon glyphicon-shopping-cart top-menu__label\">
                ";
        // line 6
        echo Lang::t("_CART", "cart");
        echo "
           </span>
        </div> 
    </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/cart.html.twig");
    }
}
