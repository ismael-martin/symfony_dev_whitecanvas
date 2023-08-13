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

/* dashboard/usuarios/usuario-editar.html.twig */
class __TwigTemplate_ca7638f98321348640cc8cef94e179c473cb8d0714363025cf3c744d867ba918 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuario-editar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuario-editar.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/usuarios/usuario-editar.html.twig", 1);
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
        echo " - Editar usuario";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
        echo "\">Usuarios</a>
    </div>
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
    <div class=\"row\">
        <div class=\"col-lg-6 p-3\">
            <div class=\"m-1\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "nombre", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nombre"]);
        echo "<br>
                ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 19, $this->source); })()), "nombre", [], "any", false, false, false, 19), 'widget');
        echo "
                <small>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "nombre", [], "any", false, false, false, 20), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 21, $this->source); })()), "nombre", [], "any", false, false, false, 21), 'errors');
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
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Email"]);
        echo "<br>
                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget');
        echo "
                <small>";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Contraseña"]);
        echo "<br>
                ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 40, $this->source); })()), "password", [], "any", false, false, false, 40), 'widget');
        echo "
                <small>";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), 'errors');
        echo "</div>
            </div>
            
            <div class=\"m-1\">
                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 46, $this->source); })()), "telefono", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Teléfono"]);
        echo "<br>
                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 47, $this->source); })()), "telefono", [], "any", false, false, false, 47), 'widget');
        echo "
                <small>";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 48, $this->source); })()), "telefono", [], "any", false, false, false, 48), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 49, $this->source); })()), "telefono", [], "any", false, false, false, 49), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 53, $this->source); })()), "dni", [], "any", false, false, false, 53), 'label', ["label_attr" => ["class" => "form-label"], "label" => "DNI"]);
        echo "<br>
                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 54, $this->source); })()), "dni", [], "any", false, false, false, 54), 'widget');
        echo "
                <small>";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 55, $this->source); })()), "dni", [], "any", false, false, false, 55), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 56, $this->source); })()), "dni", [], "any", false, false, false, 56), 'errors');
        echo "</div>
            </div>
            
            <div class=\"m-1\">
                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Rol de usuario"]);
        echo "<br>
                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 61, $this->source); })()), "roles", [], "any", false, false, false, 61), 'widget');
        echo "
                <small>";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 62, $this->source); })()), "roles", [], "any", false, false, false, 62), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 67, $this->source); })()), "bloqueado", [], "any", false, false, false, 67), 'widget');
        echo "
                ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 68, $this->source); })()), "bloqueado", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Usuario bloqueado"]);
        echo "
                <small>";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 69, $this->source); })()), "bloqueado", [], "any", false, false, false, 69), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 70, $this->source); })()), "bloqueado", [], "any", false, false, false, 70), 'errors');
        echo "</div>
            </div>
        </div>

        <div class=\"col-lg-6 p-3\">


            <div class=\"m-1\">
                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 78, $this->source); })()), "fnacimiento", [], "any", false, false, false, 78), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Fecha de nacimiento"]);
        echo "<br>
                ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 79, $this->source); })()), "fnacimiento", [], "any", false, false, false, 79), 'widget');
        echo "
                <small>";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 80, $this->source); })()), "fnacimiento", [], "any", false, false, false, 80), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 81, $this->source); })()), "fnacimiento", [], "any", false, false, false, 81), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 85, $this->source); })()), "lnacimiento", [], "any", false, false, false, 85), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Lugar de Nacimiento"]);
        echo "<br>
                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 86, $this->source); })()), "lnacimiento", [], "any", false, false, false, 86), 'widget');
        echo "
                <small>";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 87, $this->source); })()), "lnacimiento", [], "any", false, false, false, 87), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 88, $this->source); })()), "lnacimiento", [], "any", false, false, false, 88), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 92, $this->source); })()), "sexo", [], "any", false, false, false, 92), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Sexo"]);
        echo "<br>
                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 93, $this->source); })()), "sexo", [], "any", false, false, false, 93), 'widget');
        echo "
                <small>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 94, $this->source); })()), "sexo", [], "any", false, false, false, 94), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 95, $this->source); })()), "sexo", [], "any", false, false, false, 95), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 99, $this->source); })()), "nacionalidad", [], "any", false, false, false, 99), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Nacionalidad"]);
        echo "<br>
                ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 100, $this->source); })()), "nacionalidad", [], "any", false, false, false, 100), 'widget');
        echo "
                <small>";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 101, $this->source); })()), "nacionalidad", [], "any", false, false, false, 101), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 102, $this->source); })()), "nacionalidad", [], "any", false, false, false, 102), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 106, $this->source); })()), "estCivil", [], "any", false, false, false, 106), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Estado Civil"]);
        echo "<br>
                ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 107, $this->source); })()), "estCivil", [], "any", false, false, false, 107), 'widget');
        echo "
                <small>";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 108, $this->source); })()), "estCivil", [], "any", false, false, false, 108), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 109, $this->source); })()), "estCivil", [], "any", false, false, false, 109), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 113, $this->source); })()), "permConducir", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Permiso de Conducir"]);
        echo "<br>
                ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 114, $this->source); })()), "permConducir", [], "any", false, false, false, 114), 'widget');
        echo "
                <small>";
        // line 115
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 115, $this->source); })()), "permConducir", [], "any", false, false, false, 115), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 116, $this->source); })()), "permConducir", [], "any", false, false, false, 116), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 120, $this->source); })()), "vehiProp", [], "any", false, false, false, 120), 'widget');
        echo "
                ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 121, $this->source); })()), "vehiProp", [], "any", false, false, false, 121), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehículo Própio"]);
        echo "
                <small>";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 122, $this->source); })()), "vehiProp", [], "any", false, false, false, 122), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 123, $this->source); })()), "vehiProp", [], "any", false, false, false, 123), 'errors');
        echo "</div>
            </div>

            <div class=\"m-1\">
                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 127, $this->source); })()), "vehiEmp", [], "any", false, false, false, 127), 'widget');
        echo "
                ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 128, $this->source); })()), "vehiEmp", [], "any", false, false, false, 128), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Vehículo Empresa"]);
        echo "
                <small>";
        // line 129
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 129, $this->source); })()), "vehiEmp", [], "any", false, false, false, 129), 'help');
        echo "</small>
                <div class=\"form-error\">";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 130, $this->source); })()), "vehiEmp", [], "any", false, false, false, 130), 'errors');
        echo "</div>
            </div>


        </div>

        <div class=\"col-md-12 p-3 m-1\">
            ";
        // line 137
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 137, $this->source); })()), "_token", [], "any", false, false, false, 137), 'row');
        echo "
            ";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 138, $this->source); })()), "Guardar", [], "any", false, false, false, 138), 'widget', ["attr" => ["class" => "btn btn-success btn-block"]]);
        echo "
            ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 139, $this->source); })()), 'rest');
        echo "
            <a class=\"btn btn-danger btn-block\" href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
        echo "\">Cancelar</a>
        </div>


    </div>
    <!--";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 145, $this->source); })()), 'form_end', ["render_rest" => false]);
        echo "-->
    ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 146, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/usuarios/usuario-editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 146,  443 => 145,  435 => 140,  431 => 139,  427 => 138,  423 => 137,  413 => 130,  409 => 129,  405 => 128,  401 => 127,  394 => 123,  390 => 122,  386 => 121,  382 => 120,  375 => 116,  371 => 115,  367 => 114,  363 => 113,  356 => 109,  352 => 108,  348 => 107,  344 => 106,  337 => 102,  333 => 101,  329 => 100,  325 => 99,  318 => 95,  314 => 94,  310 => 93,  306 => 92,  299 => 88,  295 => 87,  291 => 86,  287 => 85,  280 => 81,  276 => 80,  272 => 79,  268 => 78,  257 => 70,  253 => 69,  249 => 68,  245 => 67,  238 => 63,  234 => 62,  230 => 61,  226 => 60,  219 => 56,  215 => 55,  211 => 54,  207 => 53,  200 => 49,  196 => 48,  192 => 47,  188 => 46,  181 => 42,  177 => 41,  173 => 40,  169 => 39,  162 => 35,  158 => 34,  154 => 33,  150 => 32,  143 => 28,  139 => 27,  135 => 26,  131 => 25,  124 => 21,  120 => 20,  116 => 19,  112 => 18,  105 => 14,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Editar usuario{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"btn-group pb-2\">
      <a class=\"btn btn-secondary btn-block\" href=\"{{ path('usuarios') }}\">Usuarios</a>
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
                {{form_label(formulario.password, 'Contraseña',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.password) }}
                <small>{{form_help(formulario.password)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.password)}}</div>
            </div>
            
            <div class=\"m-1\">
                {{form_label(formulario.telefono, 'Teléfono',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.telefono) }}
                <small>{{form_help(formulario.telefono)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.telefono)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.dni, 'DNI',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.dni) }}
                <small>{{form_help(formulario.dni)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.dni)}}</div>
            </div>
            
            <div class=\"m-1\">
                {{form_label(formulario.roles, 'Rol de usuario',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.roles) }}
                <small>{{form_help(formulario.roles)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.roles)}}</div>
            </div>

            <div class=\"m-1\">
                {{ form_widget(formulario.bloqueado) }}
                {{form_label(formulario.bloqueado, 'Usuario bloqueado',{'label_attr': {'class':'form-label'}})}}
                <small>{{form_help(formulario.bloqueado)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.bloqueado)}}</div>
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
                {{form_label(formulario.lnacimiento, 'Lugar de Nacimiento',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.lnacimiento) }}
                <small>{{form_help(formulario.lnacimiento)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.lnacimiento)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.sexo, 'Sexo',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.sexo) }}
                <small>{{form_help(formulario.sexo)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.sexo)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.nacionalidad, 'Nacionalidad',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.nacionalidad) }}
                <small>{{form_help(formulario.nacionalidad)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.nacionalidad)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.estCivil, 'Estado Civil',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.estCivil) }}
                <small>{{form_help(formulario.estCivil)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.estCivil)}}</div>
            </div>

            <div class=\"m-1\">
                {{form_label(formulario.permConducir, 'Permiso de Conducir',{'label_attr': {'class':'form-label'}})}}<br>
                {{ form_widget(formulario.permConducir) }}
                <small>{{form_help(formulario.permConducir)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.permConducir)}}</div>
            </div>

            <div class=\"m-1\">
                {{ form_widget(formulario.vehiProp) }}
                {{form_label(formulario.vehiProp, 'Vehículo Própio',{'label_attr': {'class':'form-label'}})}}
                <small>{{form_help(formulario.vehiProp)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.vehiProp)}}</div>
            </div>

            <div class=\"m-1\">
                {{ form_widget(formulario.vehiEmp) }}
                {{form_label(formulario.vehiEmp, 'Vehículo Empresa',{'label_attr': {'class':'form-label'}})}}
                <small>{{form_help(formulario.vehiEmp)}}</small>
                <div class=\"form-error\">{{ form_errors(formulario.vehiEmp)}}</div>
            </div>


        </div>

        <div class=\"col-md-12 p-3 m-1\">
            {{ form_row(formulario._token) }}
            {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-success btn-block'}}) }}
            {{ form_rest(formulario) }}
            <a class=\"btn btn-danger btn-block\" href=\"{{ path('usuarios') }}\">Cancelar</a>
        </div>


    </div>
    <!--{{ form_end(formulario, {render_rest: false}) }}-->
    {{ form_end(formulario) }}
</div>
{% endblock %}
", "dashboard/usuarios/usuario-editar.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/usuarios/usuario-editar.html.twig");
    }
}
