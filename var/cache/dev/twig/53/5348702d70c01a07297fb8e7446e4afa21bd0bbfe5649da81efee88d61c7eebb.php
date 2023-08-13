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

/* dashboard/usuarios/jornadas/usuario-jornadas.html.twig */
class __TwigTemplate_8a61cb7b699cc17d1342fda6cc55a2cd077ad4e25047b427845695447d5f8d36 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/jornadas/usuario-jornadas.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/jornadas/usuario-jornadas.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/usuarios/jornadas/usuario-jornadas.html.twig", 1);
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
        echo " - Jornadas del usuario ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 3, $this->source); })()), "nombre", [], "any", false, false, false, 3), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["usuario"]) || array_key_exists("usuario", $context) ? $context["usuario"] : (function () { throw new RuntimeError('Variable "usuario" does not exist.', 3, $this->source); })()), "apellidos", [], "any", false, false, false, 3), "html", null, true);
        
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
      <a class=\"btn btn-primary btn-block\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
        echo "\">Lista de usuarios</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Geo</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jornadas"]) || array_key_exists("jornadas", $context) ? $context["jornadas"] : (function () { throw new RuntimeError('Variable "jornadas" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["jornada"]) {
            // line 28
            echo "                    <tr>
                        <td>";
            // line 29
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["jornada"], "tipo", [], "any", false, false, false, 29), 0))) {
                echo "SALIDA";
            } else {
                echo "ENTRADA";
            }
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["jornada"], "hora", [], "any", false, false, false, 30), "medium", "short", "", null, "gregorian", "es"), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            if ( !twig_test_empty(twig_trim_filter(twig_get_attribute($this->env, $this->source, $context["jornada"], "latitud", [], "any", false, false, false, 31)))) {
                echo "<a href=\"https://www.google.com/maps/search/?api=1&query=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jornada"], "latitud", [], "any", false, false, false, 31), "html", null, true);
                echo ",";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jornada"], "longitud", [], "any", false, false, false, 31), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"fas fa-map-marked-alt\"></i></a>";
            }
            echo "</td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jornada'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </tbody>
        </table>
    </div>
    
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#tablaDinamica').DataTable();
        \$('.dataTables_length').addClass('bs-select');
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/usuarios/jornadas/usuario-jornadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  140 => 31,  136 => 30,  128 => 29,  125 => 28,  121 => 27,  103 => 12,  97 => 9,  92 => 6,  82 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Jornadas del usuario {{usuario.nombre}} {{usuario.apellidos}}{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"btn-group pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"{{ path('usuarios') }}\">Lista de usuarios</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Tipo</th>
                <th>Hora</th>
                <th>Geo</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                {% for jornada in jornadas %}
                    <tr>
                        <td>{% if jornada.tipo == 0%}SALIDA{% else %}ENTRADA{% endif %}</td>
                        <td>{{jornada.hora|format_datetime('medium', 'short', locale='es')}}</td>
                        <td>{% if jornada.latitud|trim is not empty %}<a href=\"https://www.google.com/maps/search/?api=1&query={{jornada.latitud}},{{jornada.longitud}}\" target=\"_blank\"><i class=\"fas fa-map-marked-alt\"></i></a>{% endif %}</td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
    
</div>

<script type=\"text/javascript\">
    \$(document).ready(function () {
        \$('#tablaDinamica').DataTable();
        \$('.dataTables_length').addClass('bs-select');
    });
</script>
{% endblock %}
", "dashboard/usuarios/jornadas/usuario-jornadas.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/usuarios/jornadas/usuario-jornadas.html.twig");
    }
}
