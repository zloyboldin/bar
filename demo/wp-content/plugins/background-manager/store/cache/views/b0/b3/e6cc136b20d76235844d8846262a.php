<?php

/* galleries.html.twig */
class __TwigTemplate_b0b3e6cc136b20d76235844d8846262a extends Twig_Template
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
<form method=\"post\" action=\"\">
";
        // line 9
        if (isset($context["list"])) { $_list_ = $context["list"]; } else { $_list_ = null; }
        echo $_list_;
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "galleries.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
