<button id="botonEsconderBarraIzq" class="btn btn-outline-primary  my-2 d-block w-100 d-md-none">
  Mis grupos de Chat
</button>
<div class="row w-100">
  <div class="col-auto">
    <div id="barraIzquierda" class="nav flex-column nav-pills" role="tablist"
      aria-orientation="vertical" style="min-width: 12em; padding-bottom: 100px;">
    </div>
  </div>
  <div id="contenedorPantallas" class="col">
    <?php
        require_once("../plantillas/pantallas/pantallaPerfil.php");
    ?>
  </div>
</div>

<div id="modalInfoUsuario" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php
          require("../plantillas/pantallas/pantallaPerfil.php");
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<script>
  var grupos = ['Clase PHP', 'Café', 'Futbolín', 'Ping-pong', 'Fumar', 'PHP', 'Java'];//De PRUEBA, esto se hará con PHP

  $(function () {
    grupos.forEach(function (item, index) {
      $("#barraIzquierda").append('<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><h4><i class="fa fa-hashtag" aria-hidden="true"></i> ' + item + '</h4></a><div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="display: none;"><a id="v-pills-profile-tab" class="ml-5 mr-5 infoGrupo text-secondary" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Información</a><a id="v-pills-profile-tab" class="ml-5 mr-5 text-secondary" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Opciones</a></div>');
    });
    eventosBarraLateral();

    $("#botonBuscar").click(function (event) {
      $("#contenedorPantallas").fadeOut(200, function () {
        //Petición a BBDD y AJAX
        //$(this).load('../plantillas/pantallas/pantallaBuscar.php').fadeIn(300);
        $.ajax({
          url: '../plantillas/pantallas/pantallaBuscar.php',
          success: function (data) {
            $("#contenedorPantallas").html(data).fadeIn(200);
          }
        });
      });
    });
    $("#botonEsconderBarraIzq").off().on("click",function(){
      $("#barraIzquierda").slideToggle();
    });
  });

  function eventosBarraLateral() {
    $("#barraIzquierda").children("a").off().on("click", function (evt) {
      $("#barraIzquierda").children("a").next().slideUp();
      $(this).next().slideDown();

      $("#contenedorPantallas").fadeOut(200, function () {
        //$(this).load("../plantillas/pantallas/pantallaChat.php").fadeIn(300);
        $.ajax({
          url: '../plantillas/pantallas/pantallaChat.php',
          success: function (data) {
            $("#contenedorPantallas").html(data).fadeIn(500);
          }
        });
      })
    })

    $("#barraIzquierda .infoGrupo").off().on("click", function (event) {
      $("#contenedorPantallas").fadeOut(200, function () {
        //$(this).load('../plantillas/pantallas/pantallaInfoGrupo.php').fadeIn(300);
        $.ajax({
          url: '../plantillas/pantallas/pantallaInfoGrupo.php',
          success: function (data) {
            $("#contenedorPantallas").html(data).fadeIn(200);
          }
        });
      });
    });
  }

</script>