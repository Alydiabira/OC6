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

/* admin/blog/show.html.twig */
class __TwigTemplate_f02396de5c20a4de2b9133ff15fac0bd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/blog/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/show.html.twig", 1);
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

        yield "admin_post_show";
        
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
        yield "    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <h1 class=\"text-center mb-4\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</h1>

                <p class=\"post-metadata text-center text-muted mb-4\">
                    <span class=\"metadata me-3\">
                        ";
        // line 13
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month"]);
        yield " 
                        ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "publishedAt", [], "any", false, false, false, 14), "long", "medium", "", "UTC"), "html", null, true);
        yield "
                    </span>
                    <span class=\"metadata\">
                        ";
        // line 17
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "author", [], "any", false, false, false, 17), "fullName", [], "any", false, false, false, 17), "html", null, true);
        yield "
                    </span>
                </p>

                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 21, $this->source); })()), "image", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <div class=\"text-center my-4\">
                        <img src=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Vich\UploaderBundle\Twig\Extension\UploaderExtensionRuntime')->asset((isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 23, $this->source); })()), "imageFile"), "html", null, true);
            yield "\" 
                            alt=\"Image de ";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
            yield "\" 
                            class=\"img-fluid rounded shadow-lg\">
                    </div>
                ";
        }
        // line 28
        yield "
                <div class=\"card shadow-sm border-0 my-4\">
                    <div class=\"card-body bg-light py-3 px-4\">
                        <p class=\"mb-0\"><strong>";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.summary"), "html", null, true);
        yield "</strong>: ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "summary", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"post-content pb-4\">
                    ";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\HtmlSanitizerExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "content", [], "any", false, false, false, 36)));
        yield "
                </div>

                ";
        // line 39
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_post_tags.html.twig");
        yield "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body text-center py-4\">
                        <h4 class=\"mb-3\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.manage_post"), "html", null, true);
        yield "</h4>
                        
                        <div class=\"d-grid gap-3\">
                            <a href=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        yield "\" class=\"btn btn-outline-success\">
                                ";
        // line 55
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:pencil"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.edit_contents"), "html", null, true);
        yield "
                            </a>
                            
                            <div>
                                ";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "admin/blog/_delete_form.html.twig", ["post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 59, $this->source); })())], false);
        yield "
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"mt-4\">
                    ";
        // line 66
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
                </div>

                <div class=\"text-center mt-3\">
                    ";
        // line 70
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
                </div>
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
        return "admin/blog/show.html.twig";
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
        return array (  241 => 70,  234 => 66,  224 => 59,  215 => 55,  211 => 54,  205 => 51,  198 => 46,  185 => 45,  169 => 39,  163 => 36,  153 => 31,  148 => 28,  141 => 24,  137 => 23,  134 => 22,  132 => 21,  123 => 17,  117 => 14,  113 => 13,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout.html.twig' %}

{% block body_id 'admin_post_show' %}

{% block main %}
    <div class=\"container mt-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <h1 class=\"text-center mb-4\">{{ post.title }}</h1>

                <p class=\"post-metadata text-center text-muted mb-4\">
                    <span class=\"metadata me-3\">
                        {{ component('ux:icon', { name: 'tabler:calendar-month' }) }} 
                        {{ post.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}
                    </span>
                    <span class=\"metadata\">
                        {{ component('ux:icon', { name: 'tabler:user' }) }} {{ post.author.fullName }}
                    </span>
                </p>

                {% if post.image %}
                    <div class=\"text-center my-4\">
                        <img src=\"{{ vich_uploader_asset(post, 'imageFile') }}\" 
                            alt=\"Image de {{ post.title }}\" 
                            class=\"img-fluid rounded shadow-lg\">
                    </div>
                {% endif %}

                <div class=\"card shadow-sm border-0 my-4\">
                    <div class=\"card-body bg-light py-3 px-4\">
                        <p class=\"mb-0\"><strong>{{ 'label.summary'|trans }}</strong>: {{ post.summary }}</p>
                    </div>
                </div>

                <div class=\"post-content pb-4\">
                    {{ post.content|markdown_to_html|sanitize_html }}
                </div>

                {{ include('blog/_post_tags.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    <div class=\"container mt-4\">
        <div class=\"row justify-content-center\">
            <div class=\"col-lg-8\">
                <div class=\"card shadow-sm border-0\">
                    <div class=\"card-body text-center py-4\">
                        <h4 class=\"mb-3\">{{ 'action.manage_post'|trans }}</h4>
                        
                        <div class=\"d-grid gap-3\">
                            <a href=\"{{ path('admin_post_edit', {id: post.id}) }}\" class=\"btn btn-outline-success\">
                                {{ component('ux:icon', { name: 'tabler:pencil' }) }} {{ 'action.edit_contents'|trans }}
                            </a>
                            
                            <div>
                                {{ include('admin/blog/_delete_form.html.twig', {post: post}, with_context = false) }}
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"mt-4\">
                    {{ parent() }}
                </div>

                <div class=\"text-center mt-3\">
                    {{ show_source_code(_self) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/blog/show.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/admin/blog/show.html.twig");
    }
}
