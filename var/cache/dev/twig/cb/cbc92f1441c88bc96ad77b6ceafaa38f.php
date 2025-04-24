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

/* article/index.html.twig */
class __TwigTemplate_97cf5969b0bd8f36df368a1593e93bc9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "article/index.html.twig", 1);
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

        yield "Articles";
        
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
        yield "<div class=\"container mt-4\">
    <div class=\"row\">
        <!-- Barre latérale (Documentation) -->
        <aside class=\"col-md-3\">
            <div class=\"sticky-top\">
                <div class=\"card sidebar-card\">
                    <div class=\"card-header bg-dark text-white\">
                        <h5 class=\"mb-0\">📚 Documentations</h5>
                    </div>
                    <div class=\"list-group list-group-flush\">
                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            yield "                            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" class=\"list-group-item list-group-item-action\">
                                ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 18), "html", null, true);
            yield "
                            </a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "                    </div>
                </div>
            </div>
        </aside>

        <!-- Contenu principal (Articles) -->
        <main class=\"col-md-9\">
            <h1 class=\"text-center mb-4\">🎬 Articles en Vedette</h1>

            <!-- Grille de cartes (Style Netflix) -->
            ";
        // line 31
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 31, $this->source); })())) == 0)) {
            // line 32
            yield "                <p class=\"text-center\">Aucun résultat trouvé.</p>
            ";
        } else {
            // line 34
            yield "                <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 35, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 36
                yield "                        <div class=\"col\">
                            <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"card article-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 39), "html", null, true);
                yield "</h5>
                                    <p class=\"card-text\">";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "content", [], "any", false, false, false, 40), 0, 100) . "..."), "html", null, true);
                yield "</p>
                                    <p><small>📅 ";
                // line 41
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getFormattedDateTime", [], "method", false, false, false, 41)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "getFormattedDateTime", [], "method", false, false, false, 41), "html", null, true)) : ("Date non valide"));
                yield "</small></p>
                                    <div class=\"overlay\">👀 Voir l'article</div>
                                </div>
                            </a>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            yield "                </div>

                <!-- Pagination -->
                <div class=\"pagination-container mt-4\">
                    ";
            // line 51
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 51, $this->source); })()));
            yield "
                </div>
            ";
        }
        // line 54
        yield "        </main>
    </div>
</div>

<!-- Styles personnalisés (Netflix-Inspired) -->
<style>
    body {
        background-color: #141414;
        color: white;
    }
    .sidebar-card {
        background-color: #1f1f1f;
        border-radius: 8px;
    }
    .article-card {
        background-color: #222;
        color: white;
        border-radius: 10px;
        text-decoration: none;
        transition: transform 0.3s ease-in-out;
        position: relative;
    }
    .article-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(255, 255, 255, 0.1);
    }
    .overlay {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        padding: 8px 12px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.3s;
        color: #fff;
    }
    .article-card:hover .overlay {
        opacity: 1;
    }
    .pagination-container {
        display: flex;
        justify-content: center;
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
        return "article/index.html.twig";
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
        return array (  195 => 54,  189 => 51,  183 => 47,  171 => 41,  167 => 40,  163 => 39,  158 => 37,  155 => 36,  151 => 35,  148 => 34,  144 => 32,  142 => 31,  130 => 21,  121 => 18,  116 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Articles{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <!-- Barre latérale (Documentation) -->
        <aside class=\"col-md-3\">
            <div class=\"sticky-top\">
                <div class=\"card sidebar-card\">
                    <div class=\"card-header bg-dark text-white\">
                        <h5 class=\"mb-0\">📚 Documentations</h5>
                    </div>
                    <div class=\"list-group list-group-flush\">
                        {% for article in articles %}
                            <a href=\"{{ path('app_article_show', {'id': article.id}) }}\" class=\"list-group-item list-group-item-action\">
                                {{ article.title }}
                            </a>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </aside>

        <!-- Contenu principal (Articles) -->
        <main class=\"col-md-9\">
            <h1 class=\"text-center mb-4\">🎬 Articles en Vedette</h1>

            <!-- Grille de cartes (Style Netflix) -->
            {% if articles|length == 0 %}
                <p class=\"text-center\">Aucun résultat trouvé.</p>
            {% else %}
                <div class=\"row row-cols-1 row-cols-md-3 g-4\">
                    {% for article in articles %}
                        <div class=\"col\">
                            <a href=\"{{ path('app_article_show', {'id': article.id}) }}\" class=\"card article-card\">
                                <div class=\"card-body\">
                                    <h5 class=\"card-title\">{{ article.title }}</h5>
                                    <p class=\"card-text\">{{ article.content|slice(0, 100) ~ '...' }}</p>
                                    <p><small>📅 {{ article.getFormattedDateTime() ?: 'Date non valide' }}</small></p>
                                    <div class=\"overlay\">👀 Voir l'article</div>
                                </div>
                            </a>
                        </div>
                    {% endfor %}
                </div>

                <!-- Pagination -->
                <div class=\"pagination-container mt-4\">
                    {{ knp_pagination_render(articles) }}
                </div>
            {% endif %}
        </main>
    </div>
</div>

<!-- Styles personnalisés (Netflix-Inspired) -->
<style>
    body {
        background-color: #141414;
        color: white;
    }
    .sidebar-card {
        background-color: #1f1f1f;
        border-radius: 8px;
    }
    .article-card {
        background-color: #222;
        color: white;
        border-radius: 10px;
        text-decoration: none;
        transition: transform 0.3s ease-in-out;
        position: relative;
    }
    .article-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 15px rgba(255, 255, 255, 0.1);
    }
    .overlay {
        position: absolute;
        bottom: 10px;
        left: 50%;
        transform: translateX(-50%);
        background: rgba(0, 0, 0, 0.7);
        padding: 8px 12px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.3s;
        color: #fff;
    }
    .article-card:hover .overlay {
        opacity: 1;
    }
    .pagination-container {
        display: flex;
        justify-content: center;
    }
</style>
{% endblock %}
", "article/index.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/article/index.html.twig");
    }
}
