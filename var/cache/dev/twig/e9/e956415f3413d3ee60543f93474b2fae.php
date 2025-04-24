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
class __TwigTemplate_637698edf99867a3895f37f5b575b61c extends Template
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
                <div class=\"card shadow-lg rounded-4 mb-5 p-4\" style=\"background:rgb(71, 61, 127);\">

                    <h1 class=\"text-center text-white mb-4\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        yield "</h1>

                    ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15)) {
            // line 16
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
            yield "\" class=\"img-fluid mb-4 rounded-4\">
                    ";
        }
        // line 18
        yield "
                    <p class=\"post-metadata text-center text-white mb-4\">
                        <span class=\"metadata\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month", "class" => "text-white"]);
        yield "
                            ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 22, $this->source); })()), "publishedAt", [], "any", false, false, false, 22), "long", "medium", "", "UTC"), "html", null, true);
        yield "
                        </span>
                        <span class=\"metadata ms-3\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:user", "class" => "text-white"]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 26, $this->source); })()), "author", [], "any", false, false, false, 26), "fullName", [], "any", false, false, false, 26), "html", null, true);
        yield "
                        </span>
                    </p>

                    ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30)) {
            // line 31
            yield "                        <p class=\"text-white mb-3\"><strong>Description :</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 31, $this->source); })()), "description", [], "any", false, false, false, 31), "html", null, true);
            yield "</p>
                    ";
        }
        // line 33
        yield "
                    <p class=\"text-white mb-3\">
                        <strong>Disponibilité :</strong>
                        ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 36, $this->source); })()), "available", [], "any", false, false, false, 36)) {
            // line 37
            yield "                            <span class=\"badge bg-success\">Disponible</span>
                        ";
        } else {
            // line 39
            yield "                            <span class=\"badge bg-danger\">Indisponible</span>
                        ";
        }
        // line 41
        yield "                    </p>

                    <p class=\"text-white mb-3\">
                        <strong>Ajouté le :</strong> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 44, $this->source); })()), "createdAt", [], "any", false, false, false, 44), "d/m/Y"), "html", null, true);
        yield "
                    </p>

                    <div class=\"post-content text-white mb-4\">
                        ";
        // line 48
        yield $this->extensions['Symfony\Bridge\Twig\Extension\HtmlSanitizerExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 48, $this->source); })()), "content", [], "any", false, false, false, 48)));
        yield "
                    </div>

                    ";
        // line 51
        if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 51, $this->source); })()), "tags", [], "any", false, false, false, 51))) {
            // line 52
            yield "                        <div class=\"tags text-center mt-4\">
                            <strong class=\"text-white\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
            yield ":</strong>
                            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 54, $this->source); })()), "tags", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 55
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_tag", ["tagName" => Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 55))]), "html", null, true);
                yield "\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 55), "html", null, true);
                yield "</a>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "                        </div>
                    ";
        }
        // line 59
        yield "                </div>

                <div id=\"post-add-comment\" class=\"card shadow-sm rounded-4 p-4 mt-4\">
                    ";
        // line 62
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 63
            yield "                        ";
            yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\BlogController::commentForm", ["slug" => CoreExtension::getAttribute($this->env, $this->source,             // line 64
(isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 64, $this->source); })()), "slug", [], "any", false, false, false, 64)]));
            // line 65
            yield "
                    ";
        } else {
            // line 67
            yield "                        <p class=\"text-center\">
                            <a class=\"btn btn-lg btn-primary\" href=\"";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login", ["redirect_to" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "request", [], "any", false, false, false, 68), "pathInfo", [], "any", false, false, false, 68)]), "html", null, true);
            yield "\">
                                ";
            // line 69
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:login", "class" => "text-white"]);
            yield "
                                ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
            yield "
                            </a>
                        </p>
                    ";
        }
        // line 74
        yield "                </div>

                <h3 class=\"mt-4 text-center text-black\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:messages", "class" => "text-black"]);
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.num_comments", ["count" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 78, $this->source); })()), "comments", [], "any", false, false, false, 78))]), "html", null, true);
        yield "
                </h3>
            </div>

            <!-- Colonne de droite pour afficher les commentaires -->
            <div class=\"col-md-6\">
                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 84, $this->source); })()), "comments", [], "any", false, false, false, 84));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 85
            yield "                    <div class=\"card shadow-sm rounded-4 p-3 mt-3\">
                        <a name=\"comment_";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "\"></a>
                        <div class=\"row\">
                            <div class=\"col-md-3 text-center\">
                                <strong>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 89), "fullName", [], "any", false, false, false, 89), "html", null, true);
            yield "</strong><br>
                                <span class=\"text-muted\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.commented_on"), "html", null, true);
            yield "</span><br>
                                <strong>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "publishedAt", [], "any", false, false, false, 91), "medium", "short", "", "UTC"), "html", null, true);
            yield "</strong>
                            </div>
                            <div class=\"col-md-9\">
                                <p>";
            // line 94
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 94)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\HtmlSanitizerExtension']->sanitize($this->env->getRuntime('Twig\Extra\Markdown\MarkdownRuntime')->convert(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 94)))) : (""));
            yield "</p>
                                ";
            // line 95
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 95))) {
                // line 96
                yield "                                    <form action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_comment_delete", ["commentId" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to delete this comment?');\">
                                        <input type=\"hidden\" name=\"token\" value=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_comment"), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm rounded-4\">
                                            ";
                // line 99
                yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:trash"]);
                yield "
                                            ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.delete_comment"), "html", null, true);
                yield "
                                        </button>
                                    </form>
                                ";
            }
            // line 104
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        // line 111
        if (!$context['_iterated']) {
            // line 108
            yield "                    <div class=\"alert alert-info text-center mt-3\">
                        ";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_comments"), "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 117
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

        // line 118
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                ";
        // line 121
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
                ";
        // line 122
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
                ";
        // line 123
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
        return array (  387 => 123,  383 => 122,  379 => 121,  374 => 118,  361 => 117,  347 => 112,  338 => 109,  335 => 108,  333 => 111,  326 => 104,  319 => 100,  315 => 99,  310 => 97,  305 => 96,  303 => 95,  299 => 94,  293 => 91,  289 => 90,  285 => 89,  279 => 86,  276 => 85,  271 => 84,  262 => 78,  258 => 77,  253 => 74,  246 => 70,  242 => 69,  238 => 68,  235 => 67,  231 => 65,  229 => 64,  227 => 63,  225 => 62,  220 => 59,  216 => 57,  205 => 55,  201 => 54,  197 => 53,  194 => 52,  192 => 51,  186 => 48,  179 => 44,  174 => 41,  170 => 39,  166 => 37,  164 => 36,  159 => 33,  153 => 31,  151 => 30,  144 => 26,  140 => 25,  134 => 22,  130 => 21,  125 => 18,  117 => 16,  115 => 15,  110 => 13,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
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
                <div class=\"card shadow-lg rounded-4 mb-5 p-4\" style=\"background:rgb(71, 61, 127);\">

                    <h1 class=\"text-center text-white mb-4\">{{ post.title }}</h1>

                    {% if post.image %}
                        <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"{{ post.title }}\" class=\"img-fluid mb-4 rounded-4\">
                    {% endif %}

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

                    {% if post.description %}
                        <p class=\"text-white mb-3\"><strong>Description :</strong> {{ post.description }}</p>
                    {% endif %}

                    <p class=\"text-white mb-3\">
                        <strong>Disponibilité :</strong>
                        {% if post.available %}
                            <span class=\"badge bg-success\">Disponible</span>
                        {% else %}
                            <span class=\"badge bg-danger\">Indisponible</span>
                        {% endif %}
                    </p>

                    <p class=\"text-white mb-3\">
                        <strong>Ajouté le :</strong> {{ post.createdAt|date('d/m/Y') }}
                    </p>

                    <div class=\"post-content text-white mb-4\">
                        {{ post.content|markdown_to_html|sanitize_html }}
                    </div>

                    {% if post.tags is not empty %}
                        <div class=\"tags text-center mt-4\">
                            <strong class=\"text-white\">{{ 'Tags'|trans }}:</strong>
                            {% for tag in post.tags %}
                                <a href=\"{{ path('blog_index_tag', {tagName: tag.name|url_encode}) }}\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">{{ tag.name }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </div>

                <div id=\"post-add-comment\" class=\"card shadow-sm rounded-4 p-4 mt-4\">
                    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('App\\\\Controller\\\\BlogController::commentForm', {
                            slug: post.slug
                        })) }}
                    {% else %}
                        <p class=\"text-center\">
                            <a class=\"btn btn-lg btn-primary\" href=\"{{ path('security_login', {'redirect_to': app.request.pathInfo}) }}\">
                                {{ component('ux:icon', { name: 'tabler:login', class: 'text-white' }) }}
                                {{ 'action.sign_in'|trans }}
                            </a>
                        </p>
                    {% endif %}
                </div>

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
                                <strong>{{ comment.author.fullName }}</strong><br>
                                <span class=\"text-muted\">{{ 'post.commented_on'|trans }}</span><br>
                                <strong>{{ comment.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}</strong>
                            </div>
                            <div class=\"col-md-9\">
                                <p>{{ comment.content ? comment.content|markdown_to_html|sanitize_html : '' }}</p>
                                {% if comment.id is not empty %}
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
{% endblock %}", "blog/post_show.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/blog/post_show.html.twig");
    }
}
