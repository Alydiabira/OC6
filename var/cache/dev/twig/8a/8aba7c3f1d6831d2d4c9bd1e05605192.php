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

/* liste/_form.html.twig */
class __TwigTemplate_25a4013e6cdcc59352782dfe0431fe65 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start');
        yield "
    ";
        // line 3
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "imageFile", [], "any", false, false, false, 3), 'row', ["label" => "Télécharger une image"]);
        yield "
    <button type=\"submit\" class=\"btn btn-success mt-3\">
        ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 5, $this->source); })()), "Enregistrer")) : ("Enregistrer")), "html", null, true);
        yield "
    </button>
";
        // line 7
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_end');
        yield "

";
        // line 10
        if (array_key_exists("commentForm", $context)) {
            // line 11
            yield "    <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_comment_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
            yield "\">
        ";
            // line 12
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "comment-form"]]);
            yield "
            ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 13, $this->source); })()), "author", [], "any", false, false, false, 13), 'row', ["label" => "Votre nom"]);
            yield "
            ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 14, $this->source); })()), "content", [], "any", false, false, false, 14), 'row', ["label" => "Votre commentaire"]);
            yield "
            <button type=\"submit\" class=\"btn btn-primary mt-3\">Ajouter un commentaire</button>
        ";
            // line 16
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 16, $this->source); })()), 'form_end');
            yield "
    </form>
";
        } else {
            // line 19
            yield "    ";
            // line 20
            yield "    <p class=\"text-warning\">Le formulaire de commentaire n'est pas disponible.</p>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "liste/_form.html.twig";
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
        return array (  95 => 20,  93 => 19,  87 => 16,  82 => 14,  78 => 13,  74 => 12,  69 => 11,  67 => 10,  62 => 7,  57 => 5,  52 => 3,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Formulaire de la liste #}
{{ form_start(form) }}
    {{ form_row(form.imageFile, {'label': 'Télécharger une image'}) }}
    <button type=\"submit\" class=\"btn btn-success mt-3\">
        {{ button_label|default('Enregistrer') }}
    </button>
{{ form_end(form) }}

{# Vérifiez si le formulaire des commentaires est disponible avant de l'afficher #}
{% if commentForm is defined %}
    <form method=\"post\" action=\"{{ path('app_liste_comment_add', {'id': liste.id}) }}\">
        {{ form_start(commentForm, {'attr': {'class': 'comment-form'}}) }}
            {{ form_row(commentForm.author, {'label': 'Votre nom'}) }}
            {{ form_row(commentForm.content, {'label': 'Votre commentaire'}) }}
            <button type=\"submit\" class=\"btn btn-primary mt-3\">Ajouter un commentaire</button>
        {{ form_end(commentForm) }}
    </form>
{% else %}
    {# Affichez un message ou omettez le formulaire si `commentForm` n'est pas fourni #}
    <p class=\"text-warning\">Le formulaire de commentaire n'est pas disponible.</p>
{% endif %}
", "liste/_form.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/_form.html.twig");
    }
}
