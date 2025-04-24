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

/* blog/search.html.twig */
class __TwigTemplate_ef5e5619661669fc49a3e1dff5a57c1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/search.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/search.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <h1>Search Results for \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "\"</h1>

    ";
        // line 6
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 6, $this->source); })()))) {
            // line 7
            yield "        <p>No results found. Try refining your search.</p>
    ";
        } else {
            // line 9
            yield "        <div class=\"results-summary\">
            <p>";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 10, $this->source); })()), "html", null, true);
            yield " result";
            yield ((((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 10, $this->source); })()) > 1)) ? ("s") : (""));
            yield " found, page ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 10, $this->source); })()), "html", null, true);
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 10, $this->source); })()), "html", null, true);
            yield ".</p>
        </div>

        <div class=\"search-pagination\">
            ";
            // line 15
            yield "            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 15, $this->source); })()) > 1)) {
                // line 16
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search", ["q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 16, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 16, $this->source); })()) - 1)]), "html", null, true);
                yield "\" class=\"pagination-link\">Previous</a>
            ";
            }
            // line 18
            yield "            
            <span>Page ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 19, $this->source); })()), "html", null, true);
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 19, $this->source); })()), "html", null, true);
            yield "</span>

            ";
            // line 21
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 21, $this->source); })()) < (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 21, $this->source); })()))) {
                // line 22
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search", ["q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 22, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 22, $this->source); })()) + 1)]), "html", null, true);
                yield "\" class=\"pagination-link\">Next</a>
            ";
            }
            // line 24
            yield "        </div>

        <div class=\"results-list\">
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 27, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 28
                yield "                <div class=\"result-card\">
                    <h2>
                        <a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\">
                            ";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 31), "html", null, true);
                yield "
                        </a>
                    </h2>
                    <p class=\"post-metadata\">
                        <span>";
                // line 35
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 35), "long", "medium", "", "UTC"), "html", null, true);
                yield "</span>
                        <span>";
                // line 36
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user"]);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 36), "fullName", [], "any", false, false, false, 36), "html", null, true);
                yield "</span>
                    </p>

                    <p>";
                // line 39
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 39), 0, 200), "html", null, true);
                yield "...</p> ";
                // line 40
                yield "
                    <div class=\"result-meta\">
                        <span>Tags: 
                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 44
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_tag", ["tagName" => CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 44)]), "html", null, true);
                    yield "\" class=\"tag\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 44), "html", null, true);
                    yield "</a>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                        </span>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['post'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            yield "        </div>

        <div class=\"search-pagination\">
            ";
            // line 54
            yield "            ";
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 54, $this->source); })()) > 1)) {
                // line 55
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search", ["q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 55, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 55, $this->source); })()) - 1)]), "html", null, true);
                yield "\" class=\"pagination-link\">Previous</a>
            ";
            }
            // line 57
            yield "            
            <span>Page ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 58, $this->source); })()), "html", null, true);
            yield " of ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "</span>

            ";
            // line 60
            if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 60, $this->source); })()) < (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 60, $this->source); })()))) {
                // line 61
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search", ["q" => (isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 61, $this->source); })()), "page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 61, $this->source); })()) + 1)]), "html", null, true);
                yield "\" class=\"pagination-link\">Next</a>
            ";
            }
            // line 63
            yield "        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "blog/search.html.twig";
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
        return array (  233 => 63,  227 => 61,  225 => 60,  218 => 58,  215 => 57,  209 => 55,  206 => 54,  201 => 50,  192 => 46,  181 => 44,  177 => 43,  172 => 40,  169 => 39,  161 => 36,  155 => 35,  148 => 31,  144 => 30,  140 => 28,  136 => 27,  131 => 24,  125 => 22,  123 => 21,  116 => 19,  113 => 18,  107 => 16,  104 => 15,  91 => 10,  88 => 9,  84 => 7,  82 => 6,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Search Results for \"{{ query }}\"</h1>

    {% if posts is empty %}
        <p>No results found. Try refining your search.</p>
    {% else %}
        <div class=\"results-summary\">
            <p>{{ totalItems }} result{{ totalItems > 1 ? 's' : '' }} found, page {{ currentPage }} of {{ pageCount }}.</p>
        </div>

        <div class=\"search-pagination\">
            {# Display pagination links #}
            {% if currentPage > 1 %}
                <a href=\"{{ path('blog_search', { q: query, page: currentPage - 1 }) }}\" class=\"pagination-link\">Previous</a>
            {% endif %}
            
            <span>Page {{ currentPage }} of {{ pageCount }}</span>

            {% if currentPage < pageCount %}
                <a href=\"{{ path('blog_search', { q: query, page: currentPage + 1 }) }}\" class=\"pagination-link\">Next</a>
            {% endif %}
        </div>

        <div class=\"results-list\">
            {% for post in posts %}
                <div class=\"result-card\">
                    <h2>
                        <a href=\"{{ path('blog_post', { slug: post.slug }) }}\">
                            {{ post.title }}
                        </a>
                    </h2>
                    <p class=\"post-metadata\">
                        <span>{{ component('ux:icon', { name: 'tabler:calendar-month' }) }} {{ post.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}</span>
                        <span>{{ component('ux:icon', { name: 'tabler:user' }) }} {{ post.author.fullName }}</span>
                    </p>

                    <p>{{ post.summary|slice(0, 200) }}...</p> {# Show a snippet of the content #}

                    <div class=\"result-meta\">
                        <span>Tags: 
                            {% for tag in post.tags %}
                                <a href=\"{{ path('blog_index_tag', { tagName: tag.name }) }}\" class=\"tag\">{{ tag.name }}</a>
                            {% endfor %}
                        </span>
                    </div>
                </div>
            {% endfor %}
        </div>

        <div class=\"search-pagination\">
            {# Display pagination links #}
            {% if currentPage > 1 %}
                <a href=\"{{ path('blog_search', { q: query, page: currentPage - 1 }) }}\" class=\"pagination-link\">Previous</a>
            {% endif %}
            
            <span>Page {{ currentPage }} of {{ pageCount }}</span>

            {% if currentPage < pageCount %}
                <a href=\"{{ path('blog_search', { q: query, page: currentPage + 1 }) }}\" class=\"pagination-link\">Next</a>
            {% endif %}
        </div>
    {% endif %}
{% endblock %}
", "blog/search.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/blog/search.html.twig");
    }
}
