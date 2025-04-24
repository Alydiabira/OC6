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
class __TwigTemplate_b845bc1749ff7988e6d5aa024ba0fb50 extends Template
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
        yield "
  <section class=\"hero py-5 text-center\">
        <h1 class=\"display-4\">Bienvenue sur TomTroc</h1>
        <p class=\"lead\">Échangez vos livres facilement entre lecteurs !</p>
    </section>

   

    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"row\">
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            yield "                        <div class=\"col-sm-6 mb-4\">
                            <div class=\"card shadow-lg rounded-4 overflow-hidden\" style=\"background:rgb(71, 61, 127);\">
                                <div class=\"card-body p-4\">
                                    ";
            // line 22
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 22)) {
                // line 23
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/posts/" . CoreExtension::getAttribute($this->env, $this->source, $context["post"], "image", [], "any", false, false, false, 23))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 23), "html", null, true);
                yield "\" class=\"img-fluid mb-3 rounded-4\">
                                    ";
            }
            // line 25
            yield "
                                    <h3 class=\"text-white mb-2\">";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            yield "</h3>

                                    <p class=\"text-muted mb-3\">
                                        <small>
                                            <strong>";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "author", [], "any", false, false, false, 30), "username", [], "any", false, false, false, 30), "html", null, true);
            yield "</strong> | 
                                            ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 31), "medium", "short", "", "UTC"), "html", null, true);
            yield "
                                        </small>
                                    </p>

                                    <p class=\"text-white mb-3\">
                                        ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 36)) {
                // line 37
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, false, 37), "html", null, true);
                yield "
                                        ";
            } else {
                // line 39
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No excerpt available."), "html", null, true);
                yield "
                                        ";
            }
            // line 41
            yield "                                    </p>

                                    ";
            // line 43
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 43)) {
                // line 44
                yield "                                        <p class=\"text-white small mb-3\">
                                            <strong>Description :</strong> ";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "description", [], "any", false, false, false, 45)), "truncate", [80, "…"], "method", false, false, false, 45), "html", null, true);
                yield "
                                        </p>
                                    ";
            }
            // line 48
            yield "
                                    <p class=\"text-white small mb-3\">
                                        <strong>Disponibilité :</strong>
                                        ";
            // line 51
            if (CoreExtension::getAttribute($this->env, $this->source, $context["post"], "available", [], "any", false, false, false, 51)) {
                // line 52
                yield "                                            <span class=\"badge bg-success\">Disponible</span>
                                        ";
            } else {
                // line 54
                yield "                                            <span class=\"badge bg-danger\">Indisponible</span>
                                        ";
            }
            // line 56
            yield "                                    </p>

                                    ";
            // line 58
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 58))) {
                // line 59
                yield "                                        <div class=\"tags mt-3\">
                                            <strong class=\"text-white\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Tags"), "html", null, true);
                yield ":</strong>
                                            ";
                // line 61
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "tags", [], "any", false, false, false, 61));
                foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                    // line 62
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_tag", ["tagName" => Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 62))]), "html", null, true);
                    yield "\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 62), "html", null, true);
                    yield "</a>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['tag'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                yield "                                        </div>
                                    ";
            }
            // line 66
            yield "
                                    <a href=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 67)]), "html", null, true);
            yield "\" class=\"btn btn-light btn-sm rounded-4 mt-3\">
                                        ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.read_more"), "html", null, true);
            yield "
                                    </a>

                                    <div class=\"mt-3\">
                                        <a href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_post", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["post"], "slug", [], "any", false, false, false, 72)]), "html", null, true);
            yield "#comments\" class=\"text-muted\">
                                            ";
            // line 73
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:message-circle", "class" => "text-white"]);
            yield " 
                                            ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 74)), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("comment.comment", [], null, null, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comments", [], "any", false, false, false, 74))), "html", null, true);
            yield "
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        // line 84
        if (!$context['_iterated']) {
            // line 81
            yield "                        <div class=\"alert alert-warning text-center\" role=\"alert\">
                            ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("post.no_posts_found"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        yield "                </div>

                ";
        // line 87
        if (((isset($context["totalItems"]) || array_key_exists("totalItems", $context) ? $context["totalItems"] : (function () { throw new RuntimeError('Variable "totalItems" does not exist.', 87, $this->source); })()) > (isset($context["pageSize"]) || array_key_exists("pageSize", $context) ? $context["pageSize"] : (function () { throw new RuntimeError('Variable "pageSize" does not exist.', 87, $this->source); })()))) {
            // line 88
            yield "                    <nav class=\"mt-4\" aria-label=\"Pagination\">
                        <ul class=\"pagination pagination-lg d-flex justify-content-center\">
                            <li class=\"page-item ";
            // line 90
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 90, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 90)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 91, $this->source); })()) - 1), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 91, $this->source); })())]), "html", null, true);
            yield "\" rel=\"previous\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 91, $this->source); })()), "hasPreviousPage", [], "any", false, false, false, 91)) {
                yield "aria-disabled=\"true\"";
            }
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
            yield "\">
                                    ";
            // line 92
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:arrow-left"]);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.previous"), "html", null, true);
            yield "
                                </a>
                            </li>
                            ";
            // line 95
            $context["startPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 95, $this->source); })()) - 2);
            // line 96
            yield "                            ";
            $context["endPage"] = ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 96, $this->source); })()) + 2);
            // line 97
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(range((isset($context["startPage"]) || array_key_exists("startPage", $context) ? $context["startPage"] : (function () { throw new RuntimeError('Variable "startPage" does not exist.', 97, $this->source); })()), (isset($context["endPage"]) || array_key_exists("endPage", $context) ? $context["endPage"] : (function () { throw new RuntimeError('Variable "endPage" does not exist.', 97, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 98
                yield "                                ";
                if ((($context["i"] > 0) && ($context["i"] <= (isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 98, $this->source); })())))) {
                    // line 99
                    yield "                                    <li class=\"page-item ";
                    if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 99, $this->source); })()))) {
                        yield "active";
                    }
                    yield "\" ";
                    if (($context["i"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 99, $this->source); })()))) {
                        yield "aria-current=\"page\"";
                    }
                    yield ">
                                        <a class=\"page-link\" href=\"";
                    // line 100
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => $context["i"], "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 100, $this->source); })())]), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
                    yield "</a>
                                    </li>
                                ";
                }
                // line 103
                yield "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "                            <li class=\"page-item ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 104, $this->source); })()), "hasNextPage", [], "any", false, false, false, 104)) {
                yield "disabled";
            }
            yield "\">
                                <a class=\"page-link\" href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index_paginated", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 105, $this->source); })()) + 1), "tag" => (isset($context["tagName"]) || array_key_exists("tagName", $context) ? $context["tagName"] : (function () { throw new RuntimeError('Variable "tagName" does not exist.', 105, $this->source); })())]), "html", null, true);
            yield "\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["paginator"]) || array_key_exists("paginator", $context) ? $context["paginator"] : (function () { throw new RuntimeError('Variable "paginator" does not exist.', 105, $this->source); })()), "hasNextPage", [], "any", false, false, false, 105)) {
                yield "aria-disabled=\"true\"";
            }
            yield " aria-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("paginator.next"), "html", null, true);
            yield "\">
                                    ";
            // line 106
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
            // line 112
            yield "                    <p>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No pagination available"), "html", null, true);
            yield "</p>
                ";
        }
        // line 114
        yield "            </div>
        </div>
    </div>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
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

        // line 122
        yield "    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                ";
        // line 125
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
                ";
        // line 126
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
                ";
        // line 127
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
        return array (  430 => 127,  426 => 126,  422 => 125,  417 => 122,  404 => 121,  388 => 114,  382 => 112,  371 => 106,  361 => 105,  354 => 104,  348 => 103,  340 => 100,  329 => 99,  326 => 98,  321 => 97,  318 => 96,  316 => 95,  308 => 92,  298 => 91,  292 => 90,  288 => 88,  286 => 87,  282 => 85,  273 => 82,  270 => 81,  268 => 84,  255 => 74,  251 => 73,  247 => 72,  240 => 68,  236 => 67,  233 => 66,  229 => 64,  218 => 62,  214 => 61,  210 => 60,  207 => 59,  205 => 58,  201 => 56,  197 => 54,  193 => 52,  191 => 51,  186 => 48,  180 => 45,  177 => 44,  175 => 43,  171 => 41,  165 => 39,  159 => 37,  157 => 36,  149 => 31,  145 => 30,  138 => 26,  135 => 25,  127 => 23,  125 => 22,  120 => 19,  115 => 18,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'blog_index' %}

{% block main %}

  <section class=\"hero py-5 text-center\">
        <h1 class=\"display-4\">Bienvenue sur TomTroc</h1>
        <p class=\"lead\">Échangez vos livres facilement entre lecteurs !</p>
    </section>

   

    <div class=\"container py-5\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"row\">
                    {% for post in paginator %}
                        <div class=\"col-sm-6 mb-4\">
                            <div class=\"card shadow-lg rounded-4 overflow-hidden\" style=\"background:rgb(71, 61, 127);\">
                                <div class=\"card-body p-4\">
                                    {% if post.image %}
                                        <img src=\"{{ asset('uploads/posts/' ~ post.image) }}\" alt=\"{{ post.title }}\" class=\"img-fluid mb-3 rounded-4\">
                                    {% endif %}

                                    <h3 class=\"text-white mb-2\">{{ post.title }}</h3>

                                    <p class=\"text-muted mb-3\">
                                        <small>
                                            <strong>{{ post.author.username }}</strong> | 
                                            {{ post.publishedAt|format_datetime('medium', 'short', '', 'UTC') }}
                                        </small>
                                    </p>

                                    <p class=\"text-white mb-3\">
                                        {% if post.summary %}
                                            {{ post.summary }}
                                        {% else %}
                                            {{ 'No excerpt available.'|trans }}
                                        {% endif %}
                                    </p>

                                    {% if post.description %}
                                        <p class=\"text-white small mb-3\">
                                            <strong>Description :</strong> {{ post.description|u.truncate(80, '…') }}
                                        </p>
                                    {% endif %}

                                    <p class=\"text-white small mb-3\">
                                        <strong>Disponibilité :</strong>
                                        {% if post.available %}
                                            <span class=\"badge bg-success\">Disponible</span>
                                        {% else %}
                                            <span class=\"badge bg-danger\">Indisponible</span>
                                        {% endif %}
                                    </p>

                                    {% if post.tags is not empty %}
                                        <div class=\"tags mt-3\">
                                            <strong class=\"text-white\">{{ 'Tags'|trans }}:</strong>
                                            {% for tag in post.tags %}
                                                <a href=\"{{ path('blog_index_tag', {tagName: tag.name|url_encode}) }}\" class=\"badge badge-light rounded-4 ml-2 hover-effect\">{{ tag.name }}</a>
                                            {% endfor %}
                                        </div>
                                    {% endif %}

                                    <a href=\"{{ path('blog_post', {slug: post.slug}) }}\" class=\"btn btn-light btn-sm rounded-4 mt-3\">
                                        {{ 'action.read_more'|trans }}
                                    </a>

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
                            <li class=\"page-item {% if not paginator.hasPreviousPage %}disabled{% endif %}\">
                                <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: currentPage - 1, tag: tagName}) }}\" rel=\"previous\" {% if not paginator.hasPreviousPage %}aria-disabled=\"true\"{% endif %} aria-label=\"{{ 'paginator.previous'|trans }}\">
                                    {{ component('ux:icon', { name: 'tabler:arrow-left' }) }} {{ 'paginator.previous'|trans }}
                                </a>
                            </li>
                            {% set startPage = currentPage - 2 %}
                            {% set endPage = currentPage + 2 %}
                            {% for i in startPage..endPage %}
                                {% if i > 0 and i <= pageCount %}
                                    <li class=\"page-item {% if i == currentPage %}active{% endif %}\" {% if i == currentPage %}aria-current=\"page\"{% endif %}>
                                        <a class=\"page-link\" href=\"{{ path('blog_index_paginated', {page: i, tag: tagName}) }}\">{{ i }}</a>
                                    </li>
                                {% endif %}
                            {% endfor %}
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
{% endblock %}", "blog/index.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/blog/index.html.twig");
    }
}
