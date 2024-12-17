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

/* themes/custom/matts/templates/page.html.twig */
class __TwigTemplate_ff7152a8e5d16b873daf1feb7d63b906 extends Template
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
        // line 46
        yield "<div id=\"main-layout\" class=\"layout-container\">


  ";
        // line 78
        yield "

  <div class=\"slide-show-wrapper\">
    <div class=\"stickey-header-wrapper\">
      <div class=\"logo-wrap p-3 mb-2\">
        ";
        // line 83
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 83), 83, $this->source), "html", null, true);
        yield "
      </div>
      <div class=\"container-fluid stickey-nav-wrap\">
        <div id=\"main-nav-bar\" class=\"nav-bar-wrap p-3 d-lg-flex\">
          <div class=\"navbar-brand col-lg-2 me-0\"></div>
          <div class=\"navbar-nav col-lg-8 justify-content-lg-center2\">
            ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mainmenu", [], "any", false, false, true, 89)) {
            // line 90
            yield "            <div class=\"menu-block\">
              ";
            // line 91
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "mainmenu", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 94
        yield "          </div>
          <div class=\"d-lg-flex2 col-lg-2 justify-content-lg-end\">
            ";
        // line 96
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_search", [], "any", false, false, true, 96)) {
            // line 97
            yield "            <div class=\"search-block\">
              ";
            // line 98
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "site_search", [], "any", false, false, true, 98), 98, $this->source), "html", null, true);
            yield "
            </div>
            ";
        }
        // line 101
        yield "          </div>
        </div>
      </div>
    </div>
    ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 105)) {
            // line 106
            yield "    <div class=\"main-slider\">
      ";
            // line 107
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_slider", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            yield "
    </div>
    ";
        }
        // line 110
        yield "  </div>

  ";
        // line 112
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_services_focus", [], "any", false, false, true, 112)) {
            // line 113
            yield "  <div class=\"services-widget-wrap animate__animated animate__flipInX\">
    <div class=\"services-widget-inner-wrap\">
      <div class=\"container-fluid\">
        ";
            // line 116
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "main_services_focus", [], "any", false, false, true, 116), 116, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </div>
  ";
        }
        // line 121
        yield "

  ";
        // line 123
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "welcome", [], "any", false, false, true, 123)) {
            // line 124
            yield "  <section class=\"outter-padding2 welcome-section\">
    <div class=\"container\">
      <div class=\"container-md\">
        ";
            // line 127
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "welcome", [], "any", false, false, true, 127), 127, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 132
        yield "

  ";
        // line 143
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "upcoming_events", [], "any", false, false, true, 143) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "news_letters", [], "any", false, false, true, 143))) {
            // line 144
            yield "  <section class=\"events-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 147
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "upcoming_events", [], "any", false, false, true, 147)) {
                // line 148
                yield "        <div class=\"col-lg-6\">
          ";
                // line 149
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "upcoming_events", [], "any", false, false, true, 149), 149, $this->source), "html", null, true);
                yield "
        </div>
        ";
            }
            // line 152
            yield "
        ";
            // line 153
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "news_letters", [], "any", false, false, true, 153)) {
                // line 154
                yield "        <div class=\"col-lg-6\">
          ";
                // line 155
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "news_letters", [], "any", false, false, true, 155), 155, $this->source), "html", null, true);
                yield "
        </div>
        ";
            }
            // line 158
            yield "      </div>
    </div>
  </section>
  ";
        }
        // line 162
        yield "

  ";
        // line 164
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "timetable", [], "any", false, false, true, 164)) {
            // line 165
            yield "  <section class=\"timetable-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 168
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "timetable", [], "any", false, false, true, 168), 168, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 173
        yield "


  ";
        // line 176
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "livestreaming_block", [], "any", false, false, true, 176)) {
            // line 177
            yield "  <section class=\"livestreaming-section\">
    <div class=\"container p-5\">
      <div class=\"livestreaming-section-wrap\">
        ";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "livestreaming_block", [], "any", false, false, true, 180), 180, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 185
        yield "


  ";
        // line 188
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "latest_blog_articles", [], "any", false, false, true, 188)) {
            // line 189
            yield "  <section class=\"blog-articles-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 192
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "latest_blog_articles", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 197
        yield "


  ";
        // line 200
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offerings_section", [], "any", false, false, true, 200)) {
            // line 201
            yield "  <section class=\"offering-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 204
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "offerings_section", [], "any", false, false, true, 204), 204, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 209
        yield "

  ";
        // line 211
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "subscribe_section", [], "any", false, false, true, 211)) {
            // line 212
            yield "  <section class=\"subscribe-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 215
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "subscribe_section", [], "any", false, false, true, 215), 215, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 220
        yield "



  ";
        // line 229
        yield "
  ";
        // line 235
        yield "
  <div class=\"container\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 239
        yield "
      <div class=\"layout-content main-page-content\">
        ";
        // line 241
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 241), 241, $this->source), "html", null, true);
        yield "
      </div>";
        // line 243
        yield "
      ";
        // line 244
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 244)) {
            // line 245
            yield "      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        ";
            // line 246
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 246), 246, $this->source), "html", null, true);
            yield "
      </aside>
      ";
        }
        // line 249
        yield "
      ";
        // line 250
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 250)) {
            // line 251
            yield "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 252
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 252), 252, $this->source), "html", null, true);
            yield "
      </aside>
      ";
        }
        // line 255
        yield "
    </main>

  </div>



  
  
  ";
        // line 269
        yield "  
  
  ";
        // line 271
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find_us_section", [], "any", false, false, true, 271)) {
            // line 272
            yield "  <section class=\"findus-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        ";
            // line 275
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "find_us_section", [], "any", false, false, true, 275), 275, $this->source), "html", null, true);
            yield "
      </div>
    </div>
  </section>
  ";
        }
        // line 280
        yield "
  <footer class=\"contentinfo p-5\">

    <div class=\"container\">
      <div class=\"row justify-content-center align-items-end footer-quick-links\">
        ";
        // line 285
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logoareawhite", [], "any", false, false, true, 285)) {
            // line 286
            yield "        <div class=\"col-md-3 text-center my-4\">
          <div class=\"logoarea-white\">
            ";
            // line 288
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logoareawhite", [], "any", false, false, true, 288), 288, $this->source), "html", null, true);
            yield "
          </div>
        </div>
        ";
        }
        // line 292
        yield "      </div>
    </div>
    <hr>
    </hr>
    <div class=\"container\">
      <div class=\"row align-items-end justify-content-center \">
        <div class=\"col-md-6 col-lg-6 col-12 copyright-content text-center\">
          &copy; ";
        // line 299
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " St. Maththews Anglican Church, Hollandpark. All rights reserved.
        </div>
        ";
        // line 302
        yield "      </div>
    </div>
  </footer>


</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/matts/templates/page.html.twig";
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
        return array (  397 => 302,  392 => 299,  383 => 292,  376 => 288,  372 => 286,  370 => 285,  363 => 280,  355 => 275,  350 => 272,  348 => 271,  344 => 269,  333 => 255,  327 => 252,  324 => 251,  322 => 250,  319 => 249,  313 => 246,  310 => 245,  308 => 244,  305 => 243,  301 => 241,  297 => 239,  292 => 235,  289 => 229,  283 => 220,  275 => 215,  270 => 212,  268 => 211,  264 => 209,  256 => 204,  251 => 201,  249 => 200,  244 => 197,  236 => 192,  231 => 189,  229 => 188,  224 => 185,  216 => 180,  211 => 177,  209 => 176,  204 => 173,  196 => 168,  191 => 165,  189 => 164,  185 => 162,  179 => 158,  173 => 155,  170 => 154,  168 => 153,  165 => 152,  159 => 149,  156 => 148,  154 => 147,  149 => 144,  146 => 143,  142 => 132,  134 => 127,  129 => 124,  127 => 123,  123 => 121,  115 => 116,  110 => 113,  108 => 112,  104 => 110,  98 => 107,  95 => 106,  93 => 105,  87 => 101,  81 => 98,  78 => 97,  76 => 96,  72 => 94,  66 => 91,  63 => 90,  61 => 89,  52 => 83,  45 => 78,  40 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
* @file
* Theme override to display a single page.
*
* The doctype, html, head and body tags are not in this template. Instead they
* can be found in the html.html.twig template in this directory.
*
* Available variables:
*
* General utility variables:
* - base_path: The base URL path of the Drupal installation. Will usually be
* \"/\" unless you have installed Drupal in a sub-directory.
* - is_front: A flag indicating if the current page is the front page.
* - logged_in: A flag indicating if the user is registered and signed in.
* - is_admin: A flag indicating if the user has permission to access
* administration pages.
*
* Site identity:
* - front_page: The URL of the front page. Use this instead of base_path when
* linking to the front page. This includes the language domain or prefix.
*
* Page content (in order of occurrence in the default page.html.twig):
* - messages: Status and error messages. Should be displayed prominently.
* - node: Fully loaded node, if there is an automatically-loaded node
* associated with the page and the node ID is the second argument in the
* page's path (e.g. node/12345 and node/12345/revisions, but not
* comment/reply/12345).
*
* Regions:
* - page.header: Items for the header region.
* - page.primary_menu: Items for the primary menu region.
* - page.secondary_menu: Items for the secondary menu region.
* - page.highlighted: Items for the highlighted content region.
* - page.help: Dynamic help text, mostly for admin pages.
* - page.content: The main content of the current page.
* - page.sidebar_first: Items for the first sidebar.
* - page.sidebar_second: Items for the second sidebar.
* - page.footer: Items for the footer region.
* - page.breadcrumb: Items for the breadcrumb region.
*
* @see template_preprocess_page()
* @see html.html.twig
*/
#}
<div id=\"main-layout\" class=\"layout-container\">


  {# <div class=\"slide-show-wrapper\">
    <div class=\"stickey-header-wrapper\">
      <div class=\"container-fluid stickey-nav-wrap\">
        <div id=\"main-nav-bar\" class=\"nav-bar-wrap p-3 d-lg-flex\">
          <div class=\"navbar-brand col-lg-2 me-02\">{{ page.header }}</div>
          <div class=\"navbar-nav col-lg-7 justify-content-lg-center2\">
            {% if page.mainmenu %}
            <div class=\"menu-block\">
              {{ page.mainmenu }}
            </div>
            {% endif %}
          </div>
          <div class=\"col-lg-3\">
            {% if page.site_search %}
            <div class=\"search-block\">
              {{ page.site_search }}
            </div>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
    {% if page.main_slider %}
    <div class=\"main-slider\">
      {{ page.main_slider }}
    </div>
    {% endif %}

  </div> #}


  <div class=\"slide-show-wrapper\">
    <div class=\"stickey-header-wrapper\">
      <div class=\"logo-wrap p-3 mb-2\">
        {{ page.header }}
      </div>
      <div class=\"container-fluid stickey-nav-wrap\">
        <div id=\"main-nav-bar\" class=\"nav-bar-wrap p-3 d-lg-flex\">
          <div class=\"navbar-brand col-lg-2 me-0\"></div>
          <div class=\"navbar-nav col-lg-8 justify-content-lg-center2\">
            {% if page.mainmenu %}
            <div class=\"menu-block\">
              {{ page.mainmenu }}
            </div>
            {% endif %}
          </div>
          <div class=\"d-lg-flex2 col-lg-2 justify-content-lg-end\">
            {% if page.site_search %}
            <div class=\"search-block\">
              {{ page.site_search }}
            </div>
            {% endif %}
          </div>
        </div>
      </div>
    </div>
    {% if page.main_slider %}
    <div class=\"main-slider\">
      {{ page.main_slider }}
    </div>
    {% endif %}
  </div>

  {% if page.main_services_focus %}
  <div class=\"services-widget-wrap animate__animated animate__flipInX\">
    <div class=\"services-widget-inner-wrap\">
      <div class=\"container-fluid\">
        {{ page.main_services_focus }}
      </div>
    </div>
  </div>
  {% endif %}


  {% if page.welcome %}
  <section class=\"outter-padding2 welcome-section\">
    <div class=\"container\">
      <div class=\"container-md\">
        {{ page.welcome }}
      </div>
    </div>
  </section>
  {% endif %}


  {# {% if page.news_and_events %}
  <section class=\"events-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.news_and_events }}
      </div>
    </div>
  </section>
  {% endif %} #}
  {% if (page.upcoming_events or page.news_letters) %}
  <section class=\"events-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {% if page.upcoming_events %}
        <div class=\"col-lg-6\">
          {{ page.upcoming_events }}
        </div>
        {% endif %}

        {% if page.news_letters %}
        <div class=\"col-lg-6\">
          {{ page.news_letters }}
        </div>
        {% endif %}
      </div>
    </div>
  </section>
  {% endif %}


  {% if page.timetable %}
  <section class=\"timetable-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.timetable }}
      </div>
    </div>
  </section>
  {% endif %}



  {% if page.livestreaming_block %}
  <section class=\"livestreaming-section\">
    <div class=\"container p-5\">
      <div class=\"livestreaming-section-wrap\">
        {{ page.livestreaming_block }}
      </div>
    </div>
  </section>
  {% endif %}



  {% if page.latest_blog_articles %}
  <section class=\"blog-articles-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.latest_blog_articles }}
      </div>
    </div>
  </section>
  {% endif %}



  {% if page.offerings_section %}
  <section class=\"offering-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.offerings_section }}
      </div>
    </div>
  </section>
  {% endif %}


  {% if page.subscribe_section %}
  <section class=\"subscribe-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.subscribe_section }}
      </div>
    </div>
  </section>
  {% endif %}




  {# {% if page.logo %}
  <div class=\"logo\">
    {{ page.logo }}
  </div>
  {% endif %} #}

  {# {% if page.mainmenu %}
  <div class=\"main_menu\">
    {{ page.mainmenu }}
  </div>
  {% endif %} #}

  <div class=\"container\">
    <main role=\"main\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

      <div class=\"layout-content main-page-content\">
        {{ page.content }}
      </div>{# /.layout-content #}

      {% if page.sidebar_first %}
      <aside class=\"layout-sidebar-first\" role=\"complementary\">
        {{ page.sidebar_first }}
      </aside>
      {% endif %}

      {% if page.sidebar_second %}
      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        {{ page.sidebar_second }}
      </aside>
      {% endif %}

    </main>

  </div>



  
  
  {# {{ page.breadcrumb }}
  
  {{ page.highlighted }}
  
  {{ page.help }} #}
  
  
  {% if page.find_us_section %}
  <section class=\"findus-section\">
    <div class=\"container p-5\">
      <div class=\"row\">
        {{ page.find_us_section }}
      </div>
    </div>
  </section>
  {% endif %}

  <footer class=\"contentinfo p-5\">

    <div class=\"container\">
      <div class=\"row justify-content-center align-items-end footer-quick-links\">
        {% if page.logoareawhite %}
        <div class=\"col-md-3 text-center my-4\">
          <div class=\"logoarea-white\">
            {{ page.logoareawhite }}
          </div>
        </div>
        {% endif %}
      </div>
    </div>
    <hr>
    </hr>
    <div class=\"container\">
      <div class=\"row align-items-end justify-content-center \">
        <div class=\"col-md-6 col-lg-6 col-12 copyright-content text-center\">
          &copy; {{ \"now\"|date(\"Y\") }} St. Maththews Anglican Church, Hollandpark. All rights reserved.
        </div>
        {# <div class=\"col-md-6 col-lg-6 col-12 text-end privacy-policy\">Privacy Policy</div> #}
      </div>
    </div>
  </footer>


</div>{# /.layout-container #}", "themes/custom/matts/templates/page.html.twig", "D:\\xampp\\htdocs\\matts\\themes\\custom\\matts\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 89);
        static $filters = array("escape" => 83, "date" => 299);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'date'],
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
