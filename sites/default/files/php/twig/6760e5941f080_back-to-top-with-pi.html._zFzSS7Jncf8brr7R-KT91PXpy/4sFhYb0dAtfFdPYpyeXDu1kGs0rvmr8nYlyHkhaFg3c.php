<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/back_to_top_with_pi/templates/back-to-top-with-pi.html.twig */
class __TwigTemplate_132ef3a32bb6bae38dfb3a3cffb9d717 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 27
        yield " <div id = \"progress-bar-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        yield "\" data-scroll-type=\"";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "scrollbar_type", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        yield "\" data-before=\"\" class=\"bttwpi-progressbar-container ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "scroll_bar_position", [], "any", false, false, true, 27) == "left")) {
            yield " left-scrollbar ";
        } else {
            yield " right-scrollbar ";
        }
        yield "\" data-attr=\"#progress-bar-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        yield " {
 box-shadow: inset 0 0 0 2px ";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "progress_box_shadow", [], "any", false, false, true, 28), 28, $this->source), "html", null, true);
        yield ";}
 #progress-bar-";
        // line 29
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        yield " svg.progress-circle path { stroke: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "circle_stroke_color", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        yield "; } #progress-bar-";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        yield "::before { background-color: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "icon_hover_color", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        yield "; }
 #progress-bar-";
        // line 30
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        yield "::after { color: ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "icon_color", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
        yield ";} ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "has_shadow", [], "any", false, false, true, 30)) {
            // line 31
            yield " #progress-bar-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield "::before { box-shadow: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "shadow_color", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
            yield ";}  ";
        }
        yield " ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "has_fill_color", [], "any", false, false, true, 31)) {
            // line 32
            yield " #progress-bar-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield ".active-progress { background: ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "fill_color", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            yield ";}  ";
        }
        yield " ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "scrollbar_type", [], "any", false, false, true, 32) == "percentage")) {
            // line 33
            yield " #progress-bar-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "::before { content:  attr(data-before); font-size: 14px; } #progress-bar-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["back_to_top_data"] ?? null), "created_at", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
            yield "::after { content:  attr(data-before); font-size: 14px; }  ";
        }
        yield "\">
 <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
 \t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
 </svg>
</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["back_to_top_data"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/back_to_top_with_pi/templates/back-to-top-with-pi.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  93 => 33,  84 => 32,  75 => 31,  69 => 30,  59 => 29,  55 => 28,  40 => 27,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for a mrcs social share formatter.
 *
 * Available variables:
 * - back_to_top_data: Array of back to top config data.
 * \t - circle_stroke_color: Circle stroke color is the line of color that precisely
 * \t   follows a path on page scroll.
 * \t - progress_box_shadow: Progress box shadow color where the stroke will
 * \t   follow a path
 * \t   on page scroll
 * \t - icon_color: Icon color
 * \t - icon_hover_color: Icon color on hover
 * \t - scroll_bar_position: Scrollbar
 * \t - has_shadow: Scrollbar has shadow on hover
 * \t - shadow_color: Scrollbar shadow color
 * \t - has_fill_color: Scrollbar will be filled with color. The default fill color will
 * \t   be transparent if the checkbox is not checked.
 * \t - created_at: Block created timestamp
 * \t - scrollbar_type: Scrollbar display with arrow icon or scroll percentage
 * \t - fill_color: Scrollbar fill color
 *
 * @ingroup themeable
 */
 #}
 <div id = \"progress-bar-{{ back_to_top_data.created_at }}\" data-scroll-type=\"{{  back_to_top_data.scrollbar_type }}\" data-before=\"\" class=\"bttwpi-progressbar-container {% if back_to_top_data.scroll_bar_position == 'left' %} left-scrollbar {% else %} right-scrollbar {% endif %}\" data-attr=\"#progress-bar-{{ back_to_top_data.created_at }} {
 box-shadow: inset 0 0 0 2px {{ back_to_top_data.progress_box_shadow }};}
 #progress-bar-{{ back_to_top_data.created_at }} svg.progress-circle path { stroke: {{ back_to_top_data.circle_stroke_color }}; } #progress-bar-{{ back_to_top_data.created_at }}::before { background-color: {{ back_to_top_data.icon_hover_color }}; }
 #progress-bar-{{ back_to_top_data.created_at }}::after { color: {{ back_to_top_data.icon_color }};} {% if back_to_top_data.has_shadow %}
 #progress-bar-{{ back_to_top_data.created_at }}::before { box-shadow: {{ back_to_top_data.shadow_color }};}  {% endif %} {% if back_to_top_data.has_fill_color %}
 #progress-bar-{{ back_to_top_data.created_at }}.active-progress { background: {{ back_to_top_data.fill_color }};}  {% endif %} {% if back_to_top_data.scrollbar_type == 'percentage' %}
 #progress-bar-{{ back_to_top_data.created_at }}::before { content:  attr(data-before); font-size: 14px; } #progress-bar-{{ back_to_top_data.created_at }}::after { content:  attr(data-before); font-size: 14px; }  {% endif %}\">
 <svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
 \t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\"/>
 </svg>
</div>
", "modules/back_to_top_with_pi/templates/back-to-top-with-pi.html.twig", "D:\\xampp\\htdocs\\matts\\modules\\back_to_top_with_pi\\templates\\back-to-top-with-pi.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 27);
        static $filters = array("escape" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
