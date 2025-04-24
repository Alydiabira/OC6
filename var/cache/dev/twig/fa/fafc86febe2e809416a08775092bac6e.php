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

/* form/fields.html.twig */
class __TwigTemplate_aa75473f3df11e85a2d8243856829543 extends Template
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
            'date_time_picker_widget' => [$this, 'block_date_time_picker_widget'],
            'tags_input_widget' => [$this, 'block_tags_input_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 9
        yield "
";
        // line 10
        yield from $this->unwrap()->yieldBlock('date_time_picker_widget', $context, $blocks);
        // line 20
        yield "
";
        // line 21
        yield from $this->unwrap()->yieldBlock('tags_input_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_time_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_time_picker_widget"));

        // line 11
        yield "    <div class=\"input-group date\">
        ";
        // line 12
        yield from         $this->unwrap()->yieldBlock("datetime_widget", $context, $blocks);
        yield "
        <div class=\"input-group-append\">
            <button type=\"button\" class=\"btn btn-outline-secondary\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:calendar-month", "aria-hidden" => "false", "aria-label" => "Pick a date"]);
        yield "
            </button>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tags_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tags_input_widget"));

        // line 22
        yield "    <div class=\"input-group\">
        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'widget', ["attr" => ["data-toggle" => "tagsinput", "data-tags" => json_encode((isset($context["tags"]) || array_key_exists("tags", $context) ? $context["tags"] : (function () { throw new RuntimeError('Variable "tags" does not exist.', 23, $this->source); })()))]]);
        yield "
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("ux:icon", ["name" => "tabler:tags"]);
        yield "
            </span>
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
        return "form/fields.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  129 => 26,  123 => 23,  120 => 22,  107 => 21,  91 => 15,  85 => 12,  82 => 11,  69 => 10,  58 => 21,  55 => 20,  53 => 10,  50 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
   Each field type is rendered by a template fragment, which is determined
   by the name of your form type class (DateTimePickerType -> date_time_picker)
   and the suffix \"_widget\". This can be controlled by overriding getBlockPrefix()
   in DateTimePickerType.

   See https://symfony.com/doc/current/form/create_custom_field_type.html#creating-the-form-type-template
#}

{% block date_time_picker_widget %}
    <div class=\"input-group date\">
        {{ block('datetime_widget') }}
        <div class=\"input-group-append\">
            <button type=\"button\" class=\"btn btn-outline-secondary\">
                {{ component('ux:icon', { name: 'tabler:calendar-month', 'aria-hidden': 'false', 'aria-label': 'Pick a date' }) }}
            </button>
        </div>
    </div>
{% endblock %}

{% block tags_input_widget %}
    <div class=\"input-group\">
        {{ form_widget(form, {'attr': {'data-toggle': 'tagsinput', 'data-tags': tags|json_encode}}) }}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">
                {{ component('ux:icon', { name: 'tabler:tags' }) }}
            </span>
        </div>
    </div>
{% endblock %}
", "form/fields.html.twig", "/Users/diabiraaly/Desktop/Openclassrooms/OC6/templates/form/fields.html.twig");
    }
}
