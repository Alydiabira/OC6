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

/* blog/post_show.html.twig */
class __TwigTemplate_efda9eb0dd0c4a8ee834e36ca0d3f993 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/post_show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/post_show.html.twig", 1);
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

        yield "blog_post_show";
        
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
        yield "    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">

            <!-- Colonne de gauche pour afficher l'article -->
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg rounded-4 mb-5 p-4\" style=\"background: linear-gradient(to right, #ff7e5f, #feb47b);\">

                    <!-- Titre de l'article -->
                    <h1 class=\"text-center text-white mb-4\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</h1>

                    <!-- Affichage de l'image de l'article, si disponible -->
                    ";
        // line 17
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 17, $this->source); })()), "image", [], "any", false, false, false, 17)) {
            // line 18
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "image", [], "any", false, false, false, 18))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
            yield "\" class=\"img-fluid mb-4 rounded-4\">
                    ";
        }
        // line 20
        yield "
                    <!-- Métadonnées de l'article (date de publication et auteur) -->
                    <p class=\"post-metadata text-center text-white mb-4\">
                        <span class=\"metadata\">
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month", "class" => "text-white"]);
        yield "
                            ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 25, $this->source); })()), "publishedAt", [], "any", false, false, false, 25), "long", "medium", "", "UTC"), "html", null, true);
        yield "
                        </span>
                        <span class=\"metadata ms-3\">
                            ";
        // line 28
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user", "class" => "text-white"]);
        yield "
                            ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 29, $this->source); })()), "author", [], "any", false, false, false, 29), "fullName", [], "any", false, false, false, 29), "html", null, true);
        yield "
                        </span>
                    </p>

                    <!-- Contenu de l'article -->
                    <div class=\"post-content text-white mb-4\">
                        ";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\HtmlSanitizerExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 35, $this->source); })()), "content", [], "any", false, false, false, 35)));
        yield "
                    </div>

                    <!-- Affichage des tags -->
                    ";
        // line 39
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 39, $this->source); })()), "tags", [], "any", false, false, false, 39))) {
            // line 40
            yield "                        <div class=\"tags text-center mt-4\">
                            <strong class=\"text-white\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
            yield ":</strong>
                            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 42, $this->source); })()), "tags", [], "any", false, false, false, 42));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 43
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_tag", ["tagName" => Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 43))]), "html", null, true);
                yield "\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 43), "html", null, true);
                yield "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                        </div>
                    ";
        }
        // line 47
        yield "
                </div>

                <!-- Formulaire d'ajout de commentaire -->
                <div id=\"post-add-comment\" class=\"card shadow-sm rounded-4 p-4 mt-4\">
                    ";
        // line 52
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 53
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::commentForm", ["post" => (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 53, $this->source); })())]));
            yield "
                    ";
        } else {
            // line 55
            yield "                        <p class=\"text-center\">
                            <a class=\"btn btn-lg btn-primary\" href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "pathInfo", [], "any", false, false, false, 56)]), "html", null, true);
            yield "\">
                                ";
            // line 57
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:login", "class" => "text-white"]);
            yield "
                                ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            yield "
                            </a>
                            <br>
                            ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.to_publish_a_comment"), "html", null, true);
            yield "
                        </p>
                    ";
        }
        // line 64
        yield "                </div>

                <!-- Nombre de commentaires -->
                <h3 class=\"mt-4 text-center text-black\">
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:messages", "class" => "text-black"]);
        yield "
                    ";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.num_comments", ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 69, $this->source); })()), "comments", [], "any", false, false, false, 69))]), "html", null, true);
        yield "
                </h3>
            </div>

            <!-- Colonne de droite pour afficher les commentaires -->
            <div class=\"col-md-6\">
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 75, $this->source); })()), "comments", [], "any", false, false, false, 75));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 76
            yield "                    <div class=\"card shadow-sm rounded-4 p-3 mt-3\">
                        <a name=\"comment_";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 77), "html", null, true);
            yield "\"></a>
                        <div class=\"row\">
                            <div class=\"col-md-3 text-center\">
                                <!-- Auteur et date de publication du commentaire -->
                                <strong>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 81), "fullName", [], "any", false, false, false, 81), "html", null, true);
            yield "</strong><br>
                                <span class=\"text-muted\">";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.commented_on"), "html", null, true);
            yield "</span><br>
                                <strong>";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 83), "medium", "short", "", "UTC"), "html", null, true);
            yield "</strong>
                            </div>
                            <div class=\"col-md-9\">
                                <!-- Contenu du commentaire -->
                                <p>";
            // line 87
            yield $this->extensions['Symfony\Bridge\Twig\Extension\HtmlSanitizerExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 87)));
            yield "</p>

                                <!-- Bouton pour supprimer un commentaire (visible seulement pour les admins) -->
                                ";
            // line 90
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 91
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_delete", ["commentId" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 91)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_comment"), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm rounded-4\">
                                            ";
                // line 94
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:trash"]);
                yield "
                                            ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete_comment"), "html", null, true);
                yield "
                                        </button>
                                    </form>
                                ";
            }
            // line 99
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 107
        if (!$context['_iterated']) {
            // line 103
            yield "                    <!-- Message si aucun commentaire n'est disponible -->
                    <div class=\"alert alert-info text-center mt-3\">
                        ";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_comments"), "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 113
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

        // line 114
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                ";
        // line 117
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
                ";
        // line 118
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
                ";
        // line 119
        yield Twig\Extension\CoreExtension::include($this->env, $context, "blog/_rss.html.twig");
        yield "
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
        return "blog/post_show.html.twig";
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
        return array (  369 => 119,  365 => 118,  361 => 117,  356 => 114,  343 => 113,  329 => 108,  320 => 105,  316 => 103,  314 => 107,  307 => 99,  300 => 95,  296 => 94,  291 => 92,  286 => 91,  284 => 90,  278 => 87,  271 => 83,  267 => 82,  263 => 81,  256 => 77,  253 => 76,  248 => 75,  239 => 69,  235 => 68,  229 => 64,  223 => 61,  217 => 58,  213 => 57,  209 => 56,  206 => 55,  200 => 53,  198 => 52,  191 => 47,  187 => 45,  176 => 43,  172 => 42,  168 => 41,  165 => 40,  163 => 39,  156 => 35,  147 => 29,  143 => 28,  137 => 25,  133 => 24,  127 => 20,  119 => 18,  117 => 17,  111 => 14,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_post_show' %}

{% block main %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">

            <!-- Colonne de gauche pour afficher l'article -->
            <div class=\"col-md-6\">
                <div class=\"card shadow-lg rounded-4 mb-5 p-4\" style=\"background: linear-gradient(to right, #ff7e5f, #feb47b);\">

                    <!-- Titre de l'article -->
                    <h1 class=\"text-center text-white mb-4\">{{ post.title }}</h1>

                    <!-- Affichage de l'image de l'article, si disponible -->
                    {% if post.image %}
                        <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"{{ post.title }}\" class=\"img-fluid mb-4 rounded-4\">
                    {% endif %}

                    <!-- Métadonnées de l'article (date de publication et auteur) -->
                    <p class=\"post-metadata text-center text-white mb-4\">
                        <span class=\"metadata\">
                            {{ component('ux:icon', { name: 'tabler:calendar-month', class: 'text-white' }) }}
                            {{ post.publishedAt|format_datetime('long', 'medium', '', 'UTC') }}
                        </span>
                        <span class=\"metadata ms-3\">
                            {{ component('ux:icon', { name: 'tabler:user', class: 'text-white' }) }}
                            {{ post.author.fullName }}
                        </span>
                    </p>

                    <!-- Contenu de l'article -->
                    <div class=\"post-content text-white mb-4\">
                        {{ post.content|markdown_to_html|sanitize_html }}
                    </div>

                    <!-- Affichage des tags -->
                    {% if post.tags is not empty %}
                        <div class=\"tags text-center mt-4\">
                            <strong class=\"text-white\">{{ 'Tags'|trans }}:</strong>
                            {% for tag in post.tags %}
                                <a href=\"{{ path('blog_index_tag', {tagName: tag.name|url_encode}) }}\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">{{ tag.name }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}

                </div>

                <!-- Formulaire d'ajout de commentaire -->
                <div id=\"post-add-comment\" class=\"card shadow-sm rounded-4 p-4 mt-4\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('App\\\\Controller\\\\BlogController::commentForm', {post})) }}
                    {% else %}
                        <p class=\"text-center\">
                            <a class=\"btn btn-lg btn-primary\" href=\"{{ path('security_login', {'redirect_to': app.request.pathInfo}) }}\">
                                {{ component('ux:icon', { name: 'tabler:login', class: 'text-white' }) }}
                                {{ 'action.sign_in'|trans }}
                            </a>
                            <br>
                            {{ 'post.to_publish_a_comment'|trans }}
                        </p>
                    {% endif %}
                </div>

                <!-- Nombre de commentaires -->
                <h3 class=\"mt-4 text-center text-black\">
                    {{ component('ux:icon', { name: 'tabler:messages', class: 'text-black' }) }}
                    {{ 'post.num_comments'|trans({ 'count': post.comments|length }) }}
                </h3>
            </div>

            <!-- Colonne de droite pour afficher les commentaires -->
            <div class=\"col-md-6\">
                {% for comment in post.comments %}
                    <div class=\"card shadow-sm rounded-4 p-3 mt-3\">
                        <a name=\"comment_{{ comment.id }}\"></a>
                        <div class=\"row\">
                            <div class=\"col-md-3 text-center\">
                                <!-- Auteur et date de publication du commentaire -->
                                <strong>{{ comment.author.fullName }}</strong><br>
                                <span class=\"text-muted\">{{ 'post.commented_on'|trans }}</span><br>
                                <strong>{{ comment.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}</strong>
                            </div>
                            <div class=\"col-md-9\">
                                <!-- Contenu du commentaire -->
                                <p>{{ comment.content|markdown_to_html|sanitize_html }}</p>

                                <!-- Bouton pour supprimer un commentaire (visible seulement pour les admins) -->
                                {% if is_granted('ROLE_ADMIN') %}
                                    <form action=\"{{ path('admin_comment_delete', {commentId: comment.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('delete_comment') }}\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm rounded-4\">
                                            {{ component('ux:icon', { name: 'tabler:trash' }) }}
                                            {{ 'action.delete_comment'|trans }}
                                        </button>
                                    </form>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <!-- Message si aucun commentaire n'est disponible -->
                    <div class=\"alert alert-info text-center mt-3\">
                        {{ 'post.no_comments'|trans }}
                    </div>
                {% endfor %}
            </div>
        </div>
    </div>
{% endblock %}

{% block sidebar %}
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                {{ parent() }}
                {{ show_source_code(_self) }}
                {{ include('blog/_rss.html.twig') }}
            </div>
        </div>
    </div>
{% endblock %}
", "blog/post_show.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/blog/post_show.html.twig");
    }
}
