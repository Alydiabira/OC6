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

/* liste/index.html.twig */
class __TwigTemplate_0ce40f7b1c6474972d11248c8b56e1ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/index.html.twig", 1);
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

        yield "Listes";
        
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
    <h1 class=\"text-center mb-4 text-primary\">Listes</h1>

    <!-- Notifications -->
    <div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
        <div class=\"toast-container position-fixed top-0 end-0 p-3\">
            ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "session", [], "any", false, false, false, 12), "flashBag", [], "any", false, false, false, 12), "all", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 13
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "                    <div class=\"toast align-items-center text-bg-";
                yield ((($context["type"] == "success")) ? ("success") : ("danger"));
                yield " border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"3000\">
                        <div class=\"d-flex\">
                            <div class=\"toast-body\">";
                // line 16
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</div>
                            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "        </div>
    </div>

    <!-- Bouton pour ajouter une nouvelle liste -->
    <div class=\"text-center mb-4\">
        <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_new");
        yield "\" class=\"btn btn-success btn-lg rounded-pill shadow-lg\">
            <i class=\"bi bi-plus-circle\"></i> Ajouter une nouvelle liste
        </a>
    </div>

    ";
        // line 32
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 32, $this->source); })())) == 0)) {
            // line 33
            yield "        <p class=\"text-center\">Aucun enregistrement trouvé.</p>
    ";
        } else {
            // line 35
            yield "        <div class=\"text-center mb-4\">
            <p class=\"lead\">Total des articles : <strong>";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 36, $this->source); })())), "html", null, true);
            yield "</strong></p>
        </div>

        <!-- Grille de cartes -->
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4\">
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["listes"]) || array_key_exists("listes", $context) ? $context["listes"] : (function () { throw new RuntimeError('Variable "listes" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["liste"]) {
                // line 42
                yield "                <div class=\"col\">
                    <div class=\"card shadow-lg h-100 border-0 rounded-3 bg-light\">
                        <a href=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" class=\"image-link\">
                            ";
                // line 45
                if (CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "image", [], "any", false, false, false, 45)) {
                    // line 46
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "image", [], "any", false, false, false, 46))), "html", null, true);
                    yield "\" 
                                     alt=\"Image de ";
                    // line 47
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["liste"], "name", [], "any", false, false, false, 47), "html", null, true);
                    yield "\" 
                                     class=\"card-img-top img-fluid rounded-3\">
                            ";
                } else {
                    // line 50
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-placeholder.png"), "html", null, true);
                    yield "\" 
                                     alt=\"Image par défaut\" 
                                     class=\"card-img-top img-fluid rounded-3\">
                            ";
                }
                // line 54
                yield "                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['liste'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            yield "        </div>
    ";
        }
        // line 60
        yield "</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        toastElList.map(function (toastEl) {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        });
    });
</script>

<style>
    /* Custom styles for better user experience */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .image-link img {
        transition: transform 0.3s ease;
    }

    .image-link img:hover {
        transform: scale(1.05);
    }

    .btn {
        font-size: 16px;
        padding: 10px 20px;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .toast-body {
        font-size: 14px;
        font-weight: 500;
    }

    .btn-close-white {
        background-color: transparent;
    }

    .d-grid .btn {
        width: 100%;
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
        return "liste/index.html.twig";
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
        return array (  218 => 60,  214 => 58,  205 => 54,  197 => 50,  191 => 47,  186 => 46,  184 => 45,  180 => 44,  176 => 42,  172 => 41,  164 => 36,  161 => 35,  157 => 33,  155 => 32,  147 => 27,  140 => 22,  134 => 21,  123 => 16,  117 => 14,  112 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Listes{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <h1 class=\"text-center mb-4 text-primary\">Listes</h1>

    <!-- Notifications -->
    <div aria-live=\"polite\" aria-atomic=\"true\" class=\"position-relative\">
        <div class=\"toast-container position-fixed top-0 end-0 p-3\">
            {% for type, messages in app.session.flashBag.all %}
                {% for message in messages %}
                    <div class=\"toast align-items-center text-bg-{{ type == 'success' ? 'success' : 'danger' }} border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\" data-bs-delay=\"3000\">
                        <div class=\"d-flex\">
                            <div class=\"toast-body\">{{ message }}</div>
                            <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                        </div>
                    </div>
                {% endfor %}
            {% endfor %}
        </div>
    </div>

    <!-- Bouton pour ajouter une nouvelle liste -->
    <div class=\"text-center mb-4\">
        <a href=\"{{ path('app_liste_new') }}\" class=\"btn btn-success btn-lg rounded-pill shadow-lg\">
            <i class=\"bi bi-plus-circle\"></i> Ajouter une nouvelle liste
        </a>
    </div>

    {% if listes|length == 0 %}
        <p class=\"text-center\">Aucun enregistrement trouvé.</p>
    {% else %}
        <div class=\"text-center mb-4\">
            <p class=\"lead\">Total des articles : <strong>{{ listes|length }}</strong></p>
        </div>

        <!-- Grille de cartes -->
        <div class=\"row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4\">
            {% for liste in listes %}
                <div class=\"col\">
                    <div class=\"card shadow-lg h-100 border-0 rounded-3 bg-light\">
                        <a href=\"{{ path('app_liste_show', {'id': liste.id}) }}\" class=\"image-link\">
                            {% if liste.image %}
                                <img src=\"{{ asset('uploads/' ~ liste.image) }}\" 
                                     alt=\"Image de {{ liste.name }}\" 
                                     class=\"card-img-top img-fluid rounded-3\">
                            {% else %}
                                <img src=\"{{ asset('images/default-placeholder.png') }}\" 
                                     alt=\"Image par défaut\" 
                                     class=\"card-img-top img-fluid rounded-3\">
                            {% endif %}
                        </a>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const toastElList = [].slice.call(document.querySelectorAll('.toast'));
        toastElList.map(function (toastEl) {
            const toast = new bootstrap.Toast(toastEl);
            toast.show();
        });
    });
</script>

<style>
    /* Custom styles for better user experience */
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .image-link img {
        transition: transform 0.3s ease;
    }

    .image-link img:hover {
        transform: scale(1.05);
    }

    .btn {
        font-size: 16px;
        padding: 10px 20px;
    }

    .btn-info {
        background-color: #17a2b8;
        border-color: #17a2b8;
    }

    .btn-info:hover {
        background-color: #138496;
        border-color: #117a8b;
    }

    .btn-warning {
        background-color: #ffc107;
        border-color: #ffc107;
    }

    .btn-warning:hover {
        background-color: #e0a800;
        border-color: #d39e00;
    }

    .toast-body {
        font-size: 14px;
        font-weight: 500;
    }

    .btn-close-white {
        background-color: transparent;
    }

    .d-grid .btn {
        width: 100%;
    }
</style>
{% endblock %}
", "liste/index.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/index.html.twig");
    }
}
