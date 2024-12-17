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

/* __string_template__8e45dcc0995285864ee378efd8d4c4ff */
class __TwigTemplate_ea14d388e371140696f8dbd1e622db89 extends Template
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
        // line 1
        yield "<div class=\"col-12\">
<div class=\"event-wrap\">
    <div class=\"row\">
        <div class=\"col-3 event-date\">
            <div class=\"event-date-wrap text-center\">
                <div class=\"event-date-only\">";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_date"] ?? null), 6, $this->source), "html", null, true);
        yield "</div>
                <div class=\"event-month\">";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_month"] ?? null), 7, $this->source), "html", null, true);
        yield "</div>
                <div class=\"event-time\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_event_time"] ?? null), 8, $this->source), "html", null, true);
        yield " ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_am_or_pm"] ?? null), 8, $this->source), "html", null, true);
        yield "</div>
            </div>
        </div>
        <div class=\"col-9 event-details\">
            <div class=\"event-desc\">
                ";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 13, $this->source), "html", null, true);
        yield "
            </div>
            <div class=\"event-view-btn\">
                ";
        // line 16
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node_1"] ?? null), 16, $this->source), "html", null, true);
        yield "
            </div>
        </div>
    </div>
</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_event_date", "field_event_month", "field_event_time", "field_am_or_pm", "title", "view_node_1"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__8e45dcc0995285864ee378efd8d4c4ff";
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
        return array (  71 => 16,  65 => 13,  55 => 8,  51 => 7,  47 => 6,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-12\">
<div class=\"event-wrap\">
    <div class=\"row\">
        <div class=\"col-3 event-date\">
            <div class=\"event-date-wrap text-center\">
                <div class=\"event-date-only\">{{ field_event_date }}</div>
                <div class=\"event-month\">{{ field_event_month }}</div>
                <div class=\"event-time\">{{ field_event_time }} {{ field_am_or_pm }}</div>
            </div>
        </div>
        <div class=\"col-9 event-details\">
            <div class=\"event-desc\">
                {{ title }}
            </div>
            <div class=\"event-view-btn\">
                {{ view_node_1 }}
            </div>
        </div>
    </div>
</div>
</div>", "__string_template__8e45dcc0995285864ee378efd8d4c4ff", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
