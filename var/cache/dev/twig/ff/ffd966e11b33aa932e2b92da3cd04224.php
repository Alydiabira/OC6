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

/* liste/_delete_form.html.twig */
class __TwigTemplate_abf13fcd0d7dfad867e352325d4f536e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/_delete_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/_delete_form.html.twig"));

        // line 1
        if (array_key_exists("liste", $context)) {
            // line 2
            yield "    <!-- Formulaire pour supprimer la liste -->
    <form method=\"post\" 
          action=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\" 
          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\" 
          class=\"d-inline-block\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 7
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7))), "html", null, true);
            yield "\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
            <i class=\"bi bi-trash\"></i> Supprimer la Liste
        </button>
    </form>
";
        }
        // line 13
        yield "
";
        // line 14
        if (array_key_exists("comment", $context)) {
            // line 15
            yield "    <!-- Formulaire pour supprimer un commentaire -->
    <form method=\"post\" 
          action=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            yield "\" 
          onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\" 
          class=\"d-inline-block\">
        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20))), "html", null, true);
            yield "\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
            <i class=\"bi bi-trash\"></i> Supprimer le Commentaire
        </button>
    </form>
";
        }
        // line 26
        yield "
<!-- Styles CSS -->
<style>
    /* Style général du bouton danger */
    .btn-danger {
        background-color: #dc3545;
        border: none;
        transition: background-color 0.2s ease, transform 0.2s ease;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 4px;
    }

    .btn-danger:hover {
        background-color: #c82333;
        transform: scale(1.05);
        color: white;
    }

    .btn-danger i {
        margin-right: 5px;
    }

    /* Style spécifique pour les écrans petits */
    @media (max-width: 576px) {
        .btn-danger {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }
    }

    /* Style pour les écrans moyens */
    @media (min-width: 576px) and (max-width: 768px) {
        .btn-danger {
            font-size: 0.85rem;
            padding: 0.45rem 0.9rem;
        }
    }

    /* Style pour les écrans grands */
    @media (min-width: 768px) {
        .btn-danger {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }
    }
</style>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "liste/_delete_form.html.twig";
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
        return array (  93 => 26,  84 => 20,  78 => 17,  74 => 15,  72 => 14,  69 => 13,  60 => 7,  54 => 4,  50 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if liste is defined %}
    <!-- Formulaire pour supprimer la liste -->
    <form method=\"post\" 
          action=\"{{ path('app_liste_delete', {'id': liste.id}) }}\" 
          onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet élément ?');\" 
          class=\"d-inline-block\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ liste.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
            <i class=\"bi bi-trash\"></i> Supprimer la Liste
        </button>
    </form>
{% endif %}

{% if comment is defined %}
    <!-- Formulaire pour supprimer un commentaire -->
    <form method=\"post\" 
          action=\"{{ path('app_comment_delete', {'id': comment.id}) }}\" 
          onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\" 
          class=\"d-inline-block\">
        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
        <button type=\"submit\" class=\"btn btn-danger btn-sm\">
            <i class=\"bi bi-trash\"></i> Supprimer le Commentaire
        </button>
    </form>
{% endif %}

<!-- Styles CSS -->
<style>
    /* Style général du bouton danger */
    .btn-danger {
        background-color: #dc3545;
        border: none;
        transition: background-color 0.2s ease, transform 0.2s ease;
        font-size: 0.9rem;
        padding: 0.5rem 1rem;
        border-radius: 4px;
    }

    .btn-danger:hover {
        background-color: #c82333;
        transform: scale(1.05);
        color: white;
    }

    .btn-danger i {
        margin-right: 5px;
    }

    /* Style spécifique pour les écrans petits */
    @media (max-width: 576px) {
        .btn-danger {
            font-size: 0.8rem;
            padding: 0.4rem 0.8rem;
        }
    }

    /* Style pour les écrans moyens */
    @media (min-width: 576px) and (max-width: 768px) {
        .btn-danger {
            font-size: 0.85rem;
            padding: 0.45rem 0.9rem;
        }
    }

    /* Style pour les écrans grands */
    @media (min-width: 768px) {
        .btn-danger {
            font-size: 0.9rem;
            padding: 0.5rem 1rem;
        }
    }
</style>
", "liste/_delete_form.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/_delete_form.html.twig");
    }
}
