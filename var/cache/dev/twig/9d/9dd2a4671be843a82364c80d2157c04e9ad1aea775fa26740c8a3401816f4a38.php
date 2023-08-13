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

/* security/login.html.twig */
class __TwigTemplate_a75120830813844fe71d916f0584122d1164f3a54ebb91f8a1ae974ad5473499 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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
        echo " - Log in!";
        
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
        echo "<style>
  #intro {
    background-image: url(\"https://archivosjose.s3.eu-west-2.amazonaws.com/images/2.jpeg\");
}
.mask {
    padding-top: 80px;
    padding-bottom: 80px;
}


.navbar .nav-link {
    color: #fff !important;
}
</style>
<!-- Background image -->
<div id=\"intro\" class=\"bg-image shadow-2-strong\">
  <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
    <div class=\"container d-flex align-items-center justify-content-center text-left h-100\">
      <div class=\"text-white\">
        ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            echo "        <div class=\"mb-3\">
            <p>Estás conectado como ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
            echo ", ¿Que deseas hacer?</p>
            <div class=\"btn-group\" style=\"width:100%\">
                <a class=\"btn btn-lg btn-success btn-block\" href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Acceder</a><br>
                <a class=\"btn btn-lg btn-danger btn-block\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Salir</a>
            </div>
        </div>
        ";
        } else {
            // line 34
            echo "        <form method=\"post\">
            ";
            // line 35
            if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 35, $this->source); })())) {
                // line 36
                echo "            <div class=\"alert alert-danger\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageKey", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 36, $this->source); })()), "messageData", [], "any", false, false, false, 36), "security"), "html", null, true);
                echo "</div>
            ";
            }
            // line 38
            echo "

            <h1 class=\"h3 mb-3 font-weight-normal\">Inicio de sesión</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 42, $this->source); })()), "html", null, true);
            echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Contraseña</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
            echo "\">
            <a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            echo "\">He olvidado mi contraseña</a>


            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Recuerdame
                </label>
            </div>


            <button class=\"btn btn-lg btn-secondary\" type=\"submit\">
                Acceder
            </button>
        </form>
        ";
        }
        // line 62
        echo "    </div>
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 62,  159 => 47,  155 => 46,  148 => 42,  142 => 38,  136 => 36,  134 => 35,  131 => 34,  124 => 30,  120 => 29,  115 => 27,  112 => 26,  110 => 25,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Log in!{% endblock %}

{% block body %}
<style>
  #intro {
    background-image: url(\"https://archivosjose.s3.eu-west-2.amazonaws.com/images/2.jpeg\");
}
.mask {
    padding-top: 80px;
    padding-bottom: 80px;
}


.navbar .nav-link {
    color: #fff !important;
}
</style>
<!-- Background image -->
<div id=\"intro\" class=\"bg-image shadow-2-strong\">
  <div class=\"mask\" style=\"background-color: rgba(0, 0, 0, 0.8);\">
    <div class=\"container d-flex align-items-center justify-content-center text-left h-100\">
      <div class=\"text-white\">
        {% if app.user %}
        <div class=\"mb-3\">
            <p>Estás conectado como {{ app.user.username }}, ¿Que deseas hacer?</p>
            <div class=\"btn-group\" style=\"width:100%\">
                <a class=\"btn btn-lg btn-success btn-block\" href=\"{{ path('dashboard') }}\">Acceder</a><br>
                <a class=\"btn btn-lg btn-danger btn-block\" href=\"{{ path('app_logout') }}\">Salir</a>
            </div>
        </div>
        {% else %}
        <form method=\"post\">
            {% if error %}
            <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
            {% endif %}


            <h1 class=\"h3 mb-3 font-weight-normal\">Inicio de sesión</h1>
            <label for=\"inputEmail\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus>
            <label for=\"inputPassword\">Contraseña</label>
            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required>

            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
            <a href=\"{{ path('app_forgot_password_request')}}\">He olvidado mi contraseña</a>


            <div class=\"checkbox mb-3\">
                <label>
                    <input type=\"checkbox\" name=\"_remember_me\"> Recuerdame
                </label>
            </div>


            <button class=\"btn btn-lg btn-secondary\" type=\"submit\">
                Acceder
            </button>
        </form>
        {% endif %}
    </div>
</div>
</div>
</div>

{% endblock %}
", "security/login.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/security/login.html.twig");
    }
}
