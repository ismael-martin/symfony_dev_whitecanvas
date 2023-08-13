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

/* dashboard/usuarios/usuario-registro.html.twig */
class __TwigTemplate_397af162e27fe8e549301f6ac9d81bb3c775c867b45fac459dba441ec7e9b4ea extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuario-registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuario-registro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/usuarios/usuario-registro.html.twig", 1);
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
        echo " - Registro de usuarios";
        
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 16, $this->source); })()), "nombre", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre"]);
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
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "apellidos", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Apellidos"]);
        echo "<br>
                ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 23, $this->source); })()), "apellidos", [], "any", false, false, false, 23), 'widget');
        echo "
                <small>";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 24, $this->source); })()), "apellidos", [], "any", false, false, false, 24), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 25, $this->source); })()), "apellidos", [], "any", false, false, false, 25), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "<br>
                ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 29, $this->source); })()), "email", [], "any", false, false, false, 29), 'widget');
        echo "
                <small>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "password", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contraseña"]);
        echo "<br>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "password", [], "any", false, false, false, 35), 'widget');
        echo "
                <small>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "password", [], "any", false, false, false, 36), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "password", [], "any", false, false, false, 37), 'errors');
        echo "</div>
            </div>
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "roles", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Rol de usuario"]);
        echo "<br>
                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), "roles", [], "any", false, false, false, 45), 'widget');
        echo "
                <small>";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "roles", [], "any", false, false, false, 46), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 47, $this->source); })()), "roles", [], "any", false, false, false, 47), 'errors');
        echo "</div>
            </div>
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), "_token", [], "any", false, false, false, 52), 'row');
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "Guardar", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
            <a class=\"btn btn-danger btn-block\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
        echo "\">Cancelar</a>
        </div>
    </div>
    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/usuarios/usuario-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 57,  211 => 54,  207 => 53,  203 => 52,  195 => 47,  191 => 46,  187 => 45,  183 => 44,  173 => 37,  169 => 36,  165 => 35,  161 => 34,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Registro de usuarios{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    
    {{ form_start(formulario) }}
    <div class=\"row\">
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                {{form_label(formulario.nombre, 'Nombre',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.nombre) }}
                <small>{{form_help(formulario.nombre)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.nombre)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.apellidos, 'Apellidos',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.apellidos) }}
                <small>{{form_help(formulario.apellidos)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.apellidos)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.email, 'Email',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.email) }}
                <small>{{form_help(formulario.email)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.email)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.password, 'Contraseña',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.password) }}
                <small>{{form_help(formulario.password)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.password)}}</div>
            </div>
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                {{form_label(formulario.roles, 'Rol de usuario',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.roles) }}
                <small>{{form_help(formulario.roles)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.roles)}}</div>
            </div>
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            {{ form_row(formulario._token) }}
            {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-success btn-block'}}) }}
            <a class=\"btn btn-danger btn-block\" href=\"{{ path('usuarios') }}\">Cancelar</a>
        </div>
    </div>
    {{ form_end(formulario, {render_rest: false}) }}
</div>
{% endblock %}
", "dashboard/usuarios/usuario-registro.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/usuarios/usuario-registro.html.twig");
    }
}
