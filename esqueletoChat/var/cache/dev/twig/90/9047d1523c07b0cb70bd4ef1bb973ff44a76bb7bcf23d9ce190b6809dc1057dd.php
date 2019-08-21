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

/* principal/pantallaBuscar.html.twig */
class __TwigTemplate_37bfbf1158e0d9b906cc91dab617a7b333c9ccd701df797786a1ece24bf789f2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/pantallaBuscar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/pantallaBuscar.html.twig"));

        // line 1
        echo "
<div class=\"container bg-light text-dark shadow p-2\" style=\"font-family: 'Righteous', sans-serif; text-align: center; min-height:90vh;\">

    <h1 class=\"pt-5\">Perfiles encontrados:</h1>

    <div class=\"row mt-5\">

        <div class=\"input-group  col-md-6 offset-md-3 mt-5 \">

            <table class=\"table\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">Nº</th>
                        <th scope=\"col\">Nombre</th>
                        <th scope=\"col\">Apellidos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-toggle=\"modal\" data-target=\"#modalInfoUsuario\" href=\"\">
                        <th scope=\"row\">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr data-toggle=\"modal\" data-target=\"#modalInfoUsuario\" href=\"\">
                        <th scope=\"row\">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>

                </tbody>
            </table>


        </div>

    </div>

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "principal/pantallaBuscar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"container bg-light text-dark shadow p-2\" style=\"font-family: 'Righteous', sans-serif; text-align: center; min-height:90vh;\">

    <h1 class=\"pt-5\">Perfiles encontrados:</h1>

    <div class=\"row mt-5\">

        <div class=\"input-group  col-md-6 offset-md-3 mt-5 \">

            <table class=\"table\">
                <thead class=\"thead-dark\">
                    <tr>
                        <th scope=\"col\">Nº</th>
                        <th scope=\"col\">Nombre</th>
                        <th scope=\"col\">Apellidos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-toggle=\"modal\" data-target=\"#modalInfoUsuario\" href=\"\">
                        <th scope=\"row\">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                    </tr>
                    <tr data-toggle=\"modal\" data-target=\"#modalInfoUsuario\" href=\"\">
                        <th scope=\"row\">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                    </tr>

                </tbody>
            </table>


        </div>

    </div>

</div>", "principal/pantallaBuscar.html.twig", "C:\\xampp\\htdocs\\ejs-alan\\proyecto-chat\\webInternalBusinessChat\\esqueletoChat\\templates\\principal\\pantallaBuscar.html.twig");
    }
}
