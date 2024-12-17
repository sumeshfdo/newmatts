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

/* __string_template__f6ba0c5b975e349c84099bd38cdbed3f */
class __TwigTemplate_b1f2b6fcf18eec9c4261f14fdd6760da extends Template
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
        yield "<div class=\"welcome-inner-wrap\">
<div class=\"welcome\">Welcome to</div>
                    <div class=\"st-matts\">
                        <h2>St. Matthews Anglican Church</h2>
                    </div>
                    <div class=\"holland-park\">
                        <div class=\"hp-name\">Holland Park</div>
                        <div class=\"hp-name-lines\"></div>
                    </div>

<div class=\"welcome-body\">
";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 12, $this->source), "html", null, true);
        yield "

<div class=\"read-more mt-5\">";
        // line 14
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["view_node"] ?? null), 14, $this->source), "html", null, true);
        yield "</div>
</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["body", "view_node"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__f6ba0c5b975e349c84099bd38cdbed3f";
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
        return array (  58 => 14,  53 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"welcome-inner-wrap\">
<div class=\"welcome\">Welcome to</div>
                    <div class=\"st-matts\">
                        <h2>St. Matthews Anglican Church</h2>
                    </div>
                    <div class=\"holland-park\">
                        <div class=\"hp-name\">Holland Park</div>
                        <div class=\"hp-name-lines\"></div>
                    </div>

<div class=\"welcome-body\">
{{ body }}

<div class=\"read-more mt-5\">{{ view_node }}</div>
</div>
</div>", "__string_template__f6ba0c5b975e349c84099bd38cdbed3f", "");
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
