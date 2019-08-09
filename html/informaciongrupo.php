<?php
    require_once("../plantillas/cabecera.php");
?>


<br>

<div class="text-center">
    <h1> INFORMACIÓN DEL GRUPO: </h1>

    <!--  Consulta BBDD sobre el grupo y devuelve  nombreGrupo y la descripción   -->

    <div id="nombregrupo" class="h2"> Ping Pong </div>
</div>


<div class="row">

    <div id="descripcion" class="input-group  col-md-6 offset-md-3 mt-5 ">
        Información del grupo.... Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Vero dolorem inventore perspiciatis optio veniam similique harum eum fugiat, mollitia
        iste nesciunt quas doloremque tempora excepturi autem provident, maiores rerum modi.
    </div>
</div>

<div class="row">

    <div class="input-group  col-md-6 offset-md-3 mt-5 ">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellidos</th>
                </tr>
            </thead>

            <!--  Consulta BBDD que devuelve personas suscritas a este grupo. 
                  Por cada persona añadir :     

                <tr>
                    <th scope="row"> $contador  </th>
                    <td>  nombre....    </td>
                    <td>  apellidos...  </td>
                </tr>

             -->
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                </tr>

            </tbody>
        </table>


    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</body>

</html>