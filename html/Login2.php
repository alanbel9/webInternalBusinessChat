<?php
    require_once("../plantillas/cabecera.php");
?>
<div class="p-3 mb-2 bg-light text-grey text-center">
<i class="fa fa-space-shuttle fa-lg" aria-hidden="true"></i>
<p class="text-monospace">.WEB INTERNAL BUSINESS CHAT.</p>
</div>

<div class="container mx-auto w-50 border mt-5">
    <div class='jumbotron text-center'> 
  
        <div id="bg">
                <div id="search-container">
                    <div id="search-bg"></div>
                    <div id="search">
                        <div id=log>
                        <div class="p-3 mb-2 bg-secondary text-white font-italic text-center">REGISTRO PARA ENTRAR</div>
                                <br>
                                <div class="input-group">
                                    <i class="input-group-text fa fa-user fa-lg"></i>
                                    <input type ="usuario" class='form-control' placeholder='Introduce el usuario'/>
                                </div>
                                
                                <div class="input-group">
                                <i class="input-group-text fa fa-lock fa-lg" aria-hidden="true"></i> 
                                <input type ="password" class='form-control' placeholder='Introduce el password'/>
                                </div>
                                    <br>
                            <div class='row'>
                                        <div class='col-md-6'>
                                            <button type="button" class="btn btn-outline-primary btn-block">ENTRAR</button>
                                        </div>
                                        <div class='col-md-6'>
                                            <button type="button" class="btn btn-outline-danger btn-block">RECUPERAR CONTRSAEÑA</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    
        </div>
</div>


<?php
    require_once("../plantillas/footer.php");
?>  

