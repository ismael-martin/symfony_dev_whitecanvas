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

/* dashboard/usuarios/usuarios.html.twig */
class __TwigTemplate_cb16667dd5094c0ebfe310ffc22300c97d9d31faa052103d278a29775235fcd0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuarios.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/usuarios/usuarios.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/usuarios/usuarios.html.twig", 1);
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
        echo " - Lista de usuarios";
        
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
    <div class=\"pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Dashboard</a>
      <a class=\"btn btn-success btn-block\" href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registro-usuarios");
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
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usuarios"]) || array_key_exists("usuarios", $context) ? $context["usuarios"] : (function () { throw new RuntimeError('Variable "usuarios" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["usuario"]) {
            // line 30
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["usuario"], "bloqueado", [], "any", false, false, false, 30)) {
                echo "<tr class=\"table-danger\">";
            } else {
                echo "<tr>";
            }
            // line 31
            echo "                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 32), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellidos", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-usuario", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
                            ";
            // line 36
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 36)))) {
                // line 37
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-usuario", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                echo "\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                            ";
            }
            // line 39
            echo "                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showUsuario";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nombre", [], "any", false, false, false, 47), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "apellidos", [], "any", false, false, false, 47), "html", null, true);
            echo "</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        ";
            // line 54
            if (twig_get_attribute($this->env, $this->source, $context["usuario"], "bloqueado", [], "any", false, false, false, 54)) {
                // line 55
                echo "                                            <div class=\"alert alert-danger\">
                                                <strong>Atención: </strong> Usuario bloqueado
                                            </div>
                                        ";
            }
            // line 59
            echo "                                        <div class=\"col\">
                                            <b>Departamento:</b> ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["usuario"], "departamentos", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["dept"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dept"], "nombre", [], "any", false, false, false, 60), "html", null, true);
                echo "<br>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dept'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "<hr>
                                            <b>Email:</b> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "email", [], "any", false, false, false, 61), "html", null, true);
            echo "<br>
                                            <b>Teléfono:</b> ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "telefono", [], "any", false, false, false, 62), "html", null, true);
            echo "<br>
                                            <b>DNI:</b> ";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "dni", [], "any", false, false, false, 63), "html", null, true);
            echo "<br>
                                            <b>Perm. Conducir:</b> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "permConducir", [], "any", false, false, false, 64), "html", null, true);
            echo "<hr>
                                            <button class=\"btn btn-secondary btn-block\" data-bs-toggle=\"collapse\" data-bs-target=\"#verMas\">Ver más</button>
                                            <div id=\"verMas\" class=\"collapse\"><br>
                                                <b>Fecha nacimiento:</b> ";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "fnacimiento", [], "any", false, false, false, 67), "d-m-Y"), "html", null, true);
            echo "<br>
                                                <b>Lugar nacimiento:</b> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "lnacimiento", [], "any", false, false, false, 68), "html", null, true);
            echo "<br>
                                                <b>Sexo:</b> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "sexo", [], "any", false, false, false, 69), "html", null, true);
            echo "<br>
                                                <b>Nacionalidad:</b> ";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "nacionalidad", [], "any", false, false, false, 70), "html", null, true);
            echo "<br>
                                                <b>Est. Civil:</b> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["usuario"], "estCivil", [], "any", false, false, false, 71), "html", null, true);
            echo "<br>
                                            </div>
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-secondary btn-block\" href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jornadas-usuario", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\">Ver jornadas</a>
                                            <a class=\"btn btn-primary btn-block\" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editar-usuario", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\">Editar</a>
                                            ";
            // line 77
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "id", [], "any", false, false, false, 77), twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 77)))) {
                // line 78
                echo "                                                <a class=\"btn btn-danger btn-block\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("borrar-usuario", ["id" => twig_get_attribute($this->env, $this->source, $context["usuario"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                echo "\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\">Borrar</a>
                                            ";
            }
            // line 80
            echo "                                        
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['usuario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
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
        return "dashboard/usuarios/usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 94,  271 => 80,  265 => 78,  263 => 77,  259 => 76,  255 => 75,  248 => 71,  244 => 70,  240 => 69,  236 => 68,  232 => 67,  226 => 64,  222 => 63,  218 => 62,  214 => 61,  202 => 60,  199 => 59,  193 => 55,  191 => 54,  179 => 47,  170 => 41,  166 => 39,  160 => 37,  158 => 36,  154 => 35,  147 => 33,  141 => 32,  134 => 31,  127 => 30,  123 => 29,  104 => 13,  100 => 12,  94 => 9,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Lista de usuarios{% endblock %}

{% block body %}


<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"pb-2\">
      <a class=\"btn btn-primary btn-block\" href=\"{{ path('dashboard') }}\">Dashboard</a>
      <a class=\"btn btn-success btn-block\" href=\"{{ path('registro-usuarios') }}\">Registro</a>
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
                {% for usuario in usuarios %}
                    {% if usuario.bloqueado %}<tr class=\"table-danger\">{% else %}<tr>{% endif %}
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{usuario.id}}\">{{usuario.nombre}}</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{usuario.id}}\">{{usuario.apellidos}}</td>
                        <td  data-bs-toggle=\"modal\" data-bs-target=\"#showUsuario{{usuario.id}}\">{{usuario.email}}</td>
                        <td>
                            <a href=\"{{ path('editar-usuario', {'id': usuario.id}) }}\"><i class=\"fas fa-pencil-alt\"></i></a>
                            {% if app.user.id != usuario.id %}
                                <a href=\"{{ path('borrar-usuario', {'id': usuario.id})}}\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\"><i class=\"fas fa-trash-alt\"></i></a>
                            {% endif %}
                        </td>
                    </tr>
                    <div class=\"modal fade\" id=\"showUsuario{{usuario.id}}\">
                        <div class=\"modal-dialog modal-dialog-centered\">
                            <div class=\"modal-content\">

                                <!-- Modal Header -->
                                <div class=\"modal-header\">
                                    <h4 class=\"modal-title\">Información sobre {{usuario.nombre}} {{usuario.apellidos}}</h4>
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"></button>
                                </div>

                                <!-- Modal body -->
                                <div class=\"modal-body\">
                                    <div class=\"row\">
                                        {% if usuario.bloqueado %}
                                            <div class=\"alert alert-danger\">
                                                <strong>Atención: </strong> Usuario bloqueado
                                            </div>
                                        {% endif %}
                                        <div class=\"col\">
                                            <b>Departamento:</b> {% for dept in usuario.departamentos %}{{dept.nombre}}<br>{% endfor %}<hr>
                                            <b>Email:</b> {{usuario.email}}<br>
                                            <b>Teléfono:</b> {{usuario.telefono}}<br>
                                            <b>DNI:</b> {{usuario.dni}}<br>
                                            <b>Perm. Conducir:</b> {{usuario.permConducir}}<hr>
                                            <button class=\"btn btn-secondary btn-block\" data-bs-toggle=\"collapse\" data-bs-target=\"#verMas\">Ver más</button>
                                            <div id=\"verMas\" class=\"collapse\"><br>
                                                <b>Fecha nacimiento:</b> {{usuario.fnacimiento|date('d-m-Y')}}<br>
                                                <b>Lugar nacimiento:</b> {{usuario.lnacimiento}}<br>
                                                <b>Sexo:</b> {{usuario.sexo}}<br>
                                                <b>Nacionalidad:</b> {{usuario.nacionalidad}}<br>
                                                <b>Est. Civil:</b> {{usuario.estCivil}}<br>
                                            </div>
                                        </div>
                                        <div class=\"col d-grid gap-3\" style=\"height: fit-content;\">
                                            <a class=\"btn btn-secondary btn-block\" href=\"{{ path('jornadas-usuario', {'id': usuario.id}) }}\">Ver jornadas</a>
                                            <a class=\"btn btn-primary btn-block\" href=\"{{ path('editar-usuario', {'id': usuario.id}) }}\">Editar</a>
                                            {% if app.user.id != usuario.id %}
                                                <a class=\"btn btn-danger btn-block\" href=\"{{ path('borrar-usuario', {'id': usuario.id}) }}\" onclick=\"return confirm('¿Estás seguro de que quieres hacer esto?')\">Borrar</a>
                                            {% endif %}
                                        
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
", "dashboard/usuarios/usuarios.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/usuarios/usuarios.html.twig");
    }
}
