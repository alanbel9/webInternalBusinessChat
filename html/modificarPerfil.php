<?php
require_once("../plantillas/cabecera.php");
?>

<?php
    require_once("../plantillas/navbar.php");
?>
<script type="text/javascript">

    function cambiar (this) {
         document.getElementById('fotoModif').src = this.src;
    }

</script>


<h1 class="text-center mt-3"> Modificar usuario: </h1>


<form action="#" method="POST">
       
    <div class="row">
            <div class=" rounded mx-auto d-block">
                    <img id="fotoModif" src="../resources/foto-carnet.jpg" class="rounded" alt="foto perfil">
            </div>
    </div>
    <div class="row">
            <div class="col-md-2 offset-md-5 mt-2">
                <input type="file" name="imagenPerfil" class=" p-2" onchange="cambiar(this)" />
            </div>              
    </div>
    

    <div class="row">
            <div class="input-group  col-md-3 offset-md-3 mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                    </div>
                    <input type="text" name="nombre" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="">
            </div>

            <div class="input-group col-md-3 mt-5 mr-5 ">
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Apellidos</span>
                        </div>
                    <input type="text" name="apellidos" class="form-control" placeholder="">
            </div>

    </div>
    

    <div class="row">
            <div class=" input-group col-md-6 mt-2 offset-md-3 ">
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Correo</span>
                    </div>
                    <input type="text" name="correo" class="form-control" placeholder="correoDePrueba@gmail.com" disabled>
            </div>
    </div>

        <div class="row">
                <div class="col-md-3 offset-md-3 mt-2">
                    <input type="password" name="password1" class="form-control" placeholder="Password">
                </div>
                
                <div class="col-md-3 mt-2 mr-5 ">
                    <input type="password" name="password2" class="form-control" placeholder="Confirm password">
                </div>    
        </div>

        <div class="row">
                <div class=" input-group col-md-6 mt-2 offset-md-3 ">
                        <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Puesto de trabajo</span>
                        </div>
                        <input type="text" name="puesto" class="form-control" placeholder="" >
                </div>
        </div>

        <div class="row">            
                <div class="input-group col-md-6 mt-2 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Conocimientos</span>
                        </div>
                        <textarea name="conocimientos" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="col-md-2"></div>
        </div>

        <div class="row">            

                <div class="input-group col-md-6 mt-2 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Aficiones</span>
                        </div>
                        <textarea name="aficiones" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="col-md-2"></div>
        </div>
 
        <div class="row">
                <div class="col-md-6 offset-md-3 mt-2">
                    <button class="btn btn-primary btn-block p-2"> Confirmar </button>
                </div>              
       
        </div>
       
        
        
</form>


<br><br><br><br>


<?php
require_once("../plantillas/footer.php");
?>
