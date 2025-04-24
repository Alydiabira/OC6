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

/* admin/layout.html.twig */
class __TwigTemplate_bff5f9458fbcc5e859b231aa6806dc4f extends Template
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

        $this->blocks = [
            'importmap' => [$this, 'block_importmap'],
            'header_navigation_links' => [$this, 'block_header_navigation_links'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 9
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout.html.twig"));

        // line 11
        $context["_route"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "attributes", [], "any", false, false, false, 11), "get", ["_route"], "method", false, false, false, 11);
        // line 9
        $this->parent = $this->loadTemplate("base.html.twig", "admin/layout.html.twig", 9);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        // line 14
        yield "    ";
        // line 15
        yield "    ";
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap(["app", "admin"]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_navigation_links(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navigation_links"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_navigation_links"));

        // line 19
        yield "    ";
        yield from $this->yieldParentBlock("header_navigation_links", $context, $blocks);
        yield " ";
        // line 20
        yield "    
    <li class=\"nav-item";
        // line 21
        yield ((CoreExtension::inFilter((isset($context["_route"]) || array_key_exists("_route", $context) ? $context["_route"] : (function () { throw new RuntimeError('Variable "_route" does not exist.', 21, $this->source); })()), ["admin_index", "admin_post_index"])) ? (" active") : (""));
        yield "\">
        <a class=\"nav-link\" href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_index");
        yield "\">
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:list"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.post_list"), "html", null, true);
        yield "
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        yield "\">
            ";
        // line 28
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:home"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.back_to_blog"), "html", null, true);
        yield "
        </a>
    </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layout.html.twig";
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
        return array (  137 => 28,  133 => 27,  124 => 23,  120 => 22,  116 => 21,  113 => 20,  109 => 19,  96 => 18,  82 => 15,  80 => 14,  67 => 13,  56 => 9,  54 => 11,  41 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
   This is the base template for all backend pages. Since this layout is similar
   to the global layout, we inherit from it to just change the contents of some
   blocks. In practice, backend templates use a three-level inheritance,
   showing how powerful, yet easy to use, is Twig's inheritance mechanism.
   See https://symfony.com/doc/current/templates.html#template-inheritance-and-layouts
#}

{% extends 'base.html.twig' %}

{% set _route = app.request.attributes.get('_route') %}

{% block importmap %}
    {# Load both the app.js and admin.js entrypoints #}
    {{ importmap(['app', 'admin']) }}
{% endblock %}

{% block header_navigation_links %}
    {{ parent() }} {# Permet de conserver le menu de base.html.twig #}
    
    <li class=\"nav-item{{ _route in ['admin_index', 'admin_post_index'] ? ' active' : '' }}\">
        <a class=\"nav-link\" href=\"{{ path('admin_post_index') }}\">
            {{ component('ux:icon', { name: 'tabler:list' }) }} {{ 'menu.post_list'|trans }}
        </a>
    </li>
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('blog_index') }}\">
            {{ component('ux:icon', { name: 'tabler:home' }) }} {{ 'menu.back_to_blog'|trans }}
        </a>
    </li>
{% endblock %}
 ", "admin/layout.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/admin/layout.html.twig");
    }
}
