<?php
require_once("../plantillas/cabecera.php");
?>

<?php
    require_once("../plantillas/navbar.php");
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
    
    $(window).load(function(){
        $(function() {
            $('#file-input').change(function(e) {
                addImage(e); 
            });

            function addImage(e){
                var file = e.target.files[0],
                imageType = /image.*/;
                if (!file.type.match(imageType))
                return;

                var reader = new FileReader();
                reader.onload = fileOnload;
                reader.readAsDataURL(file);
            }

            function fileOnload(e) {
                var result=e.target.result;
                $('#imgSalida').attr("src",result);
            }
        });
 });

</script>

<br><br>


<form action="#" method="POST">     <!-- Cambiar el action  -->
       
    <div class="row">
            <div class="mx-auto">
                    <img id="imgSalida" height="300" src="../resources/foto-carnet.jpg" class="border border-dark" alt="foto perfil">
            </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-4 mt-2 ">
                        <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file-input" aria-describedby="inputGroupFileAddon03">
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
        </div>
    </div>
                <!--
                                <div class="row">
                                        <div class="col-md-2 offset-md-5 mt-2">
                                                <input name="file-input" class="p-2" id="file-input" type="file" />
                                        </div>            
                                </div>
                -->

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
                                <span class="input-group-text" id="basic-addon3">Fecha nacimiento</span>
                        </div>
                        <input type="date" name="nacimiento" class="form-control" id="basic-url" aria-describedby="basic-addon3" placeholder="">
                      
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
                        <select class="custom-select" name="puesto" >
                                <option selected> </option>
                                <option value="1">Desarrollador</option>
                                <option value="2">Analista</option>
                                <option value="3">Sistemas</option>
                                <option value="4">Seguridad</option>
                                <option value="5">Recursos Humanos</option>
                                <option value="6">Administración</option>
                        </select>
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
                    <button class="btn btn-primary btn-block p-2" type="submit"> Confirmar </button>
                </div>              
       
        </div>
       
        
        
</form>

<br><br><br><br>


<?php
require_once("../plantillas/footer.php");
?>
