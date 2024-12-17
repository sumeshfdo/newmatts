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

/* modules/superfish/templates/superfish-menu-items.html.twig */
class __TwigTemplate_71072eadb137d9a4997f262d0437ef65 extends Template
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
        // line 21
        yield "
";
        // line 22
        $context["classes"] = [];
        // line 23
        $___internal_parse_0_ = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                yield "
  ";
                // line 26
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 26))) {
                    // line 27
                    yield "    ";
                    $context["item_class"] = ($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 27), 27, $this->source) . " menuparent");
                    // line 28
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 28)) {
                        // line 29
                        yield "      ";
                        $context["item_class"] = ($this->sandbox->ensureToStringAllowed(($context["item_class"] ?? null), 29, $this->source) . " sf-multicolumn-column");
                        // line 30
                        yield "    ";
                    }
                    // line 31
                    yield "  ";
                }
                // line 32
                yield "
  <li";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                yield ">
    ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 34)) {
                    // line 35
                    yield "    <div class=\"sf-multicolumn-column\">
    ";
                }
                // line 37
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 37))) {
                    // line 38
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_menuparent", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                    yield "
    ";
                } else {
                    // line 40
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
                    yield "
    ";
                }
                // line 42
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 42)) {
                    yield "<ul class=\"sf-multicolumn\">
    <li class=\"sf-multicolumn-wrapper ";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                    yield "\">
    ";
                }
                // line 45
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 45))) {
                    // line 46
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 46)) {
                        yield "<ol>";
                    } else {
                        yield "<ul>";
                    }
                    // line 47
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    yield "
      ";
                    // line 48
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 48)) {
                        yield "</ol>";
                    } else {
                        yield "</ul>";
                    }
                    // line 49
                    yield "    ";
                }
                // line 50
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 50)) {
                    yield "</li></ul>";
                }
                // line 51
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 51)) {
                    yield "</div>";
                }
                // line 52
                yield "  </li>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($___internal_parse_0_));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_items"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/superfish/templates/superfish-menu-items.html.twig";
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
        return array (  153 => 23,  143 => 52,  138 => 51,  133 => 50,  130 => 49,  124 => 48,  119 => 47,  112 => 46,  109 => 45,  104 => 43,  99 => 42,  93 => 40,  87 => 38,  84 => 37,  80 => 35,  78 => 34,  74 => 33,  71 => 32,  68 => 31,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  54 => 26,  51 => 25,  47 => 24,  45 => 23,  43 => 22,  40 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation of Superfish menu items.
 *
 * Available variables:
 * - html_id: Unique menu item identifier.
 * - item_class: Menu item classes.
 * - link: Link element.
 * - link_menuparent: Link element, when a menu parent.
 * - children: Menu item children.
 * - multicolumn_wrapper: Whether the menu item contains a column.
 * - multicolumn_column: Whether the menu item contains a column.
 * - multicolumn_content: Whether the menu item contains a column.
 *
 * @see template_preprocess_superfish_menu_items()
 *
 * @ingroup themeable
 */
#}

{% set classes = [] %}
{% apply spaceless %}
{% for item in menu_items %}

  {% if item.children is not empty %}
    {% set item_class = item.item_class ~ ' menuparent' %}
    {% if item.multicolumn_column %}
      {% set item_class = item_class ~ ' sf-multicolumn-column' %}
    {% endif %}
  {% endif %}

  <li{{ item.attributes }}>
    {% if item.multicolumn_column %}
    <div class=\"sf-multicolumn-column\">
    {% endif %}
    {% if item.children is not empty %}
      {{ item.link_menuparent }}
    {% else %}
      {{ item.link }}
    {% endif %}
    {% if item.multicolumn_wrapper %}<ul class=\"sf-multicolumn\">
    <li class=\"sf-multicolumn-wrapper {{ item.item_class }}\">
    {% endif %}
    {% if item.children is not empty %}
      {% if item.multicolumn_content %}<ol>{% else %}<ul>{% endif %}
      {{ item.children }}
      {% if item.multicolumn_content %}</ol>{% else %}</ul>{% endif %}
    {% endif %}
    {% if item.multicolumn_wrapper %}</li></ul>{% endif %}
    {% if item.multicolumn_column %}</div>{% endif %}
  </li>

{% endfor %}
{% endapply %}", "modules/superfish/templates/superfish-menu-items.html.twig", "D:\\xampp\\htdocs\\matts\\modules\\superfish\\templates\\superfish-menu-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 22, "apply" => 23, "for" => 24, "if" => 26);
        static $filters = array("escape" => 33, "spaceless" => 23);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'for', 'if'],
                ['escape', 'spaceless'],
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
