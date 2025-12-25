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
class __TwigTemplate_3f32d25af36b0ed0f6d400525d657f6ab3524be65f544de09cfdc68d0154d1e7 extends \Twig\Template
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
        echo "

<!-- Nav tabs -->
<div class=\"col-lg-12 page-title\">
    <a href=\"index.php?r=adm/domainconfig/show\"><h1 class=\"text-uppercase\">";
        // line 5
        echo Lang::t(($context["title"] ?? null), "menu");
        echo " </h1></a>
                                ";
        // line 6
        if (($context["item"] ?? null)) {
            // line 7
            echo "                                    <h6> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 7), "html", null, true);
            echo " </h6>
                                ";
        }
        // line 9
        echo "                                </div>
<br/>


<br/><br/>
";
        // line 14
        if (($context["message"] ?? null)) {
            // line 15
            echo "    <div id=\"container-feedback\" class=\"container-feedback\">
        <span class=\"ico-sprite fd_info\"><span>";
            // line 16
            echo Lang::t("_DETAILS", "standard");
            echo "</span></span> ";
            echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
            echo "
    </div>
";
        }
        // line 19
        echo "
<div class=\"col-lg-12\">
    <div class=\"row nav nav-pills\">
         <div class=\"form-group\">
                <a style='float:right;' class=\"btn btn-success\" href='";
        // line 23
        echo twig_escape_filter($this->env, ($context["insertUrl"] ?? null), "html", null, true);
        echo "'>";
        echo Lang::t("_INSERT", "standard");
        echo "</a>
            </div>
       
        </div>
    

    <table class=\"table domainconfigtable\" style=\"table-layout:fixed;\">
    <thead>
        <tr>
        <th scope=\"col\" style=\"width: 5%\">#</th>
        <th scope=\"col\" style=\"width: 10%\">";
        // line 33
        echo Lang::t("_NAME", "standard");
        echo "</th>
        <th scope=\"col\" style=\"width: 15%\">";
        // line 34
        echo Lang::t("_DOMAIN", "domainconfig");
        echo "</th>
        <th scope=\"col\" style=\"width: 15%\">";
        // line 35
        echo Lang::t("_TEMPLATE", "domainconfig");
        echo "</th>
        <th scope=\"col\" style=\"width: 15%\">";
        // line 36
        echo Lang::t("_ORG", "domainconfig");
        echo "</th>
        <th scope=\"col\" style=\"width: 15%\">";
        // line 37
        echo Lang::t("_MAIL_CONFIG", "domainconfig");
        echo "</th>
        <th scope=\"col\"style=\"width: 25%\">";
        // line 38
        echo Lang::t("_ACTIONS", "standard");
        echo "</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["domains"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
            // line 43
            echo "        ";
            $this->loadTemplate("row.html.twig", "show.html.twig", 43)->display($context);
            // line 44
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
    </table>
</div>
    <script>

    \$(document).ready(function() {

       
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
        return array (  157 => 45,  143 => 44,  140 => 43,  123 => 42,  116 => 38,  112 => 37,  108 => 36,  104 => 35,  100 => 34,  96 => 33,  81 => 23,  75 => 19,  67 => 16,  64 => 15,  62 => 14,  55 => 9,  49 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "show.html.twig", "/home/shaeteqc/lms.shaeteq.com/appCore/views/domainconfig/show.html.twig");
    }
}
