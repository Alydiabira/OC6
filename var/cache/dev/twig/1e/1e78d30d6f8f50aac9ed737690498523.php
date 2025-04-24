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
use Twig\TemplateWrapper;

/* default/_language_selector.html.twig */
class __TwigTemplate_a4b116d20bf12e0b5a52c76c882a96a0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/_language_selector.html.twig"));

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 1
    public function macro_render_language_selector($display_current_language = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "display_current_language" => $display_current_language,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_language_selector"));

            // line 2
            yield "    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        ";
            // line 3
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:world"]);
            yield "
        ";
            // line 4
            if ((isset($context["display_current_language"]) || array_key_exists("display_current_language", $context) ? $context["display_current_language"] : (function () { throw new RuntimeError('Variable "display_current_language" does not exist.', 4, $this->source); })())) {
                // line 5
                yield "            <span class=\"current-language\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->getLocaleName(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "locale", [], "any", false, false, false, 5)), "html", null, true);
                yield "</span>
        ";
            }
            // line 7
            yield "        <span class=\"caret\"></span>
        <span class=\"sr-only\">";
            // line 8
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.choose_language"), "html", null, true);
            yield "</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        Choisissez votre langue
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(["en", "fr"]);
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 26
                yield "                            ";
                $context["is_active"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "locale", [], "any", false, false, false, 26) == $context["locale"]);
                // line 27
                yield "                            ";
                $context["is_rtl"] = ($context["locale"] == "ar");
                // line 28
                yield "                            <li class=\"";
                yield (((isset($context["is_active"]) || array_key_exists("is_active", $context) ? $context["is_active"] : (function () { throw new RuntimeError('Variable "is_active" does not exist.', 28, $this->source); })())) ? ("active") : (""));
                yield " ";
                yield (((isset($context["is_rtl"]) || array_key_exists("is_rtl", $context) ? $context["is_rtl"] : (function () { throw new RuntimeError('Variable "is_rtl" does not exist.', 28, $this->source); })())) ? ("rtl") : (""));
                yield "\">
                                <a class=\"stretched-link\" lang=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "\" hreflang=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", ["_route", "homepage"], "method", false, false, false, 29), Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "get", ["_route_params", []], "method", false, false, false, 29), ["_locale" => $context["locale"]])), "html", null, true);
                yield "\">
                                    ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["locale"]), "html", null, true);
                yield "
                                    <small>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["locale"], "html", null, true);
                yield "</small>
                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "default/_language_selector.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  152 => 35,  142 => 31,  138 => 30,  130 => 29,  123 => 28,  120 => 27,  117 => 26,  113 => 25,  93 => 8,  90 => 7,  84 => 5,  82 => 4,  78 => 3,  75 => 2,  57 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% macro render_language_selector(display_current_language = false) %}
    <a href=\"#\" class=\"nav-link dropdown-toggle language-selector-dropdown-button\" data-toggle=\"modal\" data-target=\"#locale-selector-modal\" role=\"button\" id=\"locales\">
        {{ component('ux:icon', { name: 'tabler:world' }) }}
        {% if display_current_language %}
            <span class=\"current-language\">{{ app.request.locale|locale_name }}</span>
        {% endif %}
        <span class=\"caret\"></span>
        <span class=\"sr-only\">{{ 'menu.choose_language'|trans }}</span>
    </a>

    <div id=\"locale-selector-modal\" class=\"modal\" tabindex=\"-1\" aria-hidden=\"true\">
        <div class=\"modal-lg modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <p class=\"modal-title\" lang=\"en\">
                        Choisissez votre langue
                    </p>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>

                <div class=\"modal-body\">
                    <ul class=\"locales\">
                        {% for locale in ['en', 'fr'] %}
                            {% set is_active = app.request.locale == locale %}
                            {% set is_rtl = locale == 'ar' %}
                            <li class=\"{{ is_active ? 'active' }} {{ is_rtl ? 'rtl' }}\">
                                <a class=\"stretched-link\" lang=\"{{ locale }}\" hreflang=\"{{ locale }}\" href=\"{{ path(app.request.get('_route', 'homepage'), app.request.get('_route_params', [])|merge({_locale: locale})) }}\">
                                    {{ locale|capitalize }}
                                    <small>{{ locale }}</small>
                                </a>
                            </li>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
{% endmacro %}
", "default/_language_selector.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/default/_language_selector.html.twig");
    }
}
