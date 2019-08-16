<a class="btn btn-outline-primary m-2 w-auto d-block d-md-none" data-toggle="collapse" href="#v-pills-tab"
  role="button" aria-expanded="false" aria-controls="v-pills-tab">
  Mis grupos de Chat
</a>
<div class="row w-100">

  <div class="col-auto">
    <div class="collapse show nav flex-column nav-pills barraIzquierda" id="v-pills-tab" role="tablist"
      aria-orientation="vertical" style="min-width: 12em; padding-bottom: 100px;">

    </div>
  </div>
  <div class="col contenedorPantallas">
    <?php
        require_once("../plantillas/pantallaPerfil.php");
    ?>
  </div>
</div>

<div id="modalInfoUsuario" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php
          require("../plantillas/pantallaPerfil.php");
      ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>