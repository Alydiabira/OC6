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

/* user/edit.html.twig */
class __TwigTemplate_28203480c524163457d38365090a3deb extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "user_edit";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        yield "<div class=\"container mt-5\">
    <!-- Profile Edit Card -->
    <div class=\"card shadow-lg border-0 rounded-4 mb-5\">
        <div class=\"card-body\">
            <h1 class=\"h4 text-center text-dark mb-4\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.edit_user"), "html", null, true);
        yield "</h1>

            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "form-edit-user"]]);
        yield "
                <div class=\"form-group mb-4\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "fullName", [], "any", false, false, false, 14), 'row', ["attr" => ["class" => "form-control rounded-pill"]]);
        yield "
                </div>
                <div class=\"form-group mb-4\">
                    ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "email", [], "any", false, false, false, 17), 'row', ["attr" => ["class" => "form-control rounded-pill"]]);
        yield "
                </div>
                <div class=\"form-group mb-4\">
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "phoneNumber", [], "any", false, false, false, 20), 'row', ["attr" => ["class" => "form-control rounded-pill"]]);
        yield "
                </div>
                <div class=\"form-group mb-4\">
                    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "message", [], "any", false, false, false, 23), 'row', ["attr" => ["class" => "form-control rounded-pill", "rows" => "4"]]);
        yield "
                </div>

                <button type=\"submit\" class=\"btn btn-primary w-100 rounded-pill mt-4\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:save-changes", "class" => "me-2"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save"), "html", null, true);
        yield "
                </button>
            ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>

    ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
            // line 35
            yield "        <h2 class=\"mb-4\">Mes livres</h2>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "books", [], "any", false, false, false, 38));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
                // line 39
                yield "                <div class=\"col\">
                    <div class=\"card h-100 shadow-sm border-0 rounded-4\">
                        ";
                // line 41
                if (CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["book"], "image", [], "any", false, false, false, 42))), "html", null, true);
                    yield "\" class=\"card-img-top rounded-top-4\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 42), "html", null, true);
                    yield "\">
                        ";
                } else {
                    // line 44
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/default.jpg"), "html", null, true);
                    yield "\" class=\"card-img-top rounded-top-4\" alt=\"Image par défaut\">
                        ";
                }
                // line 46
                yield "
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "title", [], "any", false, false, false, 48), "html", null, true);
                yield "</h5>
                            <p class=\"card-subtitle text-muted mb-2\">Auteur : ";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "author", [], "any", false, false, false, 49), "html", null, true);
                yield "</p>
                            <p class=\"card-text\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["book"], "description", [], "any", false, false, false, 50), "html", null, true);
                yield "</p>
                            <p class=\"card-text\">
                                <strong>Disponibilité :</strong>
                                <span class=\"";
                // line 53
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "available", [], "any", false, false, false, 53)) ? ("text-success") : ("text-danger"));
                yield "\">
                                    ";
                // line 54
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["book"], "available", [], "any", false, false, false, 54)) ? ("Disponible") : ("Indisponible"));
                yield "
                                </span>
                            </p>
                        </div>

                        <div class=\"card-footer bg-white border-0 d-flex justify-content-between\">
                            <a href=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_book_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm rounded-pill\">
                                ✏️ Modifier
                            </a>
                            <a href=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_book_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["book"], "id", [], "any", false, false, false, 63)]), "html", null, true);
                yield "\"
                               onclick=\"return confirm('Confirmer la suppression ?')\"
                               class=\"btn btn-outline-danger btn-sm rounded-pill\">
                                🗑️ Supprimer
                            </a>
                        </div>
                    </div>
                </div>
            ";
                $context['_iterated'] = true;
            }
            // line 73
            if (!$context['_iterated']) {
                // line 72
                yield "                <p class=\"text-muted\">Aucun livre enregistré pour l’instant.</p>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['book'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "        </div>
    ";
        } else {
            // line 76
            yield "        <p class=\"mt-5 text-muted\">Accès réservé aux administrateurs.</p>
    ";
        }
        // line 78
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 82
        yield "    <div class=\"section mt-5 px-3\">
        <!-- Change Password Section -->
        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_change_password");
        yield "\" class=\"btn btn-lg btn-outline-danger rounded-pill shadow-sm w-100\">
            ";
        // line 85
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:key", "class" => "me-2"]);
        yield "
            ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.change_password"), "html", null, true);
        yield "
        </a>
    </div>

    ";
        // line 90
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
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
        return "user/edit.html.twig";
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
        return array (  301 => 90,  294 => 86,  290 => 85,  286 => 84,  282 => 82,  269 => 81,  257 => 78,  253 => 76,  249 => 74,  242 => 72,  240 => 73,  227 => 63,  221 => 60,  212 => 54,  208 => 53,  202 => 50,  198 => 49,  194 => 48,  190 => 46,  184 => 44,  176 => 42,  174 => 41,  170 => 39,  165 => 38,  160 => 35,  158 => 34,  151 => 30,  146 => 28,  142 => 27,  135 => 23,  129 => 20,  123 => 17,  117 => 14,  112 => 12,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id %}user_edit{% endblock %}

{% block main %}
<div class=\"container mt-5\">
    <!-- Profile Edit Card -->
    <div class=\"card shadow-lg border-0 rounded-4 mb-5\">
        <div class=\"card-body\">
            <h1 class=\"h4 text-center text-dark mb-4\">{{ 'title.edit_user'|trans }}</h1>

            {{ form_start(form, {'attr': {'class': 'form-edit-user'}}) }}
                <div class=\"form-group mb-4\">
                    {{ form_row(form.fullName, {'attr': {'class': 'form-control rounded-pill'}}) }}
                </div>
                <div class=\"form-group mb-4\">
                    {{ form_row(form.email, {'attr': {'class': 'form-control rounded-pill'}}) }}
                </div>
                <div class=\"form-group mb-4\">
                    {{ form_row(form.phoneNumber, {'attr': {'class': 'form-control rounded-pill'}}) }}
                </div>
                <div class=\"form-group mb-4\">
                    {{ form_row(form.message, {'attr': {'class': 'form-control rounded-pill', 'rows': '4'}}) }}
                </div>

                <button type=\"submit\" class=\"btn btn-primary w-100 rounded-pill mt-4\">
                    {{ component('ux:icon', { name: 'tabler:save-changes', class: 'me-2' }) }}
                    {{ 'action.save'|trans }}
                </button>
            {{ form_end(form) }}
        </div>
    </div>

    {% if app.user and is_granted('ROLE_ADMIN') %}
        <h2 class=\"mb-4\">Mes livres</h2>

        <div class=\"row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4\">
            {% for book in app.user.books %}
                <div class=\"col\">
                    <div class=\"card h-100 shadow-sm border-0 rounded-4\">
                        {% if book.image %}
                            <img src=\"{{ asset('uploads/' ~ book.image) }}\" class=\"card-img-top rounded-top-4\" alt=\"{{ book.title }}\">
                        {% else %}
                            <img src=\"{{ asset('uploads/default.jpg') }}\" class=\"card-img-top rounded-top-4\" alt=\"Image par défaut\">
                        {% endif %}

                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ book.title }}</h5>
                            <p class=\"card-subtitle text-muted mb-2\">Auteur : {{ book.author }}</p>
                            <p class=\"card-text\">{{ book.description }}</p>
                            <p class=\"card-text\">
                                <strong>Disponibilité :</strong>
                                <span class=\"{{ book.available ? 'text-success' : 'text-danger' }}\">
                                    {{ book.available ? 'Disponible' : 'Indisponible' }}
                                </span>
                            </p>
                        </div>

                        <div class=\"card-footer bg-white border-0 d-flex justify-content-between\">
                            <a href=\"{{ path('admin_book_edit', { id: book.id }) }}\" class=\"btn btn-outline-secondary btn-sm rounded-pill\">
                                ✏️ Modifier
                            </a>
                            <a href=\"{{ path('admin_book_delete', { id: book.id }) }}\"
                               onclick=\"return confirm('Confirmer la suppression ?')\"
                               class=\"btn btn-outline-danger btn-sm rounded-pill\">
                                🗑️ Supprimer
                            </a>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-muted\">Aucun livre enregistré pour l’instant.</p>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"mt-5 text-muted\">Accès réservé aux administrateurs.</p>
    {% endif %}
</div>
{% endblock %}

{% block sidebar %}
    <div class=\"section mt-5 px-3\">
        <!-- Change Password Section -->
        <a href=\"{{ path('user_change_password') }}\" class=\"btn btn-lg btn-outline-danger rounded-pill shadow-sm w-100\">
            {{ component('ux:icon', { name: 'tabler:key', class: 'me-2' }) }}
            {{ 'action.change_password'|trans }}
        </a>
    </div>

    {{ parent() }}
{% endblock %}", "user/edit.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/user/edit.html.twig");
    }
}
