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

/* blog/index.html.twig */
class __TwigTemplate_b845bc1749ff7988e6d5aa024ba0fb50 extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 136
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 136);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 137
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

        yield "Accueil - TomTroc";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield "homepage";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 140
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

        // line 141
        yield "<div class=\"container\">

    <!-- HERO -->
    <section class=\"hero d-flex justify-content-between align-items-center py-5\">
        <div class=\"hero-text\">
            <h2 class=\"mb-3\">Rejoignez nos lecteurs passionnés</h2>
            <p>Donnez une nouvelle vie à vos livres en les échangeant entre amoureux de la lecture !</p>
            <a href=\"";
        // line 148
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_index");
        yield "\" class=\"btn btn-success mt-3\">Découvrir</a>
        </div>
        <div class=\"hero-image\">
            <img src=\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/livres.jpg"), "html", null, true);
        yield "\" alt=\"Livres empilés\" class=\"img-fluid rounded-4 shadow\" />
        </div>
    </section>

    <!-- DERNIERS LIVRES -->
    <section class=\"latest-books mt-5\">
        <h3 class=\"text-center mb-4\">Les derniers livres ajoutés</h3>
        <div class=\"d-flex justify-content-between flex-wrap gap-3\">
            ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 159, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 160
            yield "                <div class=\"card shadow-sm\" style=\"width: 12rem;\">
                    ";
            // line 161
            if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 161)) {
                // line 162
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 162))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 162), "html", null, true);
                yield "\">
                    ";
            }
            // line 164
            yield "                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 165), "html", null, true);
            yield "</h5>
                        <p class=\"card-text text-muted small\">";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 166), "username", [], "any", false, false, false, 166), "html", null, true);
            yield "</p>
                        <p class=\"text-muted small mb-1\">
                            <strong>Disponibilité :</strong>
                            ";
            // line 169
            if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "available", [], "any", false, false, false, 169)) {
                // line 170
                yield "                                <span class=\"badge bg-success\">Disponible</span>
                            ";
            } else {
                // line 172
                yield "                                <span class=\"badge bg-danger\">Indisponible</span>
                            ";
            }
            // line 174
            yield "                        </p>
                        <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "slug", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary mt-2\">Voir</a>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 180
        if (!$context['_iterated']) {
            // line 179
            yield "                <p class=\"text-center text-muted\">Aucun livre disponible pour le moment.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        yield "        </div>
    </section>

    <!-- COMMENT ÇA MARCHE -->
    <section class=\"how-it-works mt-5 text-center\">
        <h3 class=\"mb-4\">Comment ça marche ?</h3>
        <div class=\"row text-center\">
            <div class=\"col\">🧾 Inscrivez-vous</div>
            <div class=\"col\">📖 Ajoutez des livres</div>
            <div class=\"col\">🔍 Parcourez les livres</div>
            <div class=\"col\">🤝 Échangez avec d’autres lecteurs</div>
        </div>
    </section>

    <!-- NOS VALEURS -->
    <section class=\"our-values mt-5 text-center\">
        <h3 class=\"mb-3\">Nos valeurs</h3>
        <p>Chez TomTroc, nous croyons au partage, à la communauté et à la passion de lire. Chaque livre est une opportunité de rencontre et de lien social.</p>
        <img src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/heart-line.svg"), "html", null, true);
        yield "\" alt=\"Cœur\" height=\"40\" />
    </section>

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
        return "blog/index.html.twig";
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
        return array (  231 => 199,  211 => 181,  204 => 179,  202 => 180,  194 => 175,  191 => 174,  187 => 172,  183 => 170,  181 => 169,  175 => 166,  171 => 165,  168 => 164,  160 => 162,  158 => 161,  155 => 160,  150 => 159,  139 => 151,  133 => 148,  124 => 141,  111 => 140,  88 => 138,  65 => 137,  42 => 136,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}

  <section class=\"hero py-5 text-center\">
        <h1 class=\"display-4\">Bienvenue sur TomTroc</h1>
        <p class=\"lead\">Échangez vos livres facilement entre lecteurs !</p>
    </section>

   

    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"row\">
                    {% for post in paginator %}
                        <div class=\"col-sm-6 mb-4\">
                            <div class=\"card shadow-lg rounded-4 overflow-hidden\" style=\"background:rgb(71, 61, 127);\">
                                <div class=\"card-body p-4\">
                                    {% if post.image %}
                                        <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"{{ post.title }}\" class=\"img-fluid mb-3 rounded-4\">
                                    {% endif %}

                                    <h3 class=\"text-white mb-2\">{{ post.title }}</h3>

                                    <p class=\"text-muted mb-3\">
                                        <small>
                                            <strong>{{ post.author.username }}</strong> | 
                                            {{ post.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}
                                        </small>
                                    </p>

                                    <p class=\"text-white mb-3\">
                                        {% if post.summary %}
                                            {{ post.summary }}
                                        {% else %}
                                            {{ 'No excerpt available.'|trans }}
                                        {% endif %}
                                    </p>

                                    {% if post.description %}
                                        <p class=\"text-white small mb-3\">
                                            <strong>Description :</strong> {{ post.description|u.truncate(80, '…') }}
                                        </p>
                                    {% endif %}

                                    <p class=\"text-white small mb-3\">
                                        <strong>Disponibilité :</strong>
                                        {% if post.available %}
                                            <span class=\"badge bg-success\">Disponible</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Indisponible</span>
                                        {% endif %}
                                    </p>

                                    {% if post.tags is not empty %}
                                        <div class=\"tags mt-3\">
                                            <strong class=\"text-white\">{{ 'Tags'|trans }}:</strong>
                                            {% for tag in post.tags %}
                                                <a href=\"{{ path('blog_index_tag', {tagName: tag.name|url_encode}) }}\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">{{ tag.name }}</a>
                                            {% endfor %}
                                        </div>
                                    {% endif %}

                                    <a href=\"{{ path('blog_post', {slug: post.slug}) }}\" class=\"btn btn-light btn-sm rounded-4 mt-3\">
                                        {{ 'action.read_more'|trans }}
                                    </a>

                                    <div class=\"mt-3\">
                                        <a href=\"{{ path('blog_post', {slug: post.slug}) }}#comments\" class=\"text-muted\">
                                            <twig:ux:icon name=\"tabler:message-circle\" class=\"text-white\"/> 
                                            {{ post.comments|length }} {{ 'comment.comment'|trans(count=post.comments|length) }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning text-center\" role=\"alert\">
                            {{ 'post.no_posts_found'|trans }}
                        </div>
                    {% endfor %}
                </div>

                {% if totalItems > pageSize %}
                    <nav class=\"mt-4\" aria-label=\"Pagination\">
                        <ul class=\"pagination pagination-lg d-flex justify-content-center\">
                            <li class=\"page-item {% if not paginator.hasPreviousPage %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: currentPage - 1, tag: tagName}) }}\" rel=\"previous\" {% if not paginator.hasPreviousPage %}aria-disabled=\"true\"{% endif %} aria-label=\"{{ 'paginator.previous'|trans }}\">
                                    <twig:ux:icon name=\"tabler:arrow-left\"/> {{ 'paginator.previous'|trans }}
                                </a>
                            </li>
                            {% set startPage = currentPage - 2 %}
                            {% set endPage = currentPage + 2 %}
                            {% for i in startPage..endPage %}
                                {% if i > 0 and i <= pageCount %}
                                    <li class=\"page-item {% if i == currentPage %}active{% endif %}\" {% if i == currentPage %}aria-current=\"page\"{% endif %}>
                                        <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
                            <li class=\"page-item {% if not paginator.hasNextPage %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: currentPage + 1, tag: tagName}) }}\" {% if not paginator.hasNextPage %}aria-disabled=\"true\"{% endif %} aria-label=\"{{ 'paginator.next'|trans }}\">
                                    {{ 'paginator.next'|trans }} <twig:ux:icon name=\"tabler:arrow-right\"/>
                                </a>
                            </li>
                        </ul>
                    </nav>
                {% else %}
                    <p>{{ 'No pagination available'|trans }}</p>
                {% endif %}
            </div>
        </div>
    </div>

    
{% endblock %}

{% block sidebar %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                {{ parent() }}
                {{ show_source_code(_self) }}
                {{ include('blog/_rss.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %} #}




{% extends 'base.html.twig' %}
{% block title %}Accueil - TomTroc{% endblock %}
{% block body_id 'homepage' %}

{% block body %}
<div class=\"container\">

    <!-- HERO -->
    <section class=\"hero d-flex justify-content-between align-items-center py-5\">
        <div class=\"hero-text\">
            <h2 class=\"mb-3\">Rejoignez nos lecteurs passionnés</h2>
            <p>Donnez une nouvelle vie à vos livres en les échangeant entre amoureux de la lecture !</p>
            <a href=\"{{ path('book_index') }}\" class=\"btn btn-success mt-3\">Découvrir</a>
        </div>
        <div class=\"hero-image\">
            <img src=\"{{ asset('images/livres.jpg') }}\" alt=\"Livres empilés\" class=\"img-fluid rounded-4 shadow\" />
        </div>
    </section>

    <!-- DERNIERS LIVRES -->
    <section class=\"latest-books mt-5\">
        <h3 class=\"text-center mb-4\">Les derniers livres ajoutés</h3>
        <div class=\"d-flex justify-content-between flex-wrap gap-3\">
            {% for book in books %}
                <div class=\"card shadow-sm\" style=\"width: 12rem;\">
                    {% if book.image %}
                        <img src=\"{{ asset('uploads/posts/' ~ book.image) }}\" class=\"card-img-top\" alt=\"{{ book.title }}\">
                    {% endif %}
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ book.title }}</h5>
                        <p class=\"card-text text-muted small\">{{ book.author.username }}</p>
                        <p class=\"text-muted small mb-1\">
                            <strong>Disponibilité :</strong>
                            {% if book.available %}
                                <span class=\"badge bg-success\">Disponible</span>
                            {% else %}
                                <span class=\"badge bg-danger\">Indisponible</span>
                            {% endif %}
                        </p>
                        <a href=\"{{ path('blog_post', {slug: book.slug}) }}\" class=\"btn btn-sm btn-outline-primary mt-2\">Voir</a>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center text-muted\">Aucun livre disponible pour le moment.</p>
            {% endfor %}
        </div>
    </section>

    <!-- COMMENT ÇA MARCHE -->
    <section class=\"how-it-works mt-5 text-center\">
        <h3 class=\"mb-4\">Comment ça marche ?</h3>
        <div class=\"row text-center\">
            <div class=\"col\">🧾 Inscrivez-vous</div>
            <div class=\"col\">📖 Ajoutez des livres</div>
            <div class=\"col\">🔍 Parcourez les livres</div>
            <div class=\"col\">🤝 Échangez avec d’autres lecteurs</div>
        </div>
    </section>

    <!-- NOS VALEURS -->
    <section class=\"our-values mt-5 text-center\">
        <h3 class=\"mb-3\">Nos valeurs</h3>
        <p>Chez TomTroc, nous croyons au partage, à la communauté et à la passion de lire. Chaque livre est une opportunité de rencontre et de lien social.</p>
        <img src=\"{{ asset('images/heart-line.svg') }}\" alt=\"Cœur\" height=\"40\" />
    </section>

</div>
{% endblock %}", "blog/index.html.twig", "/Users/diabiraaly/Desktop/PHP-blog-emilie-forteroche/OC6/templates/blog/index.html.twig");
    }
}
