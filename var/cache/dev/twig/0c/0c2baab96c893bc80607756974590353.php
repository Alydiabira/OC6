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

/* book/index.html.twig */
class __TwigTemplate_7a395ad9540a9697702a7e59a2b91938 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "book/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "book/index.html.twig", 1);
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

        yield "Nos livres à l’échange";
        
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
        yield "  <div class=\"container py-5\">
    <h2 class=\"text-center mb-4\">Nos livres à l’échange</h2>

    <form method=\"get\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_search");
        yield "\" class=\"mb-4 text-center\">
      <input type=\"search\" name=\"q\" placeholder=\"Rechercher un livre...\" class=\"form-control w-50 d-inline-block\">
      <button type=\"submit\" class=\"btn btn-primary ms-2\">Rechercher</button>
    </form>

    <div class=\"row\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["books"]) || array_key_exists("books", $context) ? $context["books"] : (function () { throw new RuntimeError('Variable "books" does not exist.', 15, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 16
            yield "        <div class=\"col-md-3 mb-4\">
          <div class=\"card h-100 shadow-sm rounded-4\">
            ";
            // line 18
            if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 18)) {
                // line 19
                yield "              <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 19))), "html", null, true);
                yield "\" class=\"card-img-top\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 19), "html", null, true);
                yield "\">
            ";
            }
            // line 21
            yield "            <div class=\"card-body\">
              <h5 class=\"card-title\">";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 22), "html", null, true);
            yield "</h5>
              <p class=\"card-text text-muted small\">";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 23), "username", [], "any", false, false, false, 23), "html", null, true);
            yield "</p>
              <p class=\"text-muted small\">
                <strong>Vendeur :</strong> ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["book"], "seller", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), "html", null, true);
            yield "
              </p>
              ";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "tags", [], "any", false, false, false, 27)) {
                // line 28
                yield "                <p class=\"small\">
                  <strong>Statut :</strong>
                  ";
                // line 30
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "tags", [], "any", false, false, false, 30));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 31
                    yield "                    <span class=\"badge bg-warning text-dark\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 31), "html", null, true);
                    yield "</span>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                yield "                </p>
              ";
            }
            // line 35
            yield "              <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("book_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "slug", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm mt-2\">Voir</a>
            </div>
          </div>
        </div>
      ";
            $context['_iterated'] = true;
        }
        // line 41
        if (!$context['_iterated']) {
            // line 40
            yield "        <p class=\"text-center text-muted\">Aucun livre trouvé.</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "    </div>
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
        return "book/index.html.twig";
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
        return array (  192 => 42,  185 => 40,  183 => 41,  173 => 35,  169 => 33,  160 => 31,  156 => 30,  152 => 28,  150 => 27,  145 => 25,  140 => 23,  136 => 22,  133 => 21,  125 => 19,  123 => 18,  119 => 16,  114 => 15,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nos livres à l’échange{% endblock %}

{% block body %}
  <div class=\"container py-5\">
    <h2 class=\"text-center mb-4\">Nos livres à l’échange</h2>

    <form method=\"get\" action=\"{{ path('book_search') }}\" class=\"mb-4 text-center\">
      <input type=\"search\" name=\"q\" placeholder=\"Rechercher un livre...\" class=\"form-control w-50 d-inline-block\">
      <button type=\"submit\" class=\"btn btn-primary ms-2\">Rechercher</button>
    </form>

    <div class=\"row\">
      {% for book in books %}
        <div class=\"col-md-3 mb-4\">
          <div class=\"card h-100 shadow-sm rounded-4\">
            {% if book.image %}
              <img src=\"{{ asset('uploads/posts/' ~ book.image) }}\" class=\"card-img-top\" alt=\"{{ book.title }}\">
            {% endif %}
            <div class=\"card-body\">
              <h5 class=\"card-title\">{{ book.title }}</h5>
              <p class=\"card-text text-muted small\">{{ book.author.username }}</p>
              <p class=\"text-muted small\">
                <strong>Vendeur :</strong> {{ book.seller.username }}
              </p>
              {% if book.tags %}
                <p class=\"small\">
                  <strong>Statut :</strong>
                  {% for tag in book.tags %}
                    <span class=\"badge bg-warning text-dark\">{{ tag.name }}</span>
                  {% endfor %}
                </p>
              {% endif %}
              <a href=\"{{ path('book_show', {slug: book.slug}) }}\" class=\"btn btn-outline-primary btn-sm mt-2\">Voir</a>
            </div>
          </div>
        </div>
      {% else %}
        <p class=\"text-center text-muted\">Aucun livre trouvé.</p>
      {% endfor %}
    </div>
  </div>
{% endblock %}
", "book/index.html.twig", "/Users/diabiraaly/Desktop/PHP-blog-emilie-forteroche/OC6/templates/book/index.html.twig");
    }
}
