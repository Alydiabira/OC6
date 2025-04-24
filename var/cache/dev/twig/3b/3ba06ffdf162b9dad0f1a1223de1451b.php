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

/* security/login.html.twig */
class __TwigTemplate_767f63ddb2048f1c8d82689e98a5abbd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "login";
        
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
        yield "<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <!-- 📌 Formulaire de connexion -->
        <div class=\"col-lg-5\">
            ";
        // line 10
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 10, $this->source); })())) {
            // line 11
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageKey", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 12, $this->source); })()), "messageData", [], "any", false, false, false, 12), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 15
        yield "
            <div class=\"card shadow-lg rounded-4 p-4\" style=\"background: linear-gradient(to right, #f12711, #f5af19);\">
                <div class=\"card-header bg-primary text-white text-center rounded-4\">
                    <h4>";
        // line 18
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:lock", "class" => "text-white"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("title.login"), "html", null, true);
        yield "</h4>
                </div>
                <div class=\"card-body\">
                    <form action=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        yield "\" method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label text-white\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        yield "</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\" class=\"form-control rounded-4\" required autofocus />
                        </div>

                        <div class=\"mb-3 position-relative\">
                            <label for=\"password\" class=\"form-label text-white\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        yield "</label>
                            <div class=\"input-group\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control rounded-4\" required />
                                <button class=\"btn btn-outline-secondary\" type=\"button\" data-bs-toggle=\"password\" aria-label=\"Toggle password visibility\">
                                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:eye", "class" => "text-white", "aria-hidden" => "true"]);
        yield "
                                </button>
                            </div>
                        </div>

                        <div class=\"mb-3 form-check text-white\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMe\" name=\"_remember_me\" checked>
                            <label class=\"form-check-label\" for=\"rememberMe\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.remember_me"), "html", null, true);
        yield "</label>
                        </div>

                        <input type=\"hidden\" name=\"_target_path\" value=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "get", ["redirect_to"], "method", false, false, false, 42), "html", null, true);
        yield "\"/>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\"/>

                        <button type=\"submit\" class=\"btn btn-lg btn-light w-100 py-2 rounded-4\">
                            ";
        // line 46
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:login", "class" => "text-dark"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.sign_in"), "html", null, true);
        yield "
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- 📌 Aide à la connexion -->
        <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"card shadow-sm p-4 rounded-4\">
                <div class=\"card-header bg-secondary text-white\">
                    <h5>";
        // line 57
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:info-circle", "class" => "text-white"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.login_users"), "html", null, true);
        yield "</h5>
                </div>
                <div class=\"card-body\">
                    <!-- Accordion for help content -->
                    <div class=\"accordion\" id=\"helpAccordion\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingOne\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.username"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <strong>aly</strong>
                                </div>
                            </div>
                        </div>

                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingTwo\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.password"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <strong>azerty</strong>
                                </div>
                            </div>
                        </div>

                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingThree\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    ";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.role"), "html", null, true);
        yield "
                                </button>
                            </h2>
                            <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <code>ROLE_ADMIN</code> (";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.role_user"), "html", null, true);
        yield ")
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"alert alert-info\">
                            <strong>";
        // line 104
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:bulb", "class" => "text-dark"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("note"), "html", null, true);
        yield ":</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.reload_fixtures"), "html", null, true);
        yield "
                            <code class=\"console d-block mt-2\">\$ php bin/console doctrine:fixtures:load</code>
                        </div>

                        <div class=\"alert alert-warning\">
                            <strong>";
        // line 109
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:tool", "class" => "text-dark"]);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tip"), "html", null, true);
        yield ":</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("help.add_user"), "html", null, true);
        yield "
                            <code class=\"console d-block mt-2\">\$ php bin/console app:add-user</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
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

        // line 121
        yield "    ";
        yield from $this->yieldParentBlock("sidebar", $context, $blocks);
        yield "
    <div class=\"container mt-4 text-center\">
        ";
        // line 123
        yield $this->extensions['App\Twig\SourceCodeExtension']->showSourceCode($this->env, $this->getTemplateName());
        yield "
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
        return "security/login.html.twig";
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
        return array (  316 => 123,  310 => 121,  297 => 120,  272 => 109,  260 => 104,  249 => 96,  241 => 91,  225 => 78,  209 => 65,  196 => 57,  180 => 46,  174 => 43,  170 => 42,  164 => 39,  154 => 32,  147 => 28,  140 => 24,  136 => 23,  131 => 21,  123 => 18,  118 => 15,  112 => 12,  109 => 11,  107 => 10,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body_id 'login' %}

{% block main %}
<div class=\"container mt-5\">
    <div class=\"row justify-content-center\">
        <!-- 📌 Formulaire de connexion -->
        <div class=\"col-lg-5\">
            {% if error %}
                <div class=\"alert alert-danger\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}

            <div class=\"card shadow-lg rounded-4 p-4\" style=\"background: linear-gradient(to right, #f12711, #f5af19);\">
                <div class=\"card-header bg-primary text-white text-center rounded-4\">
                    <h4>{{ component('ux:icon', { name: 'tabler:lock', class: 'text-white' }) }} {{ 'title.login'|trans }}</h4>
                </div>
                <div class=\"card-body\">
                    <form action=\"{{ path('security_login') }}\" method=\"post\">
                        <div class=\"mb-3\">
                            <label for=\"username\" class=\"form-label text-white\">{{ 'label.username'|trans }}</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control rounded-4\" required autofocus />
                        </div>

                        <div class=\"mb-3 position-relative\">
                            <label for=\"password\" class=\"form-label text-white\">{{ 'label.password'|trans }}</label>
                            <div class=\"input-group\">
                                <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control rounded-4\" required />
                                <button class=\"btn btn-outline-secondary\" type=\"button\" data-bs-toggle=\"password\" aria-label=\"Toggle password visibility\">
                                    {{ component('ux:icon', { name: 'tabler:eye', class: 'text-white', 'aria-hidden': 'true' }) }}
                                </button>
                            </div>
                        </div>

                        <div class=\"mb-3 form-check text-white\">
                            <input type=\"checkbox\" class=\"form-check-input\" id=\"rememberMe\" name=\"_remember_me\" checked>
                            <label class=\"form-check-label\" for=\"rememberMe\">{{ 'label.remember_me'|trans }}</label>
                        </div>

                        <input type=\"hidden\" name=\"_target_path\" value=\"{{ app.request.get('redirect_to') }}\"/>
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>

                        <button type=\"submit\" class=\"btn btn-lg btn-light w-100 py-2 rounded-4\">
                            {{ component('ux:icon', { name: 'tabler:login', class: 'text-dark' }) }} {{ 'action.sign_in'|trans }}
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- 📌 Aide à la connexion -->
        <div class=\"col-lg-6 mt-4 mt-lg-0\">
            <div class=\"card shadow-sm p-4 rounded-4\">
                <div class=\"card-header bg-secondary text-white\">
                    <h5>{{ component('ux:icon', { name: 'tabler:info-circle', class: 'text-white' }) }} {{ 'help.login_users'|trans }}</h5>
                </div>
                <div class=\"card-body\">
                    <!-- Accordion for help content -->
                    <div class=\"accordion\" id=\"helpAccordion\">
                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingOne\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne\" aria-expanded=\"true\" aria-controls=\"collapseOne\">
                                    {{ 'label.username'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapseOne\" class=\"accordion-collapse collapse show\" aria-labelledby=\"headingOne\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <strong>aly</strong>
                                </div>
                            </div>
                        </div>

                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingTwo\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseTwo\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
                                    {{ 'label.password'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapseTwo\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingTwo\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <strong>azerty</strong>
                                </div>
                            </div>
                        </div>

                        <div class=\"accordion-item\">
                            <h2 class=\"accordion-header\" id=\"headingThree\">
                                <button class=\"accordion-button\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseThree\" aria-expanded=\"false\" aria-controls=\"collapseThree\">
                                    {{ 'label.role'|trans }}
                                </button>
                            </h2>
                            <div id=\"collapseThree\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingThree\" data-bs-parent=\"#helpAccordion\">
                                <div class=\"accordion-body\">
                                    <code>ROLE_ADMIN</code> ({{ 'help.role_user'|trans }})
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4\">
                        <div class=\"alert alert-info\">
                            <strong>{{ component('ux:icon', { name: 'tabler:bulb', class: 'text-dark' }) }} {{ 'note'|trans }}:</strong> {{ 'help.reload_fixtures'|trans }}
                            <code class=\"console d-block mt-2\">\$ php bin/console doctrine:fixtures:load</code>
                        </div>

                        <div class=\"alert alert-warning\">
                            <strong>{{ component('ux:icon', { name: 'tabler:tool', class: 'text-dark' }) }} {{ 'tip'|trans }}:</strong> {{ 'help.add_user'|trans }}
                            <code class=\"console d-block mt-2\">\$ php bin/console app:add-user</code>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block sidebar %}
    {{ parent() }}
    <div class=\"container mt-4 text-center\">
        {{ show_source_code(_self) }}
    </div>
{% endblock %}
", "security/login.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/security/login.html.twig");
    }
}
