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

/* helpdesk_modal.html.twig */
class __TwigTemplate_3b9f388246782f5773b41c8dd593c886e56b3c764ac05f72e91b3f57aac1de09 extends \Twig\Template
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
        echo "<div class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" id=\"modal_helpdesk\">
    <div class=\"modal-dialog\" role=\"document\">
        <form id=\"contact\" name=\"contact\" action=\"#\" method=\"post\" tabindex=\"0\">
            <fieldset>
                <legend class=\"screenreader\">";
        // line 5
        echo Lang::t("_CUSTOMER_HELP", "customer_help");
        echo "</legend>
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <span class=\"modal-title\">";
        // line 8
        echo Lang::t("_CUSTOMER_HELP", "customer_help");
        echo "</span>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 14
        if (($context["email"] ?? null)) {
            // line 15
            echo "                            <div class=\"container container_helpdesk \">
                                <input type=\"hidden\" id=\"sendto\" name=\"sendto\" class=\"txt\" value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
            echo "\" readonly>
                                <input type=\"hidden\" id=\"authentic_request_helpdesk\" name=\"authentic_request\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getFunction('Util_getSignature')->getCallable()(), "html", null, true);
            echo "\" />
                                <input type=\"hidden\" id=\"username_2\" name=\"username\" class=\"txt\" value=\"";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getIdst", [], "method", false, false, false, 18), "html", null, true);
            echo "\">
                                <input type=\"hidden\" id=\"help_req_resolution\" name=\"help_req_resolution\">
                                <div class=\"container container_helpdesk\">
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label class for=\"username\">";
            // line 23
            echo Lang::t("_USER", "standard");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-user\"></span></span>
                                                <input class=\"form-control txt\" type=\"text\" title=\"";
            // line 28
            echo Lang::t("_USER", "standard");
            echo "\" id=\"username\" name=\"username\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getUserid", [], "method", false, false, false, 28), "html", null, true);
            echo "\" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"oggetto\">";
            // line 34
            echo Lang::t("_HELPDESK_SUBJ", "configuration");
            echo " *</label>
                                            <div id=\"div_err_obj\"></div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-file\"></span></span>
                                                <input class=\"form-control txt\" type=\"oggetto\" id=\"oggetto\" name=\"oggetto\" placeholder=\"";
            // line 40
            echo Lang::t("_CUSTOMER_HELP_SUBJ_PLACEHOLDER", "configuration");
            echo "\" title=\"";
            echo Lang::t("_HELPDESK_SUBJ", "configuration");
            echo "\" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"email\">";
            // line 46
            echo Lang::t("_EMAIL", "menu");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span></span>
                                                <input class=\"form-control\" type=\"email\" id=\"email\" name=\"email\"  value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "getEmail", [], "method", false, false, false, 51), "html", null, true);
            echo "\" placeholder=\"\" title=\"";
            echo Lang::t("_EMAIL", "menu");
            echo "\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"telefono\">";
            // line 57
            echo Lang::t("_PHONE", "classroom");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"input-group\">
                                                <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-phone-alt\"></span></span>
                                                <input class=\"form-control\" type=\"text\" id=\"telefono\" name=\"telefono\"  placeholder=\"\" title=\"";
            // line 62
            echo Lang::t("_PHONE", "classroom");
            echo "\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"msg\">";
            // line 68
            echo Lang::t("_TEXTOF", "menu");
            echo " *</label>
                                            <div id=\"div_err_msg\"></div>
                                        </div>
                                        <div class=\"col-md-8\">
                                            <div class=\"input-group\">
                                                <textarea class=\"form-control\" id=\"msg\" title=\"";
            // line 73
            echo Lang::t("_TEXTOF", "menu");
            echo "\" name=\"msg\"  cols='74' rows='5' placeholder=\"";
            echo Lang::t("_WRITE_ASK_A_FRIEND", "profile");
            echo "\"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"row my-3\">
                                        <div class=\"col-md-4\">
                                            <label for=\"send_cc\">";
            // line 80
            echo Lang::t("_SEND_CC", "standard");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-1\">
                                                <input class=\"form-control\" id=\"send_cc\" name=\"send_cc\" checked data-toggle=\"toggle\" data-on=\"";
            // line 83
            echo Lang::t("_GROUP_FIELD_NORMAL", "admin_directory");
            echo "\"
                                                data-size=\"small\" data-off=\"";
            // line 84
            echo Lang::t("_NO", "standard");
            echo "\" data-onstyle=\"success\"
                                                data-offstyle=\"danger\" type=\"checkbox\">
                                        </div>
                                        <div class=\"col-md-7\"></div>
                                    </div>

                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"priorita\">";
            // line 92
            echo Lang::t("_PRIORITY", "message");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-1\">
                                            <input class=\"form-control\" id=\"priorita\" name=\"priorita\" data-size=\"small\" checked data-toggle=\"toggle\" data-on=\"";
            // line 95
            echo Lang::t("_NORMAL", "message");
            echo "\"
                                            data-off=\"";
            // line 96
            echo Lang::t("_HIGH", "message");
            echo "\" data-onstyle=\"success\" data-offstyle=\"danger\"
                                            type=\"checkbox\">
                                        </div>
                                        <div class=\"col-md-7\"></div>
                                    </div>
                                    <div class=\"row \">
                                        <div class=\"col-md-4\">
                                            <label for=\"disclaimer\">";
            // line 103
            echo Lang::t("_CUSTOMER_HELP_DISCLAIMER_TITLE", "customer_help");
            echo "</label>
                                        </div>
                                        <div class=\"col-md-1\">
                                            <input class=\"form-control\" id=\"disclaimer\" name=\"disclaimer\"   type=\"checkbox\" title=\"";
            // line 106
            echo Lang::t("_CUSTOMER_HELP_DISCLAIMER_TITLE", "customer_help");
            echo "\">
                                        </div>
                                        <div class=\"col-md-7\">
                                            <p>";
            // line 109
            echo Lang::t("_CUSTOMER_HELP_DISCLAIMER", "customer_help");
            echo "</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
        } else {
            // line 115
            echo "                            <div id=\"no_helpdesk\">";
            echo Lang::t("_NO_HELP_DESK", "customer_help");
            echo "</div>
                        ";
        }
        // line 117
        echo "                    </div>
                    <div class=\"modal-footer\">
                        <div class=\"row  row_helpdesk\">
                            <div class=\"col-md-5\">
                                <button class=\"form-control\" id=\"close_request\" data-dismiss=\"modal\">
                                    ";
        // line 122
        echo Lang::t("_CANCEL");
        echo "
                                </button>
                            </div>
                            <div class=\"col-md-5\">
                                <button class=\"form-control\" id=\"send_request\" >
                                    ";
        // line 127
        echo Lang::t("_CONFIRM");
        echo "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "helpdesk_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 127,  249 => 122,  242 => 117,  236 => 115,  227 => 109,  221 => 106,  215 => 103,  205 => 96,  201 => 95,  195 => 92,  184 => 84,  180 => 83,  174 => 80,  162 => 73,  154 => 68,  145 => 62,  137 => 57,  126 => 51,  118 => 46,  107 => 40,  98 => 34,  87 => 28,  79 => 23,  71 => 18,  67 => 17,  63 => 16,  60 => 15,  58 => 14,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "helpdesk_modal.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/helpdesk_modal.html.twig");
    }
}
