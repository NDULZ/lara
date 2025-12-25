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

/* upload-file.html.twig */
class __TwigTemplate_578a9f4d345c85009801316f4bcd42bd3c4e112528be29bc3b38952ca0ce4d2a extends \Twig\Template
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
<div id=\"forma-uploader\"></div>
<script>

    window.frontend.helpers.Axios.defaults.headers.post['X-Signature'] = window.frontend.config.signature;
    window.frontend.helpers.Axios.defaults.headers.post['Content-Type'] = 'multipart/form-data';
    document.getElementById('forma-uploader').FormaFileUploader({
        OnSubmitClick: function (obj) {
            this.Errors = {};
            obj.formData.append('back_url', '";
        // line 10
        echo twig_escape_filter($this->env, ($context["back_url"] ?? null), "html", null, true);
        echo "')
            obj.formData.append('id_comm', '";
        // line 11
        echo twig_escape_filter($this->env, ($context["id_comm"] ?? null), "html", null, true);
        echo "')
            this.Uploading = true;
            window.frontend.helpers.Axios({
                method: 'post',
                url: `\${window.frontend.config.url.appLms}/index.php?modname=item&op=";
        // line 15
        echo twig_escape_filter($this->env, ($context["op"] ?? null), "html", null, true);
        echo "`,
                data: obj.formData
            }).then(res => {
                this.Uploading = false;
                if (res.data.errors) {
                    this.Errors = res.data.errors;
                } else {
                    ";
        // line 23
        echo "                    ";
        // line 24
        echo "                    var SuccessMessageText = obj.info.length <= 1 ? '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dropzone"] ?? null), "_SUCCESSFUL_ONE_ITEM", [], "any", false, false, false, 24), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["dropzone"] ?? null), "_SUCCESSFUL_MULTIPLE_ITEMS", [], "any", false, false, false, 24), "html", null, true);
        echo "';
                    this.SuccessMessage = SuccessMessageText.replace('[nObjects]', `\${obj.info.length}`);
                    setTimeout(function () {
                        window.location = res.data.back_url
                    }, 2000);
                }
            });
        }
    });


</script>

";
    }

    public function getTemplateName()
    {
        return "upload-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  69 => 23,  59 => 15,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upload-file.html.twig", "/home/shaeteqc/lms.shaeteq.com/appLms/views/lo/upload-file.html.twig");
    }
}
