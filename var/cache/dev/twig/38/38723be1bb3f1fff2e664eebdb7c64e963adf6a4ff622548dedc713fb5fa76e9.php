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

/* dashboard/departamentos/departamentos.html.twig */
class __TwigTemplate_cf9f74b27b9da56914f15319dd47570af26c99b061af36541623fcaf3c5ba05b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departamentos/departamentos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/departamentos/departamentos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/departamentos/departamentos.html.twig", 1);
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
        echo " - Lista de departamentos";
        
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
        echo "<div class=\"container-md pt-3\">
    <h1>";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
    <hr>
    <div class=\"pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>
      <a class=\"btn btn-success btn-block\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro-departamento");
        echo "\">Registro</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Departamento</th>
                <th>Nº Usuarios</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departamentos"]) || array_key_exists("departamentos", $context) ? $context["departamentos"] : (function () { throw new RuntimeError('Variable "departamentos" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dept"]) {
            // line 27
            echo "                    <tr>
                        <td data-bs-toggle=\"modal\" data-bs-target=\"#showDepartamento";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "nombre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                        <td data-bs-toggle=\"modal\" data-bs-target=\"#showDepartamento";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "usuarios", [], "any", false, false, false, 29)), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-departamento", ["id" => twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-departamento", ["id" => twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showDepartamento";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "nombre", [], "any", false, false, false, 41), "html", null, true);
            echo "</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <b>Descripción: </b> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "descripcion", [], "any", false, false, false, 49), "html", null, true);
            echo "<br>
                                            <b>Integrantes:</b>
                                            <ul> ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["dept"], "usuarios", [], "any", false, false, false, 51));
            foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 51), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellidos", [], "any", false, false, false, 51), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </ul>
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-primary btn-block\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-departamento", ["id" => twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\">Editar</a>
                                            <a class=\"btn btn-danger btn-block\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-departamento", ["id" => twig_get_attribute($this->env, $this->source, $context["dept"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\">Borrar</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dept'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
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
        return "dashboard/departamentos/departamentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 70,  196 => 55,  192 => 54,  175 => 51,  170 => 49,  159 => 41,  150 => 35,  144 => 32,  140 => 31,  133 => 29,  127 => 28,  124 => 27,  120 => 26,  102 => 11,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Lista de departamentos{% endblock %}

{% block body %}
<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"{{ path('dashboard') }}\">Dashboard</a>
      <a class=\"btn btn-success btn-block\" href=\"{{ path('registro-departamento') }}\">Registro</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Departamento</th>
                <th>Nº Usuarios</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                {% for dept in departamentos %}
                    <tr>
                        <td data-bs-toggle=\"modal\" data-bs-target=\"#showDepartamento{{dept.id}}\">{{dept.nombre}}</td>
                        <td data-bs-toggle=\"modal\" data-bs-target=\"#showDepartamento{{dept.id}}\">{{dept.usuarios|length}}</td>
                        <td>
                            <a href=\"{{ path('editar-departamento', {'id': dept.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
                            <a href=\"{{ path('borrar-departamento', {'id': dept.id})}}\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showDepartamento{{dept.id}}\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre {{dept.nombre}}</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            <b>Descripción: </b> {{dept.descripcion}}<br>
                                            <b>Integrantes:</b>
                                            <ul> {% for usuario in dept.usuarios %}<li>{{usuario.nombre}} {{usuario.apellidos}}</li>{% endfor %} </ul>
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-primary btn-block\" href=\"{{ path('editar-departamento', {'id': dept.id}) }}\">Editar</a>
                                            <a class=\"btn btn-danger btn-block\" href=\"{{ path('borrar-departamento', {'id': dept.id})}}\">Borrar</a>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-danger\" data-bs-dismiss=\"modal\">Cerrar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    
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
{% endblock %}", "dashboard/departamentos/departamentos.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/departamentos/departamentos.html.twig");
    }
}
