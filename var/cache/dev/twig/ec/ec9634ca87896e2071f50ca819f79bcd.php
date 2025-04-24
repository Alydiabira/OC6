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

/* liste/show.html.twig */
class __TwigTemplate_e9fa2ff61bc55d7fc7c08f2b6313161a extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/show.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Détails de la Liste";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
";
        // line 11
        yield "<section id=\"conseils\" style=\"background-color: #fafafa; padding: 20px; margin-bottom: 20px; border-radius: 10px;\">
    <h2 style=\"margin-bottom: 10px;\">Conseils de présentation et d'amélioration</h2>
    <ul style=\"list-style-type: disc; padding-left: 40px;\">
        <li>
            Utilisez <strong>display: flex</strong> ou <strong>display: grid</strong> pour organiser les contenus en colonnes de façon responsive.
        </li>
        <li>
            Inspirez-vous des réseaux sociaux pour un design épuré, avec des cartes minimalistes et beaucoup d'espacement.
        </li>
        <li>
            Mettez en avant les éléments clés : titre, image, actions principales, afin d'améliorer l'expérience utilisateur.
        </li>
        <li>
            Pour gérer les icônes, vous pouvez incorporer des SVG personnalisés ou un set d’icônes léger, plutôt que les classes Bootstrap.
        </li>
        <li>
            Utilisez des classes réutilisables pour les boutons et les blocs de contenu, de manière à normaliser l’apparence.
        </li>
    </ul>
</section>

";
        // line 35
        yield "<style>
/* ---- Structure Générale de la Page ---- */
.page-container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  color: #333;
  padding-bottom: 40px;
}

/* ---- Flash messages ---- */
.flash-container {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 1050;
}

.flash-message {
  background-color: #4caf50; /* Couleur de fond pour succès */
  color: #fff;
  padding: 12px 16px;
  margin-bottom: 10px;
  border-radius: 6px;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-width: 220px;
}

.flash-message.error {
  background-color: #f44336; /* Couleur de fond pour erreur */
}

.flash-message .close-btn {
  background: transparent;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 1rem;
}

/* ---- Disposition en colonnes ---- */
.columns {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}

.column {
  background-color: #fff;
  flex: 1;
  min-width: 280px; /* pour une meilleure réactivité sur les petits écrans */
  max-width: 350px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

/* ---- En-tête des colonnes ---- */
.column-header {
  background-color: #fafafa;
  padding: 12px;
  font-weight: bold;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

/* ---- Contenu des colonnes ---- */
.column-content {
  padding: 16px;
  flex-grow: 1; /* pour étirer le contenu */
}

/* ---- Styles liste de détails ---- */
.details-liste img {
  width: 100%;
  height: auto;
}

.details-liste ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.details-liste li {
  margin-bottom: 8px;
}

/* ---- Zone d'actions ---- */
.actions {
  display: flex;
  justify-content: space-between;
  margin-top: 16px;
}

.action-button {
  background-color: #2196f3; 
  color: #fff;
  text-decoration: none;
  font-size: 0.85rem;
  padding: 8px 12px;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.action-button.secondary {
  background-color: #ccc;
  color: #333;
}

.action-button.danger {
  background-color: #f44336;
  color: #fff;
}

/* ---- Styles des commentaires ---- */
.commentaires .list-group {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.commentaires .list-group-item {
  border-bottom: 1px solid #eee;
  padding: 8px 0;
}

.commentaires .list-group-item form {
  display: inline-block;
  margin-left: 10px;
}

/* ---- Liste des utilisateurs ---- */
.utilisateurs .user-card {
  background-color: #fafafa;
  border: 1px solid #eee;
  border-radius: 6px;
  padding: 8px 12px;
  margin-bottom: 8px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.utilisateurs .user-card h6 {
  margin: 0 0 4px;
}

.utilisateurs .user-card p {
  margin: 0 0 4px;
  font-size: 0.85rem;
}

.utilisateurs .user-card .badge {
  display: inline-block;
  background-color: #ccc;
  color: #333;
  font-size: 0.75rem;
  padding: 2px 6px;
  border-radius: 4px;
}

/* ---- Classes utilitaires ---- */
.badge-success {
  background-color: #4caf50 !important;
  color: #fff !important;
}

.badge-secondary {
  background-color: #9e9e9e !important;
  color: #fff !important;
}

.text-muted {
  color: #999;
}

.text-center {
  text-align: center;
}
</style>

<div class=\"page-container\">

    ";
        // line 233
        yield "    <div class=\"flash-container\">
        ";
        // line 234
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 234, $this->source); })()), "flashes", [], "any", false, false, false, 234));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 235
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 236
                yield "                <div class=\"flash-message ";
                yield ((($context["type"] == "success")) ? ("") : ("error"));
                yield "\">
                    <span>";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                    <button type=\"button\" class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">x</button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 241
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['type'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        yield "    </div>

    ";
        // line 247
        yield "    <div class=\"columns\">
        
        ";
        // line 250
        yield "        <div class=\"column details-liste\">
            ";
        // line 251
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 251, $this->source); })()), "image", [], "any", false, false, false, 251)) {
            // line 252
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 252, $this->source); })()), "image", [], "any", false, false, false, 252))), "html", null, true);
            yield "\" alt=\"Image de ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 252, $this->source); })()), "name", [], "any", false, false, false, 252), "html", null, true);
            yield "\">
            ";
        }
        // line 254
        yield "            
            <div class=\"column-header\">
                Détails de la Liste
            </div>
            <div class=\"column-content\">
                <ul>
                    <li><strong>ID :</strong> ";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 260, $this->source); })()), "id", [], "any", false, false, false, 260), "html", null, true);
        yield "</li>
                    <li><strong>Nom :</strong> ";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 261, $this->source); })()), "name", [], "any", false, false, false, 261), "html", null, true);
        yield "</li>
                    <li><strong>Email :</strong> ";
        // line 262
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 262, $this->source); })()), "email", [], "any", false, false, false, 262)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 262, $this->source); })()), "email", [], "any", false, false, false, 262), "html", null, true)) : ("Non spécifié"));
        yield "</li>
                    <li><strong>Utilisateur :</strong> ";
        // line 263
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 263, $this->source); })()), "user", [], "any", false, false, false, 263), "email", [], "any", false, false, false, 263)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 263, $this->source); })()), "user", [], "any", false, false, false, 263), "email", [], "any", false, false, false, 263), "html", null, true)) : ("Non spécifié"));
        yield "</li>
                    <li>
                        <strong>Projet associé :</strong>
                        ";
        // line 266
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 266, $this->source); })()), "projet", [], "any", false, false, false, 266)) {
            // line 267
            yield "                            <span class=\"badge badge-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 267, $this->source); })()), "projet", [], "any", false, false, false, 267), "html", null, true);
            yield "</span>
                        ";
        } else {
            // line 269
            yield "                            <span class=\"text-muted\">Aucun projet associé</span>
                        ";
        }
        // line 271
        yield "                    </li>
                    <li><strong>Créé le :</strong> ";
        // line 272
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 272, $this->source); })()), "createdAt", [], "any", false, false, false, 272), "d/m/Y H:i"), "html", null, true);
        yield "</li>
                </ul>
                
                <div class=\"actions\">
                    <a href=\"";
        // line 276
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_index");
        yield "\" class=\"action-button secondary\">
                        ← Retour
                    </a>
                    
                    ";
        // line 280
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 280, $this->source); })()), "user", [], "any", false, false, false, 280)))) {
            // line 281
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 281, $this->source); })()), "id", [], "any", false, false, false, 281)]), "html", null, true);
            yield "\" class=\"action-button\">
                            ✎ Modifier
                        </a>
                    ";
        }
        // line 285
        yield "                    
                   
                </div>
            </div>
        </div>

        ";
        // line 292
        yield "        <div class=\"column commentaires\">
            <div class=\"column-header\">
                Commentaires
            </div>
            <div class=\"column-content\">
                ";
        // line 297
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 297, $this->source); })()), "comments", [], "any", false, false, false, 297)) == 0)) {
            // line 298
            yield "                    <p class=\"text-muted\">Aucun commentaire pour cette liste.</p>
                ";
        } else {
            // line 300
            yield "                    <ul class=\"list-group\">
                        ";
            // line 301
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 301, $this->source); })()), "comments", [], "any", false, false, false, 301));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 302
                yield "                            <li class=\"list-group-item\">
                                <div>
                                    <strong>";
                // line 304
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 304), "html", null, true);
                yield "</strong>
                                    <p style=\"margin: 4px 0;\">";
                // line 305
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 305), "html", null, true);
                yield "</p>
                                    <small class=\"text-muted\">
                                        Ajouté le ";
                // line 307
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 307), "d/m/Y H:i"), "html", null, true);
                yield "
                                    </small>
                                </div>
                                ";
                // line 310
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") || (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 310, $this->source); })()), "user", [], "any", false, false, false, 310)))) {
                    // line 311
                    yield "                                    <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 311)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 312
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 312))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" class=\"action-button danger\" style=\"margin-top: 6px;\">
                                            Supprimer
                                        </button>
                                    </form>
                                ";
                }
                // line 318
                yield "                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            yield "                    </ul>
                ";
        }
        // line 322
        yield "            </div>
        </div>

        ";
        // line 326
        yield "        <div class=\"column utilisateurs\">
            <div class=\"column-header\">
                Liste des Utilisateurs
            </div>
            <div class=\"column-content\">
                ";
        // line 331
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 331, $this->source); })())) == 0)) {
            // line 332
            yield "                    <p class=\"text-muted\">Aucun utilisateur trouvé.</p>
                ";
        } else {
            // line 334
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 334, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 335
                yield "                        <div class=\"user-card\">
                            <div>
                                <h6>";
                // line 337
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 337), "html", null, true);
                yield "</h6>
                                <p><strong>ID :</strong> ";
                // line 338
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 338), "html", null, true);
                yield "</p>
                                <p>
                                    <strong>Rôles :</strong>
                                    ";
                // line 341
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 341));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 342
                    yield "                                        <span class=\"badge badge-secondary\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                    yield "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 344
                yield "                                </p>
                                <p>
                                    <strong>Projet associé :</strong>
                                    ";
                // line 347
                if (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "projet", [], "any", false, false, false, 347)) {
                    // line 348
                    yield "                                        <span class=\"badge badge-success\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "projet", [], "any", false, false, false, 348), "html", null, true);
                    yield "</span>
                                    ";
                } else {
                    // line 350
                    yield "                                        <span class=\"text-muted\">Aucun projet associé</span>
                                    ";
                }
                // line 352
                yield "                                </p>
                            </div>
                            ";
                // line 354
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                    // line 355
                    yield "                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 355, $this->source); })()), "id", [], "any", false, false, false, 355)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette liste ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 356
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_list_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 356, $this->source); })()), "id", [], "any", false, false, false, 356))), "html", null, true);
                    yield "\">
                                    <button type=\"submit\" class=\"action-button danger\" style=\"font-size: 0.75rem;\">
                                        Supprimer
                                    </button>
                                </form>
                            ";
                }
                // line 362
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 364
            yield "                ";
        }
        // line 365
        yield "            </div>
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
        return "liste/show.html.twig";
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
        return array (  613 => 365,  610 => 364,  603 => 362,  594 => 356,  589 => 355,  587 => 354,  583 => 352,  579 => 350,  573 => 348,  571 => 347,  566 => 344,  557 => 342,  553 => 341,  547 => 338,  543 => 337,  539 => 335,  534 => 334,  530 => 332,  528 => 331,  521 => 326,  516 => 322,  512 => 320,  505 => 318,  496 => 312,  491 => 311,  489 => 310,  483 => 307,  478 => 305,  474 => 304,  470 => 302,  466 => 301,  463 => 300,  459 => 298,  457 => 297,  450 => 292,  442 => 285,  434 => 281,  432 => 280,  425 => 276,  418 => 272,  415 => 271,  411 => 269,  405 => 267,  403 => 266,  397 => 263,  393 => 262,  389 => 261,  385 => 260,  377 => 254,  369 => 252,  367 => 251,  364 => 250,  360 => 247,  356 => 242,  350 => 241,  340 => 237,  335 => 236,  330 => 235,  326 => 234,  323 => 233,  126 => 35,  103 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/liste/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails de la Liste{% endblock %}

{% block body %}

{# ------------------------------------ #
  SECTION : CONSEILS D'AMÉLIORATION
  ------------------------------------ #}
<section id=\"conseils\" style=\"background-color: #fafafa; padding: 20px; margin-bottom: 20px; border-radius: 10px;\">
    <h2 style=\"margin-bottom: 10px;\">Conseils de présentation et d'amélioration</h2>
    <ul style=\"list-style-type: disc; padding-left: 40px;\">
        <li>
            Utilisez <strong>display: flex</strong> ou <strong>display: grid</strong> pour organiser les contenus en colonnes de façon responsive.
        </li>
        <li>
            Inspirez-vous des réseaux sociaux pour un design épuré, avec des cartes minimalistes et beaucoup d'espacement.
        </li>
        <li>
            Mettez en avant les éléments clés : titre, image, actions principales, afin d'améliorer l'expérience utilisateur.
        </li>
        <li>
            Pour gérer les icônes, vous pouvez incorporer des SVG personnalisés ou un set d’icônes léger, plutôt que les classes Bootstrap.
        </li>
        <li>
            Utilisez des classes réutilisables pour les boutons et les blocs de contenu, de manière à normaliser l’apparence.
        </li>
    </ul>
</section>

{# ------------------------------------ #
  SECTION : STYLES
  ------------------------------------ #}
<style>
/* ---- Structure Générale de la Page ---- */
.page-container {
  width: 90%;
  max-width: 1200px;
  margin: 0 auto;
  font-family: Arial, sans-serif;
  color: #333;
  padding-bottom: 40px;
}

/* ---- Flash messages ---- */
.flash-container {
  position: fixed;
  top: 20px;
  right: 20px;
  z-index: 1050;
}

.flash-message {
  background-color: #4caf50; /* Couleur de fond pour succès */
  color: #fff;
  padding: 12px 16px;
  margin-bottom: 10px;
  border-radius: 6px;
  font-size: 0.9rem;
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-width: 220px;
}

.flash-message.error {
  background-color: #f44336; /* Couleur de fond pour erreur */
}

.flash-message .close-btn {
  background: transparent;
  border: none;
  color: #fff;
  cursor: pointer;
  font-size: 1rem;
}

/* ---- Disposition en colonnes ---- */
.columns {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 20px;
}

.column {
  background-color: #fff;
  flex: 1;
  min-width: 280px; /* pour une meilleure réactivité sur les petits écrans */
  max-width: 350px;
  border: 1px solid #ddd;
  border-radius: 8px;
  overflow: hidden;
  display: flex;
  flex-direction: column;
}

/* ---- En-tête des colonnes ---- */
.column-header {
  background-color: #fafafa;
  padding: 12px;
  font-weight: bold;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

/* ---- Contenu des colonnes ---- */
.column-content {
  padding: 16px;
  flex-grow: 1; /* pour étirer le contenu */
}

/* ---- Styles liste de détails ---- */
.details-liste img {
  width: 100%;
  height: auto;
}

.details-liste ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.details-liste li {
  margin-bottom: 8px;
}

/* ---- Zone d'actions ---- */
.actions {
  display: flex;
  justify-content: space-between;
  margin-top: 16px;
}

.action-button {
  background-color: #2196f3; 
  color: #fff;
  text-decoration: none;
  font-size: 0.85rem;
  padding: 8px 12px;
  border-radius: 4px;
  border: none;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 6px;
}

.action-button.secondary {
  background-color: #ccc;
  color: #333;
}

.action-button.danger {
  background-color: #f44336;
  color: #fff;
}

/* ---- Styles des commentaires ---- */
.commentaires .list-group {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.commentaires .list-group-item {
  border-bottom: 1px solid #eee;
  padding: 8px 0;
}

.commentaires .list-group-item form {
  display: inline-block;
  margin-left: 10px;
}

/* ---- Liste des utilisateurs ---- */
.utilisateurs .user-card {
  background-color: #fafafa;
  border: 1px solid #eee;
  border-radius: 6px;
  padding: 8px 12px;
  margin-bottom: 8px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.utilisateurs .user-card h6 {
  margin: 0 0 4px;
}

.utilisateurs .user-card p {
  margin: 0 0 4px;
  font-size: 0.85rem;
}

.utilisateurs .user-card .badge {
  display: inline-block;
  background-color: #ccc;
  color: #333;
  font-size: 0.75rem;
  padding: 2px 6px;
  border-radius: 4px;
}

/* ---- Classes utilitaires ---- */
.badge-success {
  background-color: #4caf50 !important;
  color: #fff !important;
}

.badge-secondary {
  background-color: #9e9e9e !important;
  color: #fff !important;
}

.text-muted {
  color: #999;
}

.text-center {
  text-align: center;
}
</style>

<div class=\"page-container\">

    {# ------------------------------------ #
      SECTION : NOTIFICATIONS FLASH
      ------------------------------------ #}
    <div class=\"flash-container\">
        {% for type, messages in app.flashes %}
            {% for message in messages %}
                <div class=\"flash-message {{ type == 'success' ? '' : 'error' }}\">
                    <span>{{ message }}</span>
                    <button type=\"button\" class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">x</button>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    {# ------------------------------------ #
      SECTION : COLONNES
      ------------------------------------ #}
    <div class=\"columns\">
        
        {# Colonne 1 : Détails de la liste #}
        <div class=\"column details-liste\">
            {% if liste.image %}
                <img src=\"{{ asset('uploads/' ~ liste.image) }}\" alt=\"Image de {{ liste.name }}\">
            {% endif %}
            
            <div class=\"column-header\">
                Détails de la Liste
            </div>
            <div class=\"column-content\">
                <ul>
                    <li><strong>ID :</strong> {{ liste.id }}</li>
                    <li><strong>Nom :</strong> {{ liste.name }}</li>
                    <li><strong>Email :</strong> {{ liste.email ?: 'Non spécifié' }}</li>
                    <li><strong>Utilisateur :</strong> {{ liste.user.email ?: 'Non spécifié' }}</li>
                    <li>
                        <strong>Projet associé :</strong>
                        {% if liste.projet %}
                            <span class=\"badge badge-success\">{{ liste.projet }}</span>
                        {% else %}
                            <span class=\"text-muted\">Aucun projet associé</span>
                        {% endif %}
                    </li>
                    <li><strong>Créé le :</strong> {{ liste.createdAt|date('d/m/Y H:i') }}</li>
                </ul>
                
                <div class=\"actions\">
                    <a href=\"{{ path('app_liste_index') }}\" class=\"action-button secondary\">
                        ← Retour
                    </a>
                    
                    {% if is_granted('ROLE_ADMIN') or app.user == liste.user %}
                        <a href=\"{{ path('app_liste_edit', {'id': liste.id}) }}\" class=\"action-button\">
                            ✎ Modifier
                        </a>
                    {% endif %}
                    
                   
                </div>
            </div>
        </div>

        {# Colonne 2 : Commentaires #}
        <div class=\"column commentaires\">
            <div class=\"column-header\">
                Commentaires
            </div>
            <div class=\"column-content\">
                {% if liste.comments|length == 0 %}
                    <p class=\"text-muted\">Aucun commentaire pour cette liste.</p>
                {% else %}
                    <ul class=\"list-group\">
                        {% for comment in liste.comments %}
                            <li class=\"list-group-item\">
                                <div>
                                    <strong>{{ comment.author }}</strong>
                                    <p style=\"margin: 4px 0;\">{{ comment.content }}</p>
                                    <small class=\"text-muted\">
                                        Ajouté le {{ comment.createdAt|date('d/m/Y H:i') }}
                                    </small>
                                </div>
                                {% if is_granted('ROLE_ADMIN') or app.user == liste.user %}
                                    <form method=\"post\" action=\"{{ path('app_comment_delete', {'id': comment.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                        <button type=\"submit\" class=\"action-button danger\" style=\"margin-top: 6px;\">
                                            Supprimer
                                        </button>
                                    </form>
                                {% endif %}
                            </li>
                        {% endfor %}
                    </ul>
                {% endif %}
            </div>
        </div>

        {# Colonne 3 : Liste des utilisateurs #}
        <div class=\"column utilisateurs\">
            <div class=\"column-header\">
                Liste des Utilisateurs
            </div>
            <div class=\"column-content\">
                {% if users|length == 0 %}
                    <p class=\"text-muted\">Aucun utilisateur trouvé.</p>
                {% else %}
                    {% for user in users %}
                        <div class=\"user-card\">
                            <div>
                                <h6>{{ user.email }}</h6>
                                <p><strong>ID :</strong> {{ user.id }}</p>
                                <p>
                                    <strong>Rôles :</strong>
                                    {% for role in user.roles %}
                                        <span class=\"badge badge-secondary\">{{ role }}</span>
                                    {% endfor %}
                                </p>
                                <p>
                                    <strong>Projet associé :</strong>
                                    {% if user.projet %}
                                        <span class=\"badge badge-success\">{{ user.projet }}</span>
                                    {% else %}
                                        <span class=\"text-muted\">Aucun projet associé</span>
                                    {% endif %}
                                </p>
                            </div>
                            {% if is_granted('ROLE_ADMIN') %}
                                <form method=\"post\" action=\"{{ path('app_liste_delete', {'id': liste.id}) }}\" onsubmit=\"return confirm('Voulez-vous vraiment supprimer cette liste ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_list_' ~ liste.id) }}\">
                                    <button type=\"submit\" class=\"action-button danger\" style=\"font-size: 0.75rem;\">
                                        Supprimer
                                    </button>
                                </form>
                            {% endif %}
                        </div>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "liste/show.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/show.html.twig");
    }
}
