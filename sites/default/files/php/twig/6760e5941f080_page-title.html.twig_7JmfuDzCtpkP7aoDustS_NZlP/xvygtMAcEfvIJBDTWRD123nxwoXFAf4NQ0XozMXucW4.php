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

/* themes/custom/matts/templates/page-title.html.twig */
class __TwigTemplate_b25eef20fa6afb54dfa2511dd9324e65 extends Template
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
        // line 15
        yield "<div class=\"main-title-wrap\">
  <div class=\"container text-center\">
    ";
        // line 17
        if (($context["title"] ?? null)) {
            // line 18
            yield "    <h1 class=\"animate__animated animate__flipInY\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 18, $this->source), "html", null, true);
            yield "</h1>
      ";
        }
        // line 20
        yield "  </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["title"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/matts/templates/page-title.html.twig";
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
        return array (  52 => 20,  46 => 18,  44 => 17,  40 => 15,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override for page titles.
*
* Available variables:
* - title_attributes: HTML attributes for the page title element.
* - title_prefix: Additional output populated by modules, intended to be
* displayed in front of the main title tag that appears in the template.
* - title: The page title, for use in the actual content.
* - title_suffix: Additional output populated by modules, intended to be
* displayed after the main title tag that appears in the template.
*/
#}
<div class=\"main-title-wrap\">
  <div class=\"container text-center\">
    {% if title %}
    <h1 class=\"animate__animated animate__flipInY\">{{ title }}</h1>
      {% endif %}
  </div>
</div>", "themes/custom/matts/templates/page-title.html.twig", "D:\\xampp\\htdocs\\matts\\themes\\custom\\matts\\templates\\page-title.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 18);
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
