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

/* liste/edit.html.twig */
class __TwigTemplate_55ab4d31a95f0ff4cd02e30415db0202 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "liste/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "liste/edit.html.twig", 2);
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

        yield "Modifier la Liste";
        
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
        yield "<section id=\"conseils\" style=\"background-color: #fafafa; padding: 20px; border-radius: 8px; margin-bottom: 20px;\">
    <h2 style=\"margin-bottom: 10px;\">Conseils de Présentation & d’Amélioration</h2>
    <ul style=\"padding-left: 20px; list-style-type: disc;\">
        <li>Utilisez un <strong>layout en colonnes (flexbox ou grid)</strong> pour rappeler la disposition « feed » d’Instagram.</li>
        <li>Préférez des <strong>cartes minimalistes</strong> et des blocs aérés pour mettre en avant le contenu.</li>
        <li>Choisissez une palette de couleurs cohérente et limitée pour éviter la surcharge visuelle.</li>
        <li>Centralisez vos styles dans un fichier dédié pour faciliter la maintenance et la réutilisation.</li>
        <li>Gérez les <strong>icônes</strong> via des symboles textuels ou un petit set SVG plutôt que d’utiliser tout un framework.</li>
    </ul>
</section>

";
        // line 25
        yield "<style>
/* ----- RESET OPTIONNEL ----- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* ----- STYLE GÉNÉRAL ----- */
body {
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
    color: #333;
}

/* ----- CONTENEUR PRINCIPAL ----- */
.page-container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding-bottom: 40px;
}

/* ----- TITRE & TEXTE ----- */
.title-section {
    text-align: center;
    margin-bottom: 20px;
}

.title-section h1 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.title-section p {
    color: #777;
    font-size: 0.95rem;
}

/* ----- FLASH MESSAGES ----- */
.flash-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.flash-message {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 6px;
    padding: 12px;
    color: #fff;
    min-width: 220px;
}

.flash-message.success {
    background-color: #198754; /* Exemple de couleur verte */
}

.flash-message.error {
    background-color: #dc3545; /* Exemple de couleur rouge */
}

.flash-message .close-btn {
    background: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: 1.1rem;
    line-height: 1;
    margin-left: 10px;
}

/* ----- COLONNES ----- */
.columns {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

/* Chaque bloc colonne a une largeur minimale et s'adapte (flex: 1) */
.column {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    flex: 1 1 300px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.2s, box-shadow 0.2s;
}

.column:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

/* ----- ENTÊTE DE CHAQUE COLONNE ----- */
.column-header {
    padding: 12px;
    font-weight: bold;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

/* Variation de couleurs (exemples) */
.column-header.info {
    background-color: #d1ecf1;
    color: #0c5460;
}
.column-header.primary {
    background-color: #0d6efd;
    color: #fff;
}
.column-header.secondary {
    background-color: #6c757d;
    color: #fff;
}

/* ----- CONTENU DE CHAQUE COLONNE ----- */
.column-content {
    padding: 16px;
    flex-grow: 1; /* Pour étirer le contenu */
}

/* ----- BOUTONS & FORMULAIRES ----- */
.button {
    display: inline-block;
    padding: 10px 16px;
    border: none;
    border-radius: 6px;
    font-size: 0.9rem;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    margin-top: 8px;
}

/* Variations de couleurs pour les boutons */
.button-primary {
    background-color: #0d6efd; 
    color: #fff;
}
.button-secondary {
    background-color: #6c757d;
    color: #fff;
}
.button-warning {
    background-color: #ffc107;
    color: #333;
}
.button-danger {
    background-color: #dc3545;
    color: #fff;
}

/* Effet hover générique */
.button:hover {
    opacity: 0.9;
}

/* Champs de formulaire */
form label {
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
    font-size: 0.9rem;
}

form input[type=\"text\"],
form input[type=\"email\"],
form input[type=\"file\"],
form textarea {
    width: 100%;
    padding: 8px;
    font-size: 0.95rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 12px;
}

/* Contrainte de responsivité */
@media (max-width: 768px) {
    .title-section h1 {
        font-size: 1.6rem;
    }
}
</style>

<div class=\"page-container\">
    
    ";
        // line 225
        yield "    <div class=\"flash-container\">
        ";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "flashes", [], "any", false, false, false, 226));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 227
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 228
                yield "                ";
                // line 229
                yield "                <div class=\"flash-message ";
                yield ((($context["label"] == "success")) ? ("success") : ("error"));
                yield "\">
                    <span>";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "</span>
                    <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">x</button>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 234
            yield "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        yield "    </div>

    ";
        // line 240
        yield "    <div class=\"title-section\">
        <h1>Modifier la Liste</h1>
        <p>Apportez des modifications à votre liste, ajoutez des commentaires ou assignez un projet</p>
    </div>

    ";
        // line 249
        yield "    <div class=\"columns\">

        ";
        // line 252
        yield "        <div class=\"column\">
            <div class=\"column-header info\">
                Commentaires
            </div>
            <div class=\"column-content\">
                ";
        // line 257
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 257, $this->source); })()), "comments", [], "any", false, false, false, 257)) > 0)) {
            // line 258
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 258, $this->source); })()), "comments", [], "any", false, false, false, 258));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 259
                yield "                        <div style=\"border: 1px solid #eee; border-radius: 6px; margin-bottom: 12px; padding: 12px;\">
                            <p><strong>";
                // line 260
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 260), "html", null, true);
                yield "</strong></p>
                            <p style=\"margin: 6px 0;\">";
                // line 261
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 261), "html", null, true);
                yield "</p>
                            <small style=\"color: #777;\">Posté le ";
                // line 262
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 262), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                            <form method=\"post\"
                                  action=\"";
                // line 264
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 264)]), "html", null, true);
                yield "\"
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\"
                                  style=\"margin-top: 8px;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 267
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 267))), "html", null, true);
                yield "\">
                                <button type=\"submit\" class=\"button button-danger\" style=\"font-size: 0.8rem;\">Supprimer</button>
                            </form>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 272
            yield "                ";
        } else {
            // line 273
            yield "                    <p style=\"color: #777;\">Aucun commentaire pour cette liste.</p>
                ";
        }
        // line 275
        yield "            </div>
        </div>

        ";
        // line 279
        yield "        <div class=\"column\">
            <div class=\"column-header primary\">
                Modifier la Liste
            </div>
            <div class=\"column-content\">
                ";
        // line 285
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 285, $this->source); })()), 'form_start', ["attr" => ["id" => "editForm"]]);
        yield "
                    <label for=\"liste_name\">Nom</label>
                    ";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "name", [], "any", false, false, false, 287), 'widget', ["attr" => ["id" => "liste_name"]]);
        yield "

                    <label for=\"liste_email\">Adresse Email</label>
                    ";
        // line 290
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "email", [], "any", false, false, false, 290), 'widget', ["attr" => ["id" => "liste_email"]]);
        yield "

                    <label for=\"liste_imageFile\">Image</label>
                    ";
        // line 293
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "imageFile", [], "any", false, false, false, 293), 'widget', ["attr" => ["id" => "liste_imageFile"]]);
        yield "

                    ";
        // line 295
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "projet", [], "any", true, true, false, 295)) {
            // line 296
            yield "                        <label for=\"liste_projet\">Projet</label>
                        ";
            // line 297
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 297, $this->source); })()), "projet", [], "any", false, false, false, 297), 'widget', ["attr" => ["id" => "liste_projet"]]);
            yield "
                    ";
        } else {
            // line 299
            yield "                        <p><strong>Projet associé :</strong> ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 299, $this->source); })()), "projet", [], "any", false, false, false, 299)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 299, $this->source); })()), "projet", [], "any", false, false, false, 299), "html", null, true)) : ("Aucun projet associé"));
            yield "</p>
                    ";
        }
        // line 301
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 301, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        ";
        // line 306
        yield "        <div class=\"column\">
            <div class=\"column-header secondary\">
                Ajouter un Commentaire
            </div>
            <div class=\"column-content\">
                ";
        // line 312
        yield "                ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 312, $this->source); })()), 'form_start', ["attr" => ["id" => "commentForm"]]);
        yield "
                    <label for=\"comment_content\">Votre commentaire</label>
                    ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 314, $this->source); })()), "content", [], "any", false, false, false, 314), 'widget', ["attr" => ["id" => "comment_content"]]);
        yield "
                ";
        // line 315
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 315, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

    </div> ";
        // line 320
        yield "

    ";
        // line 325
        yield "    <div style=\"display: flex; gap: 8px; margin-top: 20px;\">
        ";
        // line 327
        yield "        <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_index");
        yield "\"
           class=\"button button-secondary\"
           style=\"flex: 1; text-decoration: none; text-align: center;\">
           ← Retour
        </a>

        ";
        // line 334
        yield "        <button type=\"submit\"
                form=\"editForm\"
                class=\"button button-primary\"
                style=\"flex: 1;\">
            Mettre à jour
        </button>

        ";
        // line 342
        yield "        <button type=\"submit\"
                form=\"commentForm\"
                class=\"button button-secondary\"
                style=\"flex: 1;\">
            Ajouter
        </button>
    </div>


    ";
        // line 354
        yield "    <div style=\"background-color: #fff; border: 1px solid #ddd; border-radius: 8px; margin-top: 20px; padding: 16px; transition: transform 0.2s, box-shadow 0.2s;\">
        <div style=\"background-color: #fff3cd; padding: 10px; text-align: center; border-radius: 6px; margin-bottom: 10px;\">
            <h4 style=\"color: #856404; margin: 0;\">Assigner un Projet à Tous les Utilisateurs</h4>
        </div>
        <form method=\"post\" action=\"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_liste_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 358, $this->source); })()), "id", [], "any", false, false, false, 358)]), "html", null, true);
        yield "\">
            <label for=\"project_name\">Nom du Projet</label>
            <input type=\"text\" id=\"project_name\" name=\"project_name\" placeholder=\"Entrez le nom du projet\" required>

            <button type=\"submit\" class=\"button button-warning\" style=\"width: 100%; margin-top: 12px;\">
                Assigner à tous
            </button>
        </form>
    </div>

</div> ";
        // line 369
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
        return "liste/edit.html.twig";
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
        return array (  558 => 369,  545 => 358,  539 => 354,  528 => 342,  519 => 334,  509 => 327,  506 => 325,  502 => 320,  495 => 315,  491 => 314,  485 => 312,  478 => 306,  470 => 301,  464 => 299,  459 => 297,  456 => 296,  454 => 295,  449 => 293,  443 => 290,  437 => 287,  431 => 285,  424 => 279,  419 => 275,  415 => 273,  412 => 272,  401 => 267,  395 => 264,  390 => 262,  386 => 261,  382 => 260,  379 => 259,  374 => 258,  372 => 257,  365 => 252,  361 => 249,  354 => 240,  350 => 235,  344 => 234,  334 => 230,  329 => 229,  327 => 228,  322 => 227,  318 => 226,  315 => 225,  116 => 25,  103 => 11,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/liste/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier la Liste{% endblock %}

{% block body %}

{# --------------------------------------------------------------------- #
  SECTION : CONSEILS D'AMÉLIORATION
  --------------------------------------------------------------------- #}
<section id=\"conseils\" style=\"background-color: #fafafa; padding: 20px; border-radius: 8px; margin-bottom: 20px;\">
    <h2 style=\"margin-bottom: 10px;\">Conseils de Présentation & d’Amélioration</h2>
    <ul style=\"padding-left: 20px; list-style-type: disc;\">
        <li>Utilisez un <strong>layout en colonnes (flexbox ou grid)</strong> pour rappeler la disposition « feed » d’Instagram.</li>
        <li>Préférez des <strong>cartes minimalistes</strong> et des blocs aérés pour mettre en avant le contenu.</li>
        <li>Choisissez une palette de couleurs cohérente et limitée pour éviter la surcharge visuelle.</li>
        <li>Centralisez vos styles dans un fichier dédié pour faciliter la maintenance et la réutilisation.</li>
        <li>Gérez les <strong>icônes</strong> via des symboles textuels ou un petit set SVG plutôt que d’utiliser tout un framework.</li>
    </ul>
</section>

{# --------------------------------------------------------------------- #
  SECTION : STYLE GLOBAL
  --------------------------------------------------------------------- #}
<style>
/* ----- RESET OPTIONNEL ----- */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* ----- STYLE GÉNÉRAL ----- */
body {
    background-color: #f9f9f9;
    font-family: Arial, sans-serif;
    color: #333;
}

/* ----- CONTENEUR PRINCIPAL ----- */
.page-container {
    width: 90%;
    max-width: 1200px;
    margin: 0 auto;
    padding-bottom: 40px;
}

/* ----- TITRE & TEXTE ----- */
.title-section {
    text-align: center;
    margin-bottom: 20px;
}

.title-section h1 {
    font-size: 2rem;
    font-weight: bold;
    margin-bottom: 5px;
}

.title-section p {
    color: #777;
    font-size: 0.95rem;
}

/* ----- FLASH MESSAGES ----- */
.flash-container {
    position: fixed;
    top: 20px;
    right: 20px;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.flash-message {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-radius: 6px;
    padding: 12px;
    color: #fff;
    min-width: 220px;
}

.flash-message.success {
    background-color: #198754; /* Exemple de couleur verte */
}

.flash-message.error {
    background-color: #dc3545; /* Exemple de couleur rouge */
}

.flash-message .close-btn {
    background: transparent;
    border: none;
    color: #fff;
    cursor: pointer;
    font-size: 1.1rem;
    line-height: 1;
    margin-left: 10px;
}

/* ----- COLONNES ----- */
.columns {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}

/* Chaque bloc colonne a une largeur minimale et s'adapte (flex: 1) */
.column {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 8px;
    flex: 1 1 300px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transition: transform 0.2s, box-shadow 0.2s;
}

.column:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.1);
}

/* ----- ENTÊTE DE CHAQUE COLONNE ----- */
.column-header {
    padding: 12px;
    font-weight: bold;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

/* Variation de couleurs (exemples) */
.column-header.info {
    background-color: #d1ecf1;
    color: #0c5460;
}
.column-header.primary {
    background-color: #0d6efd;
    color: #fff;
}
.column-header.secondary {
    background-color: #6c757d;
    color: #fff;
}

/* ----- CONTENU DE CHAQUE COLONNE ----- */
.column-content {
    padding: 16px;
    flex-grow: 1; /* Pour étirer le contenu */
}

/* ----- BOUTONS & FORMULAIRES ----- */
.button {
    display: inline-block;
    padding: 10px 16px;
    border: none;
    border-radius: 6px;
    font-size: 0.9rem;
    cursor: pointer;
    text-decoration: none;
    text-align: center;
    margin-top: 8px;
}

/* Variations de couleurs pour les boutons */
.button-primary {
    background-color: #0d6efd; 
    color: #fff;
}
.button-secondary {
    background-color: #6c757d;
    color: #fff;
}
.button-warning {
    background-color: #ffc107;
    color: #333;
}
.button-danger {
    background-color: #dc3545;
    color: #fff;
}

/* Effet hover générique */
.button:hover {
    opacity: 0.9;
}

/* Champs de formulaire */
form label {
    font-weight: bold;
    display: block;
    margin-bottom: 6px;
    font-size: 0.9rem;
}

form input[type=\"text\"],
form input[type=\"email\"],
form input[type=\"file\"],
form textarea {
    width: 100%;
    padding: 8px;
    font-size: 0.95rem;
    border: 1px solid #ccc;
    border-radius: 4px;
    margin-bottom: 12px;
}

/* Contrainte de responsivité */
@media (max-width: 768px) {
    .title-section h1 {
        font-size: 1.6rem;
    }
}
</style>

<div class=\"page-container\">
    
    {# --------------------------------------------------------------------- #
      SECTION : FLASH MESSAGES
      --------------------------------------------------------------------- #}
    <div class=\"flash-container\">
        {% for label, messages in app.flashes %}
            {% for message in messages %}
                {# Selon que le label est success, error, etc. #}
                <div class=\"flash-message {{ label == 'success' ? 'success' : 'error' }}\">
                    <span>{{ message }}</span>
                    <button class=\"close-btn\" onclick=\"this.parentElement.style.display='none';\">x</button>
                </div>
            {% endfor %}
        {% endfor %}
    </div>

    {# --------------------------------------------------------------------- #
      SECTION : TITRE
      --------------------------------------------------------------------- #}
    <div class=\"title-section\">
        <h1>Modifier la Liste</h1>
        <p>Apportez des modifications à votre liste, ajoutez des commentaires ou assignez un projet</p>
    </div>

    {# --------------------------------------------------------------------- #
      SECTION : COLONNES PRINCIPALES
      (LISTE COMMENTAIRES, FORM ÉDITION, FORM COMMENT)
      --------------------------------------------------------------------- #}
    <div class=\"columns\">

        {# COLONNE GAUCHE : Liste des commentaires #}
        <div class=\"column\">
            <div class=\"column-header info\">
                Commentaires
            </div>
            <div class=\"column-content\">
                {% if liste.comments|length > 0 %}
                    {% for comment in liste.comments %}
                        <div style=\"border: 1px solid #eee; border-radius: 6px; margin-bottom: 12px; padding: 12px;\">
                            <p><strong>{{ comment.author }}</strong></p>
                            <p style=\"margin: 6px 0;\">{{ comment.content }}</p>
                            <small style=\"color: #777;\">Posté le {{ comment.createdAt|date('d/m/Y H:i') }}</small>
                            <form method=\"post\"
                                  action=\"{{ path('app_comment_delete', {'id': comment.id}) }}\"
                                  onsubmit=\"return confirm('Voulez-vous vraiment supprimer ce commentaire ?');\"
                                  style=\"margin-top: 8px;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                <button type=\"submit\" class=\"button button-danger\" style=\"font-size: 0.8rem;\">Supprimer</button>
                            </form>
                        </div>
                    {% endfor %}
                {% else %}
                    <p style=\"color: #777;\">Aucun commentaire pour cette liste.</p>
                {% endif %}
            </div>
        </div>

        {# COLONNE CENTRALE : Formulaire d'édition (id=\"editForm\") #}
        <div class=\"column\">
            <div class=\"column-header primary\">
                Modifier la Liste
            </div>
            <div class=\"column-content\">
                {# On donne un id=\"editForm\" pour que le bouton puisse le cibler #}
                {{ form_start(form, {'attr': {'id': 'editForm'}}) }}
                    <label for=\"liste_name\">Nom</label>
                    {{ form_widget(form.name, {'attr': {'id': 'liste_name'}}) }}

                    <label for=\"liste_email\">Adresse Email</label>
                    {{ form_widget(form.email, {'attr': {'id': 'liste_email'}}) }}

                    <label for=\"liste_imageFile\">Image</label>
                    {{ form_widget(form.imageFile, {'attr': {'id': 'liste_imageFile'}}) }}

                    {% if form.projet is defined %}
                        <label for=\"liste_projet\">Projet</label>
                        {{ form_widget(form.projet, {'attr': {'id': 'liste_projet'}}) }}
                    {% else %}
                        <p><strong>Projet associé :</strong> {{ liste.projet ?: 'Aucun projet associé' }}</p>
                    {% endif %}
                {{ form_end(form) }}
            </div>
        </div>

        {# COLONNE DROITE : Formulaire d'ajout de commentaire (id=\"commentForm\") #}
        <div class=\"column\">
            <div class=\"column-header secondary\">
                Ajouter un Commentaire
            </div>
            <div class=\"column-content\">
                {# On donne un id=\"commentForm\" pour que le bouton puisse le cibler #}
                {{ form_start(commentForm, {'attr': {'id': 'commentForm'}}) }}
                    <label for=\"comment_content\">Votre commentaire</label>
                    {{ form_widget(commentForm.content, {'attr': {'id': 'comment_content'}}) }}
                {{ form_end(commentForm) }}
            </div>
        </div>

    </div> {# Fin .columns #}


    {# --------------------------------------------------------------------- #
      SECTION : BOUTONS SUR UNE MÊME LIGNE (Retour / Mettre à jour / Ajouter)
      --------------------------------------------------------------------- #}
    <div style=\"display: flex; gap: 8px; margin-top: 20px;\">
        {# Bouton « Retour » #}
        <a href=\"{{ path('app_liste_index') }}\"
           class=\"button button-secondary\"
           style=\"flex: 1; text-decoration: none; text-align: center;\">
           ← Retour
        </a>

        {# Bouton « Mettre à jour » qui soumet le formulaire id=\"editForm\" #}
        <button type=\"submit\"
                form=\"editForm\"
                class=\"button button-primary\"
                style=\"flex: 1;\">
            Mettre à jour
        </button>

        {# Bouton « Ajouter » qui soumet le formulaire id=\"commentForm\" #}
        <button type=\"submit\"
                form=\"commentForm\"
                class=\"button button-secondary\"
                style=\"flex: 1;\">
            Ajouter
        </button>
    </div>


    {# --------------------------------------------------------------------- #
      SECTION : FORMULAIRE POUR ASSIGNER UN PROJET À TOUS
      --------------------------------------------------------------------- #}
    <div style=\"background-color: #fff; border: 1px solid #ddd; border-radius: 8px; margin-top: 20px; padding: 16px; transition: transform 0.2s, box-shadow 0.2s;\">
        <div style=\"background-color: #fff3cd; padding: 10px; text-align: center; border-radius: 6px; margin-bottom: 10px;\">
            <h4 style=\"color: #856404; margin: 0;\">Assigner un Projet à Tous les Utilisateurs</h4>
        </div>
        <form method=\"post\" action=\"{{ path('app_liste_edit', {'id': liste.id}) }}\">
            <label for=\"project_name\">Nom du Projet</label>
            <input type=\"text\" id=\"project_name\" name=\"project_name\" placeholder=\"Entrez le nom du projet\" required>

            <button type=\"submit\" class=\"button button-warning\" style=\"width: 100%; margin-top: 12px;\">
                Assigner à tous
            </button>
        </form>
    </div>

</div> {# Fin .page-container #}

{% endblock %}
", "liste/edit.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/liste/edit.html.twig");
    }
}
