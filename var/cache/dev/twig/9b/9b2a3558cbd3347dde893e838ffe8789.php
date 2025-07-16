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

/* admin/blog/index.html.twig */
class __TwigTemplate_d5de84a8772e706b5a368b71c09e0ead extends Template
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
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/index.html.twig", 1);
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

        yield "admin_post_index";
        
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
    <h2 class=\"text-center mb-4\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.post_list"), "html", null, true);
        yield "</h2>

    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body px-4 py-3\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\" class=\"py-3\">Image</th>
                            <th scope=\"col\" class=\"py-3\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.title"), "html", null, true);
        yield "</th>
                            <th scope=\"col\" class=\"py-3\">Description</th>
                            <th scope=\"col\" class=\"py-3\">Disponible</th>
                            <th scope=\"col\" class=\"py-3\">Créé le</th>
                            <th scope=\"col\" class=\"py-3\">
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.published_at"), "html", null, true);
        yield "
                            </th>
                            <th scope=\"col\" class=\"text-center py-3\">
                                ";
        // line 24
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:settings"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.actions"), "html", null, true);
        yield "
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 30
            yield "                        <tr>
                        <td class=\"py-2\">
                            ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 32)) {
                // line 33
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 33))), "html", null, true);
                yield "\" alt=\"Image de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "\" style=\"width: 100px;\" class=\"img-thumbnail\">
                            ";
            } else {
                // line 35
                yield "                                <span class=\"text-muted\">Aucune image</span>
                            ";
            }
            // line 37
            yield "                        </td>                            
                        <td class=\"py-2\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 38), "html", null, true);
            yield "</td>
                            <td class=\"py-2\">
                                ";
            // line 40
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 40)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 40), 0, 60) . (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 40)) > 60)) ? ("…") : (""))), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"py-2\">
                                ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "available", [], "any", false, false, false, 43)) {
                // line 44
                yield "                                    <span class=\"badge bg-success\">Oui</span>
                                ";
            } else {
                // line 46
                yield "                                    <span class=\"badge bg-danger\">Non</span>
                                ";
            }
            // line 48
            yield "                            </td>
                            <td class=\"py-2\">
                                ";
            // line 50
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 50)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true)) : ("—"));
            yield "
                            </td>
                            <td class=\"py-2\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 52), "medium", "short", "", "UTC"), "html", null, true);
            yield "</td>
                            <td class=\"text-center py-2\">
                                <div class=\"d-flex justify-content-center gap-3\">
                                    <a href=\"";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm\">
                                        ";
            // line 56
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:eye"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.show"), "html", null, true);
            yield "
                                    </a>
                                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm\">
                                        ";
            // line 59
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:pencil"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit"), "html", null, true);
            yield "
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        // line 70
        if (!$context['_iterated']) {
            // line 65
            yield "                        <tr>
                            <td colspan=\"6\" class=\"text-center text-muted py-4\">
                                ";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            yield "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body text-center py-4\">
            <h4 class=\"mb-3\">";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sidebar.create_post"), "html", null, true);
        yield "</h4>
            <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_new");
        yield "\" class=\"btn btn-success w-100\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create_post"), "html", null, true);
        yield "\">
                ";
        // line 85
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:pencil"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.create_post"), "html", null, true);
        yield "
            </a>
        </div>
    </div>
</div>

<div class=\"mt-4\">
    ";
        // line 92
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
</div>

<div class=\"text-center mt-3\">
    ";
        // line 96
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
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
        return "admin/blog/index.html.twig";
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
        return array (  311 => 96,  304 => 92,  292 => 85,  286 => 84,  282 => 83,  277 => 80,  264 => 79,  247 => 71,  237 => 67,  233 => 65,  231 => 70,  219 => 59,  215 => 58,  208 => 56,  204 => 55,  198 => 52,  193 => 50,  189 => 48,  185 => 46,  181 => 44,  179 => 43,  173 => 40,  168 => 38,  165 => 37,  161 => 35,  153 => 33,  151 => 32,  147 => 30,  142 => 29,  132 => 24,  124 => 21,  116 => 16,  104 => 7,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_index' %}

{% block main %}
<div class=\"container mt-5\">
    <h2 class=\"text-center mb-4\">{{ 'title.post_list'|trans }}</h2>

    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body px-4 py-3\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover table-striped align-middle\">
                    <thead class=\"table-light\">
                        <tr>
                            <th scope=\"col\" class=\"py-3\">Image</th>
                            <th scope=\"col\" class=\"py-3\">{{ 'label.title'|trans }}</th>
                            <th scope=\"col\" class=\"py-3\">Description</th>
                            <th scope=\"col\" class=\"py-3\">Disponible</th>
                            <th scope=\"col\" class=\"py-3\">Créé le</th>
                            <th scope=\"col\" class=\"py-3\">
                                {{ component('ux:icon', { name: 'tabler:calendar-month' }) }} {{ 'label.published_at'|trans }}
                            </th>
                            <th scope=\"col\" class=\"text-center py-3\">
                                {{ component('ux:icon', { name: 'tabler:settings' }) }} {{ 'label.actions'|trans }}
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for post in posts %}
                        <tr>
                        <td class=\"py-2\">
                            {% if post.image %}
                                <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"Image de {{ post.title }}\" style=\"width: 100px;\" class=\"img-thumbnail\">
                            {% else %}
                                <span class=\"text-muted\">Aucune image</span>
                            {% endif %}
                        </td>                            
                        <td class=\"py-2\">{{ post.title }}</td>
                            <td class=\"py-2\">
                                {{ post.description ? post.description[:60] ~ (post.description|length > 60 ? '…' : '') : '—' }}
                            </td>
                            <td class=\"py-2\">
                                {% if post.available %}
                                    <span class=\"badge bg-success\">Oui</span>
                                {% else %}
                                    <span class=\"badge bg-danger\">Non</span>
                                {% endif %}
                            </td>
                            <td class=\"py-2\">
                                {{ post.createdAt ? post.createdAt|date('d/m/Y') : '—' }}
                            </td>
                            <td class=\"py-2\">{{ post.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}</td>
                            <td class=\"text-center py-2\">
                                <div class=\"d-flex justify-content-center gap-3\">
                                    <a href=\"{{ path('admin_post_show', {id: post.id}) }}\" class=\"btn btn-outline-secondary btn-sm\">
                                        {{ component('ux:icon', { name: 'tabler:eye' }) }} {{ 'action.show'|trans }}
                                    </a>
                                    <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-outline-primary btn-sm\">
                                        {{ component('ux:icon', { name: 'tabler:pencil' }) }} {{ 'action.edit'|trans }}
                                    </a>
                                </div>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"6\" class=\"text-center text-muted py-4\">
                                {{ 'post.no_posts_found'|trans }}
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block sidebar %}
<div class=\"container mt-4\">
    <div class=\"card shadow-sm border-0\">
        <div class=\"card-body text-center py-4\">
            <h4 class=\"mb-3\">{{ 'sidebar.create_post'|trans }}</h4>
            <a href=\"{{ path('admin_post_new') }}\" class=\"btn btn-success w-100\" aria-label=\"{{ 'action.create_post'|trans }}\">
                {{ component('ux:icon', { name: 'tabler:pencil' }) }} {{ 'action.create_post'|trans }}
            </a>
        </div>
    </div>
</div>

<div class=\"mt-4\">
    {{ parent() }}
</div>

<div class=\"text-center mt-3\">
    {{ show_source_code(_self) }}
</div>
{% endblock %}
", "admin/blog/index.html.twig", "/Users/diabiraaly/Desktop/PHP-blog-emilie-forteroche/OC6/templates/admin/blog/index.html.twig");
    }
}
