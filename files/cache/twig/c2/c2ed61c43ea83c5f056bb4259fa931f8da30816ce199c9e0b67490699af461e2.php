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

/* base/videomodal.html.twig */
class __TwigTemplate_f524557bd4ade1c74a222f7d60a8fa932426b3b39e82c9ab0c083f8b80f23b49 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'videoModal' => [$this, 'block_videoModal'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('videoModal', $context, $blocks);
    }

    public function block_videoModal($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    <!-- Modal -->
    <div class=\"modal fade js-dashboard-video-modal\" data-videoid=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["videoUuid"] ?? null), "html", null, true);
        echo "\" data-href=\"";
        echo twig_escape_filter($this->env, ($context["videoref"] ?? null), "html", null, true);
        echo "\" tabindex=\"-1\" role=\"dialog\">
        <div class=\"modal-dialog modal-dialog--notitle modal-dialog--video\" role=\"document\">
            <div class=\"modal-header modal-header--notitle\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            </div>
            <div class=\"modal-content modal-content--full\">
                <div class=\"modal-body modal-body--nopadding js-dashboard-video-dynamic-content\"></div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "base/videomodal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  48 => 3,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base/videomodal.html.twig", "/home/shaeteqc/lms.shaeteq.com/templates/standard/layout/appLms/dashboard/base/videomodal.html.twig");
    }
}
