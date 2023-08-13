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

/* base.html.twig */
class __TwigTemplate_81a1d4c2590972776227a1698147b83a819dee32e8d0cb9d8c658f98b4631b94 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"https://kit.fontawesome.com/138a500d36.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <link rel=\"icon\" href=\"https://www.eobs.es/wp-content/uploads/2021/04/cropped-EOBS.fav_.png\" type=\"image/x-icon\">


        
    </head>
    <body>

        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"d-flex\">
                    <div class=\"p-2\">
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">
                            <img src=\"https://www.eobs.es/wp-content/uploads/2021/04/1-EOBS-VERDE-PNG.png\" alt=\"Logo\" style=\"width:80px;\">
                        </a>
                    </div>
                    <div class=\"p-2\">
                        ";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 28
            echo "                            <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#menulateral\"><i class=\"fas fa-bars\"></i></button>
                        ";
        }
        // line 30
        echo "                    </div>
                </div>
            </div>
        </nav>

        <!-- Offcanvas Sidebar -->
        <div class=\"offcanvas offcanvas-start\" id=\"menulateral\">
            <div class=\"offcanvas-header\">
                <h1 class=\"offcanvas-title\"></h1>
                <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"></button>
            </div>
            <div class=\"offcanvas-body\">
                ";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "                    <div class=\"d-grid gap-2\">
                        <a class=\"btn btn-primary btn-block\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
            echo "\">Inicio</a>
                        <a class=\"btn btn-primary btn-block\" href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
            echo "\">Usuarios</a>
                        <a class=\"btn btn-primary btn-block\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departamentos");
            echo "\">Departamentos</a>
                        <hr>
                        <a href=\"#ShowHideReg\" class=\"btn btn-primary btn-block\" data-bs-toggle=\"collapse\">Registro de jornada</a>
                        <div id=\"ShowHideReg\" class=\"collapse\" style=\"padding: 3px;background-color: #eee;\">
                           
                            ";
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("registroJornada"));
            echo "
                        </div>
                        <hr>
                        <a class=\"btn btn-danger btn-block\" href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Salir</a>
                    </div>
                    
                ";
        }
        // line 58
        echo "            </div>
        </div>

        <div class=\"container-fluid\" style=\"margin-top:80px;padding-right: 0px; padding-left: 0;\">
            ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", [0 => "success"], "method", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 63
            echo "                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Exito</strong> ";
            // line 65
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "session", [], "any", false, false, false, 69), "flashbag", [], "any", false, false, false, 69), "get", [0 => "error"], "method", false, false, false, 69));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 70
            echo "                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Error</strong> ";
            // line 72
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
            ";
        // line 76
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        </div>

        <footer class=\"bg-light text-lg-start\">

    <hr class=\"m-0\" />

    <div class=\"text-center py-4 align-items-center\">
      <p>Sigue a EOBS en redes sociales</p>
      <a href=\"https://www.youtube.com/channel/UCQMLDLc5KJmiMxqbOkie9sg\" class=\"btn btn-secondary m-1\" role=\"button\"
        rel=\"nofollow\" target=\"_blank\">
        <i class=\"fab fa-youtube\"></i>
      </a>
      <a href=\"https://www.facebook.com/EOBS.BusinessSchool/\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-facebook-square\"></i>
      </a>
      <a href=\"https://twitter.com/eobs_es?lang=es\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-twitter-square\"></i>
      </a>
      <a href=\"https://www.linkedin.com/school/eobs/\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
    </div>

    <!-- Copyright -->
    <div class=\"text-center p-2\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
      © 2022 Copyright:
      <a class=\"text-dark\" href=\"https://eobs.es/\">www.eobs.es</a>
    </div>

    <!-- Copyright -->
  </footer>

    <script type=\"text/javascript\">
    function actual() {
         fecha=new Date(); //Actualizar fecha.
         hora=fecha.getHours(); //hora actual
         minuto=fecha.getMinutes(); //minuto actual
         segundo=fecha.getSeconds(); //segundo actual
         if (hora<10) { //dos cifras para la hora
            hora=\"0\"+hora;
            }
         if (minuto<10) { //dos cifras para el minuto
            minuto=\"0\"+minuto;
            }
         if (segundo<10) { //dos cifras para el segundo
            segundo=\"0\"+segundo;
            }
         //ver en el recuadro del reloj:
         mireloj = hora+\" : \"+minuto+\" : \"+segundo; 
                 return mireloj; 
         }
    function actualizar() { //función del temporizador
        mihora=actual(); //recoger hora actual
        mireloj=document.getElementById(\"reloj\"); //buscar elemento reloj
        mireloj.innerHTML=mihora; //incluir hora en elemento
    }
    setInterval(actualizar,1000); //iniciar temporizador

    \$(document).ready(function(){
      \$(\"#busqueda\").on(\"keyup\", function() {
        var value = \$(this).val().toLowerCase();
        \$(\"#tabla tr\").filter(function() {
          \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>    

";
        // line 150
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 151
            echo "    <script type=\"text/javascript\">
        window.onload = function () { //user loads page
            if (\"geolocation\" in navigator){ //check geolocation available 
            //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                    \$(\"#geoLocation\").html(\"Found your location <br />Lat : \"+position.coords.latitude+\" </br>Lang :\"+ position.coords.longitude);
                    document.getElementById(\"jornada_latitud\").value = position.coords.latitude;
                    document.getElementById(\"jornada_longitud\").value = position.coords.longitude;
                    
                });
            }else{
                console.log(\"Browser doesn't support geolocation!\");
            }
        };
    </script>  
";
        }
        // line 167
        echo "

 
        
        

        
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "EOBS";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 76
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 77
        echo "
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 77,  317 => 76,  298 => 6,  279 => 167,  261 => 151,  259 => 150,  186 => 79,  184 => 76,  181 => 75,  172 => 72,  168 => 70,  163 => 69,  153 => 65,  149 => 63,  145 => 62,  139 => 58,  132 => 54,  126 => 51,  118 => 46,  114 => 45,  110 => 44,  107 => 43,  105 => 42,  91 => 30,  87 => 28,  85 => 27,  77 => 22,  60 => 8,  56 => 7,  52 => 6,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>{% block title %}EOBS{% endblock %}</title>
        <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css')}}\">
        <script src=\"{{asset('js/bootstrap.min.js')}}\"></script>
        <script src=\"https://kit.fontawesome.com/138a500d36.js\" crossorigin=\"anonymous\"></script>
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js\"></script>
        <link rel=\"icon\" href=\"https://www.eobs.es/wp-content/uploads/2021/04/cropped-EOBS.fav_.png\" type=\"image/x-icon\">


        
    </head>
    <body>

        <nav class=\"navbar navbar-expand-md navbar-dark bg-dark fixed-top\">
            <div class=\"container-fluid\">
                <div class=\"d-flex\">
                    <div class=\"p-2\">
                        <a class=\"navbar-brand\" href=\"{{ path('dashboard')}}\">
                            <img src=\"https://www.eobs.es/wp-content/uploads/2021/04/1-EOBS-VERDE-PNG.png\" alt=\"Logo\" style=\"width:80px;\">
                        </a>
                    </div>
                    <div class=\"p-2\">
                        {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                            <button class=\"btn btn-secondary\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#menulateral\"><i class=\"fas fa-bars\"></i></button>
                        {% endif %}
                    </div>
                </div>
            </div>
        </nav>

        <!-- Offcanvas Sidebar -->
        <div class=\"offcanvas offcanvas-start\" id=\"menulateral\">
            <div class=\"offcanvas-header\">
                <h1 class=\"offcanvas-title\"></h1>
                <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\"></button>
            </div>
            <div class=\"offcanvas-body\">
                {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
                    <div class=\"d-grid gap-2\">
                        <a class=\"btn btn-primary btn-block\" href=\"{{ path('dashboard') }}\">Inicio</a>
                        <a class=\"btn btn-primary btn-block\" href=\"{{ path('usuarios') }}\">Usuarios</a>
                        <a class=\"btn btn-primary btn-block\" href=\"{{ path('departamentos') }}\">Departamentos</a>
                        <hr>
                        <a href=\"#ShowHideReg\" class=\"btn btn-primary btn-block\" data-bs-toggle=\"collapse\">Registro de jornada</a>
                        <div id=\"ShowHideReg\" class=\"collapse\" style=\"padding: 3px;background-color: #eee;\">
                           
                            {{ render(path('registroJornada')) }}
                        </div>
                        <hr>
                        <a class=\"btn btn-danger btn-block\" href=\"{{ path('app_logout') }}\">Salir</a>
                    </div>
                    
                {% endif %}
            </div>
        </div>

        <div class=\"container-fluid\" style=\"margin-top:80px;padding-right: 0px; padding-left: 0;\">
            {% for flash_message in app.session.flashbag.get('success') %}
                <div class=\"alert alert-success alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Exito</strong> {{ flash_message }}
                </div>
            
            {% endfor %}
            {% for flash_message in app.session.flashbag.get('error') %}
                <div class=\"alert alert-danger alert-dismissible\">
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
                    <strong>Error</strong> {{ flash_message }}
                </div>
            {% endfor %}

            {% block body %}

            {% endblock %}
        </div>

        <footer class=\"bg-light text-lg-start\">

    <hr class=\"m-0\" />

    <div class=\"text-center py-4 align-items-center\">
      <p>Sigue a EOBS en redes sociales</p>
      <a href=\"https://www.youtube.com/channel/UCQMLDLc5KJmiMxqbOkie9sg\" class=\"btn btn-secondary m-1\" role=\"button\"
        rel=\"nofollow\" target=\"_blank\">
        <i class=\"fab fa-youtube\"></i>
      </a>
      <a href=\"https://www.facebook.com/EOBS.BusinessSchool/\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-facebook-square\"></i>
      </a>
      <a href=\"https://twitter.com/eobs_es?lang=es\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-twitter-square\"></i>
      </a>
      <a href=\"https://www.linkedin.com/school/eobs/\" class=\"btn btn-secondary m-1\" role=\"button\" rel=\"nofollow\"
        target=\"_blank\">
        <i class=\"fab fa-linkedin\"></i>
      </a>
    </div>

    <!-- Copyright -->
    <div class=\"text-center p-2\" style=\"background-color: rgba(0, 0, 0, 0.2);\">
      © 2022 Copyright:
      <a class=\"text-dark\" href=\"https://eobs.es/\">www.eobs.es</a>
    </div>

    <!-- Copyright -->
  </footer>

    <script type=\"text/javascript\">
    function actual() {
         fecha=new Date(); //Actualizar fecha.
         hora=fecha.getHours(); //hora actual
         minuto=fecha.getMinutes(); //minuto actual
         segundo=fecha.getSeconds(); //segundo actual
         if (hora<10) { //dos cifras para la hora
            hora=\"0\"+hora;
            }
         if (minuto<10) { //dos cifras para el minuto
            minuto=\"0\"+minuto;
            }
         if (segundo<10) { //dos cifras para el segundo
            segundo=\"0\"+segundo;
            }
         //ver en el recuadro del reloj:
         mireloj = hora+\" : \"+minuto+\" : \"+segundo; 
                 return mireloj; 
         }
    function actualizar() { //función del temporizador
        mihora=actual(); //recoger hora actual
        mireloj=document.getElementById(\"reloj\"); //buscar elemento reloj
        mireloj.innerHTML=mihora; //incluir hora en elemento
    }
    setInterval(actualizar,1000); //iniciar temporizador

    \$(document).ready(function(){
      \$(\"#busqueda\").on(\"keyup\", function() {
        var value = \$(this).val().toLowerCase();
        \$(\"#tabla tr\").filter(function() {
          \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
        });
      });
    });
</script>    

{% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
    <script type=\"text/javascript\">
        window.onload = function () { //user loads page
            if (\"geolocation\" in navigator){ //check geolocation available 
            //try to get user current location using getCurrentPosition() method
                navigator.geolocation.getCurrentPosition(function(position){ 
                    \$(\"#geoLocation\").html(\"Found your location <br />Lat : \"+position.coords.latitude+\" </br>Lang :\"+ position.coords.longitude);
                    document.getElementById(\"jornada_latitud\").value = position.coords.latitude;
                    document.getElementById(\"jornada_longitud\").value = position.coords.longitude;
                    
                });
            }else{
                console.log(\"Browser doesn't support geolocation!\");
            }
        };
    </script>  
{% endif %}


 
        
        

        
    </body>
</html>
", "base.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/base.html.twig");
    }
}
