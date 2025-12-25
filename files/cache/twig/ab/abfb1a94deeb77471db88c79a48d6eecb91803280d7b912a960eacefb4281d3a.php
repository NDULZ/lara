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

/* menu.html.twig */
class __TwigTemplate_57a7c66a9720f6718179124f97e9f403e4de75cbc87ec8eea962c42173eec54f extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "     ";
            // line 3
            echo "    ";
            if ($this->env->getFunction('Util_checkRole')->getCallable()(twig_get_attribute($this->env, $this->source, $context["item"], "role", [], "any", false, false, false, 3))) {
                echo " ";
                // line 4
                echo "        ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, false, 4)) > 0)) {
                    // line 5
                    echo "            <li class=\"dropdown\">
                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\"
                   aria-expanded=\"false\" >";
                    // line 7
                    echo Lang::t(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 7), "menu_over");
                    echo "<span class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 9
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "submenu", [], "any", false, false, false, 9));
                    foreach ($context['_seq'] as $context["_key"] => $context["subitem"]) {
                        // line 10
                        echo "                        <li";
                        if (twig_get_attribute($this->env, $this->source, $context["subitem"], "active", [], "any", false, false, false, 10)) {
                            echo " class=\"active\"";
                        }
                        echo ">
                            <a href=\"";
                        // line 11
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 11), "html", null, true);
                        echo "\" title=\"";
                        echo Lang::t(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11), "menu_over");
                        echo "\" \">
                                ";
                        // line 12
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 12)) {
                            echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 12);
                        } else {
                            echo Lang::t(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 12), "menu_over");
                        }
                        // line 13
                        echo "                            </a>
                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subitem'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "                </ul>
            </li>
        ";
                } else {
                    // line 19
                    echo "            <li";
                    if ((((twig_get_attribute($this->env, $this->source, ($context["currentPage"] ?? null), "isMVC", [], "any", false, false, false, 19) == true) && (twig_get_attribute($this->env, $this->source, $context["item"], "mvc_path", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, ($context["currentPage"] ?? null), "MVC", [], "any", false, false, false, 19))) || (((twig_get_attribute($this->env, $this->source, ($context["currentPage"] ?? null), "isMVC", [], "any", false, false, false, 19) == false) && (twig_get_attribute($this->env, $this->source, $context["item"], "module_name", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, ($context["currentPage"] ?? null), "modname", [], "any", false, false, false, 19))) && (twig_get_attribute($this->env, $this->source, $context["item"], "default_op", [], "any", false, false, false, 19) == twig_get_attribute($this->env, $this->source, ($context["currentPage"] ?? null), "op", [], "any", false, false, false, 19))))) {
                        echo " class=\"active\"";
                    }
                    echo " >
                <a href=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" title=\"";
                    echo Lang::t(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20), "menu_over");
                    echo "\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 20), "html", null, true);
                    echo "\"
                        ";
                    // line 21
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 21)) {
                        echo "role=\"button\" aria-label=\"";
                        echo Lang::t("_HELPDESK", "menu_over");
                        echo "\" ";
                    }
                    echo ">
                        ";
                    // line 22
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 22)) {
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "image", [], "any", false, false, false, 22);
                    } else {
                        echo Lang::t(twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 22), "menu_over");
                    }
                    // line 23
                    echo "                </a>
            </li>
        ";
                }
                // line 26
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
";
        // line 29
        if (((($context["perm_certificate"] ?? null) == true) && (($context["notGeneratedCertificates"] ?? null) > 0))) {
            // line 30
            echo "    <li class=\"green_menu\">
        <span class=\"badge badge-danger\">";
            // line 31
            echo twig_escape_filter($this->env, ($context["notGeneratedCertificates"] ?? null), "html", null, true);
            echo "</span>
        <a href=\"index.php?r=lms/mycertificate/show&sop=unregistercourse\" class=\"no-border-right no-before\">
            <div class=\"has-forma-tooltip\">
                <div class=\"forma-tooltip down\">";
            // line 34
            echo Lang::t("_CERTIFICATE_DOWNLOAD", "menu_over");
            echo "</div>
                <span class=\"glyphicon glyphicon-bell top-menu__label\">";
            // line 35
            echo Lang::t("_MY_CERTIFICATE", "menu_over");
            echo "</span>
            </div>
        </a>
    </li>
";
        }
        // line 40
        echo "
";
        // line 41
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserLevelId", [], "method", false, false, false, 41), ($context["adminRoles"] ?? null))) {
            // line 42
            echo "    <li class=\"green_menu\">
        <a href=\"";
            // line 43
            echo FormaLms\lib\Get::rel_path("adm");
            echo "\" class=\"no-border-right no-before\"
           title=\"";
            // line 44
            echo Lang::t("_GO_TO_FRAMEWORK", "menu_over");
            echo "\">
            <span class=\"glyphicon glyphicon-cog top-menu__label\">";
            // line 45
            echo Lang::t("_GO_TO_FRAMEWORK", "menu_over");
            echo "</span>
        </a>
    </li>
";
        }
        // line 49
        echo "
";
    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 49,  180 => 45,  176 => 44,  172 => 43,  169 => 42,  167 => 41,  164 => 40,  156 => 35,  152 => 34,  146 => 31,  143 => 30,  141 => 29,  138 => 28,  131 => 26,  126 => 23,  120 => 22,  112 => 21,  102 => 20,  95 => 19,  90 => 16,  82 => 13,  76 => 12,  70 => 11,  63 => 10,  59 => 9,  54 => 7,  50 => 5,  47 => 4,  43 => 3,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "menu.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/menu.html.twig");
    }
}
