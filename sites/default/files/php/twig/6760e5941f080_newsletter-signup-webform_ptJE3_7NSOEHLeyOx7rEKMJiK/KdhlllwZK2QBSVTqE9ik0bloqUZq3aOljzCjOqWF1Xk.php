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

/* modules/newsletter_signup_block/templates/newsletter-signup-webform-wrapper.html.twig */
class __TwigTemplate_f9783cfe9433b7c0d2f4d2cf71077a7e extends Template
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
        // line 13
        if (($context["signup_form"] ?? null)) {
            // line 14
            yield "  <div class=\"newsletter-signup\">
    ";
            // line 15
            if (($context["signup_background"] ?? null)) {
                // line 16
                yield "      <div class=\"newsletter-signup__bg\"
           ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, ($context["signup_background"] ?? null), "src", [], "any", false, false, true, 17) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["signup_background"] ?? null), "responsive_image", [], "any", false, false, true, 17))) {
                    yield "style=\"background-image: url(";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["signup_background"] ?? null), "src", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                    yield ");\"";
                }
                yield ">
        ";
                // line 18
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["signup_background"] ?? null), "responsive_image", [], "any", false, false, true, 18)) {
                    // line 19
                    yield "          ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["signup_background"] ?? null), "responsive_image", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                    yield "
        ";
                }
                // line 21
                yield "      </div>
    ";
            }
            // line 23
            yield "    <div class=\"newsletter-signup__form\">
      ";
            // line 24
            if ((($context["signup_title"] ?? null) || ($context["signup_body"] ?? null))) {
                // line 25
                yield "        <div class=\"newsletter-signup__intro\">
          <h4>";
                // line 26
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t($this->sandbox->ensureToStringAllowed(($context["signup_title"] ?? null), 26, $this->source)));
                yield "</h4>
          ";
                // line 27
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["signup_body"] ?? null), 27, $this->source));
                yield "
        </div>
      ";
            }
            // line 30
            yield "      ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["signup_form"] ?? null), 30, $this->source), "html", null, true);
            yield "
    </div>
  </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["signup_form", "signup_background", "signup_title", "signup_body"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/newsletter_signup_block/templates/newsletter-signup-webform-wrapper.html.twig";
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
        return array (  88 => 30,  82 => 27,  78 => 26,  75 => 25,  73 => 24,  70 => 23,  66 => 21,  60 => 19,  58 => 18,  50 => 17,  47 => 16,  45 => 15,  42 => 14,  40 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Newsletter signup webform wrapper
 *
 * Variables:
 * - signup_title: Title
 * - signup_body: Body
 * - signup_form: Form object
 * - signup_background: Background image
 */
#}
{% if signup_form %}
  <div class=\"newsletter-signup\">
    {% if signup_background %}
      <div class=\"newsletter-signup__bg\"
           {% if signup_background.src and not signup_background.responsive_image %}style=\"background-image: url({{ signup_background.src }});\"{% endif %}>
        {% if signup_background.responsive_image %}
          {{ signup_background.responsive_image }}
        {% endif %}
      </div>
    {% endif %}
    <div class=\"newsletter-signup__form\">
      {% if signup_title or signup_body %}
        <div class=\"newsletter-signup__intro\">
          <h4>{{ signup_title|t }}</h4>
          {{ signup_body|raw }}
        </div>
      {% endif %}
      {{ signup_form }}
    </div>
  </div>
{% endif %}
", "modules/newsletter_signup_block/templates/newsletter-signup-webform-wrapper.html.twig", "D:\\xampp\\htdocs\\matts\\modules\\newsletter_signup_block\\templates\\newsletter-signup-webform-wrapper.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 17, "t" => 26, "raw" => 27);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't', 'raw'],
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
