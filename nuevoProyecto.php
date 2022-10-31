<?php include("cabecera.php"); ?>



<center><h1>CREAR PROYECTO NUEVO</h1></center>

<form class="user" action="controlador.php" method="post">
<div>   
<div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre proyecto</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduce nombre proyecto">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Fecha inicio</label>
        <input type="text" name="fechaInicio" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">fechaFinPrevista</label>
        <input type="text" name="fechaFinPrevista" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">diasTranscurridos</label>
        <input type="text" name="diasTranscurridos" class="form-control" id="exampleInputPassword1">
    </div>


    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Porcentaje Completado</label>
        <input type="text" name="porcentajeCompletado" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Importancia</label>
        <input type="text" name="importancia" class="form-control" id="exampleInputPassword1">
    </div>
    <input type="hidden" name="accion" value="nuevoProy">
    <center><button name="nuevoProyecto" type="submit" class="btn btn-primary">Crear proyecto</button></center>
    </div>
</form>


<?php include("pie.php"); ?>