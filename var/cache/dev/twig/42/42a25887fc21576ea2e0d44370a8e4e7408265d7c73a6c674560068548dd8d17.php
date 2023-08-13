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

/* dashboard/_jornada.html.twig */
class __TwigTemplate_031cb8c6fd1a6b9a89736760c11b378cd2a767f30d4ab0ce0a6613752300268f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_jornada.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/_jornada.html.twig"));

        // line 1
        echo "<div id=\"reloj\" class=\"reloj\" style=\"font-size: x-large;text-align: center;\">
    00 : 00 : 00
</div>
";
        // line 4
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 4, $this->source); })()), 'form_start');
        echo "
<div class=\"m-1\">
    ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 6, $this->source); })()), "observaciones", [], "any", false, false, false, 6), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Observaciones"]);
        echo "<br>
    ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 7, $this->source); })()), "observaciones", [], "any", false, false, false, 7), 'widget');
        echo "
    <small>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 8, $this->source); })()), "observaciones", [], "any", false, false, false, 8), 'help');
        echo "</small>
    <div class=\"form-error\">";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 9, $this->source); })()), "observaciones", [], "any", false, false, false, 9), 'errors');
        echo "</div>
</div>
<div class=\"m-1\">
    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 12, $this->source); })()), "_token", [], "any", false, false, false, 12), 'row');
        echo "
    ";
        // line 13
        if ((0 === twig_compare((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "jornada", [], "any", false, false, false, 13)) % 2), 0))) {
            // line 14
            echo "        
        ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 15, $this->source); })()), "Guardar", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "btn btn-success btn-block"], "label" => "Registrar entrada"]);
            echo "
    ";
        } else {
            // line 17
            echo "        
        ";
            // line 18
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 18, $this->source); })()), "Guardar", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "btn btn-danger btn-block"], "label" => "Registrar salida"]);
            echo "
    ";
        }
        // line 20
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 20, $this->source); })()), "latitud", [], "any", false, false, false, 20), 'widget', ["attr" => ["value" => "", "name" => "latitud", "id" => "jornada_latitud"]]);
        echo "
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 21, $this->source); })()), "longitud", [], "any", false, false, false, 21), 'widget', ["attr" => ["value" => "", "name" => "longitud", "id" => "jornada_longitud"]]);
        echo "
    <br>
    ";
        // line 23
        if ((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "jornada", [], "any", false, false, false, 23)), 0))) {
            // line 24
            echo "        ULTIMO REGISTRO: 
        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "jornada", [], "any", false, false, false, 25));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["registro"]) {
                // line 26
                echo "            ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                <b>";
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["registro"], "tipo", [], "any", false, false, false, 27), 0))) {
                        // line 28
                        echo "                    <i class=\"fas fa-sign-out-alt\"></i> SALIDA 
                ";
                    } else {
                        // line 30
                        echo "                    <i class=\"fas fa-sign-in-alt\"></i> ENTRADA 
                ";
                    }
                    // line 31
                    echo "</b>
                 el ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["registro"], "hora", [], "any", false, false, false, 32), "medium", "short", "", null, "gregorian", "es"), "html", null, true);
                    echo "
            ";
                }
                // line 34
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registro'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    ";
        }
        // line 36
        echo "</div>

            
<!--<div class=\"col-lg-8 p-3\">
    ";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "jornada", [], "any", false, false, false, 40)), "html", null, true);
        echo "
    <button id=\"find_btn\">Find Me</button>
    <div id=\"result\"></div> 
</div>-->
";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formulario"]) || array_key_exists("formulario", $context) ? $context["formulario"] : (function () { throw new RuntimeError('Variable "formulario" does not exist.', 44, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "dashboard/_jornada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 44,  170 => 40,  164 => 36,  161 => 35,  147 => 34,  142 => 32,  139 => 31,  135 => 30,  131 => 28,  128 => 27,  125 => 26,  108 => 25,  105 => 24,  103 => 23,  98 => 21,  93 => 20,  88 => 18,  85 => 17,  80 => 15,  77 => 14,  75 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"reloj\" class=\"reloj\" style=\"font-size: x-large;text-align: center;\">
    00 : 00 : 00
</div>
{{ form_start(formulario) }}
<div class=\"m-1\">
    {{form_label(formulario.observaciones, 'Observaciones',{'label_attr': {'class':'form-label'}})}}<br>
    {{ form_widget(formulario.observaciones) }}
    <small>{{form_help(formulario.observaciones)}}</small>
    <div class=\"form-error\">{{ form_errors(formulario.observaciones)}}</div>
</div>
<div class=\"m-1\">
    {{ form_row(formulario._token) }}
    {% if (user.jornada|length) % 2 == 0  %}
        
        {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-success btn-block'}, 'label':'Registrar entrada'}) }}
    {% else %}
        
        {{ form_widget(formulario.Guardar, {'attr':{'class':'btn btn-danger btn-block'}, 'label':'Registrar salida'}) }}
    {% endif %}
    {{ form_widget(formulario.latitud,{'attr': {'value': '', 'name':'latitud', 'id':'jornada_latitud'}}) }}
    {{ form_widget(formulario.longitud,{'attr': {'value': '', 'name':'longitud', 'id':'jornada_longitud'}}) }}
    <br>
    {% if user.jornada|length > 0 %}
        ULTIMO REGISTRO: 
        {% for registro in user.jornada%}
            {% if loop.last %}
                <b>{% if registro.tipo == 0%}
                    <i class=\"fas fa-sign-out-alt\"></i> SALIDA 
                {% else %}
                    <i class=\"fas fa-sign-in-alt\"></i> ENTRADA 
                {% endif %}</b>
                 el {{registro.hora|format_datetime('medium', 'short', locale='es')}}
            {% endif %}
        {% endfor %}
    {% endif %}
</div>

            
<!--<div class=\"col-lg-8 p-3\">
    {{user.jornada|length}}
    <button id=\"find_btn\">Find Me</button>
    <div id=\"result\"></div> 
</div>-->
{{ form_end(formulario) }}", "dashboard/_jornada.html.twig", "/mnt/data/home/565124.cloudwaysapps.com/uxnuseexjv/public_html/dev/templates/dashboard/_jornada.html.twig");
    }
}
