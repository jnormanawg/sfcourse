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

/* anker/costchange.html.twig */
class __TwigTemplate_27205af759f5e8483551a4d009a34f8b084e15ed9030cf84c201a73ee1eac79d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anker/costchange.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "anker/costchange.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "anker/costchange.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2>Cost Change History</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-sm table-striped\">
            <thead class=\"thead-dark\">
            <tr>
                <td>Item Code</td>
                <td>Item UPC</td>
                <td>Item POS Description</td>
                <td>Pack</td>
                <td>Size</td>
                <td>Cur Multiple</td>
                <td>Cur Retail</td>
                <td>Cur GM%</td>
                <td>Net Cost Current</td>
                <td>Cur Cost Date</td>
                <td>Fut Retail Multiple</td>
                <td>Fut Retail</td>
                <td>Fut GM%</td>
                <td>Net Cost Fut</td>
                <td>Fut Cost Date</td>
                <td>Authorization Status</td>
                <td>Retail Source</td>
                <td>Store Ovd Options</td>
                <td>Str Multiple</td>
                <td>Str Fixed Retail</td>
                <td>Str GM Perc Retail</td>
                <td>Str Fixed to Auto Retail</td>
                <td>Str Auto Percent</td>
                <td>TPR Multiple</td>
                <td>TPR Retail</td>
                <td>TPR Begin Date</td>
                <td>TPR End Date</td>
                <td>AWG Department</td>
                <td>Category</td>
                <td>Sub Category</td>
                <td>Updated Price Zone</td>
                <td>Item Ranking</td>
                <td>Item Ranking Quantity</td>
                <td>OBI</td>
                <td>Current Divi GM%</td>
                <td>Divi Zone Retail Parent</td>
                <td>Divi Zone Fix Multiple</td>
                <td>Cur Cost</td>

            </tr>
            </thead>
            <tbody>
            ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tprbatches"]) || array_key_exists("tprbatches", $context) ? $context["tprbatches"] : (function () { throw new RuntimeError('Variable "tprbatches" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 52
            echo "                <tr>
                    <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ITEM_CODE", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                    <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ITEM_UPC", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                    <td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ITEM_POS_DESCRIPTION", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>
                    <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "PACK", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "SIZE2", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                    <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CUR_MULTIPLE", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
                    <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CUR_RETAIL", [], "any", false, false, false, 59), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CUR_GM_PRCNT", [], "any", false, false, false, 60), 2), "html", null, true);
            echo "%</td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "NET_COST_CURRENT", [], "any", false, false, false, 61), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CUR_COST_DATE", [], "any", false, false, false, 62), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "FUT_RETAIL_MULTIPLE", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                    <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "FUT_RETAIL", [], "any", false, false, false, 64), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "FUT_GM_PRCNT", [], "any", false, false, false, 65), 2), "html", null, true);
            echo "%</td>
                    <td>";
            // line 66
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "NET_COST_FUTURE", [], "any", false, false, false, 66), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "XX_FUT_COST_DATE", [], "any", false, false, false, 67), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "AUTHORIZATION_STATUS", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                    <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "RETAIL_SOURCE", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>
                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STORE_OVD_OPTIONS", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STR_MULTIPLE", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STR_FIXED_RETAIL", [], "any", false, false, false, 72), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STR_GM_PERC_RETAIL", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STR_FIXED_TO_AUTO_RETAIL", [], "any", false, false, false, 74), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "STR_AUTO_PERCENT", [], "any", false, false, false, 75), 2), "html", null, true);
            echo "%</td>
                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "TPR_MULTIPLE", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "TPR_RETAIL", [], "any", false, false, false, 77), 2), "html", null, true);
            echo "</td>
                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "TPR_BEGIN_DATE", [], "any", false, false, false, 78), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "TPR_END_DATE", [], "any", false, false, false, 79), "m/d/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "AWG_DEPARTMENT", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CATEGORY", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "SUB_CATEGORY", [], "any", false, false, false, 82), "html", null, true);
            echo "</td>
                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "UPDATED_PRICE_ZONE", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                    <td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ITEM_RANKING", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>
                    <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ITEM_RANKING_QUANTITY", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>
                    <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "OBI", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>
                    <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CURRENT_DIVI_GM_PRCNT", [], "any", false, false, false, 87), 4), "html", null, true);
            echo "%</td>
                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "DIVI_ZONE_RETAIL_PARENT", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "DIVI_ZONE_FIX_MULTIPLE", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "CUR_COST", [], "any", false, false, false, 90), 2), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            </tbody>
        </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "anker/costchange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 93,  272 => 90,  268 => 89,  264 => 88,  260 => 87,  256 => 86,  252 => 85,  248 => 84,  244 => 83,  240 => 82,  236 => 81,  232 => 80,  228 => 79,  224 => 78,  220 => 77,  216 => 76,  212 => 75,  208 => 74,  204 => 73,  200 => 72,  196 => 71,  192 => 70,  188 => 69,  184 => 68,  180 => 67,  176 => 66,  172 => 65,  168 => 64,  164 => 63,  160 => 62,  156 => 61,  152 => 60,  148 => 59,  144 => 58,  140 => 57,  136 => 56,  132 => 55,  128 => 54,  124 => 53,  121 => 52,  117 => 51,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h2>Cost Change History</h2>
    <div class=\"table-responsive\">
        <table class=\"table table-hover table-sm table-striped\">
            <thead class=\"thead-dark\">
            <tr>
                <td>Item Code</td>
                <td>Item UPC</td>
                <td>Item POS Description</td>
                <td>Pack</td>
                <td>Size</td>
                <td>Cur Multiple</td>
                <td>Cur Retail</td>
                <td>Cur GM%</td>
                <td>Net Cost Current</td>
                <td>Cur Cost Date</td>
                <td>Fut Retail Multiple</td>
                <td>Fut Retail</td>
                <td>Fut GM%</td>
                <td>Net Cost Fut</td>
                <td>Fut Cost Date</td>
                <td>Authorization Status</td>
                <td>Retail Source</td>
                <td>Store Ovd Options</td>
                <td>Str Multiple</td>
                <td>Str Fixed Retail</td>
                <td>Str GM Perc Retail</td>
                <td>Str Fixed to Auto Retail</td>
                <td>Str Auto Percent</td>
                <td>TPR Multiple</td>
                <td>TPR Retail</td>
                <td>TPR Begin Date</td>
                <td>TPR End Date</td>
                <td>AWG Department</td>
                <td>Category</td>
                <td>Sub Category</td>
                <td>Updated Price Zone</td>
                <td>Item Ranking</td>
                <td>Item Ranking Quantity</td>
                <td>OBI</td>
                <td>Current Divi GM%</td>
                <td>Divi Zone Retail Parent</td>
                <td>Divi Zone Fix Multiple</td>
                <td>Cur Cost</td>

            </tr>
            </thead>
            <tbody>
            {% for report in tprbatches %}
                <tr>
                    <td>{{ report.ITEM_CODE }}</td>
                    <td>{{ report.ITEM_UPC }}</td>
                    <td>{{ report.ITEM_POS_DESCRIPTION }}</td>
                    <td>{{ report.PACK }}</td>
                    <td>{{ report.SIZE2 }}</td>
                    <td>{{ report.CUR_MULTIPLE }}</td>
                    <td>{{ (report.CUR_RETAIL)|number_format(2) }}</td>
                    <td>{{ (report.CUR_GM_PRCNT)|number_format(2) }}%</td>
                    <td>{{ (report.NET_COST_CURRENT)|number_format(2) }}</td>
                    <td>{{ report.CUR_COST_DATE|date(\"m/d/Y\") }}</td>
                    <td>{{ report.FUT_RETAIL_MULTIPLE }}</td>
                    <td>{{ (report.FUT_RETAIL)|number_format(2) }}</td>
                    <td>{{ (report.FUT_GM_PRCNT)|number_format(2) }}%</td>
                    <td>{{ (report.NET_COST_FUTURE)|number_format(2) }}</td>
                    <td>{{ (report.XX_FUT_COST_DATE)|date(\"m/d/Y\") }}</td>
                    <td>{{ report.AUTHORIZATION_STATUS }}</td>
                    <td>{{ report.RETAIL_SOURCE }}</td>
                    <td>{{ report.STORE_OVD_OPTIONS }}</td>
                    <td>{{ report.STR_MULTIPLE }}</td>
                    <td>{{ (report.STR_FIXED_RETAIL)|number_format(2) }}</td>
                    <td>{{ report.STR_GM_PERC_RETAIL }}</td>
                    <td>{{ (report.STR_FIXED_TO_AUTO_RETAIL)|number_format(2) }}</td>
                    <td>{{ (report.STR_AUTO_PERCENT)|number_format(2) }}%</td>
                    <td>{{ report.TPR_MULTIPLE }}</td>
                    <td>{{ (report.TPR_RETAIL)|number_format(2) }}</td>
                    <td>{{ report.TPR_BEGIN_DATE|date(\"m/d/Y\") }}</td>
                    <td>{{ report.TPR_END_DATE|date(\"m/d/Y\") }}</td>
                    <td>{{ report.AWG_DEPARTMENT }}</td>
                    <td>{{ report.CATEGORY }}</td>
                    <td>{{ report.SUB_CATEGORY }}</td>
                    <td>{{ report.UPDATED_PRICE_ZONE }}</td>
                    <td>{{ report.ITEM_RANKING }}</td>
                    <td>{{ report.ITEM_RANKING_QUANTITY }}</td>
                    <td>{{ report.OBI }}</td>
                    <td>{{ (report.CURRENT_DIVI_GM_PRCNT)|number_format(4) }}%</td>
                    <td>{{ report.DIVI_ZONE_RETAIL_PARENT }}</td>
                    <td>{{ report.DIVI_ZONE_FIX_MULTIPLE }}</td>
                    <td>{{ (report.CUR_COST)|number_format(2) }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "anker/costchange.html.twig", "C:\\Apache2.4\\htdocs\\sfcourse\\templates\\anker\\costchange.html.twig");
    }
}
