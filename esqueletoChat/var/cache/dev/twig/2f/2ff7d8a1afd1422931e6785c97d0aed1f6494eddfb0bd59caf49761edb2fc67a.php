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

/* principal/_pantallaPerfil.html.twig */
class __TwigTemplate_d68fe4f2e504fa9a4d803331e6f82152be3640ddda0c74784678dffb20353e1a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/_pantallaPerfil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "principal/_pantallaPerfil.html.twig"));

        // line 1
        echo "<div class=\"container bg-light text-dark shadow p-2\"
    style=\"font-family: 'Righteous', sans-serif;min-height:90vh;\">
    <div class=\"row pt-4\">
        <div class=\"mx-auto\">
            <img id=\"imgSalida\" height=\"300\" src=\"../resources/foto-carnet.jpg\" class=\"border border-dark\"
                alt=\"foto perfil\">
        </div>
    </div>

    <h1 class=\"pt-4\" style=\"text-align: center\">Mi_Nombre Apellido1 Apellido2</h1>

    <h3 class=\"pt-4\">Mis datos personales:</h3>

    <blockquote><strong>Fecha de nacimiento:</strong> dd/mm/aaaa</blockquote>
    <blockquote><strong>Correo:</strong> correoDePrueba@gmail.com</blockquote>
    <blockquote><strong>Puesto de trabajo:</strong> php</blockquote>
    <blockquote><strong>Conocimientos:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iure sed facilis, corporis unde officia quod
            odit optio nemo quas, inventore non possimus provident illum tempora molestias at quis ut.</p>
    </blockquote>
    <blockquote><strong>Aficiones:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem earum quidem, vel consequatur iure
            alias maiores nisi? Omnis quas fuga eum error itaque quasi incidunt quia distinctio similique ex.</p>
    </blockquote>
    <blockquote><strong>Grupos de chat:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem earum quidem, vel consequatur iure
            alias maiores nisi? Omnis quas fuga eum error itaque quasi incidunt quia distinctio similique ex.</p>
    </blockquote>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "principal/_pantallaPerfil.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container bg-light text-dark shadow p-2\"
    style=\"font-family: 'Righteous', sans-serif;min-height:90vh;\">
    <div class=\"row pt-4\">
        <div class=\"mx-auto\">
            <img id=\"imgSalida\" height=\"300\" src=\"../resources/foto-carnet.jpg\" class=\"border border-dark\"
                alt=\"foto perfil\">
        </div>
    </div>

    <h1 class=\"pt-4\" style=\"text-align: center\">Mi_Nombre Apellido1 Apellido2</h1>

    <h3 class=\"pt-4\">Mis datos personales:</h3>

    <blockquote><strong>Fecha de nacimiento:</strong> dd/mm/aaaa</blockquote>
    <blockquote><strong>Correo:</strong> correoDePrueba@gmail.com</blockquote>
    <blockquote><strong>Puesto de trabajo:</strong> php</blockquote>
    <blockquote><strong>Conocimientos:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi iure sed facilis, corporis unde officia quod
            odit optio nemo quas, inventore non possimus provident illum tempora molestias at quis ut.</p>
    </blockquote>
    <blockquote><strong>Aficiones:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem earum quidem, vel consequatur iure
            alias maiores nisi? Omnis quas fuga eum error itaque quasi incidunt quia distinctio similique ex.</p>
    </blockquote>
    <blockquote><strong>Grupos de chat:</strong>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem earum quidem, vel consequatur iure
            alias maiores nisi? Omnis quas fuga eum error itaque quasi incidunt quia distinctio similique ex.</p>
    </blockquote>
</div>", "principal/_pantallaPerfil.html.twig", "C:\\xampp\\htdocs\\ejs-alan\\proyecto-chat\\webInternalBusinessChat\\esqueletoChat\\templates\\principal\\_pantallaPerfil.html.twig");
    }
}
