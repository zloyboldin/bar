<?php

/* gallery_edit_image.html.twig */
class __TwigTemplate_1d0b76f7ebe91425b8b8f609816066c9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if (isset($context["deleted"])) { $_deleted_ = $context["deleted"]; } else { $_deleted_ = null; }
        if ($_deleted_) {
            // line 9
            echo "<script type=\"text/javascript\">
//<![CDATA[
(function(\$){
    mainWin = window.dialogArguments || opener || parent || top;
    mainWin.tb_remove();
})(jQuery);
//]]>
</script>
";
        } else {
            // line 18
            echo "
";
            // line 19
            if (isset($context["did_save"])) { $_did_save_ = $context["did_save"]; } else { $_did_save_ = null; }
            if (isset($context["has_error"])) { $_has_error_ = $context["has_error"]; } else { $_has_error_ = null; }
            if (($_did_save_ && ($_has_error_ == false))) {
                // line 20
                echo "<div id=\"message\" class=\"updated\"><p>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Image was updated"), "html", null, true);
                echo "</p></div>
";
            }
            // line 22
            echo "
<form method=\"post\" action=\"\" class=\"media-upload-form type-form validate\" style=\"margin:1em;\">
    ";
            // line 24
            if (isset($context["nonce"])) { $_nonce_ = $context["nonce"]; } else { $_nonce_ = null; }
            echo $_nonce_;
            echo "
    <div id=\"media-items\">
        <div class=\"media-item preloaded\">
        ";
            // line 27
            if (isset($context["media_item"])) { $_media_item_ = $context["media_item"]; } else { $_media_item_ = null; }
            echo $_media_item_;
            echo "
        </div>
    </div>
    <p class=\"savebutton ml-submit\">
        ";
            // line 31
            if (isset($context["submit"])) { $_submit_ = $context["submit"]; } else { $_submit_ = null; }
            echo $_submit_;
            echo "
    </p>
</form>
";
        }
    }

    public function getTemplateName()
    {
        return "gallery_edit_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 31,  60 => 27,  53 => 24,  49 => 22,  43 => 20,  39 => 19,  36 => 18,  25 => 9,  22 => 8,  19 => 7,);
    }
}
