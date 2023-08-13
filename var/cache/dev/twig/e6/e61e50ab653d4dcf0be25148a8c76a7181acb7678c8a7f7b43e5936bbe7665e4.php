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

/* consultas/alumnos/alumnos.html.twig */
class __TwigTemplate_536ea17bf75be04b815e00f3a0b28e50574bfb6de718ee8d09ffc9403991cfcb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumnos.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "consultas/alumnos/alumnos.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "consultas/alumnos/alumnos.html.twig", 1);
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
        echo " - Lista de alumnos";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro-alumnos");
        echo "\">Registro</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["alumnos"]) || array_key_exists("alumnos", $context) ? $context["alumnos"] : (function () { throw new RuntimeError('Variable "alumnos" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["alumno"]) {
            // line 28
            echo "                    
                    <tr>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "nombre", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "apellidos", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "email", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-alumno", ["id" => twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-alumno", ["id" => twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showUsuario";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 38), "html", null, true);
            echo "\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre ";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "nombre", [], "any", false, false, false, 44), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "apellidos", [], "any", false, false, false, 44), "html", null, true);
            echo "</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        
                                        <div class=\"col\">
                                            <b>Email:</b> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "email", [], "any", false, false, false, 53), "html", null, true);
            echo "<br>
                                            <b>Teléfono:</b> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "telefono", [], "any", false, false, false, 54), "html", null, true);
            echo "<br>
                                            <b>Identificación:</b> ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "ident", [], "any", false, false, false, 55), "html", null, true);
            echo "<br>
                                            <b>Fecha nacimiento:</b> ";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["alumno"], "fnacimiento", [], "any", false, false, false, 56), "d-m-Y"), "html", null, true);
            echo "<br>
                                            
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-primary btn-block\" href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-alumno", ["id" => twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 60)]), "html", null, true);
            echo "\">Editar</a>
                                            <a class=\"btn btn-danger btn-block\" href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-alumno", ["id" => twig_get_attribute($this->env, $this->source, $context["alumno"], "id", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\">Borrar</a>
                                            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['alumno'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        return "consultas/alumnos/alumnos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 76,  204 => 61,  200 => 60,  193 => 56,  189 => 55,  185 => 54,  181 => 53,  167 => 44,  158 => 38,  152 => 35,  148 => 34,  141 => 32,  135 => 31,  129 => 30,  125 => 28,  121 => 27,  102 => 11,  98 => 10,  92 => 7,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Lista de alumnos{% endblock %}

{% block body %}
<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"{{ path('dashboard') }}\">Dashboard</a>
      <a class=\"btn btn-success btn-block\" href=\"{{ path('registro-alumnos') }}\">Registro</a>
      <!--<a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>
      <a class=\"btn btn-secondary btn-block\" href=\"\">Botón</a>-->
    </div>
    <div class=\"table-responsive-lg\">
        <input class=\"form-control pb-2\" id=\"busqueda\" type=\"text\" placeholder=\"Buscar...\">
        <table id=\"tablaDinamica\" class=\"table table-striped table-hover table-sm\">
            <thead class=\"table-dark\">
              <tr>
                <th>Nombre</th>
                <th>Apellidos</th>
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody id=\"tabla\">
                {% for alumno in alumnos %}
                    
                    <tr>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{alumno.id}}\">{{alumno.nombre}}</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{alumno.id}}\">{{alumno.apellidos}}</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{alumno.id}}\">{{alumno.email}}</td>
                        <td>
                            <a href=\"{{ path('editar-alumno', {'id': alumno.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
                            <a href=\"{{ path('borrar-alumno', {'id': alumno.id})}}\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showUsuario{{alumno.id}}\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre {{alumno.nombre}} {{alumno.apellidos}}</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        
                                        <div class=\"col\">
                                            <b>Email:</b> {{alumno.email}}<br>
                                            <b>Teléfono:</b> {{alumno.telefono}}<br>
                                            <b>Identificación:</b> {{alumno.ident}}<br>
                                            <b>Fecha nacimiento:</b> {{alumno.fnacimiento|date('d-m-Y')}}<br>
                                            
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-primary btn-block\" href=\"{{ path('editar-alumno', {'id': alumno.id}) }}\">Editar</a>
                                            <a class=\"btn btn-danger btn-block\" href=\"{{ path('borrar-alumno', {'id': alumno.id}) }}\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\">Borrar</a>
                                            
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
{% endblock %}
", "consultas/alumnos/alumnos.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/consultas/alumnos/alumnos.html.twig");
    }
}
