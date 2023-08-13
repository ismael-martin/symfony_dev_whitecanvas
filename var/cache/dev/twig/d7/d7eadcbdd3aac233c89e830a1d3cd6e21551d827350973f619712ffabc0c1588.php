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

/* consultas/alumnos/alumno-editar.html.twig */
class __TwigTemplate_37865f78dedfa170a09f875e295e83901f60fcfafa902fec6fc8f21fd5e3c7a3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumno-editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumno-editar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultas/alumnos/alumno-editar.html.twig", 1);
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
        echo " - Editar Alumno";
        
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
    <div class=\"btn-group pb-2\">
      <a class=\"btn btn-secondary btn-block\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumnos");
        echo "\">Alumnos</a>
    </div>
    
    ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre"]);
        echo "<br>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), 'widget');
        echo "
                <small>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 22, $this->source); })()), "nombre", [], "any", false, false, false, 22), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 25, $this->source); })()), "apellidos", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Apellidos"]);
        echo "<br>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 26, $this->source); })()), "apellidos", [], "any", false, false, false, 26), 'widget');
        echo "
                <small>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 27, $this->source); })()), "apellidos", [], "any", false, false, false, 27), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 28, $this->source); })()), "apellidos", [], "any", false, false, false, 28), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "<br>
                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget');
        echo "
                <small>";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 37, $this->source); })()), "telefono", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Teléfono"]);
        echo "<br>
                ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 38, $this->source); })()), "telefono", [], "any", false, false, false, 38), 'widget');
        echo "
                <small>";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 39, $this->source); })()), "telefono", [], "any", false, false, false, 39), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "telefono", [], "any", false, false, false, 40), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 43, $this->source); })()), "ident", [], "any", false, false, false, 43), 'label', ["label_attr" => ["class" => "form-label"], "label" => "DNI/NIE/NIF/Pasaporte"]);
        echo "<br>
                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), "ident", [], "any", false, false, false, 44), 'widget');
        echo "
                <small>";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 45, $this->source); })()), "ident", [], "any", false, false, false, 45), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "ident", [], "any", false, false, false, 46), 'errors');
        echo "</div>
            </div>
            

        </div>
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "fnacimiento", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fecha de nacimiento"]);
        echo "<br>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), "fnacimiento", [], "any", false, false, false, 54), 'widget');
        echo "
                <small>";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 55, $this->source); })()), "fnacimiento", [], "any", false, false, false, 55), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 56, $this->source); })()), "fnacimiento", [], "any", false, false, false, 56), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 59, $this->source); })()), "direccion", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Dirección"]);
        echo "<br>
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "direccion", [], "any", false, false, false, 60), 'widget');
        echo "
                <small>";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 61, $this->source); })()), "direccion", [], "any", false, false, false, 61), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 62, $this->source); })()), "direccion", [], "any", false, false, false, 62), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 65, $this->source); })()), "localidad", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Localidad"]);
        echo "<br>
                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 66, $this->source); })()), "localidad", [], "any", false, false, false, 66), 'widget');
        echo "
                <small>";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 67, $this->source); })()), "localidad", [], "any", false, false, false, 67), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 68, $this->source); })()), "localidad", [], "any", false, false, false, 68), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 71, $this->source); })()), "provincia", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Provincia/Estado"]);
        echo "<br>
                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 72, $this->source); })()), "provincia", [], "any", false, false, false, 72), 'widget');
        echo "
                <small>";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 73, $this->source); })()), "provincia", [], "any", false, false, false, 73), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 74, $this->source); })()), "provincia", [], "any", false, false, false, 74), 'errors');
        echo "</div>
            </div>
            <div class=\"m-1\">
                ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 77, $this->source); })()), "pais", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Pais"]);
        echo "<br>
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 78, $this->source); })()), "pais", [], "any", false, false, false, 78), 'widget');
        echo "
                <small>";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 79, $this->source); })()), "pais", [], "any", false, false, false, 79), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 80, $this->source); })()), "pais", [], "any", false, false, false, 80), 'errors');
        echo "</div>
            </div>
            
        </div>
        <div class=\"col-md-12 p-3 m-1\">
            ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 85, $this->source); })()), "_token", [], "any", false, false, false, 85), 'row');
        echo "
            ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 86, $this->source); })()), "Guardar", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
            <a class=\"btn btn-danger btn-block\" href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumnos");
        echo "\">Cancelar</a>
        </div>
    </div>
    ";
        // line 90
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 90, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "consultas/alumnos/alumno-editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 90,  307 => 87,  303 => 86,  299 => 85,  291 => 80,  287 => 79,  283 => 78,  279 => 77,  273 => 74,  269 => 73,  265 => 72,  261 => 71,  255 => 68,  251 => 67,  247 => 66,  243 => 65,  237 => 62,  233 => 61,  229 => 60,  225 => 59,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  197 => 46,  193 => 45,  189 => 44,  185 => 43,  179 => 40,  175 => 39,  171 => 38,  167 => 37,  161 => 34,  157 => 33,  153 => 32,  149 => 31,  143 => 28,  139 => 27,  135 => 26,  131 => 25,  125 => 22,  121 => 21,  117 => 20,  113 => 19,  106 => 15,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Editar Alumno{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"btn-group pb-2\">
      <a class=\"btn btn-secondary btn-block\" href=\"{{ path('alumnos') }}\">Alumnos</a>
    </div>
    
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
", "consultas/alumnos/alumno-editar.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/consultas/alumnos/alumno-editar.html.twig");
    }
}
