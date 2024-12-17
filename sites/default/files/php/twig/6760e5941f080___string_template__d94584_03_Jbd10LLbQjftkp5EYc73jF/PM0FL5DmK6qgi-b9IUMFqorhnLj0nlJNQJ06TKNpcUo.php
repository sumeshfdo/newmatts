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

/* __string_template__d94584fc1ff4402334d3bb8b61b211cd */
class __TwigTemplate_060b0a2f7ff56621b315247d06ef2dc1 extends Template
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
        yield "<div class=\"col-12 col-md-12 col-lg-9 social-desc-wrap\">
    <div class=\"basic-title\">Sunday morning Service</div>
    <div class=\"title-1\">
        <h3>Can't attend the service in person?</h3>
    </div>
    <div class=\"title-2\">
        <h3>Join us through Facebook Live and Youtube Live</h3>
    </div>
</div>
<div class=\"col-12 col-md-12 col-lg-3 social-ico-wrap\">
    <div class=\"row\">
        <div class=\"col-6 social-ico fb\">";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_social_media_link"] ?? null), 12, $this->source), "html", null, true);
        yield "</div>
        <div class=\"col-6 social-ico yt\">";
        // line 13
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_social_media_link_2"] ?? null), 13, $this->source), "html", null, true);
        yield "</div>
    </div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_social_media_link", "field_social_media_link_2"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__d94584fc1ff4402334d3bb8b61b211cd";
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
        return array (  57 => 13,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"col-12 col-md-12 col-lg-9 social-desc-wrap\">
    <div class=\"basic-title\">Sunday morning Service</div>
    <div class=\"title-1\">
        <h3>Can't attend the service in person?</h3>
    </div>
    <div class=\"title-2\">
        <h3>Join us through Facebook Live and Youtube Live</h3>
    </div>
</div>
<div class=\"col-12 col-md-12 col-lg-3 social-ico-wrap\">
    <div class=\"row\">
        <div class=\"col-6 social-ico fb\">{{ field_social_media_link }}</div>
        <div class=\"col-6 social-ico yt\">{{ field_social_media_link_2 }}</div>
    </div>
</div>", "__string_template__d94584fc1ff4402334d3bb8b61b211cd", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12);
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
