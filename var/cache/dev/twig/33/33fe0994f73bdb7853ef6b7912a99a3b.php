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

/* article/new.html.twig */
class __TwigTemplate_c441da87d3fb777396e45f79f9393b69 extends Template
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
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Nouvel Article";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<!-- External Bootstrap CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

<div class=\"container d-flex justify-content-center align-items-center min-vh-100 py-4\">
    <form method=\"post\" class=\"w-100\" style=\"max-width: 600px;\">
        <div class=\"card shadow-lg border-0 rounded-3\">
            <!-- En-tête de la carte -->
            <div class=\"card-header bg-primary text-white text-center py-3\">
                <h2 class=\"h4\">Créer un Nouvel Article</h2>
            </div>

            <!-- Corps de la carte -->
            <div class=\"card-body\">
                ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "article/_form.html.twig");
        yield "
            </div>

            <!-- Pied de la carte -->
            <div class=\"card-footer text-center bg-light\">
                <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </form>
</div>

<!-- External Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

<!-- Styles personnalisés -->
<style>
    /* Styles globaux */
    body {
        background: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    /* Formulaire */
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* En-tête */
    .card-header h2 {
        margin: 0;
        font-size: 1.5rem;
    }

    /* Bouton */
    .btn-secondary {
        background-color: #6c757d;
        border: none;
        font-size: 0.9rem;
        padding: 10px 15px;
        transition: all 0.2s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Responsiveness */
    @media (max-width: 576px) {
        .card-header h2 {
            font-size: 1.25rem;
        }

        .btn-secondary {
            font-size: 0.85rem;
            padding: 8px 12px;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .card-header h2 {
            font-size: 1.4rem;
        }

        .btn-secondary {
            font-size: 0.9rem;
            padding: 10px 15px;
        }
    }

    @media (min-width: 768px) {
        .card-header h2 {
            font-size: 1.5rem;
        }

        .btn-secondary {
            font-size: 0.9rem;
            padding: 10px 15px;
        }
    }
</style>
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
        return "article/new.html.twig";
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
        return array (  123 => 24,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvel Article{% endblock %}

{% block body %}
<!-- External Bootstrap CSS -->
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css\" rel=\"stylesheet\">

<div class=\"container d-flex justify-content-center align-items-center min-vh-100 py-4\">
    <form method=\"post\" class=\"w-100\" style=\"max-width: 600px;\">
        <div class=\"card shadow-lg border-0 rounded-3\">
            <!-- En-tête de la carte -->
            <div class=\"card-header bg-primary text-white text-center py-3\">
                <h2 class=\"h4\">Créer un Nouvel Article</h2>
            </div>

            <!-- Corps de la carte -->
            <div class=\"card-body\">
                {{ include('article/_form.html.twig') }}
            </div>

            <!-- Pied de la carte -->
            <div class=\"card-footer text-center bg-light\">
                <a href=\"{{ path('app_article_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                </a>
            </div>
        </div>
    </form>
</div>

<!-- External Bootstrap JS -->
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js\"></script>

<!-- Styles personnalisés -->
<style>
    /* Styles globaux */
    body {
        background: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    /* Formulaire */
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
    }

    /* En-tête */
    .card-header h2 {
        margin: 0;
        font-size: 1.5rem;
    }

    /* Bouton */
    .btn-secondary {
        background-color: #6c757d;
        border: none;
        font-size: 0.9rem;
        padding: 10px 15px;
        transition: all 0.2s ease-in-out;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Responsiveness */
    @media (max-width: 576px) {
        .card-header h2 {
            font-size: 1.25rem;
        }

        .btn-secondary {
            font-size: 0.85rem;
            padding: 8px 12px;
        }
    }

    @media (min-width: 576px) and (max-width: 768px) {
        .card-header h2 {
            font-size: 1.4rem;
        }

        .btn-secondary {
            font-size: 0.9rem;
            padding: 10px 15px;
        }
    }

    @media (min-width: 768px) {
        .card-header h2 {
            font-size: 1.5rem;
        }

        .btn-secondary {
            font-size: 0.9rem;
            padding: 10px 15px;
        }
    }
</style>
{% endblock %}
", "article/new.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/article/new.html.twig");
    }
}
