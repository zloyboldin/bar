<?php

/* import.html.twig */
class __TwigTemplate_d1e9ac6dc79513aacc2c8a41ea77608a extends Twig_Template
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
        if (isset($context["run_import"])) { $_run_import_ = $context["run_import"]; } else { $_run_import_ = null; }
        if ((!$_run_import_)) {
            // line 9
            echo "<form method=\"post\" action=\"\">
    ";
            // line 10
            if (isset($context["nonce"])) { $_nonce_ = $context["nonce"]; } else { $_nonce_ = null; }
            echo $_nonce_;
            echo "
    ";
            // line 11
            if (isset($context["importers"])) { $_importers_ = $context["importers"]; } else { $_importers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_importers_);
            foreach ($context['_seq'] as $context["importer_key"] => $context["importer_value"]) {
                // line 12
                echo "    <input type=\"hidden\" id=\"";
                if (isset($context["importer_key"])) { $_importer_key_ = $context["importer_key"]; } else { $_importer_key_ = null; }
                echo twig_escape_filter($this->env, $_importer_key_, "html", null, true);
                echo "_desc\" name=\"";
                if (isset($context["importer_key"])) { $_importer_key_ = $context["importer_key"]; } else { $_importer_key_ = null; }
                echo twig_escape_filter($this->env, $_importer_key_, "html", null, true);
                echo "_desc\" value=\"";
                if (isset($context["importer_value"])) { $_importer_value_ = $context["importer_value"]; } else { $_importer_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_importer_value_, "desc"), "html", null, true);
                echo "\" />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['importer_key'], $context['importer_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "    
    <table class=\"form-table\">
        <tbody>
            <tr valign=\"top\">
                <th scope=\"row\">
                    <label for=\"importer\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Import using"), "html", null, true);
            echo "</label>
                </th>
                <td>
                    <select id=\"importer\" class=\"postform\" name=\"importer";
            // line 22
            if (isset($context["show_pre_import"])) { $_show_pre_import_ = $context["show_pre_import"]; } else { $_show_pre_import_ = null; }
            if ($_show_pre_import_) {
                echo "_disabled";
            }
            echo "\" ";
            if (isset($context["show_pre_import"])) { $_show_pre_import_ = $context["show_pre_import"]; } else { $_show_pre_import_ = null; }
            if ($_show_pre_import_) {
                echo "disabled=\"disabled\"";
            }
            echo ">
                        <option value=\"\">-- ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Select an importer"), "html", null, true);
            echo " --</option>
                        ";
            // line 24
            if (isset($context["importers"])) { $_importers_ = $context["importers"]; } else { $_importers_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($_importers_);
            foreach ($context['_seq'] as $context["importer_key"] => $context["importer_value"]) {
                // line 25
                echo "                        <option value=\"";
                if (isset($context["importer_key"])) { $_importer_key_ = $context["importer_key"]; } else { $_importer_key_ = null; }
                echo twig_escape_filter($this->env, $_importer_key_, "html", null, true);
                echo "\" ";
                if (isset($context["importer_value"])) { $_importer_value_ = $context["importer_value"]; } else { $_importer_value_ = null; }
                if ((!$this->getAttribute($_importer_value_, "active"))) {
                    echo "disabled=\"disabled\"";
                }
                echo " ";
                if (isset($context["importer"])) { $_importer_ = $context["importer"]; } else { $_importer_ = null; }
                if (isset($context["importer_key"])) { $_importer_key_ = $context["importer_key"]; } else { $_importer_key_ = null; }
                if (($_importer_ == $_importer_key_)) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                if (isset($context["importer_value"])) { $_importer_value_ = $context["importer_value"]; } else { $_importer_value_ = null; }
                echo twig_escape_filter($this->env, $this->getAttribute($_importer_value_, "name"), "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['importer_key'], $context['importer_value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                    </select>
                    <br />
                    <span id=\"importer_desc\" class=\"description\"></span>
                </td>
            </tr>
        </tbody>
    </table>

    ";
            // line 35
            if (isset($context["show_pre_import"])) { $_show_pre_import_ = $context["show_pre_import"]; } else { $_show_pre_import_ = null; }
            if ($_show_pre_import_) {
                // line 36
                echo "    <input type=\"hidden\" name=\"importer\" value=\"";
                if (isset($context["importer"])) { $_importer_ = $context["importer"]; } else { $_importer_ = null; }
                echo twig_escape_filter($this->env, $_importer_, "html", null, true);
                echo "\" />
    
    ";
                // line 38
                if (isset($context["pre_import"])) { $_pre_import_ = $context["pre_import"]; } else { $_pre_import_ = null; }
                echo $_pre_import_;
                echo "
    ";
            }
            // line 40
            echo "
    ";
            // line 41
            if (isset($context["submit_button"])) { $_submit_button_ = $context["submit_button"]; } else { $_submit_button_ = null; }
            echo $_submit_button_;
            echo "
</form>
";
        } else {
            // line 44
            echo "<table class=\"form-table\">
    <tbody>
        <tr valign=\"top\">
            <th scope=\"row\">
                ";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('translate')->transFilter("Import progress:"), "html", null, true);
            echo "
            </th>
            <td>
                <div id=\"import_progress_bar_container\" style=\"display:none;\">
                    <div id=\"import_progress_bar\"></div>
                </div>
                <span id=\"import_progress\" class=\"hide-if-no-js\">0%</span>

                <iframe id=\"import_job\" src=\"";
            // line 56
            if (isset($context["import_job_src"])) { $_import_job_src_ = $context["import_job_src"]; } else { $_import_job_src_ = null; }
            echo twig_escape_filter($this->env, $_import_job_src_, "html", null, true);
            echo "\" class=\"hide-if-js\"></iframe>
            </td>
        </tr>
    </tbody>
</table>
";
        }
        // line 62
        echo "



";
    }

    public function getTemplateName()
    {
        return "import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 62,  165 => 56,  154 => 48,  148 => 44,  141 => 41,  138 => 40,  132 => 38,  125 => 36,  122 => 35,  112 => 27,  88 => 25,  83 => 24,  79 => 23,  67 => 22,  61 => 19,  54 => 14,  38 => 12,  33 => 11,  28 => 10,  25 => 9,  22 => 8,  19 => 7,);
    }
}
