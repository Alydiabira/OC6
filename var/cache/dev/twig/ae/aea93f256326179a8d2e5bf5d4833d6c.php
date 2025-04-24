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

/* base.html.twig */
class __TwigTemplate_904ed16710d87a651a299bb2489c1221 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body_id' => [$this, 'block_body_id'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'sidebar' => [$this, 'block_sidebar'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "locale", [], "any", false, false, false, 2), "html", null, true);
        yield "\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"view-transition\" content=\"same-origin\" />
        <title>";
        // line 7
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("rss.title"), "html", null, true);
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_rss");
        yield "\">
        ";
        // line 9
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 19
        yield "
        <link rel=\"shortcut icon\" type=\"image/svg+xml\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.svg"), "html", null, true);
        yield "\">
    </head>

    <body id=\"";
        // line 23
        yield from $this->unwrap()->yieldBlock('body_id', $context, $blocks);
        yield "\">
";
        // line 24
        $macros["lang"] = $this->macros["lang"] = $this->loadTemplate("default/_language_selector.html.twig", "base.html.twig", 24)->unwrap();
        // line 25
        yield "
        ";
        // line 26
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 90
        yield "
        <main class=\"container py-5\">
            ";
        // line 92
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 112
        yield "        </main>

        ";
        // line 114
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 131
        yield "
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
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

        yield "TomTroc";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        yield "            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        yield "            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" defer></script>
            ";
        // line 17
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 18
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 27
        yield "            <header>
                <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background:rgb(18, 17, 17);\">
                    <div class=\"container\">
                        <a class=\"navbar-brand fw-bold\" href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        yield "\">TomTroc</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#appNavbar\" aria-controls=\"appNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"appNavbar\">
                            <ul class=\"navbar-nav me-auto\">
                            <li class=\"nav-item";
        // line 36
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36) == "blog_index")) ? (" active") : (""));
        yield "\">
                                <a class=\"nav-link\" href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_index");
        yield "\">
                                    <i class=\"fas fa-home\"></i> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.homepage"), "html", null, true);
        yield "
                                </a>
                            </li>

                            ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 43
            yield "                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_dashboard");
            yield "\">
                                        <i class=\"fas fa-tachometer-alt\"></i> Dashboard
                                    </a>
                                </li>
                            ";
        }
        // line 49
        yield "
                            <li class=\"nav-item";
        // line 50
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "request", [], "any", false, false, false, 50), "get", ["_route"], "method", false, false, false, 50) == "contact")) ? (" active") : (""));
        yield "\">
                                <a class=\"nav-link\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">
                                    <i class=\"fas fa-envelope\"></i> Contactez-nous
                                </a>
                            </li>
                        </ul>

                        <ul class=\"navbar-nav ms-auto\">
                            <li class=\"nav-item";
        // line 58
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58) == "blog_search")) ? (" active") : (""));
        yield "\">
                                <a class=\"nav-link\" href=\"";
        // line 59
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_search");
        yield "\">
                                    <i class=\"fas fa-search\"></i> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.search"), "html", null, true);
        yield "
                                </a>
                            </li>

                            ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "user", [], "any", false, false, false, 64)) {
            // line 65
            yield "                                <li class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" id=\"userMenu\">
                                        <i class=\"fas fa-user\"></i> <span class=\"fw-bold\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "fullname", [], "any", false, false, false, 67), "html", null, true);
            yield "</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userMenu\">
                                        <a class=\"dropdown-item\" href=\"";
            // line 70
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("user_edit");
            yield "\">
                                            <i class=\"fas fa-id-badge\"></i> ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.user"), "html", null, true);
            yield "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item text-danger\" href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
            yield "\">
                                            <i class=\"fas fa-sign-out-alt\"></i> ";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("menu.logout"), "html", null, true);
            yield "
                                        </a>
                                    </div>
                                </li>
                            ";
        }
        // line 80
        yield "
                            <li class=\"nav-item\">
                            ";
        // line 82
        yield $macros["lang"]->getTemplateForMacro("macro_render_language_selector", $context, 82, $this->getSourceContext())->macro_render_language_selector(...[true]);
        yield "
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 92
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

        // line 93
        yield "                <div class=\"row\">
                    <div id=\"main\" class=\"col-md-8\">
                        ";
        // line 95
        yield Twig\Extension\CoreExtension::include($this->env, $context, "default/_flash_messages.html.twig");
        yield "
                        ";
        // line 96
        yield from $this->unwrap()->yieldBlock('main', $context, $blocks);
        // line 97
        yield "                    </div>

                    <aside id=\"sidebar\" class=\"col-md-4\">
                        ";
        // line 100
        yield from $this->unwrap()->yieldBlock('sidebar', $context, $blocks);
        // line 109
        yield "                    </aside>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 96
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 100
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

        // line 101
        yield "                            <div class=\"card shadow-sm p-3 bg-light\">
                                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragmentStrategy("esi", Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction", ["template" => "blog/about.html.twig", "sharedAge" => 600, "_locale" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 105
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 105, $this->source); })()), "request", [], "any", false, false, false, 105), "locale", [], "any", false, false, false, 105)]));
        // line 106
        yield "
                            </div>
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 115
        yield "            <footer class=\"bg-dark text-white text-center py-3\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p class=\"mb-1\">&copy; ";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " - The Symfony Project</p>
                            <p class=\"small\">";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("mit_license"), "html", null, true);
        yield "</p>
                        </div>
                        <div class=\"col-md-6 d-flex justify-content-center align-items-center gap-3\">
                            <a rel=\"noopener noreferrer\" target=\"_blank\" href=\"https://github.com/Alydiabira/Symfony-7-testapp\" class=\"text-white\" title=\"Voir le projet Symfony sur GitHub\">
                                <i class=\"fab fa-github\" style=\"font-size: 24px;\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
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
        return "base.html.twig";
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
        return array (  523 => 120,  519 => 119,  513 => 115,  500 => 114,  487 => 106,  485 => 105,  484 => 102,  481 => 101,  468 => 100,  446 => 96,  433 => 109,  431 => 100,  426 => 97,  424 => 96,  420 => 95,  416 => 93,  403 => 92,  384 => 82,  380 => 80,  372 => 75,  368 => 74,  362 => 71,  358 => 70,  352 => 67,  348 => 65,  346 => 64,  339 => 60,  335 => 59,  331 => 58,  321 => 51,  317 => 50,  314 => 49,  306 => 44,  303 => 43,  301 => 42,  294 => 38,  290 => 37,  286 => 36,  277 => 30,  272 => 27,  259 => 26,  237 => 23,  214 => 17,  203 => 18,  201 => 17,  198 => 16,  185 => 15,  171 => 11,  168 => 10,  155 => 9,  132 => 7,  118 => 131,  116 => 114,  112 => 112,  110 => 92,  106 => 90,  104 => 26,  101 => 25,  99 => 24,  95 => 23,  89 => 20,  86 => 19,  84 => 15,  81 => 14,  79 => 9,  73 => 8,  69 => 7,  61 => 2,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"{{ app.request.locale }}\">
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
        <meta name=\"view-transition\" content=\"same-origin\" />
        <title>{% block title %}TomTroc{% endblock %}</title>
        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"{{ 'rss.title'|trans }}\" href=\"{{ path('blog_rss') }}\">
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
            <link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\">
            <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
        {% endblock %}

        {% block javascripts %}
            <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js\" defer></script>
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}

        <link rel=\"shortcut icon\" type=\"image/svg+xml\" href=\"{{ asset('favicon.svg') }}\">
    </head>

    <body id=\"{% block body_id %}{% endblock %}\">
{% import 'default/_language_selector.html.twig' as lang %}

        {% block header %}
            <header>
                <nav class=\"navbar navbar-expand-lg navbar-dark\" style=\"background:rgb(18, 17, 17);\">
                    <div class=\"container\">
                        <a class=\"navbar-brand fw-bold\" href=\"{{ path('homepage') }}\">TomTroc</a>
                        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#appNavbar\" aria-controls=\"appNavbar\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                            <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        <div class=\"collapse navbar-collapse\" id=\"appNavbar\">
                            <ul class=\"navbar-nav me-auto\">
                            <li class=\"nav-item{{ app.request.get('_route') == 'blog_index' ? ' active' : '' }}\">
                                <a class=\"nav-link\" href=\"{{ path('blog_index') }}\">
                                    <i class=\"fas fa-home\"></i> {{ 'menu.homepage'|trans }}
                                </a>
                            </li>

                            {% if is_granted('ROLE_ADMIN') %}
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" href=\"{{ path('admin_dashboard') }}\">
                                        <i class=\"fas fa-tachometer-alt\"></i> Dashboard
                                    </a>
                                </li>
                            {% endif %}

                            <li class=\"nav-item{{ app.request.get('_route') == 'contact' ? ' active' : '' }}\">
                                <a class=\"nav-link\" href=\"{{ path('contact') }}\">
                                    <i class=\"fas fa-envelope\"></i> Contactez-nous
                                </a>
                            </li>
                        </ul>

                        <ul class=\"navbar-nav ms-auto\">
                            <li class=\"nav-item{{ app.request.get('_route') == 'blog_search' ? ' active' : '' }}\">
                                <a class=\"nav-link\" href=\"{{ path('blog_search') }}\">
                                    <i class=\"fas fa-search\"></i> {{ 'menu.search'|trans }}
                                </a>
                            </li>

                            {% if app.user %}
                                <li class=\"nav-item dropdown\">
                                    <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\" id=\"userMenu\">
                                        <i class=\"fas fa-user\"></i> <span class=\"fw-bold\">{{ app.user.fullname }}</span>
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"userMenu\">
                                        <a class=\"dropdown-item\" href=\"{{ path('user_edit') }}\">
                                            <i class=\"fas fa-id-badge\"></i> {{ 'menu.user'|trans }}
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item text-danger\" href=\"{{ logout_path() }}\">
                                            <i class=\"fas fa-sign-out-alt\"></i> {{ 'menu.logout'|trans }}
                                        </a>
                                    </div>
                                </li>
                            {% endif %}

                            <li class=\"nav-item\">
                            {{ lang.render_language_selector(true) }}
                            </li>
                        </ul>
                        </div>
                    </div>
                </nav>
            </header>
        {% endblock %}

        <main class=\"container py-5\">
            {% block body %}
                <div class=\"row\">
                    <div id=\"main\" class=\"col-md-8\">
                        {{ include('default/_flash_messages.html.twig') }}
                        {% block main %}{% endblock %}
                    </div>

                    <aside id=\"sidebar\" class=\"col-md-4\">
                        {% block sidebar %}
                            <div class=\"card shadow-sm p-3 bg-light\">
                                {{ render_esi(controller('Symfony\\\\Bundle\\\\FrameworkBundle\\\\Controller\\\\TemplateController::templateAction', {
                                    'template': 'blog/about.html.twig',
                                    'sharedAge': 600,
                                    '_locale': app.request.locale
                                })) }}
                            </div>
                        {% endblock %}
                    </aside>
                </div>
            {% endblock %}
        </main>

        {% block footer %}
            <footer class=\"bg-dark text-white text-center py-3\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <p class=\"mb-1\">&copy; {{ 'now'|date('Y') }} - The Symfony Project</p>
                            <p class=\"small\">{{ 'mit_license'|trans }}</p>
                        </div>
                        <div class=\"col-md-6 d-flex justify-content-center align-items-center gap-3\">
                            <a rel=\"noopener noreferrer\" target=\"_blank\" href=\"https://github.com/Alydiabira/Symfony-7-testapp\" class=\"text-white\" title=\"Voir le projet Symfony sur GitHub\">
                                <i class=\"fab fa-github\" style=\"font-size: 24px;\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}

    </body>
</html>
", "base.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/base.html.twig");
    }
}
