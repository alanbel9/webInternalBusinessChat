<div class="row w-100">
  <div class="col-auto">
    <div class="nav flex-column nav-pills mt-2 barraIzquierda" id="v-pills-tab" role="tablist"
      aria-orientation="vertical">

    </div>
  </div>
  <div class="col ml-3 contenedorPantallas">
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