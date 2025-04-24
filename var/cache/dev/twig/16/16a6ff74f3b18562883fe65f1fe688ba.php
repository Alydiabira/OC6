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

/* blog/index.html.twig */
class __TwigTemplate_0b5ef7593823f6ec0a4861fef0a53376 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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

        yield "blog_index";
        
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
            <div class=\"col-md-10\">
                <div class=\"row\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 11
            yield "                        <div class=\"col-sm-6 mb-4\">
                            <div class=\"card shadow-lg rounded-4 overflow-hidden\" style=\"background:rgb(71, 61, 127);\">
                                <div class=\"card-body p-4\">
                                    <!-- Affichage de l'image de l'article, si disponible -->
                                    ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 15)) {
                // line 16
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 16))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 16), "html", null, true);
                yield "\" class=\"img-fluid mb-3 rounded-4\">
                                    ";
            }
            // line 18
            yield "
                                    <!-- Titre de l'article -->
                                    <h3 class=\"text-white mb-2\">";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 20), "html", null, true);
            yield "</h3>

                                    <!-- Auteur et Date de publication -->
                                    <p class=\"text-muted mb-3\">
                                        <small>
                                            <strong>";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 25), "username", [], "any", false, false, false, 25), "html", null, true);
            yield "</strong> | 
                                            ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 26), "medium", "short", "", "UTC"), "html", null, true);
            yield "
                                        </small>
                                    </p>

                                    <!-- Extrait du contenu (Résumé) -->
                                    <p class=\"text-white mb-3\">
                                        ";
            // line 32
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 32)) {
                // line 33
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 33), "html", null, true);
                yield "
                                        ";
            } else {
                // line 35
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No excerpt available."), "html", null, true);
                yield "
                                        ";
            }
            // line 37
            yield "                                    </p>

                                    <!-- Affichage des tags -->
                                    ";
            // line 40
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 40))) {
                // line 41
                yield "                                        <div class=\"tags mt-3\">
                                            <strong class=\"text-white\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
                yield ":</strong>
                                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 44
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_tag", ["tagName" => Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 44))]), "html", null, true);
                    yield "\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 44), "html", null, true);
                    yield "</a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "                                        </div>
                                    ";
            }
            // line 48
            yield "
                                    <!-- Lien vers l'article complet -->
                                    <a href=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm rounded-4 mt-3\">
                                        ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.read_more"), "html", null, true);
            yield "
                                    </a>

                                    <!-- Affichage des commentaires -->
                                    <div class=\"mt-3\">
                                        <a href=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 56)]), "html", null, true);
            yield "#comments\" class=\"text-muted\">
                                            ";
            // line 57
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:message-circle", "class" => "text-white"]);
            yield " 
                                            ";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 58)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment.comment", [], null, null, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 58))), "html", null, true);
            yield "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 68
        if (!$context['_iterated']) {
            // line 65
            yield "                        <div class=\"alert alert-warning text-center\" role=\"alert\">
                            ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "                </div>


                

                ";
        // line 74
        if (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 74, $this->source); })()) > (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () { throw new RuntimeError('Variable "pageSize" does not exist.', 74, $this->source); })()))) {
            // line 75
            yield "                    <nav class=\"mt-4\" aria-label=\"Pagination\">
                        <ul class=\"pagination pagination-lg d-flex justify-content-center\">
                            <!-- Previous Page -->
                            <li class=\"page-item ";
            // line 78
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 78, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 78)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 79, $this->source); })()) - 1), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 79, $this->source); })())]), "html", null, true);
            yield "\" rel=\"previous\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 79, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 79)) {
                yield "aria-disabled=\"true\"";
            }
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
            yield "\">
                                    ";
            // line 80
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:arrow-left"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
            yield "
                                </a>
                            </li>

                            <!-- Page Numbers -->
                            ";
            // line 85
            $context["startPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 85, $this->source); })()) - 2);
            // line 86
            yield "                            ";
            $context["endPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 86, $this->source); })()) + 2);
            // line 87
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 87, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 87, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 88
                yield "                                ";
                if ((($context["i"] > 0) && ($context["i"] <= (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 88, $this->source); })())))) {
                    // line 89
                    yield "                                    <li class=\"page-item ";
                    if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 89, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\" ";
                    if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 89, $this->source); })()))) {
                        yield "aria-current=\"page\"";
                    }
                    yield ">
                                        <a class=\"page-link\" href=\"";
                    // line 90
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => $context["i"], "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 90, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                // line 93
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "
                            <!-- Next Page -->
                            <li class=\"page-item ";
            // line 96
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 96, $this->source); })()), "hasNextPage", [], "any", false, false, false, 96)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 97, $this->source); })()) + 1), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 97, $this->source); })())]), "html", null, true);
            yield "\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 97, $this->source); })()), "hasNextPage", [], "any", false, false, false, 97)) {
                yield "aria-disabled=\"true\"";
            }
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
            yield "\">
                                    ";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:arrow-right"]);
            yield "
                                </a>
                            </li>
                        </ul>
                    </nav>
                ";
        } else {
            // line 104
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No pagination available"), "html", null, true);
            yield "</p>
                ";
        }
        // line 106
        yield "            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 111
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

        // line 112
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                ";
        // line 115
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
                ";
        // line 116
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
                ";
        // line 117
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
        return "blog/index.html.twig";
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
        return array (  406 => 117,  402 => 116,  398 => 115,  393 => 112,  380 => 111,  366 => 106,  360 => 104,  349 => 98,  339 => 97,  333 => 96,  329 => 94,  323 => 93,  315 => 90,  304 => 89,  301 => 88,  296 => 87,  293 => 86,  291 => 85,  281 => 80,  271 => 79,  265 => 78,  260 => 75,  258 => 74,  251 => 69,  242 => 66,  239 => 65,  237 => 68,  224 => 58,  220 => 57,  216 => 56,  208 => 51,  204 => 50,  200 => 48,  196 => 46,  185 => 44,  181 => 43,  177 => 42,  174 => 41,  172 => 40,  167 => 37,  161 => 35,  155 => 33,  153 => 32,  144 => 26,  140 => 25,  132 => 20,  128 => 18,  120 => 16,  118 => 15,  112 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}
    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"row\">
                    {% for post in paginator %}
                        <div class=\"col-sm-6 mb-4\">
                            <div class=\"card shadow-lg rounded-4 overflow-hidden\" style=\"background:rgb(71, 61, 127);\">
                                <div class=\"card-body p-4\">
                                    <!-- Affichage de l'image de l'article, si disponible -->
                                    {% if post.image %}
                                        <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"{{ post.title }}\" class=\"img-fluid mb-3 rounded-4\">
                                    {% endif %}

                                    <!-- Titre de l'article -->
                                    <h3 class=\"text-white mb-2\">{{ post.title }}</h3>

                                    <!-- Auteur et Date de publication -->
                                    <p class=\"text-muted mb-3\">
                                        <small>
                                            <strong>{{ post.author.username }}</strong> | 
                                            {{ post.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}
                                        </small>
                                    </p>

                                    <!-- Extrait du contenu (Résumé) -->
                                    <p class=\"text-white mb-3\">
                                        {% if post.summary %}
                                            {{ post.summary }}
                                        {% else %}
                                            {{ 'No excerpt available.'|trans }}
                                        {% endif %}
                                    </p>

                                    <!-- Affichage des tags -->
                                    {% if post.tags is not empty %}
                                        <div class=\"tags mt-3\">
                                            <strong class=\"text-white\">{{ 'Tags'|trans }}:</strong>
                                            {% for tag in post.tags %}
                                                <a href=\"{{ path('blog_index_tag', {tagName: tag.name|url_encode}) }}\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">{{ tag.name }}</a>
                                            {% endfor %}
                                        </div>
                                    {% endif %}

                                    <!-- Lien vers l'article complet -->
                                    <a href=\"{{ path('blog_post', {slug: post.slug}) }}\" class=\"btn btn-light btn-sm rounded-4 mt-3\">
                                        {{ 'action.read_more'|trans }}
                                    </a>

                                    <!-- Affichage des commentaires -->
                                    <div class=\"mt-3\">
                                        <a href=\"{{ path('blog_post', {slug: post.slug}) }}#comments\" class=\"text-muted\">
                                            {{ component('ux:icon', { name: 'tabler:message-circle', class: 'text-white' }) }} 
                                            {{ post.comments|length }} {{ 'comment.comment'|trans(count=post.comments|length) }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% else %}
                        <div class=\"alert alert-warning text-center\" role=\"alert\">
                            {{ 'post.no_posts_found'|trans }}
                        </div>
                    {% endfor %}
                </div>


                

                {% if totalItems > pageSize %}
                    <nav class=\"mt-4\" aria-label=\"Pagination\">
                        <ul class=\"pagination pagination-lg d-flex justify-content-center\">
                            <!-- Previous Page -->
                            <li class=\"page-item {% if not paginator.hasPreviousPage %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: currentPage - 1, tag: tagName}) }}\" rel=\"previous\" {% if not paginator.hasPreviousPage %}aria-disabled=\"true\"{% endif %} aria-label=\"{{ 'paginator.previous'|trans }}\">
                                    {{ component('ux:icon', { name: 'tabler:arrow-left' }) }} {{ 'paginator.previous'|trans }}
                                </a>
                            </li>

                            <!-- Page Numbers -->
                            {% set startPage = currentPage - 2 %}
                            {% set endPage = currentPage + 2 %}
                            {% for i in startPage..endPage %}
                                {% if i > 0 and i <= pageCount %}
                                    <li class=\"page-item {% if i == currentPage %}active{% endif %}\" {% if i == currentPage %}aria-current=\"page\"{% endif %}>
                                        <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}

                            <!-- Next Page -->
                            <li class=\"page-item {% if not paginator.hasNextPage %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: currentPage + 1, tag: tagName}) }}\" {% if not paginator.hasNextPage %}aria-disabled=\"true\"{% endif %} aria-label=\"{{ 'paginator.next'|trans }}\">
                                    {{ 'paginator.next'|trans }} {{ component('ux:icon', { name: 'tabler:arrow-right' }) }}
                                </a>
                            </li>
                        </ul>
                    </nav>
                {% else %}
                    <p>{{ 'No pagination available'|trans }}</p>
                {% endif %}
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
", "blog/index.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/blog/index.html.twig");
    }
}
