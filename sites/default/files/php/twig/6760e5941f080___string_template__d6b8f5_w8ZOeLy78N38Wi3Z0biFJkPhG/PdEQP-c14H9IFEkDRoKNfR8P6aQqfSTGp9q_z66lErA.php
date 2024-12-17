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

/* __string_template__d6b8f5174a6d287bf43232f6bc710cf5 */
class __TwigTemplate_fe0012df4e616fbacb34bcd9bb28338d extends Template
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
        yield "<div class=\"main-services-widget\">
    <div class=\"main-service-icon p-2\">";
        // line 2
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_worship_icon"] ?? null), 2, $this->source), "html", null, true);
        yield "</div>
    <div class=\"main-service-description p-2\">
        <div class=\"service-type\">";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 4, $this->source), "html", null, true);
        yield "</div>
        <div class=\"service-name\">";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_worship_type"] ?? null), 5, $this->source), "html", null, true);
        yield "</div>
    </div>
    <div class=\"main-service-time p-2\">
        <div class=\"service-time\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_worship_time"] ?? null), 8, $this->source), "html", null, true);
        yield "</div>
        <div class=\"service-am-pm\">";
        // line 9
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_am_pm"] ?? null), 9, $this->source), "html", null, true);
        yield "</div>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_worship_icon", "title", "field_worship_type", "field_worship_time", "field_am_pm"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__d6b8f5174a6d287bf43232f6bc710cf5";
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
        return array (  62 => 9,  58 => 8,  52 => 5,  48 => 4,  43 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"main-services-widget\">
    <div class=\"main-service-icon p-2\">{{ field_worship_icon }}</div>
    <div class=\"main-service-description p-2\">
        <div class=\"service-type\">{{ title }}</div>
        <div class=\"service-name\">{{ field_worship_type }}</div>
    </div>
    <div class=\"main-service-time p-2\">
        <div class=\"service-time\">{{ field_worship_time }}</div>
        <div class=\"service-am-pm\">{{ field_am_pm }}</div>
    </div>
</div>", "__string_template__d6b8f5174a6d287bf43232f6bc710cf5", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 2);
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
