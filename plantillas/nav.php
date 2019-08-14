<script src=../scripts/nav.js></script>

<div class="row w-100">
  <div class="col-auto">
    <div class="nav flex-column nav-pills mt-2 barraIzquierda" id="v-pills-tab" role="tablist"
      aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
        aria-controls="v-pills-home" aria-selected="true">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Grupo amigos</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
        aria-controls="v-pills-profile" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Café</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
        aria-controls="v-pills-messages" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Futbolín</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Ping-pong</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Fumar</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> PHP</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>

      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab"
        aria-controls="v-pills-settings" aria-selected="false">
        <h4><i class="fa fa-hashtag" aria-hidden="true"></i> Java</h4>
      </a>
      <div class="nav flex-column nav-pills emergente" id="v-pills-tab" role="tablist" aria-orientation="vertical"
        style="display: none;">
        <a id="recarga" class="ml-5 mr-5" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Información</a>
        <a id="v-pills-profile-tab" class="ml-5 mr-5" data-toggle="pill" href="#v-pills-profile" role="tab"
          aria-controls="v-pills-profile" aria-selected="false">Opciones</a>
      </div>
    </div>
  </div>
  <div id="modificado" class="col ml-3">
    <!-- <h1 class="text-center border border-secondary shadow-lg p-3 mb-5 bg-white rounded">Pantalla principal</h1> -->
    <?php
    require_once("../plantillas/pantallaChat.php");
    ?>
  </div>
</div>