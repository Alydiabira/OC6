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

/* liste/new.html.twig */
class __TwigTemplate_a033f8e3bd86a20656a4778742fecae2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/new.html.twig", 1);
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

        yield "Créer une Nouvelle Liste";
        
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
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6 col-md-8 col-sm-12\">
            <!-- Notifications flash -->
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 11
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                yield "                    <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["type"], "html", null, true);
                yield " alert-dismissible fade show\" role=\"alert\">
                        ";
                // line 13
                yield $context["message"];
                yield "
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
            <!-- Formulaire de création ou d'édition de liste -->
            <div class=\"card shadow-sm border-0 rounded-3 mb-4\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h4>Créer une Nouvelle Liste</h4>
                </div>
                <div class=\"card-body\">
                    ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                        ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "name", [], "any", false, false, false, 26), 'row', ["label" => "Nom", "attr" => ["class" => "form-control", "placeholder" => "Entrez un nom"]]);
        // line 29
        yield "
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'row', ["label" => "Adresse Email", "attr" => ["class" => "form-control", "placeholder" => "Entrez un email valide"]]);
        // line 33
        yield "
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "imageFile", [], "any", false, false, false, 34), 'row', ["label" => "Télécharger une Image", "attr" => ["class" => "form-control"]]);
        // line 37
        yield "
                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_index");
        yield "\" class=\"btn btn-secondary\">Retour à la Liste</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>

            <!-- Formulaire d'ajout de commentaire -->
            ";
        // line 47
        if (array_key_exists("commentForm", $context)) {
            // line 48
            yield "                <div class=\"card shadow-sm border-0 rounded-3\">
                    <div class=\"card-header bg-info text-white text-center\">
                        <h4>Ajouter un Commentaire</h4>
                    </div>
                    <div class=\"card-body\">
                        ";
            // line 53
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 53, $this->source); })()), 'form_start');
            yield "
                            ";
            // line 54
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 54, $this->source); })()), "content", [], "any", false, false, false, 54), 'row', ["label" => "Votre commentaire", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre commentaire"]]);
            yield "
                            <div class=\"text-end mt-3\">
                                <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
                            </div>
                        ";
            // line 58
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 58, $this->source); })()), 'form_end');
            yield "
                    </div>
                </div>
            ";
        }
        // line 62
        yield "        </div>
    </div>
</div>

<!-- Styles CSS -->
<style>
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
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
        return "liste/new.html.twig";
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
        return array (  206 => 62,  199 => 58,  192 => 54,  188 => 53,  181 => 48,  179 => 47,  171 => 42,  165 => 39,  161 => 37,  159 => 34,  156 => 33,  154 => 30,  151 => 29,  149 => 26,  145 => 25,  136 => 18,  130 => 17,  120 => 13,  115 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer une Nouvelle Liste{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6 col-md-8 col-sm-12\">
            <!-- Notifications flash -->
            {% for type, messages in app.flashes %}
                {% for message in messages %}
                    <div class=\"alert alert-{{ type }} alert-dismissible fade show\" role=\"alert\">
                        {{ message|raw }}
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                {% endfor %}
            {% endfor %}

            <!-- Formulaire de création ou d'édition de liste -->
            <div class=\"card shadow-sm border-0 rounded-3 mb-4\">
                <div class=\"card-header bg-primary text-white text-center\">
                    <h4>Créer une Nouvelle Liste</h4>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'enctype': 'multipart/form-data'}}) }}
                        {{ form_row(form.name, {
                            'label': 'Nom',
                            'attr': {'class': 'form-control', 'placeholder': 'Entrez un nom'}
                        }) }}
                        {{ form_row(form.email, {
                            'label': 'Adresse Email',
                            'attr': {'class': 'form-control', 'placeholder': 'Entrez un email valide'}
                        }) }}
                        {{ form_row(form.imageFile, {
                            'label': 'Télécharger une Image',
                            'attr': {'class': 'form-control'}
                        }) }}
                        <div class=\"d-flex justify-content-between align-items-center mt-4\">
                            <a href=\"{{ path('app_liste_index') }}\" class=\"btn btn-secondary\">Retour à la Liste</a>
                            <button type=\"submit\" class=\"btn btn-primary\">Enregistrer</button>
                        </div>
                    {{ form_end(form) }}
                </div>
            </div>

            <!-- Formulaire d'ajout de commentaire -->
            {% if commentForm is defined %}
                <div class=\"card shadow-sm border-0 rounded-3\">
                    <div class=\"card-header bg-info text-white text-center\">
                        <h4>Ajouter un Commentaire</h4>
                    </div>
                    <div class=\"card-body\">
                        {{ form_start(commentForm) }}
                            {{ form_row(commentForm.content, {'label': 'Votre commentaire', 'attr': {'class': 'form-control', 'placeholder': 'Entrez votre commentaire'}}) }}
                            <div class=\"text-end mt-3\">
                                <button type=\"submit\" class=\"btn btn-info\">Envoyer</button>
                            </div>
                        {{ form_end(commentForm) }}
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Styles CSS -->
<style>
    .card {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-secondary {
        background-color: #6c757d;
        border: none;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    .btn-info {
        background-color: #17a2b8;
        border: none;
    }

    .btn-info:hover {
        background-color: #138496;
    }
</style>
{% endblock %}
", "liste/new.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/new.html.twig");
    }
}
