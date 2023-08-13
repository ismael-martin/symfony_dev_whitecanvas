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

/* consultas/alumnos/alumno-registro.html.twig */
class __TwigTemplate_916e2e0f97005a195b10709e351731273a8808ea0851555927857610a87a3eb4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumno-registro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumno-registro.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultas/alumnos/alumno-registro.html.twig", 1);
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
        echo " - Registro de alumnos";
        
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "telefono", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Teléfono"]);
        echo "<br>
                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "telefono", [], "any", false, false, false, 35), 'widget');
        echo "
                <small>";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 36, $this->source); })()), "telefono", [], "any", false, false, false, 36), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "telefono", [], "any", false, false, false, 37), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "ident", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "form-label"], "label" => "DNI/NIE/NIF/Pasaporte"]);
        echo "<br>
                ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 41, $this->source); })()), "ident", [], "any", false, false, false, 41), 'widget');
        echo "
                <small>";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "ident", [], "any", false, false, false, 42), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), "ident", [], "any", false, false, false, 43), 'errors');
        echo "</div>
            </div>
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 50, $this->source); })()), "fnacimiento", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fecha de nacimiento"]);
        echo "<br>
                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 51, $this->source); })()), "fnacimiento", [], "any", false, false, false, 51), 'widget');
        echo "
                <small>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 52, $this->source); })()), "fnacimiento", [], "any", false, false, false, 52), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "fnacimiento", [], "any", false, false, false, 53), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 56, $this->source); })()), "direccion", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Dirección"]);
        echo "<br>
                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 57, $this->source); })()), "direccion", [], "any", false, false, false, 57), 'widget');
        echo "
                <small>";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 58, $this->source); })()), "direccion", [], "any", false, false, false, 58), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 59, $this->source); })()), "direccion", [], "any", false, false, false, 59), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 62, $this->source); })()), "localidad", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Localidad"]);
        echo "<br>
                ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 63, $this->source); })()), "localidad", [], "any", false, false, false, 63), 'widget');
        echo "
                <small>";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 64, $this->source); })()), "localidad", [], "any", false, false, false, 64), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 65, $this->source); })()), "localidad", [], "any", false, false, false, 65), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 68, $this->source); })()), "provincia", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Provincia/Estado"]);
        echo "<br>
                ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 69, $this->source); })()), "provincia", [], "any", false, false, false, 69), 'widget');
        echo "
                <small>";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 70, $this->source); })()), "provincia", [], "any", false, false, false, 70), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 71, $this->source); })()), "provincia", [], "any", false, false, false, 71), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 74, $this->source); })()), "pais", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pais"]);
        echo "<br>
                ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 75, $this->source); })()), "pais", [], "any", false, false, false, 75), 'widget');
        echo "
                <small>";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 76, $this->source); })()), "pais", [], "any", false, false, false, 76), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 77, $this->source); })()), "pais", [], "any", false, false, false, 77), 'errors');
        echo "</div>
            </div>
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 82, $this->source); })()), "_token", [], "any", false, false, false, 82), 'row');
        echo "
            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 83, $this->source); })()), "Guardar", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
            <a class=\"btn btn-danger btn-block\" href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumnos");
        echo "\">Cancelar</a>
        </div>
    </div>
    ";
        // line 87
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 87, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultas/alumnos/alumno-registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 87,  301 => 84,  297 => 83,  293 => 82,  285 => 77,  281 => 76,  277 => 75,  273 => 74,  267 => 71,  263 => 70,  259 => 69,  255 => 68,  249 => 65,  245 => 64,  241 => 63,  237 => 62,  231 => 59,  227 => 58,  223 => 57,  219 => 56,  213 => 53,  209 => 52,  205 => 51,  201 => 50,  191 => 43,  187 => 42,  183 => 41,  179 => 40,  173 => 37,  169 => 36,  165 => 35,  161 => 34,  155 => 31,  151 => 30,  147 => 29,  143 => 28,  137 => 25,  133 => 24,  129 => 23,  125 => 22,  119 => 19,  115 => 18,  111 => 17,  107 => 16,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Registro de alumnos{% endblock %}

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
                {{form_label(formulario.telefono, 'Teléfono',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.telefono) }}
                <small>{{form_help(formulario.telefono)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.telefono)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.ident, 'DNI/NIE/NIF/Pasaporte',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.ident) }}
                <small>{{form_help(formulario.ident)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.ident)}}</div>
            </div>
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                {{form_label(formulario.fnacimiento, 'Fecha de nacimiento',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.fnacimiento) }}
                <small>{{form_help(formulario.fnacimiento)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.fnacimiento)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.direccion, 'Dirección',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.direccion) }}
                <small>{{form_help(formulario.direccion)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.direccion)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.localidad, 'Localidad',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.localidad) }}
                <small>{{form_help(formulario.localidad)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.localidad)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.provincia, 'Provincia/Estado',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.provincia) }}
                <small>{{form_help(formulario.provincia)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.provincia)}}</div>
            </div>
            <div class=\"m-1\">
                {{form_label(formulario.pais, 'Pais',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.pais) }}
                <small>{{form_help(formulario.pais)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.pais)}}</div>
            </div>
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            {{ form_row(formulario._token) }}
            {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-success btn-block'}}) }}
            <a class=\"btn btn-danger btn-block\" href=\"{{ path('alumnos') }}\">Cancelar</a>
        </div>
    </div>
    {{ form_end(formulario, {render_rest: false}) }}
</div>
{% endblock %}
", "consultas/alumnos/alumno-registro.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/consultas/alumnos/alumno-registro.html.twig");
    }
}
