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

/* modules/flexslider/templates/flexslider-list-item.html.twig */
class __TwigTemplate_946aad9477e04ecb7cb3f5dc54b1513d extends Template
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
        // line 20
        yield "
<li";
        // line 21
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 21, $this->source), "html", null, true);
        yield ">
    ";
        // line 22
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["item"] ?? null), 22, $this->source), "html", null, true);
        yield "
    ";
        // line 23
        if (($context["caption"] ?? null)) {
            // line 24
            yield "        <div class=\"flex-caption\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["caption"] ?? null), 24, $this->source), "html", null, true);
            yield "</div>
    ";
        }
        // line 26
        yield "</li>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "item", "caption"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/flexslider/templates/flexslider-list-item.html.twig";
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
        return array (  59 => 26,  53 => 24,  51 => 23,  47 => 22,  43 => 21,  40 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the individual Flexslider item/slide template.
 *
 * Available variables:
 * - attributes: An array of attributes to apply to the element.
 * - item.slide: A renderable array of the main image/background.
 * - item.caption: A renderable array containing caption fields if provided:
 *   - title: The individual slide title.
 *   - alt: The core Image field Alt as caption.
 *   - link: The slide links or buttons.
 *   - overlay: The image/audio/video overlay, or a nested slick.
 *   - data: any possible field for more complex data if crazy enough.
 * - settings: An array containing the given settings.
 *
 * @see template_preprocess_flexslider_list_item()
 */
#}

<li{{ attributes }}>
    {{ item }}
    {% if caption %}
        <div class=\"flex-caption\">{{ caption }}</div>
    {% endif %}
</li>", "modules/flexslider/templates/flexslider-list-item.html.twig", "D:\\xampp\\htdocs\\matts\\modules\\flexslider\\templates\\flexslider-list-item.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 23);
        static $filters = array("escape" => 21);
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
