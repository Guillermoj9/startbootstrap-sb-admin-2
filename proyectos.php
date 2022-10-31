<?php 
include("cabecera.php");
//session_destroy();
?>


<?php
$proyectos = array(
    array(
        "id" => 0, "nombre" => "proyecto1", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "10/01/2022", "diasTranscurridos" => "5", "porcentajeCompletado" => "5", "importancia" => 5
    ),
    array(
        "id" => 1, "nombre" => "proyectoCOD", "fechaInicio" => "01/01/2022", "fechaFinPrevista" => "10/01/2022", "diasTranscurridos" => "5", "porcentajeCompletado" => "20", "importancia" => 5
    )

);




if (!isset($_SESSION['proyectos'])) 
    $_SESSION['proyectos'] = $proyectos;

echo "<table data-toggle='table'>";
echo "<thead>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>fechaInicio</th>";
echo "<th>FechaFinal</th>";
echo "<th>diasTranscurridos</th>";
echo "<th>porcentajeCompletado</th>";
echo "<th>Importancia</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach ($_SESSION['proyectos'] as $proyec) {
    
    echo "<tr>";
    echo "<td>" . $proyec["nombre"] . "</td>";
    echo "<td>" . $proyec["fechaInicio"] . "</td>";
    echo "<td>" . $proyec["fechaFinPrevista"] . "</td>";
    echo "<td>" . $proyec["diasTranscurridos"] . "</td>";
    echo "<td>" . $proyec["porcentajeCompletado"] . "</td>";
    echo "<td>" . $proyec["importancia"] . "</td>";
    echo '<td><a href="controlador.php?accion=verInfo&id='. $proyec['id'] .'" class="btn btn-primary">INFO</a> </td>';
    echo '<td><a href="controlador.php?accion=eliminar&id='. $proyec['id'] . '" class="btn btn-secondary">BORRAR</a> </td>';
    echo "</tr>";
}

echo "</tbody>";
echo "</table>";
?>





<script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-table@1.21.1/dist/bootstrap-table.min.js"></script>

