<?php
require_once("../plantillas/cabecera.php");
?>


<h1 class="text-center mt-3"> Modificar usuario: </h1>
<form action="#" method="POST">
        <div class="row">
            <div class="col-md-3 offset-md-3 mt-5">
                <input type="text" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-md-3 mt-5 mr-5 ">
                <input type="text" class="form-control" placeholder="Apellidos">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 mt-2 offset-md-3 ">
                    <input type="text" class="form-control" placeholder="Correo">
            </div>
        </div>

        <div class="row">
                <div class="col-md-3 offset-md-3 mt-2">
                    <input type="text" class="form-control" placeholder="Password">
                </div>
                
                <div class="col-md-3 mt-2 mr-5 ">
                    <input type="text" class="form-control" placeholder="Confirm password">
                </div>    
        </div>

        <div class="row">            

                <div class="input-group col-md-6 mt-2 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Conocimientos</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="col-md-2"></div>
        </div>

        <div class="row">
                <div class="col-md-2 offset-md-3 mt-2">   
                    <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"> I Agree</label>
                    </div>
                </div>

                <div class="col-md-4 mt-2 mr-5 ">
                        
                    <p> Acepto los términos y condiciones. </p>
                
                </div> 
                
        </div>
        



        <div class="row">
                <div class="col-md-6 offset-md-3 mt-2">
                    <button class="btn btn-primary btn-block p-2"> Confirmar </button>
                </div>              
       
        </div>
       
        
        
</form>




<?php
require_once("../plantillas/footer.php");
?>
