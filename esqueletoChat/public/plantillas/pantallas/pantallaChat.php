<div id="pantallaMensajes" class="container bg-light text-dark shadow"
    style="font-family: 'Righteous', sans-serif; min-height:90vh; padding-bottom: 100px;overflow-wrap:break-word ">

    <!-- ------------------------------AJAX-------------------------------------------------------------------------------- -->
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-envelope-open" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>

        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam similique exercitationem earum dolore
            excepturi,
            perferendis beatae quia tempore ducimus, nemo sequi iure illo? Illum minus consequatur quae, cum possimus
            assumenda?
        </p>
    </blockquote>
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-envelope-open" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sed ratione molestiae perspiciatis eligendi
            totam fugiat animi. Molestias autem expedita eius error nihil praesentium porro id dolore dignissimos?
            Harum, iure.
        </p>
    </blockquote>
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-envelope" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam amet qui nostrum ipsam fugit quis, laborum
            quibusdam facere dignissimos cum ducimus debitis adipisci, blanditiis earum asperiores similique suscipit
            quae soluta.
        </p>
    </blockquote>
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-envelope-open" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam similique exercitationem earum dolore
            excepturi,
            perferendis beatae quia tempore ducimus, nemo sequi iure illo? Illum minus consequatur quae, cum possimus
            assumenda?
        </p>
    </blockquote>
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-envelope" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sed ratione molestiae perspiciatis eligendi
            totam fugiat animi. Molestias autem expedita eius error nihil praesentium porro id dolore dignissimos?
            Harum, iure.
        </p>
    </blockquote>
    <blockquote class="blockquote pt-3">
        <div class="row">
            <div class="col-4"><i class="fa fa-comment" aria-hidden="true"></i> <a class="font-italic text-primary"
                    data-toggle="modal" data-target="#modalInfoUsuario" href="">
                    Nombre</a></div>
            <div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span
                    class="font-italic text-nowrap text-danger"> 00:00:00 (1-01-2019) </span></div>
        </div>
        <p class="mb-0">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam amet qui nostrum ipsam fugit quis, laborum
            quibusdam facere dignissimos cum ducimus debitis adipisci, blanditiis earum asperiores similique suscipit
            quae soluta.
        </p>
    </blockquote>
    <!-- ---------------------------------------------------------------------------------------------------------------------------- -->
</div>

<div id="barraChat" class='fixed-bottom bg-primary p-3' style="height:0px">
    <div class='row align-items-center'>
        <div class='col-md-1'></div>
        <div class='col-md-9'>
            <textarea id="mensajeEnviar" type="textarea" spellcheck="true" class="form-control w-100 py-auto mb-1"
                id="mensaje" placeholder="Mensaje" rows="1"
                style="font-family: 'Righteous', sans-serif; font-size: 25px;"></textarea>
        </div>
        <div class='col-md-1 text-center'>
            <button id="botonEnviar" class="btn btn-primary">
                <h6 class="m-2"><i class="fa fa-envelope" aria-hidden="true"></i> Enviar</h6>
            </button>
        </div>
        <div class='col-md-1'></div>
    </div>
</div>
<script>
    var alturaPantalla = window.screen.width;
    if (alturaPantalla < 768) {
        $("#barraChat").animate({
            height: '120px'
        });
    } else {
        $("#barraChat").animate({
            height: '100px'
        });
    }
    /////////////////////////////SOLO DE PRUEBA////////////////////////////
    $("#botonEnviar").on("click", function () {
        var d = new Date();
        var ahoraMismo = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds() + " (" + d.getDate() + "-" + (d.getMonth() + 1) + "-" + d.getFullYear() + ")";
        $("#pantallaMensajes").prepend('<blockquote class="blockquote pt-3"><div class="row"><div class="col-4"><i class="fa fa-envelope" aria-hidden="true"></i> <a class="font-italic text-primary" data-toggle="modal" data-target="#modalInfoUsuario" href=""> Nombre</a></div><div class="col-8 text-right"><i class="fa fa-clock-o" aria-hidden="true"></i><span class="font-italic text-danger text-nowrap"> ' + ahoraMismo + '</span></div></div><p class="mb-0">' + $("#mensajeEnviar").val() + '</p></blockquote>');
        $("#mensajeEnviar").val("");
    });
    ///////////////////////////////////////////////////////////////////////
</script>