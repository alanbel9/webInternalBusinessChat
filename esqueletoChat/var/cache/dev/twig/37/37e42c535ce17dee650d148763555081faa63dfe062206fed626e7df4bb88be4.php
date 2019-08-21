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

/* _nav.html.twig */
class __TwigTemplate_b651feaef17a3509d94e73eb17be3e05f56929c4675eed1acc3971c689c1bd08 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        echo "<button id=\"botonEsconderBarraIzq\" class=\"btn btn-outline-primary  my-2 d-block w-100 d-md-none\">
  Mis grupos de Chat
</button>
<div class=\"row w-100\">
  <div class=\"col-auto\">
    <div id=\"barraIzquierda\" class=\"nav flex-column nav-pills\" role=\"tablist\"
      aria-orientation=\"vertical\" style=\"min-width: 12em; padding-bottom: 100px;\">
    </div>
  </div>

  <!-- CONTENIDO  -->

  <div id=\"contenedorPantallas\" class=\"col\">
 
    ";
        // line 15
        $this->loadTemplate("principal/_pantallaPerfil.html.twig", "_nav.html.twig", 15)->display($context);
        // line 16
        echo "
  </div>
</div>




<script>
  var grupos = ['Clase PHP', 'Café', 'Futbolín', 'Ping-pong', 'Fumar', 'PHP', 'Java'];//De PRUEBA, esto se hará con PHP

  \$(function () {
    grupos.forEach(function (item, index) {
      \$(\"#barraIzquierda\").append('<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\"><h4><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> ' + item + '</h4></a><div class=\"nav flex-column nav-pills emergente\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"display: none;\"><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 infoGrupo text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Información</a><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Opciones</a></div>');
    });
    eventosBarraLateral();

    \$(\"#botonBuscar\").click(function (event) {
      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //Petición a BBDD y AJAX
        //\$(this).load('../plantillas/pantallas/pantallaBuscar.php').fadeIn(300);
        \$.ajax({
          url: '/principal/pantallaBuscar',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(200);
          }
        });
      });
    });
    \$(\"#botonEsconderBarraIzq\").off().on(\"click\",function(){
      \$(\"#barraIzquierda\").slideToggle();
    });
  });

  function eventosBarraLateral() {
    \$(\"#barraIzquierda\").children(\"a\").off().on(\"click\", function (evt) {
      \$(\"#barraIzquierda\").children(\"a\").next().slideUp();
      \$(this).next().slideDown();

      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //\$(this).load(\"../plantillas/pantallas/pantallaChat.php\").fadeIn(300);
        \$.ajax({
          url: '../plantillas/pantallas/pantallaChat.php',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(500);
          }
        });
      })
    })

    \$(\"#barraIzquierda .infoGrupo\").off().on(\"click\", function (event) {
      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //\$(this).load('../plantillas/pantallas/pantallaInfoGrupo.php').fadeIn(300);
        \$.ajax({
          url: '../plantillas/pantallas/pantallaInfoGrupo.php',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(200);
          }
        });
      });
    });
  }

</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button id=\"botonEsconderBarraIzq\" class=\"btn btn-outline-primary  my-2 d-block w-100 d-md-none\">
  Mis grupos de Chat
</button>
<div class=\"row w-100\">
  <div class=\"col-auto\">
    <div id=\"barraIzquierda\" class=\"nav flex-column nav-pills\" role=\"tablist\"
      aria-orientation=\"vertical\" style=\"min-width: 12em; padding-bottom: 100px;\">
    </div>
  </div>

  <!-- CONTENIDO  -->

  <div id=\"contenedorPantallas\" class=\"col\">
 
    {% include 'principal/_pantallaPerfil.html.twig' %}

  </div>
</div>




<script>
  var grupos = ['Clase PHP', 'Café', 'Futbolín', 'Ping-pong', 'Fumar', 'PHP', 'Java'];//De PRUEBA, esto se hará con PHP

  \$(function () {
    grupos.forEach(function (item, index) {
      \$(\"#barraIzquierda\").append('<a class=\"nav-link\" id=\"v-pills-profile-tab\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\"><h4><i class=\"fa fa-hashtag\" aria-hidden=\"true\"></i> ' + item + '</h4></a><div class=\"nav flex-column nav-pills emergente\" id=\"v-pills-tab\" role=\"tablist\" aria-orientation=\"vertical\" style=\"display: none;\"><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 infoGrupo text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Información</a><a id=\"v-pills-profile-tab\" class=\"ml-5 mr-5 text-secondary\" data-toggle=\"pill\" href=\"#v-pills-profile\" role=\"tab\" aria-controls=\"v-pills-profile\" aria-selected=\"false\">Opciones</a></div>');
    });
    eventosBarraLateral();

    \$(\"#botonBuscar\").click(function (event) {
      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //Petición a BBDD y AJAX
        //\$(this).load('../plantillas/pantallas/pantallaBuscar.php').fadeIn(300);
        \$.ajax({
          url: '/principal/pantallaBuscar',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(200);
          }
        });
      });
    });
    \$(\"#botonEsconderBarraIzq\").off().on(\"click\",function(){
      \$(\"#barraIzquierda\").slideToggle();
    });
  });

  function eventosBarraLateral() {
    \$(\"#barraIzquierda\").children(\"a\").off().on(\"click\", function (evt) {
      \$(\"#barraIzquierda\").children(\"a\").next().slideUp();
      \$(this).next().slideDown();

      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //\$(this).load(\"../plantillas/pantallas/pantallaChat.php\").fadeIn(300);
        \$.ajax({
          url: '../plantillas/pantallas/pantallaChat.php',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(500);
          }
        });
      })
    })

    \$(\"#barraIzquierda .infoGrupo\").off().on(\"click\", function (event) {
      \$(\"#contenedorPantallas\").fadeOut(200, function () {
        //\$(this).load('../plantillas/pantallas/pantallaInfoGrupo.php').fadeIn(300);
        \$.ajax({
          url: '../plantillas/pantallas/pantallaInfoGrupo.php',
          success: function (data) {
            \$(\"#contenedorPantallas\").html(data).fadeIn(200);
          }
        });
      });
    });
  }

</script>", "_nav.html.twig", "C:\\xampp\\htdocs\\ejs-alan\\proyecto-chat\\webInternalBusinessChat\\esqueletoChat\\templates\\_nav.html.twig");
    }
}
