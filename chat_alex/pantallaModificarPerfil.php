<form action="#" method="POST" class="mt-2">     <!-- Cambiar el action  -->
       
    <div class="row">
            <div class=" rounded mx-auto d-block">
                    <img id="imgSalida" width="250" height="300" src="../resources/foto-carnet.jpg" class="rounded" alt="foto perfil">
                    <!--  URL de las fotos asi:   ../resources/foto-carnet.jpg   -->
            </div>
    </div>

    <div class="row">
        <div class="col-md-4 offset-md-4 mt-2 ">
                        <div class="custom-file">
                                <input id="fotoUsuario" name="foto" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon03" required>
                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                        </div>
        </div>
    </div>
    <div class="row">
                <div class="col-md-2 offset-md-5 mt-2">
                    <button class="btn btn-primary btn-block p-2" type="submit"> Subir imagen </button>
                </div>              
        </div>

</form>

<form action="modificarPerfilBBDD.php" method="POST">     <!-- Cambiar el action  -->
    <div class="row">
            <div class="input-group  col-md-3 offset-md-3 mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon3">Nombre</span>
                    </div>
                    <input id="nombreUsuario" type="text" name="nombre" class="form-control" aria-describedby="basic-addon3" required>
            </div>

            <div class="input-group col-md-3 mt-5 mr-5 ">
                    <div class="input-group-prepend">
                            <span class="input-group-text" >Apellidos</span>
                        </div>
                    <input id="apellidosUsuario" type="text" name="apellidos" class="form-control" required>
            </div>

    </div>
    

        <div class="row">
                <div class=" input-group col-md-6 mt-2 offset-md-3 ">
                        <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Fecha nacimiento</span>
                        </div>
                        <input id="nacimientoUsuario" type="date" name="nacimiento" class="form-control" aria-describedby="basic-addon3"  required>
                </div>
        </div>

    <div class="row">
            <div class=" input-group col-md-6 mt-2 offset-md-3 ">
                    <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">Correo</span>
                    </div>
                    <input id="inputCorreo" type="text" name="correo" class="form-control" readonly >
            </div>
    </div>

        <div class="row">
                <div class="col-md-3 offset-md-3 mt-2">
                    <input type="password" name="password1" class="form-control" placeholder="Password" required>
                </div>
                
                <div class="col-md-3 mt-2 mr-5 ">
                    <input type="password" name="password2" class="form-control" placeholder="Confirm password" required>
                </div>    
        </div>

        <div class="row">
                <div class=" input-group col-md-6 mt-2 offset-md-3 ">
                        <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon3">Puesto de trabajo</span>
                        </div>
                        <select id="puestoUsuario" name="puesto" class="custom-select"  required >
                                <option selected> </option>
                                <option value="desarrollador">Desarrollador</option>
                                <option value="analista">Analista</option>
                                <option value="sistemas">Sistemas</option>
                                <option value="seguridad">Seguridad</option>
                                <option value="recursos humanos">Recursos Humanos</option>
                                <option value="administracion">Administración</option>
                        </select>
                </div>
        </div>

        <div class="row">            
                <div class="input-group col-md-6 mt-2 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Conocimientos</span>
                        </div>
                        <textarea id="conocimientosUsuario" name="conocimientos" class="form-control" aria-label="With textarea" required></textarea>
                </div>
                <div class="col-md-2"></div>
        </div>

        <div class="row">            

                <div class="input-group col-md-6 mt-2 offset-md-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Aficiones</span>
                        </div>
                        <textarea id="aficionesUsuario" name="aficiones" class="form-control" aria-label="With textarea" required></textarea>
                </div>
                <div class="col-md-2"></div>
        </div>
 
        <div class="row">
                <div class="col-md-6 offset-md-3 mt-2">
                    <button class="btn btn-primary btn-block p-2" type="submit"> Confirmar </button>
                </div>              
        </div>
       
        
        
</form>