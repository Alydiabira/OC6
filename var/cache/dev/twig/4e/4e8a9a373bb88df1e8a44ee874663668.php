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

/* admin/dashboard.html.twig */
class __TwigTemplate_91f99766c4214b0377759aec32279b02 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        // line 1
        yield "<style>

.dashboard-stats .stat:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.dashboard-stats .stat {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 15px;
}

.stat-title {
    font-size: 1.25rem;
    font-weight: 500;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
}

</style>


<div class=\"dashboard-stats row justify-content-center\">
    <div class=\"col-md-4 col-sm-6 stat card shadow-sm mb-4\">
        <div class=\"card-body text-center\">
            <h3 class=\"stat-title text-primary\">Users</h3>
            <p class=\"stat-value display-4\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["userCount"]) || array_key_exists("userCount", $context) ? $context["userCount"] : (function () { throw new RuntimeError('Variable "userCount" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "</p>
        </div>
    </div>

    <div class=\"col-md-4 col-sm-6 stat card shadow-sm mb-4\">
        <div class=\"card-body text-center\">
            <h3 class=\"stat-title text-success\">Articles</h3>
            <p class=\"stat-value display-4\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["articleCount"]) || array_key_exists("articleCount", $context) ? $context["articleCount"] : (function () { throw new RuntimeError('Variable "articleCount" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "</p>
        </div>
    </div>
</div>


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
        return "admin/dashboard.html.twig";
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
        return array (  89 => 37,  79 => 30,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<style>

.dashboard-stats .stat:hover {
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}

.dashboard-stats .stat {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    margin-bottom: 15px;
}

.stat-title {
    font-size: 1.25rem;
    font-weight: 500;
}

.stat-value {
    font-size: 2.5rem;
    font-weight: 700;
}

</style>


<div class=\"dashboard-stats row justify-content-center\">
    <div class=\"col-md-4 col-sm-6 stat card shadow-sm mb-4\">
        <div class=\"card-body text-center\">
            <h3 class=\"stat-title text-primary\">Users</h3>
            <p class=\"stat-value display-4\">{{ userCount }}</p>
        </div>
    </div>

    <div class=\"col-md-4 col-sm-6 stat card shadow-sm mb-4\">
        <div class=\"card-body text-center\">
            <h3 class=\"stat-title text-success\">Articles</h3>
            <p class=\"stat-value display-4\">{{ articleCount }}</p>
        </div>
    </div>
</div>


", "admin/dashboard.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/admin/dashboard.html.twig");
    }
}
