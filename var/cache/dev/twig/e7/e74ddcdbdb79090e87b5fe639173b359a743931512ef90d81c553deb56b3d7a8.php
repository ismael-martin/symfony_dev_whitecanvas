<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* dashboard/departamentos/departamento-registro.html.twig */
class __TwigTemplate_cc87d101d28e95f9b529a15ba1d9ec53041ee688f83fdd5ad71d761190107233 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departamentos/departamento-registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departamentos/departamento-registro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/departamentos/departamento-registro.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        echo " - Registro de departamento";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"container-md pt-3\">
    <h1>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</h1>
    <hr>
    
    ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre del departamento"]);
        echo "<br>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 17, $this->source); })()), "nombre", [], "any", false, false, false, 17), 'widget');
        echo "
                <small>";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "descripcion", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Descripción del departamento"]);
        echo "<br>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "descripcion", [], "any", false, false, false, 24), 'widget');
        echo "
                <small>";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 25, $this->source); })()), "descripcion", [], "any", false, false, false, 25), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "descripcion", [], "any", false, false, false, 26), 'errors');
        echo "</div>
            </div>
            
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "usuarios", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"]]);
        echo "<br>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "usuarios", [], "any", false, false, false, 35), 'widget');
        echo "
                <small>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "usuarios", [], "any", false, false, false, 36), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "usuarios", [], "any", false, false, false, 37), 'errors');
        echo "</div>
            </div>
            
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), "_token", [], "any", false, false, false, 43), 'row');
        echo "
            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "Guardar", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
            <a class=\"btn btn-danger btn-block\" href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departamentos");
        echo "\">Cancelar</a>
        </div>
    </div>
    ";
        // line 48
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 48, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/departamentos/departamento-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  178 => 45,  174 => 44,  170 => 43,  161 => 37,  157 => 36,  153 => 35,  149 => 34,  138 => 26,  134 => 25,  130 => 24,  126 => 23,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Registro de departamento{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    
    {{ form_start(formulario) }}
    <div class=\"row\">
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                {{form_label(formulario.nombre, 'Nombre del departamento',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.nombre) }}
                <small>{{form_help(formulario.nombre)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.nombre)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.descripcion, 'Descripción del departamento',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.descripcion) }}
                <small>{{form_help(formulario.descripcion)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.descripcion)}}</div>
            </div>
            
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                {{form_label(formulario.usuarios, '',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.usuarios) }}
                <small>{{form_help(formulario.usuarios)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.usuarios)}}</div>
            </div>
            
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            {{ form_row(formulario._token) }}
            {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-success btn-block'}}) }}
            <a class=\"btn btn-danger btn-block\" href=\"{{ path('departamentos') }}\">Cancelar</a>
        </div>
    </div>
    {{ form_end(formulario, {render_rest: false}) }}
</div>
{% endblock %}
", "dashboard/departamentos/departamento-registro.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/departamentos/departamento-registro.html.twig");
    }
}
