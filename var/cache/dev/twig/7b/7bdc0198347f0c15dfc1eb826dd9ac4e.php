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

/* article/show.html.twig */
class __TwigTemplate_39c0a6251d3e18d1a5ff9b16f9937d6b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/show.html.twig", 1);
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

        yield "Fonctionnalités";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center text-light\">Articles en vedette</h1>
        
        <!-- Grille Netflix-like -->
        <div class=\"row row-cols-1 row-cols-md-3 g-4 mt-4\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            yield "                <div class=\"col\">
                    <div class=\"card shadow-sm border-0 rounded-3 position-relative netflix-card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-white\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 15), "html", null, true);
            yield "</h5>
                            <p class=\"card-text text-light\">";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 16), 0, 100) . "..."), "html", null, true);
            yield "</p>
                            <p class=\"text-muted small\"><strong>Créé le :</strong> ";
            // line 17
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateTime", [], "any", false, false, false, 17)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "dateTime", [], "any", false, false, false, 17), "d/m/Y H:i"), "html", null, true)) : ("Non défini"));
            yield "</p>
                            <a href=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 18)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">
                                <i class=\"bi bi-eye\"></i> Voir plus
                            </a>
                        </div>
                        ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["article"], "isCertified", [], "any", false, false, false, 22)) {
                // line 23
                yield "                            <span class=\"badge-certified\">Certifié</span>
                        ";
            }
            // line 25
            yield "                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        body {
            background-color: #141414;
            color: white;
        }

        .netflix-card {
            background: linear-gradient(135deg, #222, #111);
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
        }

        .netflix-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(255, 0, 0, 0.8);
        }

        .badge-certified {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
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
        return "article/show.html.twig";
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
        return array (  149 => 28,  141 => 25,  137 => 23,  135 => 22,  128 => 18,  124 => 17,  120 => 16,  116 => 15,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Fonctionnalités{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center text-light\">Articles en vedette</h1>
        
        <!-- Grille Netflix-like -->
        <div class=\"row row-cols-1 row-cols-md-3 g-4 mt-4\">
            {% for article in articles %}
                <div class=\"col\">
                    <div class=\"card shadow-sm border-0 rounded-3 position-relative netflix-card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title text-white\">{{ article.title }}</h5>
                            <p class=\"card-text text-light\">{{ article.content|slice(0, 100) ~ '...' }}</p>
                            <p class=\"text-muted small\"><strong>Créé le :</strong> {{ article.dateTime ? article.dateTime|date('d/m/Y H:i') : 'Non défini' }}</p>
                            <a href=\"{{ path('app_article_show', {'id': article.id}) }}\" class=\"btn btn-primary btn-sm\">
                                <i class=\"bi bi-eye\"></i> Voir plus
                            </a>
                        </div>
                        {% if article.isCertified %}
                            <span class=\"badge-certified\">Certifié</span>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    <!-- Styles personnalisés -->
    <style>
        body {
            background-color: #141414;
            color: white;
        }

        .netflix-card {
            background: linear-gradient(135deg, #222, #111);
            transition: transform 0.3s ease-in-out;
            overflow: hidden;
        }

        .netflix-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(255, 0, 0, 0.8);
        }

        .badge-certified {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
        }
    </style>
{% endblock %}
", "article/show.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/article/show.html.twig");
    }
}
