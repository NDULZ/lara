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

/* certificates.html.twig */
class __TwigTemplate_710faf5aec399eb905b8eff4827b7e9a2b4dc17c5bb89abf29bc168ef84bb779 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base/base.html.twig", "certificates.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "user", [], "any", false, false, false, 4), "avatar", [], "any", false, false, false, 4) == "")) {
            // line 5
            echo "        ";
            $context["avatarUrl"] = (($context["templatePath"] ?? null) . "static/images/icons/user-panel/icon--up-photo-placeholder.png");
            // line 6
            echo "    ";
        } else {
            // line 7
            echo "        ";
            $context["avatarUrl"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "user", [], "any", false, false, false, 7), "avatar", [], "any", false, false, false, 7);
            // line 8
            echo "    ";
        }
        // line 9
        echo "
    ";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 10) == "4-col")) {
            // line 11
            echo "        ";
            $context["class"] = " d-col--12--desktop";
            // line 12
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 12) == "3-col")) {
            // line 13
            echo "        ";
            $context["class"] = " d-col--9--desktop";
            // line 14
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 14) == "2-col")) {
            // line 15
            echo "        ";
            $context["class"] = " d-col--6--desktop";
            // line 16
            echo "    ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "type", [], "any", false, false, false, 16) == "1-col")) {
            // line 17
            echo "        ";
            $context["class"] = " d-col--3--desktop";
            // line 18
            echo "    ";
        }
        // line 19
        echo "
    <div class=\"d-col d-col--12 ";
        // line 20
        echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
        echo "\">
        <div class=\"d-user-profile\">
            <div class=\"d-grid\">
                <div class=\"d-row d-user-profile__padder\">
                    <div class=\"d-col d-col--12\">
                        <div class=\"d-cert\">
                        ";
        // line 26
        if ( !twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "perm", [], "any", false, false, false, 26)) {
            // line 27
            echo "                            <p class=\"d-alt-text text-center\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 27), "alternative_text", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                        ";
        } else {
            // line 29
            echo "                            <h3 class=\"d-title\">
                                ";
            // line 30
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 30), "title", [], "any", false, false, false, 30))) {
                // line 31
                echo "                                    ";
                echo Lang::t("_DASHBOARDBLOCKCERTIFICATELMS", "dashboard");
                echo "
                                ";
            } else {
                // line 33
                echo "                                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
                echo "
                                ";
            }
            // line 34
            echo "</h3>
                            ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "certificates", [], "any", false, false, false, 35) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "certificates", [], "any", false, false, false, 35)) > 0))) {
                // line 36
                echo "                                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "certificates", [], "any", false, false, false, 36));
                foreach ($context['_seq'] as $context["_key"] => $context["certificate"]) {
                    // line 37
                    echo "                                    <div class=\"d-item\">
                                        <div class=\"d-title text-center\">
                                        ";
                    // line 39
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "course_name", [], "any", false, false, false, 39), "html", null, true);
                    echo "
                                        </div>
                                        <div class=\"d-subtitle text-center\">
                                        ";
                    // line 42
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "cert_name", [], "any", false, false, false, 42), "html", null, true);
                    echo "
                                        </div>
                                        ";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, $context["certificate"], "on_date", [], "any", false, false, false, 44)) {
                        // line 45
                        echo "                                            <div class=\"d-date text-center\">
                                            ";
                        // line 46
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "on_date", [], "any", false, false, false, 46), "d-m-Y H:i"), "html", null, true);
                        echo "
                                            </div>
                                        ";
                    }
                    // line 49
                    echo "                                        ";
                    // line 54
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["certificate"], "cert_file", [], "any", false, false, false, 54)) {
                        // line 55
                        echo "                                            <div class=\"d-link text-center\">
                                                <a class=\"ico-wt-sprite subs_pdf\" alt=\"";
                        // line 56
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "cert_file", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" href=\"?r=mycertificate/downloadCert&amp;id_certificate=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id_certificate", [], "any", false, false, false, 56), "html", null, true);
                        echo "&amp;id_course=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id_course", [], "any", false, false, false, 56), "html", null, true);
                        echo "\" title=\"";
                        echo Lang::t("_DOWNLOAD", "certificate");
                        echo "\"><span>";
                        echo Lang::t("_DOWNLOAD", "certificate");
                        echo "</span></a>
                                            </div>
                                        ";
                    } else {
                        // line 59
                        echo "                                            <div class=\"d-link text-center\">
                                                <a class=\"ico-wt-sprite subs_pdf\" alt=\"";
                        // line 60
                        echo Lang::t("_GENERATE", "certificate");
                        echo "\" href=\"#\" onclick=\"genCertificate(";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id_course", [], "any", false, false, false, 60), "html", null, true);
                        echo ", ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["certificate"], "id_certificate", [], "any", false, false, false, 60), "html", null, true);
                        echo ")\" title=\"";
                        echo Lang::t("_GENERATE", "certificate");
                        echo "\"><span>";
                        echo Lang::t("_GENERATE", "certificate");
                        echo "</span></a>
                                            </div>
                                        ";
                    }
                    // line 63
                    echo "                                    </div>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['certificate'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 65
                echo "                            ";
            } else {
                // line 66
                echo "\t\t\t\t                <div class=\"alert alert-danger text-center\">";
                echo Lang::t("_DASHBOARD_BLOCKCERTIFICATES_NO_RECORDS", "dashboard");
                echo "</div>
                            ";
            }
            // line 68
            echo "
                            ";
            // line 69
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "data", [], "any", false, false, false, 69), "show_button", [], "any", false, false, false, 69)) {
                // line 70
                echo "                                <a class=\"forma-button forma-button--primary forma-button--full d-button--cert text-center\" title=\"\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["block"] ?? null), "link", [], "any", false, false, false, 70), "html", null, true);
                echo "\">
                                    <span class=\"forma-button__label\">";
                // line 71
                echo Lang::t("_MY_CERTIFICATE", "menu_over");
                echo "</span>
                                </a>
                            ";
            }
            // line 74
            echo "                        ";
        }
        // line 75
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    function genCertificate(id_course, id_certificate) {
      var posting = \$.get(
        'index.php', {
          r: 'mycertificate/downloadCert',
          id_certificate,
          id_course,
        }
      );
      posting.done(function(responseText) {
        location.reload();
      });
      posting.fail(function() {
        alert(\"Error generating certificate: \" + id_certificate + \" - \" + id_course + \" - \");
      })
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "certificates.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 75,  238 => 74,  232 => 71,  227 => 70,  225 => 69,  222 => 68,  216 => 66,  213 => 65,  206 => 63,  192 => 60,  189 => 59,  175 => 56,  172 => 55,  169 => 54,  167 => 49,  161 => 46,  158 => 45,  156 => 44,  151 => 42,  145 => 39,  141 => 37,  136 => 36,  134 => 35,  131 => 34,  125 => 33,  119 => 31,  117 => 30,  114 => 29,  108 => 27,  106 => 26,  97 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  82 => 15,  79 => 14,  76 => 13,  73 => 12,  70 => 11,  68 => 10,  65 => 9,  62 => 8,  59 => 7,  56 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "certificates.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/dashboard/certificates/certificates.html.twig");
    }
}
