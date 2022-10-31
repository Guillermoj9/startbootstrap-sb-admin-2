<?php session_start(); ?>
<?php include "lib.php"; ?>
<?php
header("Content-Type: text/html; charset=UTF-8");
?>


<?php
//LOGIN POR EMAIL Y PASS QUE TENGA MAS DE 8 CARACT Y UNA MAYUS
if (isset($_POST['accion'])) {
    if ($_POST["accion"] == "login") {

        if (isset($_POST["email"]) && isset($_POST["password"])) {
            $_SESSION['email'] = $_POST["email"];
            $_SESSION['password'] = $_POST["password"];
            //Comprobar tamaño del password
            $mayuscula = true;

            if (($_SESSION['password']) == strtolower($_SESSION['password'])) {
                $mayuscula = false;
            }

            if (strlen($_SESSION['password']) >= 8 && $mayuscula = true) {
                echo '<script>window.location="' . "proyectos.php" . '"</script>';
            } else if (strlen($_SESSION['password']) < 8) {
                echo '<script>window.location="' . "login.php?error" . '"</script>';
            } else if ($mayuscula == false) {
                echo '<script>window.location="' . "login.php?error" . '"</script>';
            } else
                echo '<script>window.location="' . "login.php" . '"</script>';
        }
    }
}
?>


<?php
//GENERAR NUEVO PROYECTO

if (isset($_POST['accion'])) {
    if ($_POST["accion"] == "nuevoProy") {
        if ($_POST) {

            if (isset($_POST['nuevoProyecto'])) {
                $nombre = $_POST['nombre'];
                $fechaInicio = $_POST['fechaInicio'];
                $fechaFinPrevisto = $_POST['fechaFinPrevista'];
                $diasTranscurridos = $_POST['diasTranscurridos'];
                $porcentajeCompletado = $_POST['porcentajeCompletado'];
                $importancia = $_POST['importancia'];


                if (isset($_SESSION['proyectos'])) {
                    $id = 0;
                } else {
                    $ids = array_column($_SESSION['proyectos'], 'id');
                    $id = max($ids) + 1;
                }


                array_push($_SESSION['proyectos'],  [
                    'id' => $id,
                    'nombre' => $nombre,
                    'fechaInicio' => $fechaInicio,
                    'fechaFinPrevista' => $fechaFinPrevisto,
                    'diasTranscurridos' => $diasTranscurridos,
                    'porcentajeCompletado' => $porcentajeCompletado,
                    'importancia' => $importancia
                ]);
            }
            echo '<script>window.location="' . "proyectos.php" . '"</script>';
        }
    }
}

?>


<?php
//ELIMINAR UN PROYECTO POR ID 
    if ($_GET['accion'] == "eliminar") {


        $proyectoNuevo = array();
        foreach ($_SESSION['proyectos'] as $proyec) {
            if ($proyec['id'] != $_GET['id']) {
                array_push($proyectoNuevo, $proyec);
            }
        }
        $_SESSION['proyectos'] = $proyectoNuevo;
        echo '<script>window.location="' . "proyectos.php" . '"</script>';
    }
?>


<?php
//BORRAR TODOS LOS PROYECTOS
if (isset($_GET['accion'])) {

    if ($_GET['accion'] == "eliminarTodo") {

        foreach ($_SESSION['proyectos'] as $i =>$value) {
            unset($_SESSION['proyectos'][$i]);
        }
        echo '<script>window.location="' . "proyectos.php" . '"</script>';
    }
}
?>

<?php
//VER PROYECTO

    if ($_GET['accion'] == "verInfo") {
        foreach ($_SESSION['proyectos'] as $i =>$value) {
           if ($_GET['id']==$i){
            $_SESSION['proyecto']=$_SESSION['proyectos'][$i];
           }
        }
        echo '<script>window.location="' . "verProyecto.php" . '"</script>';

    }
?>
<?php
//CERRAR SESION 
/*if ($_GET['accion'] == "cerrarSesion") {
    session_destroy();
    echo '<script>window.location="' . "login.php" . '"</script>';
}*/
?>