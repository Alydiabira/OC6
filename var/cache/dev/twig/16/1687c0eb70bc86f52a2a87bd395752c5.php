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

/* reset_password/check_email.html.twig */
class __TwigTemplate_87974484549ade402a7937669469f825 extends Template
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
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/check_email.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/check_email.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Password Reset Email Sent";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    
    /* Global styles */
    * {
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100%;
        font-family: 'Open Sans', sans-serif;
        background: linear-gradient(135deg, #670d10 0%, #092756 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    /* Login container */
    .login {
        width: 100%;
        max-width: 350px;
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .login h1 {
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .text-white {
        color: #fff;
        font-size: 14px;
    }

    .text-white a {
        color: #4a77d4;
        text-decoration: none;
    }

    .text-white a:hover {
        text-decoration: underline;
    }

    /* Button style */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #4a77d4;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        background-color: #3762bc;
    }

    /* Input style */
    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        outline: none;
        color: #fff;
        border-radius: 4px;
        font-size: 14px;
        transition: box-shadow 0.3s ease;
    }

    input:focus {
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    }
</style>

<div class=\"login\">
    <h1>Réinitialisation du mot de passe</h1>
    <form method=\"post\">
        <p class=\"text-white\">
            Si un compte correspondant à votre adresse e-mail existe, un e-mail a été envoyé avec un lien pour réinitialiser votre mot de passe. Ce lien expirera dans 1 heure.
            ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 101, $this->source); })()), "expirationMessageKey", [], "any", false, false, false, 101), CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 101, $this->source); })()), "expirationMessageData", [], "any", false, false, false, 101), "ResetPasswordBundle"), "html", null, true);
        yield ".
        </p>
        <p class=\"text-white\">
            Si vous ne recevez pas d'e-mail, veuillez vérifier votre dossier spam ou <a href=\"";
        // line 104
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\">essayer à nouveau.</a>
        </p>

        <!-- Example of a primary button (optional) -->
        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        yield "\" class=\"btn\">Réessayer</a>
    </form>
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
        return "reset_password/check_email.html.twig";
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
        return array (  210 => 108,  203 => 104,  197 => 101,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Password Reset Email Sent{% endblock %}

{% block body %}
<style>
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');
    
    /* Global styles */
    * {
        box-sizing: border-box;
    }

    body {
        width: 100%;
        height: 100%;
        font-family: 'Open Sans', sans-serif;
        background: linear-gradient(135deg, #670d10 0%, #092756 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3E1D6D', endColorstr='#092756', GradientType=1);
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        padding: 0;
    }

    /* Login container */
    .login {
        width: 100%;
        max-width: 350px;
        background: rgba(0, 0, 0, 0.5);
        padding: 30px;
        border-radius: 8px;
        text-align: center;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }

    .login h1 {
        color: #fff;
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        letter-spacing: 1px;
        margin-bottom: 20px;
    }

    .text-white {
        color: #fff;
        font-size: 14px;
    }

    .text-white a {
        color: #4a77d4;
        text-decoration: none;
    }

    .text-white a:hover {
        text-decoration: underline;
    }

    /* Button style */
    .btn {
        display: inline-block;
        padding: 10px 20px;
        margin-top: 20px;
        background-color: #4a77d4;
        color: #fff;
        border-radius: 4px;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .btn:hover {
        background-color: #3762bc;
    }

    /* Input style */
    input {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        background: rgba(255, 255, 255, 0.1);
        border: none;
        outline: none;
        color: #fff;
        border-radius: 4px;
        font-size: 14px;
        transition: box-shadow 0.3s ease;
    }

    input:focus {
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.4);
    }
</style>

<div class=\"login\">
    <h1>Réinitialisation du mot de passe</h1>
    <form method=\"post\">
        <p class=\"text-white\">
            Si un compte correspondant à votre adresse e-mail existe, un e-mail a été envoyé avec un lien pour réinitialiser votre mot de passe. Ce lien expirera dans 1 heure.
            {{ resetToken.expirationMessageKey|trans(resetToken.expirationMessageData, 'ResetPasswordBundle') }}.
        </p>
        <p class=\"text-white\">
            Si vous ne recevez pas d'e-mail, veuillez vérifier votre dossier spam ou <a href=\"{{ path('app_forgot_password_request') }}\">essayer à nouveau.</a>
        </p>

        <!-- Example of a primary button (optional) -->
        <a href=\"{{ path('app_forgot_password_request') }}\" class=\"btn\">Réessayer</a>
    </form>
</div>

{% endblock %}
", "reset_password/check_email.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/reset_password/check_email.html.twig");
    }
}
