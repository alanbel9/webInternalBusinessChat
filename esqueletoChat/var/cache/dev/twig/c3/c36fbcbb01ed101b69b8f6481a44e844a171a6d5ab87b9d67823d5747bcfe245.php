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

/* _navbar.html.twig */
class __TwigTemplate_d27ad7bc0d448b7638cc69a202dd6d7dadc5034d126d6ddc1496864af42ba20b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_navbar.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand mr-5\" href=\"../html/index.php\">
        <h1>
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i> Chat;)
        </h1>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse ml-md-3 my-2\" id=\"navbarSupportedContent\">
        <div class=\"dropdown\">
            <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\">
                Grupos de Chat;)
            </button>
            <div id=\"menuGrupos\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                <!-- ----------------BBDD y PHP------------------------- -->
                <a class=\"dropdown-item\" href=\"#\">Grupo 1</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 2</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 3</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 4</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 5</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 6</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 7</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 8</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 9</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 10</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 11</a>
                <!-- --------------------------------------------------- -->
            </div>
        </div>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"form-inline my-2 my-sm-0 mr-auto\">
            <input class=\"form-control mr-md-2\" type=\"\" placeholder=\"Buscar\" aria-label=\"Search\">
            <button id=\"botonBuscar\" class=\"btn btn-dark my-2 my-md-0\" type=\"\">
                <h6 class=\"mt-2\"> <i class=\"fa fa-search\" aria-hidden=\"true\"></i> Buscar </h6>
            </button>
        </div>

        <a id=\"modificarPerfil\" class=\"button btn btn-outline-success my-2 my-md-0 mr-md-2\" href=\"#\">
            <h6 class=\"mt-2\"> <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> Perfil </h6>
        </a>

        <a class=\"btn btn-outline-danger my-2 my-md-0\" href=\"../html/login2.php\">
            <h6 class=\"mt-2\"> <i class=\"fa fa-sign-out \" aria-hidden=\"true\"></i> Logout </h6>
        </a>
    </div>
</nav>

<script>
    \$(function () {
        \$(\"#menuGrupos\").children().click(function (event) {
            \$(this).addClass(\"disabled\");
            \$(\"#barraIzquierda\").append('<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\"><h4><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> ' + \$(this).text() + '</h4></a><div class=\"nav flex-column nav-pills emergente\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"display: none;\"><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 infoGrupo text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Información</a><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Opciones</a></div>');
            eventosBarraLateral();
        });

        \$(\"#modificarPerfil\").off().on(\"click\", function () {
            \$(\"#contenedorPantallas\").fadeOut(200, function () {
                //\$(this).load(\"../plantillas/pantallas/pantallaModificarPerfil.php\").fadeIn(300);
                \$.ajax({
                    url: '/principal/pantallaModificarPerfil',
                    success: function (data) {
                        \$(\"#contenedorPantallas\").html(data).fadeIn(200);
                    }
                });
            })
        });
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_navbar.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <a class=\"navbar-brand mr-5\" href=\"../html/index.php\">
        <h1>
            <i class=\"fa fa-users\" aria-hidden=\"true\"></i> Chat;)
        </h1>
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\"
        aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse ml-md-3 my-2\" id=\"navbarSupportedContent\">
        <div class=\"dropdown\">
            <button class=\"btn btn-dark dropdown-toggle\" type=\"button\" id=\"dropdownMenuButton\" data-toggle=\"dropdown\"
                aria-haspopup=\"true\" aria-expanded=\"false\">
                Grupos de Chat;)
            </button>
            <div id=\"menuGrupos\" class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                <!-- ----------------BBDD y PHP------------------------- -->
                <a class=\"dropdown-item\" href=\"#\">Grupo 1</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 2</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 3</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 4</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 5</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 6</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 7</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 8</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 9</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 10</a>
                <a class=\"dropdown-item\" href=\"#\">Grupo 11</a>
                <!-- --------------------------------------------------- -->
            </div>
        </div>
    </div>
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        <div class=\"form-inline my-2 my-sm-0 mr-auto\">
            <input class=\"form-control mr-md-2\" type=\"\" placeholder=\"Buscar\" aria-label=\"Search\">
            <button id=\"botonBuscar\" class=\"btn btn-dark my-2 my-md-0\" type=\"\">
                <h6 class=\"mt-2\"> <i class=\"fa fa-search\" aria-hidden=\"true\"></i> Buscar </h6>
            </button>
        </div>

        <a id=\"modificarPerfil\" class=\"button btn btn-outline-success my-2 my-md-0 mr-md-2\" href=\"#\">
            <h6 class=\"mt-2\"> <i class=\"fa fa-cog\" aria-hidden=\"true\"></i> Perfil </h6>
        </a>

        <a class=\"btn btn-outline-danger my-2 my-md-0\" href=\"../html/login2.php\">
            <h6 class=\"mt-2\"> <i class=\"fa fa-sign-out \" aria-hidden=\"true\"></i> Logout </h6>
        </a>
    </div>
</nav>

<script>
    \$(function () {
        \$(\"#menuGrupos\").children().click(function (event) {
            \$(this).addClass(\"disabled\");
            \$(\"#barraIzquierda\").append('<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\"><h4><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> ' + \$(this).text() + '</h4></a><div class=\"nav flex-column nav-pills emergente\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"display: none;\"><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 infoGrupo text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Información</a><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Opciones</a></div>');
            eventosBarraLateral();
        });

        \$(\"#modificarPerfil\").off().on(\"click\", function () {
            \$(\"#contenedorPantallas\").fadeOut(200, function () {
                //\$(this).load(\"../plantillas/pantallas/pantallaModificarPerfil.php\").fadeIn(300);
                \$.ajax({
                    url: '/principal/pantallaModificarPerfil',
                    success: function (data) {
                        \$(\"#contenedorPantallas\").html(data).fadeIn(200);
                    }
                });
            })
        });
    });
</script>", "_navbar.html.twig", "C:\\xampp\\htdocs\\webInternalBusinessChat\\esqueletoChat\\templates\\_navbar.html.twig");
    }
}
