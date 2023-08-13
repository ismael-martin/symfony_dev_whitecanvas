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

/* dashboard/index.html.twig */
class __TwigTemplate_5003ab36b3861ba77698d3b9e2acbeb95cbcf7802081058b1cdd5a94fad01e18 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
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
        echo " - Inicio";
        
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
        echo "<!-- <style type=\"text/css\">
    .reloj { width: 150px; height: 30px; padding: 5px 10px; border: 1px solid black; 
         font: bold 1.5em dotum, \"lucida sans\", arial; 
         text-align: center;
         float: right; margin: 1em 3em 1em 1em; }

</style> -->

<div class=\"container-md pt-3\">
    <h1>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new RuntimeError('Variable "controller_name" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h1>
    <hr>
    <div class=\"row pb-2\">
        
        <div class=\"col\">
            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Alumnos</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("alumnos");
        echo "\" class=\"btn btn-primary\">Acceder a Alumnos</a></div>
                
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Usuarios</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("usuarios");
        echo "\" class=\"btn btn-primary\">Acceder a usuarios</a></div>
                
            </div>

            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Departamentos</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("departamentos");
        echo "\" class=\"btn btn-primary\">Acceder a departamentos</a></div>
                
            </div>
        </div>
    

    
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  124 => 33,  112 => 24,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{parent()}} - Inicio{% endblock %}

{% block body %}
<!-- <style type=\"text/css\">
    .reloj { width: 150px; height: 30px; padding: 5px 10px; border: 1px solid black; 
         font: bold 1.5em dotum, \"lucida sans\", arial; 
         text-align: center;
         float: right; margin: 1em 3em 1em 1em; }

</style> -->

<div class=\"container-md pt-3\">
    <h1>{{ controller_name }}</h1>
    <hr>
    <div class=\"row pb-2\">
        
        <div class=\"col\">
            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Alumnos</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"{{ path('alumnos') }}\" class=\"btn btn-primary\">Acceder a Alumnos</a></div>
                
            </div>
        </div>
        <div class=\"col\">
            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Usuarios</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"{{ path('usuarios') }}\" class=\"btn btn-primary\">Acceder a usuarios</a></div>
                
            </div>

            <div class=\"card mb-2\">
                
                <div class=\"card-header\">Departamentos</div>
                <div class=\"card-body\">Some example text some example text. John Doe is an architect and engineer</div>
                <div class=\"card-footer\"><a href=\"{{ path('departamentos') }}\" class=\"btn btn-primary\">Acceder a departamentos</a></div>
                
            </div>
        </div>
    

    
</div>


{% endblock %}
", "dashboard/index.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/index.html.twig");
    }
}
