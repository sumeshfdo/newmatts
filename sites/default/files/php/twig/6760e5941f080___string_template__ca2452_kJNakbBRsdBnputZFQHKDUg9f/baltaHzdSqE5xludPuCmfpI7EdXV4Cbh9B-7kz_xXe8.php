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

/* __string_template__ca245254f92cbc9d9433880fad448cf8 */
class __TwigTemplate_1298523f0fb4b39233487bd3ffd8f9ce extends Template
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
        yield "<div class=\"all-worship-times-wrap\">
    <div class=\"row\">
        <div class=\"col-7 col-md-8 col-lg-9\">
            <div class=\"all-worship-description p-3\">
                <div class=\"worship-title\">";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 5, $this->source), "html", null, true);
        yield "</div>
                <div class=\"worship-type\">";
        // line 6
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_type"] ?? null), 6, $this->source), "html", null, true);
        yield "</div>
                <div class=\"worship-venue\">";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_venuw"] ?? null), 7, $this->source), "html", null, true);
        yield "</div>
            </div>
        </div>
        <div class=\"col-5 col-md-4 col-lg-3\">
            <div class=\"all-worship-time p-3\">
                <div class=\"all-worship-hrs\">";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_time"] ?? null), 12, $this->source), "html", null, true);
        yield "</div>
                <div class=\"all-worshipam-pm\">";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_am_pm_service"] ?? null), 13, $this->source), "html", null, true);
        yield "</div>
            </div>
        </div>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title", "field_type", "field_venuw", "field_time", "field_am_pm_service"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__ca245254f92cbc9d9433880fad448cf8";
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
        return array (  66 => 13,  62 => 12,  54 => 7,  50 => 6,  46 => 5,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"all-worship-times-wrap\">
    <div class=\"row\">
        <div class=\"col-7 col-md-8 col-lg-9\">
            <div class=\"all-worship-description p-3\">
                <div class=\"worship-title\">{{ title }}</div>
                <div class=\"worship-type\">{{ field_type }}</div>
                <div class=\"worship-venue\">{{ field_venuw }}</div>
            </div>
        </div>
        <div class=\"col-5 col-md-4 col-lg-3\">
            <div class=\"all-worship-time p-3\">
                <div class=\"all-worship-hrs\">{{ field_time }}</div>
                <div class=\"all-worshipam-pm\">{{ field_am_pm_service }}</div>
            </div>
        </div>
    </div>
</div>", "__string_template__ca245254f92cbc9d9433880fad448cf8", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 5);
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
