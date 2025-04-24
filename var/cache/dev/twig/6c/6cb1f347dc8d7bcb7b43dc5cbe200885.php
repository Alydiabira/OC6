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

/* contact/contact.html.twig */
class __TwigTemplate_0f7823b814ae6da322ee759657d47761 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/contact.html.twig", 1);
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

        yield "Contact";
        
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
        yield "    <div class=\"container py-5\">
        <h1 class=\"text-center mb-4\">Contactez-nous</h1>

        ";
        // line 10
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "bg-white p-4 rounded shadow-sm"]]);
        yield "
        
            <div class=\"mb-3\">
                ";
        // line 14
        yield "                <label for=\"name\" class=\"form-label\">
                    <i class=\"fas fa-user\"></i> Votre nom
                </label>
                ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom", "aria-describedby" => "nameHelp"]]);
        // line 23
        yield "
                ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), 'errors');
        yield "
                <small id=\"nameHelp\" class=\"form-text text-muted\">Veuillez entrer votre nom complet.</small>
            </div>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">
                    <i class=\"fas fa-envelope\"></i> Votre email
                </label>
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre email", "aria-describedby" => "emailHelp"]]);
        // line 38
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'errors');
        yield "
                <small id=\"emailHelp\" class=\"form-text text-muted\">Nous utiliserons votre email pour vous répondre.</small>
            </div>

            <div class=\"mb-3\">
                <label for=\"message\" class=\"form-label\">
                    <i class=\"fas fa-comment\"></i> Votre message
                </label>
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "message", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Écrivez votre message", "rows" => 5]]);
        // line 53
        yield "
                ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "message", [], "any", false, false, false, 54), 'errors');
        yield "
            </div>

            <div class=\"d-grid gap-2\">
                ";
        // line 59
        yield "                ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "submit", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "btn btn-primary btn-lg", "style" => "transition: background-color 0.3s ease;"]]);
        // line 64
        yield "
            </div>
        
        ";
        // line 68
        yield "        ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "

        ";
        // line 71
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", ["success"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 72
            yield "            <div class=\"alert alert-success mt-4\">
                ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        yield "    </div>

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
        return "contact/contact.html.twig";
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
        return array (  192 => 76,  183 => 73,  180 => 72,  175 => 71,  169 => 68,  164 => 64,  161 => 59,  154 => 54,  151 => 53,  149 => 47,  138 => 39,  135 => 38,  133 => 32,  122 => 24,  119 => 23,  117 => 17,  112 => 14,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock %}

{% block body %}
    <div class=\"container py-5\">
        <h1 class=\"text-center mb-4\">Contactez-nous</h1>

        {# Commence le formulaire avec des classes modernes de Bootstrap et des animations #}
        {{ form_start(form, {'attr': {'class': 'bg-white p-4 rounded shadow-sm'}}) }}
        
            <div class=\"mb-3\">
                {# Affiche chaque champ du formulaire avec son label et les erreurs si nécessaire #}
                <label for=\"name\" class=\"form-label\">
                    <i class=\"fas fa-user\"></i> Votre nom
                </label>
                {{ form_widget(form.name, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Entrez votre nom',
                        'aria-describedby': 'nameHelp'
                    }
                }) }}
                {{ form_errors(form.name) }}
                <small id=\"nameHelp\" class=\"form-text text-muted\">Veuillez entrer votre nom complet.</small>
            </div>

            <div class=\"mb-3\">
                <label for=\"email\" class=\"form-label\">
                    <i class=\"fas fa-envelope\"></i> Votre email
                </label>
                {{ form_widget(form.email, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Entrez votre email',
                        'aria-describedby': 'emailHelp'
                    }
                }) }}
                {{ form_errors(form.email) }}
                <small id=\"emailHelp\" class=\"form-text text-muted\">Nous utiliserons votre email pour vous répondre.</small>
            </div>

            <div class=\"mb-3\">
                <label for=\"message\" class=\"form-label\">
                    <i class=\"fas fa-comment\"></i> Votre message
                </label>
                {{ form_widget(form.message, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'Écrivez votre message',
                        'rows': 5
                    }
                }) }}
                {{ form_errors(form.message) }}
            </div>

            <div class=\"d-grid gap-2\">
                {# Bouton de soumission avec un effet de survol et de transition #}
                {{ form_widget(form.submit, {
                    'attr': {
                        'class': 'btn btn-primary btn-lg',
                        'style': 'transition: background-color 0.3s ease;'
                    }
                }) }}
            </div>
        
        {# Termine le formulaire #}
        {{ form_end(form) }}

        {# Affiche un message flash de succès si l'envoi a été effectué #}
        {% for message in app.flashes('success') %}
            <div class=\"alert alert-success mt-4\">
                {{ message }}
            </div>
        {% endfor %}
    </div>

{% endblock %}
", "contact/contact.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/contact/contact.html.twig");
    }
}
