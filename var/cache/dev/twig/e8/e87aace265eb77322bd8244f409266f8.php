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

/* article/edit.html.twig */
class __TwigTemplate_dbe69e0fd072ad84153851ff2519e0d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/edit.html.twig", 1);
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

        yield "Modifier l'Article";
        
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
        yield "<div class=\"container d-flex align-items-center justify-content-center\" style=\"min-height: 100vh;\">
    <div class=\"row justify-content-center w-100\">
        <div class=\"col-lg-8\">
            <form method=\"post\">
                <div class=\"card shadow-lg border-0\">
                    <!-- En-tête de la carte -->
                    <div class=\"card-header bg-primary text-white text-center\">
                        <h4><i class=\"bi bi-pencil-square\"></i> Modifier l'Article</h4>
                    </div>

                    <!-- Corps de la carte -->
                    <div class=\"card-body\">
                        <!-- Inclure le formulaire -->
                        ";
        // line 19
        yield Twig\Extension\CoreExtension::include($this->env, $context, "article/_form.html.twig", ["button_label" => "Mettre à jour"]);
        yield "
                    </div>

                    <!-- Pied de la carte -->
                    <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <!-- Bouton pour revenir à la liste -->
                        <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_index");
        yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                        </a>

                        <!-- Section des actions -->
                        <div class=\"d-flex flex-column flex-md-row mt-3 mt-md-0\">
                            ";
        // line 31
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 31, $this->source); })()), "isCertified", [], "any", false, false, false, 31)) {
            // line 32
            yield "                                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_certify", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" method=\"POST\" class=\"me-md-2 mb-2 mb-md-0\">
                                    <button type=\"submit\" class=\"btn btn-success\">
                                        <i class=\"bi bi-check-circle\"></i> Certifier
                                    </button>
                                </form>
                            ";
        } else {
            // line 38
            yield "                                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_remove_certification", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" method=\"POST\" class=\"me-md-2 mb-2 mb-md-0\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"bi bi-x-circle\"></i> Retirer la certification
                                    </button>
                                </form>
                            ";
        }
        // line 44
        yield "
                            <!-- Formulaire pour supprimer l'article -->
                            ";
        // line 46
        yield Twig\Extension\CoreExtension::include($this->env, $context, "article/_delete_form.html.twig");
        yield "
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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
        return "article/edit.html.twig";
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
        return array (  159 => 46,  155 => 44,  145 => 38,  135 => 32,  133 => 31,  124 => 25,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier l'Article{% endblock %}

{% block body %}
<div class=\"container d-flex align-items-center justify-content-center\" style=\"min-height: 100vh;\">
    <div class=\"row justify-content-center w-100\">
        <div class=\"col-lg-8\">
            <form method=\"post\">
                <div class=\"card shadow-lg border-0\">
                    <!-- En-tête de la carte -->
                    <div class=\"card-header bg-primary text-white text-center\">
                        <h4><i class=\"bi bi-pencil-square\"></i> Modifier l'Article</h4>
                    </div>

                    <!-- Corps de la carte -->
                    <div class=\"card-body\">
                        <!-- Inclure le formulaire -->
                        {{ include('article/_form.html.twig', {'button_label': 'Mettre à jour'}) }}
                    </div>

                    <!-- Pied de la carte -->
                    <div class=\"card-footer bg-light d-flex flex-column flex-md-row justify-content-between align-items-center\">
                        <!-- Bouton pour revenir à la liste -->
                        <a href=\"{{ path('app_article_index') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"bi bi-arrow-left-circle\"></i> Retour à la liste
                        </a>

                        <!-- Section des actions -->
                        <div class=\"d-flex flex-column flex-md-row mt-3 mt-md-0\">
                            {% if not article.isCertified %}
                                <form action=\"{{ path('app_article_certify', {'id': article.id}) }}\" method=\"POST\" class=\"me-md-2 mb-2 mb-md-0\">
                                    <button type=\"submit\" class=\"btn btn-success\">
                                        <i class=\"bi bi-check-circle\"></i> Certifier
                                    </button>
                                </form>
                            {% else %}
                                <form action=\"{{ path('app_article_remove_certification', {'id': article.id}) }}\" method=\"POST\" class=\"me-md-2 mb-2 mb-md-0\">
                                    <button type=\"submit\" class=\"btn btn-danger\">
                                        <i class=\"bi bi-x-circle\"></i> Retirer la certification
                                    </button>
                                </form>
                            {% endif %}

                            <!-- Formulaire pour supprimer l'article -->
                            {{ include('article/_delete_form.html.twig') }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{% endblock %}
", "article/edit.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/article/edit.html.twig");
    }
}
