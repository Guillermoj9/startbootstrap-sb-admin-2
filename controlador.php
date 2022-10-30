<?php session_start(); ?>
<?php include "lib.php"; ?>



<?php

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
                echo '<script>window.location="' . "login.php?error=passwordcorto" . '"</script>';
            } else if ($mayuscula = false) {
                echo '<script>window.location="' . "login.php?error=passwordNoMayus" . '"</script>';
            } else
                echo '<script>window.location="' . "login.php" . '"</script>';
        }
    }
}
?>


<?php

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


                if (empty($_SESSION['proyectos'])) {
                    $id = 0;
                } else {
                    $ids = array_column($_SESSION['proyectos'], 'id');
                    $id = max($ids) + 1;
                }
                array_push($_SESSION['proyectos'], [
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

